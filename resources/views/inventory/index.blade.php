@extends('layouts.app')
@section('content')
<h1>Inventory List <a href="{{route('inventory.create')}}" class="btn btn-primary btn-outline">Add New Item</a>&nbsp;
<a href="#" class="btn btn-info btn-outline" data-toggle="modal" data-target="#ImportModal">Import/Export</a> &nbsp;
<a href="#" class="btn btn-primary btn-outline" data-toggle="modal" data-target="#PrintModal"><i class="glyphicon glyphicon-print"></i> &nbsp; &nbsp; Print</a> </h1>

 <form method="post" action="{{route('inv.search')}}">
  @csrf
  <div class="form-group">
   <input type="text" placeholder="Search Item By Tag Number" name="Tag" class="form-control">
   <input type="submit" class="btn-default" name="" value="Go" hidden="true">
 </div>
 </form>
<div class="table-responsive">
   <table class="table table-hover">

    <tr> 
    <th>Voucher Reference</th>
    <th>Item</th>
    <th>Qty</th>
    <th>Category</th>
    <th>Funded By</th>
    <th> Model/Serial</th>
    <th> Date Purchase</th>
    <th>Currency</th>
    <th>Price</th>
    <th>Total</th>
    <th>Region File</th>
    <th>Asset Condition</th>
    <th>Tag</th>
    <th>As Per Record</th>
    <th>Verefied</th>
    <th>Difference</th>
    <th>Remarks</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>
       @foreach($items as $item)
       <tr>
       	<td>{{$item->voucher_refence}}</td>
       	<td>{{$item->Item}}</td>
       	<td>{{$item->Qty}}</td>
       	<td>{{$item->Category}}</td>
       	<td>@foreach($donors as $donor)

           @if($donor->id == $item->Funded_by)
            {{$donor->name}}
            @endif
        @endforeach</td>
       	<td>{{$item->Model_serial}}</td>
       	<td>{{$item->Date_purchase}}</td>
       	<td>{{$item->Currency}}</td>
       	<td>{{$item->Price}}</td>
       	<td>{{$item->Total}}</td>
       	<td>{{$item->Region_file}}</td>
       	<td>{{$item->Asset_condition}}</td>
       	<td>{{$item->Tag}}</td>
       	<td>{{$item->As_per_record}}</td>
       	<td>{{$item->Verified}}</td>
       	<td>{{$item->Defference}}</td>
       	<td>{{$item->Remarks}}</td>
       	<td><a href="{{route('inventory.edit', $item->id)}}"><i class="glyphicon glyphicon-edit"></i></a></td>
       	<td> 
               <form method="post" action="{{route('inventory.destroy', $item->id)}}">
                 @csrf
                 {{method_field('DELETE')}}
                 
                <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash white"></i></button>
              </form>
       	</td>
       </tr>
       @endforeach
   </table>

   {{ $items->links() }}
</div>


<!-- Import Modal -->
<div id="ImportModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Import / Export Inventory</h4>
      </div>
      <div class="modal-body">
        <form action="{{ route('inv.import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="form-control" required="true">
                        <br>
                        <button class="btn btn-success" type="submit">Import Inventory Data</button>
                        <a class="btn btn-warning" href="{{ route('inv.export',['type'=>'xls']) }}">Export Inventory Data</a>
                    </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!-- Print Report Modal -->
<div id="PrintModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Print Report</h4>
      </div>
      <div class="modal-body">
        <form action="{{ route('inv.report') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                     <label>Purchased Date From:</label>   <input type="Date" name="from" class="form-control">
                     <label>Purchased Date To:</label>   <input type="Date" name="to" class="form-control">

                     <label>Donor</label>
                     <select name="Funded_by" class="form-control" >
                      <option value="All">All Donors</option>

                       @foreach($donors as $donor)
                        <option value="{{$donor->id}}">{{ $donor->name }}</option>
                      @endforeach

                        
                     </select>
                        <br>
                        <button class="btn btn-success" type="submit">Run Report</button>
                         
                    </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection