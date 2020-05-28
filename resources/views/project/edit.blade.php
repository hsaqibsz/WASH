@extends('layouts.app')

@section('page-content')

<div class="row">

<div class="col-lg-12">
 
  <div class="block">
    <h2>Edit Project</h2>

<form method="post" action="{{route('project.update', $project->id)}}" enctype="multipart/form-data" >
      @csrf
      {{ method_field('PUT') }}
 
            <div class="form-group-revised">
            <label>ProjectID/Code</label>
            <input type="text" required="true" value="{{$project->project_id}}" name="project_id" class="form-control" title="Project ID is required!">
            </div>


            <div class="form-group-revised">
            <label>Project Name</label> 
            <input type="text" required="true" value="{{$project->project_name}}" title="project name" name="project_name" class="form-control">     
            </div>

            <div class="form-group-revised">
            <label>Project Type <small>(spring/gdravity-fed or borehole with handpump)</small></label>
            <select name="project_type" required="true" class="form-control">
              <option disabled="true">Select project type</option>
              <option value="solar-powered" @if($project->project_type == "solar_powered") selected @endif>Solar-Powered</option>
              <option value="Spring/Gravity-Fed" @if($project->project_type == "Spring/Gravity-Fed") selected @endif>Spring/Gravity-Fed</option>
              <option value="Borehole with handpump" @if($project->project_type == "Borehole with handpump") selected @endif>Borehole with handpump</option>
            </select>
            </div>

            <div class="form-group-revised">
            <label>Project Type <small>(Watersupply or Sanitation)</small></label>
            <select name="project_type_WorS" required="true" class="form-control">
              <option disabled="true">Select project type</option>
              <option value="Water Supply" @if($project->project_type_WorS == "Water Supply") selected @endif >Water Supply</option>
              <option value="Sanitation" @if($project->project_type_WorS == "Sanitation") selected @endif >Sanitation</option>
            </select>
            </div>

            <div class="form-group-revised">
            <label>Project Type <small>(Public Tape or HHs Connected)</small></label>
            <select name="project_type_PorH" required="true" class="form-control">
              <option disabled="true">Select project type</option>
              <option value="Public Tape" @if($project->project_type_PorH == "Public Tape") selected @endif>Public Tape</option>
              <option value="HHs Connected" @if($project->project_type_PorH == "HHs Connected") selected @endif>HHs Connected</option>
            </select>
            </div>


            <div class="form-group-revised">
            <label>Project Type <small>(Located in community, school or health center)</small></label>
            <select name="project_type_WinSorWinHCF" required="true" class="form-control">
              <option disabled="true">Select project type</option>
              <option value="Community" @if($project->project_type_WinSorWinHCF == "Community") selected @endif >Community</option>
              <option value="WinS(WASH in School)" @if($project->project_type_WinSorWinHCF == "WinS(WASH in School)") selected @endif >WinS(WASH in School")</option>
              <option value="WinHCF(WASH in health care facility)" @if($project->project_type_WinSorWinHCF == "WinHCF(WASH in health care facility)") selected @endif >WinHCF(WASH in health care facility)</option>
            </select>
            </div>


            <div class="form-group-revised">
            <label>Project Status </label>
            <select name="project_status" required="true" class="form-control">
              <option disabled="true">Select project Status</option>
              <option value="Ongoing" @if($project->project_status == "Ongoing") selected @endif>Ongoing</option>
              <option value="Planned" @if($project->project_status == "Planned") selected @endif>Planned</option>
              <option value="Completed/Handedover" @if($project->project_status == "Completed/Handedover") selected @endif>Completed/Handedover</option>
              <option value="Failed" @if($project->project_status == "Failed") selected @endif>Failed</option> 
            </select>
            </div>



            <div class="form-group-revised">
            <label>Project Progressed out of 100!</label>
             
            <select name="project_progressed" required="true" class="form-control">
              <option disabled="true">Select Progressed %</option>

             

             <?PHP for($i = 0; $i<= 100; $i++) { ?>
            <option value="<?php echo $i; ?>" <?PHP if($project->project_progressed == $i) {?> selected <?PHP } ?> ><?php echo $i."%"; ?></option>

             <?PHP } ?>
            </select>
            </div>



            <div class="form-group-revised">
            <label>Number of Planned Visites</label>
            <input type="number" name="number_planned_visits" value="{{$project->number_planned_visits}}" class="form-control">
            </div>


            <div class="form-group-revised">
            <label>Number of Happened/Documented Visits </label>
            <input type="number" name="number_documented_visits" value="{{$project->number_documented_visits}}" class="form-control" required="true">
            </div>



            <div class="form-group-revised">
            <label>Planned Duration</label>

            <div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
                 <div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
                     <input type="text"   name="planned_start_date" value="{{$project->planned_start_date}}" class="form-control text-center" placeholder="From">
                     <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
                     <input type="text" name="planned_completion_date" value="{{$project->planned_completion_date}}" class="form-control text-center" placeholder="To">
                 </div>
               </div>
            </div>


            <div class="form-group-revised">
                 <label>Actual Duration</label>

                 <div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
                      <div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
                          <input type="text"   name="actual_start_date" value="{{$project->actual_start_date}}" class="form-control text-center" placeholder="From">
                          <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
                          <input type="text" name="actual_completion_date" value="{{$project->actual_completion_date}}" class="form-control text-center" placeholder="To">
                      </div>
                    </div>
            </div>

             

            <div class="form-group-revised">
            <label>Relevant NTA <small>(National Technical Assistant)</small></label>
            <input type="text" name="relevant_NTA" value="{{$project->relevant_NTA}}" class="form-control" placeholder="Name, C#: (078) 777 2013">
            </div>

            <div class="form-group-revised">
            <label> MRRD Site Engineer</label>
            <input type="text" name="MRRD_site_engineer" value="{{$project->MRRD_site_engineer}}" class="form-control" placeholder="Name, C#: (078) 777 2013">
            </div>


            <div class="form-group-revised">
            <label>CDC Representative</label>
            <input type="text" name="CDC_representative" value="{{$project->CDC_representative}}" class="form-control" placeholder="Name, C#: (078) 777 2013">
            </div>


            <div class="form-group-revised">
            <label>ORD's Site Engineer/Monitor</label>
            <input type="text" name="ORD_site_engineer" value="{{$project->ORD_site_engineer}}" class="form-control" placeholder="Name, C#: (078) 777 2013">
            </div>


            <div class="form-group-revised">
             <label>Zone</label>
             <select name="zone" required="true" class="form-control">
               <option disabled="true">Select Relevant Zone</option>
               <option value="North" @if($project->zone == "North") selected @endif>North</option>
               <option value="Northeast" @if($project->zone == "Northeast") selected @endif>Northeast</option>
               <option value="East" @if($project->zone == "East") selected @endif>East</option>
             </select>
            </div>


            <div class="form-group-revised">
            <label>Province</label>

            <select name="province" required="true" class="form-control">
              <option disabled="true">Select Relevant Province</option>
              <option value="Balkh" @if($project->province == "Balkh") selected @endif>Balkh</option>
              <option value="Baghlan" @if($project->province == "Baghlan") selected @endif>Baghlan</option>
              <option value="Samangon" @if($project->province == "Samangon") selected @endif>Samangon</option>
              <option value="Sar-e-Pul" @if($project->province == "Sar-e-Pul") selected @endif>Sar-e-Pul</option>
              <option value="Badakhshan" @if($project->province == "badakhshan") selected @endif>Badakhshan</option>
              <option value="Takhar" @if($project->province == "Takhar") selected @endif>Takhar</option>
              <option value="Jawzjan" @if($project->province == "jawzjan") selected @endif>Jawzjan</option>
              <option value="Faryab" @if($project->province == "Faryab") selected @endif>Faryab</option>
              <option value="Kunduz" @if($project->province == "Kunduz") selected @endif>Kunduz</option> 
            </select>
            </div>


            <div class="form-group-revised">
            <label>District</label>
            <input type="text" name="district" value="{{$project->district}}" class="form-control" placeholder="District">
            </div> 

              <div class="form-group-revised">
            <label>Village</label>
            <input type="text" name="village" class="form-control" value="{{$project->village}}" placeholder="Village">
            </div>


            <div class="form-group-revised">
            <label>Latitude</label>
            <input type="text" name="latitude" value="{{$project->latitude}}" class="form-control" placeholder="Latitude">
            </div>

            <div class="form-group-revised">
            <label>Longitude</label>
            <input type="text" name="longitude" value="{{$project->longitude}}" class="form-control" placeholder="village name">
            </div>


            <div class="form-group-revised">
            <label>Number Benefeciaries</label>
            <input type="number" name="benefeciaries" value="{{$project->benefeciaries}}" class="form-control">
            </div>

            <div class="form-group-revised">
            <div style="border: 1px solid lightblue; padding: 5px; border-radius: 4px; margin-top: 5px; margin-bottom: 5px;">
            <label>Water Quality Tested</label>
            <input type="radio" name="water_quality_tested" @if($project->water_quality_tested == "Yes") checked @endif value="Yes"> Yes &nbsp; &nbsp;
            <input type="radio" name="water_quality_tested" @if($project->water_quality_tested == "No") checked @endif value="No"> No &nbsp; &nbsp; 
            </div>
            </div>


            <div class="form-group-revised">
            <label>Implementing Partner(IP)</label><br>
             <label class="switch switch-primary">MRRD &nbsp; &nbsp;<input  type="checkbox"  name="IP_MRRD" value="MRRD" @if(strpos($project->IP_MRRD, 'MRRD') !== false) checked='' @endif><span></span></label> &nbsp; 
             <label class="switch switch-primary">PRRD<input  type="checkbox"   name="IP_PRRD" value="PRRD" @if(strpos($project->IP_PRRD, 'PRRD') !== false) checked='' @endif><span></span></label>  &nbsp;
             <label class="switch switch-primary">NGO<input   type="checkbox"    name="IP_NGO" value="NGO" @if(strpos($project->IP_NGO, 'NGO') !== false) checked='' @endif><span></span></label>  &nbsp; 
            </div>

            <div class="form-group-revised">
             <label class="switch switch-primary">O&M <small>(operation and maintainance )</small><input  type="checkbox"  name="OM" value="yes" @if($project->OM == 'yes') checked='' @endif ><span></span></label> 

             <label class="switch switch-primary">O&M Trained  <input  type="checkbox"   name="OM_trained" value="yes" @if($project->OM_trained =='yes') checked='' @endif><span></span></label>
            </div>

            <div class="form-group-revised">
            <label>Remarks</label>
            <textarea class="form-control" name="remarks">{{$project->remarks}}</textarea>
            </div>

            <div class="form-group-revised">
            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Save</button>  
            </div>

</form>

 
  </div>

</div> 
</div>
@endsection

<style type="text/css">
  
  .form-group-revised {
    border: 1px solid lightblue;
     padding: 5px;
      border-radius:
       4px; margin-top: 5px;
        margin-bottom: 5px;
  }



</style>