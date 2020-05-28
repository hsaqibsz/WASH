@extends('layouts.app')
@section('content')

  <div class="container">
    <h1 class="header">Register new item</h1>

<form method="post" action="{{route('inventory.store')}}">
      @csrf
      <input type="text" name="Voucher_reference" placeholder=" Voucher Reference" class="form-control">
      <input type="text" name="Item" placeholder="Item" class="form-control">
      <input type="number" name="Qty" placeholder="Quantity" class="form-control">
    

      <select name="Category" class="form-control">
               <option disabled="true">Select Category</option>
               <option value="Land_and_Building">Land and Building</option>
               <option value="Plant_and_machinery">plant and machinery</option>
               <option value="Vehicle">Vehicle</option>
               <option value="Office_equipment ">Office equipment </option>
               <option value="Computer_equipment">Computer equipment</option>
               <option value="Other">Other</option>
           </select>

 
       <select class="form-control" name="Funded_by">
        @foreach($donors as $donor)
          <option value="{{$donor->id}}">{{$donor->name}}</option>
        @endforeach
      </select>

       <select class="form-control" name="supplier">
        @foreach($suppliers as $s)
          <option value="{{$s->id}}">{{$s->name}}</option>
        @endforeach
      </select>

      <input type="text" name="Model_serial" placeholder="Model / Serial Number" class="form-control">
      <input type="Date" name="Date_purchase" placeholder="Date Purchase" class="form-control">

     
 <select name="Currency" class="form-control">
          <option disabled="true">Select Currency</option>
          <option value="AFN">AFN</option>
          <option value="USD">USD</option>
          <option value="EUR">EUR</option>
      </select>

      <input type="number" name="Price" placeholder="Price" class="form-control">

  <select name="Region_file" class="form-control">
          <option disabled="true">Regional File</option>
          <option value="Kabul" style="background-color: green; color: white; font-weight: bold;">Kabul</option>
          <option value="Nangarhar">Nangarhar</option>
          <option value="Kunar">Kunar</option>
          <option value="Laghman">Laghman</option>
          <option value="Logar">Logar</option>
          <option value="Wardak">Wardak</option>
          <option value="Ghazni">Ghazni</option>
          <option value="Zabul">Zabul</option>
          <option value="Kandahar">Kandahar</option>
          <option value="Helmand">Helmand</option>
          <option value="Paktia">Paktia</option>
          <option value="Paktika">Paktika</option>
          <option value="Khost">Khost</option>
          <option value="Bamyan">Bamyan</option>
          <option value="Badghis">Badghis</option>
          <option value="Samangan">Samangan</option>
          <option value="Balkh">Balkh</option>
          <option value="Jawsjan">Jawsjan</option>
          <option value="Sar-e-Pul">Sar-e-Pul</option>
          <option value="Baghlan">Baghlan</option>
          <option value="Takhar">Takhar</option>
          <option value="Kunduz">Kunduz</option>
          <option value="Badakhshan">Badakhshan</option>
          <option value="Faryab">Faryab</option>
          <option value="Parwan">Parwan</option>
          <option value="Farah">Farah</option>
          <option value="PanjShir">PanjShir</option>
          <option value="Farah">Farah</option>
          <option value="Farah">Herat</option>
          <option value="Nemruz">Nemruz</option>
          <option value="Ghor">Ghor</option>
          <option value="Holland" style="background-color: green; color: white; font-weight: bold;">Holland</option>
          
      </select>  

      <select name="Asset_condition" class="form-control">
          <option disabled="true">Asset Condition</option>
          <option value="Working">Working</option>
          <option value="Not Working">Not Working</option>
      </select>
       
      <input type="text" name="Tag" placeholder="Tag" class="form-control">
      <small>Asset physical verification</small>
      <input type="text" name="As_per_record" placeholder="As Per Record" class="form-control">
      <input type="text" name="Verified" placeholder="Verified" class="form-control">
      <input type="text" name="Difference" placeholder="Difference" class="form-control">
      <textarea name="Remarks" placeholder="Remarks" class="form-control"></textarea>
      

      <input type="submit" class="btn btn-primary btn-outline" value="Register">
    </form>
    
 </div>

@endsection