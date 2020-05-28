<?php

namespace App\Http\Controllers;

use App\Donor;
use App\Exports\InventoryExport;
use App\Imports\InventoryImport;
use App\Inventory;
use App\Supplier;
use Carbon\Carbon;
use DB;
use Excel;
use File;
use Illuminate\Http\Request;
use PDF;
use Session;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }





    public function report(request $request)
    {
        $donors = Donor::all();
       $logo = "asset('uploads/DCALogo.jpg')";
        $from_date = Carbon::createFromFormat('Y-m-d', $request->from);
        $to_date = Carbon::createFromFormat('Y-m-d', $request->to);
     
       $data = "";
  
 

         if ($request->Funded_by == "All") {
       $data =  Inventory::whereBetween('Date_purchase', [$from_date, $to_date])->get();

 
        }else{

            $data = Inventory::where('Funded_by', $request->Funded_by)->whereBetween('Date_purchase', [$from_date, $to_date])->get();

        }
       
       $total_AFN = $data->where('Currency', "AFN")->sum("Total");
       $total_USD = $data->where('Currency', "USD")->sum("Total");
       $total_EUR = $data->where('Currency', "EUR")->sum("Total");
       
        
        $pdf = PDF::loadView('inventory.report', compact('data', 'from_date', 'to_date', 'donors', 'total_USD', 'total_AFN', 'total_EUR'))->setPaper('a3', 'landscape');
 
          return $pdf->download('InventoryReport('.Date('Y-m-d').').pdf');
 



   return view('inventory.report', compact('items', 'from_date', 'to_date'));

    }


     public function search(request $request)
     {

          $items = Inventory::where('Tag', 'LIKE', '%'.$request->Tag.'%')->get();
          $count = $items->count();
         
       
          return view('inventory.search', compact('items', 'count'));

     }

    

       public function export($type){
                 $inventory = Inventory::get()->toArray();
            //  $inventory = Inventory::select('Item_name','Manufacturer','Serial_no', 'Model_no', 'Price')->get()->toArray();
              return \Excel::create('Inventory_Report('. Date('Y-m-d') .')', function($excel) use ($inventory) {
                  $excel->sheet('inventory_report', function($sheet) use ($inventory)
                  {
                      $sheet->fromArray($inventory);
                  });
              })->download($type);


              
          }      
       
      
       /**
       * @return \Illuminate\Support\Collection
       */
       public function import(request $request) 
       {

        $this->validate($request, [
            'file' => 'required|mimes:xls, xlsx']);


        
          // Excel::import(new InventoryImport,request()->file('file'));
             

             $path = $request->file('file')->getRealPath();
             $data = Excel::load($path)->get();

             if($data->count() > 0)
             {
                foreach ($data->toArray() as $key => $value) {
                    $insert_data[] = array(

                        'Voucher_reference'     => $row['Voucher_reference'],
                        'Item'   => $row['Item'],
                        'Qty'   => $row['Qty'],
                        'Category'   => $row['Category'],
                        'Funded_by'   => $row['Funded_by'],
                        'Model_serial'   => $row['Model_serial'],
                        'Date_purchase'   => $row['Date_purchase'],
                        'Currency'   => $row['Currency'],
                        'Price'   => $row['Price'],
                        'Total'   => $row['Total'],
                        'Region_file'   => $row['Region_file'],
                        'Asset_condition'   => $row['Asset_condition'],
                        'Tag'   => $row['Tag'],
                        'As_per_record'   => $row['As_per_record'],
                        'Verified'   => $row['Verified'],
                        'Difference'   => $row['Difference'],
                        'Remarks'   => $row['Remarks'],
                    );
                }

             }

             if (!empty($insert_data)) {
                 
                 DB::table('inventories')->insert($insert_data);
             }

             Session::flash('success', 'Imported Successfully!');
           return redirect()->back();
       }

       

    public function index()
    {
        $donors = Donor::all();
        $suppliers = Supplier::all();
        $items = Inventory::orderBy('created_at', 'ASC')->paginate(25);
        return view('inventory.index', compact('items', 'donors', 'suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $donors = Donor::all();
        $suppliers = Supplier::all();

       return view('inventory.create', compact('donors', 'suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
        $inventory = new Inventory;
        $inventory->Voucher_reference = $request->Voucher_reference;
        $inventory->Item = $request->Item;
        $inventory->Qty = $request->Qty;
        $inventory->Category = $request->Category;
        $inventory->Funded_by = $request->Funded_by;
        $inventory->supplier_id = $request->supplier_id;
        $inventory->Model_serial = $request->Model_serial;
        $inventory->Date_purchase = $request->Date_purchase;
        $inventory->Currency = $request->Currency;
        $inventory->Price = $request->Price;
        $inventory->Total = $request->Qty * $request->Price;
        $inventory->Region_file = $request->Region_file;
        $inventory->Asset_condition = $request->Asset_condition;
        $inventory->Tag = $request->Tag;
        $inventory->As_per_record = $request->As_per_record;
        $inventory->Verified = $request->Verified;
        $inventory->Difference = $request->Difference;
        $inventory->Remarks = $request->Remarks;
        $inventory->save();

        return redirect()->route('inventory.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventory = Inventory::where('id', $id)->first();
        $donors = Donor::all();
        return view('inventory.edit', compact('inventory', 'donors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inventory = Inventory::where('id', $id)->first();
        $inventory->Item = $request->Item;
        $inventory->Qty = $request->Qty;
        $inventory->Category = $request->Category;
        $inventory->Funded_by = $request->Funded_by;
        $inventory->supplier_id = $request->supplier_id;
        $inventory->Model_serial = $request->Model_serial;
        $inventory->Date_purchase = $request->Date_purchase;
        $inventory->Currency = $request->Currency;
        $inventory->Price = $request->Price;
        $inventory->Total = $request->Qty * $request->Price;
        $inventory->Region_file = $request->Region_file;
        $inventory->Asset_condition = $request->Asset_condition;
        $inventory->Tag = $request->Tag;
        $inventory->As_per_record = $request->As_per_record;
        $inventory->Verified = $request->Verified;
        $inventory->Difference = $request->Difference;
        $inventory->Remarks = $request->Remarks;
        $inventory->save();

        return redirect()->route('inventory.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $inventory = Inventory::where('id', $id)->first()->delete();
       return redirect()->back();
    }
}
