@extends('layouts.app')
@section('content')
    <h1 class="header">Update {{$inventory->Item}}</h1>

<form method="post" action="{{route('inventory.update', $inventory->id)}}">
      @csrf
      {{ method_field('patch') }}
      <input type="text" name="Voucher_reference" placeholder=" Voucher Reference" class="form-control" value="{{$inventory->Voucher_reference}}">
      <input type="text" name="Item" placeholder="Item" class="form-control" value="{{$inventory->Item}}">
      <input type="number" name="Qty" placeholder="Quantity" class="form-control" value="{{$inventory->Qty}}">
       
       <select name="Category" class="form-control">
                <option disabled="true">Select Category</option>
                <option value="Land_and_Building" @if($inventory->Category == "Land_and_Building")    selected="true" @endif>Land and Building</option>
                <option value="Plant_and_machinery" @if($inventory->Category == "Plant_and_machinary")    selected="true" @endif>plant and machinery</option>
                <option value="Vehicle" @if($inventory->Category == "Vehicle")    selected="true" @endif>Vehicle</option>
                <option value="Office_equipment " @if($inventory->Category == "office_equipment")    selected="true" @endif>Office equipment </option>
                <option value="Computer_equipment" @if($inventory->Category == "Computer_equipment")    selected="true" @endif>Computer equipment</option>
                <option value="Other" @if($inventory->Category == "Other")    selected="true" @endif>Other</option>
            </select>

       <select class="form-control" name="Funded_by">

        @foreach($donors as $donor)
          <option  value="{{$donor->id}}"
          @if($donor->id == $inventory->Funded_by)
          selected="selected"
            @endif>{{$donor->name}}</option>
        @endforeach

      </select>

      <input type="text" name="Model_serial" placeholder="Model / Serial Number" class="form-control" value="{{$inventory->Model_serial}}">
      <input type="date" name="Date_purchase" placeholder="Date Purchase" class="form-control" value="{{$inventory->Date_purchase}}">

      <select name="Currency" class="form-control">
          <option disabled="true">Select Currency</option>
          <option value="AFN" @if($inventory->Currency == "AFN") selected="true" @endif>AFN</option>
          <option value="USD" @if($inventory->Currency == "USD") selected="true" @endif>USD</option>
          <option value="EUR" @if($inventory->Currency == "EUR") selected="true" @endif>EUR</option>
      </select>

      <input type="number" name="Price" placeholder="Price" class="form-control" value="{{$inventory->Price}}">
     <select name="Region_file" class="form-control">
             <option disabled="true">Regional File</option>
             <option style="background-color: green; color: white; font-weight: bold;" value="Kabul" @if($inventory->Region_file == "Kabul") selected = "true" @endif>Kabul</option>
             <option value="Nangarhar" @if($inventory->Region_file == "Nangarhar") selected = "true" @endif>Nangarhar</option>
             <option value="Kunar" @if($inventory->Region_file == "Kunar") selected = "true" @endif>Kunar</option>
             <option value="Laghman" @if($inventory->Region_file == "Laghman") selected = "true" @endif>Laghman</option>
             <option value="Logar" @if($inventory->Region_file == "Logar") selected = "true" @endif>Logar</option>
             <option value="Wardak" @if($inventory->Region_file == "Wardak") selected = "true" @endif>Wardak</option>
             <option value="Ghazni" @if($inventory->Region_file == "Ghazni") selected = "true" @endif>Ghazni</option>
             <option value="Zabul" @if($inventory->Region_file == "Zabul") selected = "true" @endif>Zabul</option>
             <option value="Kandahar" @if($inventory->Region_file == "Kandahar") selected = "true" @endif>Kandahar</option>
             <option value="Helmand" @if($inventory->Region_file == "Helmand") selected = "true" @endif>Helmand</option>
             <option value="Paktia" @if($inventory->Region_file == "Paktia") selected = "true" @endif>Paktia</option>
             <option value="Paktika" @if($inventory->Region_file == "Paktika") selected = "true" @endif>Paktika</option>
             <option value="Khost" @if($inventory->Region_file == "Khost") selected = "true" @endif>Khost</option>
             <option value="Bamyan" @if($inventory->Region_file == "Bamyan") selected = "true" @endif>Bamyan</option>
             <option value="Badghis" @if($inventory->Region_file == "Badghis") selected = "true" @endif>Badghis</option>
             <option value="Samangan" @if($inventory->Region_file == "Samangan") selected = "true" @endif>Samangan</option>
             <option value="Balkh" @if($inventory->Region_file == "Balkh") selected = "true" @endif>Balkh</option>
             <option value="Jawzjan" @if($inventory->Region_file == "Jawzjan") selected = "true" @endif>Jawzjan</option>
             <option value="Sar-e-Pul" @if($inventory->Region_file == "Sar-e-Pul") selected = "true" @endif>Sar-e-Pul</option>
             <option value="Baghlan" @if($inventory->Region_file == "Baghlan") selected = "true" @endif>Baghlan</option>
             <option value="Takhar" @if($inventory->Region_file == "Takhar") selected = "true" @endif>Takhar</option>
             <option value="Kunduz" @if($inventory->Region_file == "Kunduz") selected = "true" @endif>Kunduz</option>
             <option value="Badakhshan" @if($inventory->Region_file == "Badakhshan") selected = "true" @endif>Badakhshan</option>
             <option value="Faryab" @if($inventory->Region_file == "Faryab") selected = "true" @endif>Faryab</option>
             <option value="Parwan" @if($inventory->Region_file == "Parwan") selected = "true" @endif>Parwan</option>
             <option value="Farah" @if($inventory->Region_file == "Farah") selected = "true" @endif>Farah</option>
             <option value="PanjShir" @if($inventory->Region_file == "PanjShir") selected = "true" @endif>PanjShir</option>
             <option value="Farah" @if($inventory->Region_file == "Farah") selected = "true" @endif>Farah</option>
             <option value="Herat" @if($inventory->Region_file == "Herat") selected = "true" @endif>Herat</option>
             <option value="Nemroz" @if($inventory->Region_file == "Nemroz") selected = "true" @endif>Nemroz</option>
             <option value="Ghor" @if($inventory->Region_file == "Ghor") selected = "true" @endif>Ghor</option>
             <option style="background-color: green; color: white; font-weight: bold;" value="Holland" @if($inventory->Region_file == "Holland") selected = "true" @endif>Holland</option>
             
         </select>  


      <select name="Asset_condition" class="form-control">
          <option disabled="true">Asset Condition</option>
          <option value="Working" @if($inventory->Asset_condition =="Working") selected  @endif>Working</option>
          <option value="Not Working" @if($inventory->Asset_condition =="Not Working") selected  @endif>Not Working</option>
      </select>
       
      <input type="text" name="Tag" placeholder="Tag" class="form-control" value="{{$inventory->Tag}}">
      <small>Asset physical verification</small>
      <input type="text" name="As_per_record" placeholder="As Per Record" class="form-control" value="{{$inventory->As_per_record}}">
      <input type="text" name="Verified" placeholder="Verified" class="form-control" value="{{$inventory->Verified}}">
      <input type="text" name="Difference" placeholder="Difference" class="form-control" value="{{$inventory->Difference}}">
      <textarea name="Remarks" placeholder="Remarks" class="form-control" > {{$inventory->Remarks}}</textarea>
      

      <input type="submit" class="btn btn-primary btn-outline" value="Save Changes">
    </form>


@endsection