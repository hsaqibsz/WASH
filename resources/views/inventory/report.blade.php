 <!DOCTYPE html>
 <html>
 <head>
   <title>Report-{{ date("M d, Y",strtotime($from_date)) }}-{{ date("M d, Y",strtotime($to_date)) }}</title>

   <style type="text/css">
        tr:nth-child(even) {background-color: lightgray;}

        th, td {
          padding: 15px;
          text-align: left;
        }
        
   </style>
     
</head>

<body style="border: 1px solid gray; margin: 8px; padding: 3px; position: relative;">

  <div style="border: 1px solid #339546; text-align: center;  width: 100%; height: 50px;" class="logo" > <img src="uploads/DCALogo.jpg" style="height: 50px;"> </div>

<hr>

<h1 style=" font-size: 16px; padding: 3px;">  &nbsp; &nbsp;  Inventory Report From {{ date("M d, Y",strtotime($from_date)) }} To {{ date("M d, Y",strtotime($to_date)) }}  </h1>
 
 
   <table class="table table-bordered" style="border: 1px solid gray;">

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
 
    </tr>
       @foreach($data as $item)
       <tr>
       	<td>@if($item->Voucher_reference == null) // @else {{$item->Voucher_reference}} @endif</td>
       	<td>{{$item->Item}}</td>
       	<td>{{$item->Qty}}</td>
       	<td>{{$item->Category}}</td>
       	<td>
          
    @foreach($donors as $donor)

               @if($donor->id == $item->Funded_by)
                {{$donor->name}}
                @endif
            @endforeach
            
        </td>
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
       	<td>{{$item->Difference}}</td>
       	 
       </tr>
       @endforeach
       <tr>
        <td colspan="3">Total AFN: &nbsp; {{ $total_AFN }}</td>
        <td colspan="3">Total USD: &nbsp; {{ $total_USD }}</td>
        <td colspan="3">Total EUR: &nbsp; {{ $total_EUR }}</td>
        <td></td>
      </tr>
   </table>

  
   <div  style="position: absolute; bottom: 4px; left: 2px;  color: gray; padding: 5px; border-top: 2px solid gray;">
   
    Inventory Report From {{ date("M d, Y",strtotime($from_date)) }} To {{ date("M d, Y",strtotime($to_date)) }}  <br>

 <small style="color: gray;">Printed by: {{Auth::user()->name}}, &nbsp; {{Auth::user()->position}}</small>
</div>

 </body>
 </html>

