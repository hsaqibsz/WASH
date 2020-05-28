@extends('layouts.app')

@section('page-content')

<div class="row">

<div class="col-lg-12">
 
  <div class="block">
    <h2>Create New Project</h2>

<form method="post" action="{{route('project.store')}}" enctype="multipart/form-data" >
      @csrf
 
            <div class="form-group-revised">
            <label>ProjectID/Code</label>
            <input type="text" required="true" name="project_id" class="form-control" title="Project ID is required!">
            </div>


            <div class="form-group-revised">
            <label>Project Name</label> 
            <input type="text" required="true" title="project name" name="project_name" class="form-control">     
            </div>

            <div class="form-group-revised">
            <label>Project Type <small>(spring/gdravity-fed or borehole with handpump)</small></label>
            <select name="project_type" required="true" class="form-control">
              <option disabled="true">Select project type</option>
              <option value="solar-powered">Solar-Powered</option>
              <option value="Spring/Gravity-Fed">Spring/Gravity-Fed</option>
              <option value="Borehole with handpump">Borehole with handpump</option>
            </select>
            </div>

            <div class="form-group-revised">
            <label>Project Type <small>(Watersupply or Sanitation)</small></label>
            <select name="project_type_WorS" required="true" class="form-control">
              <option disabled="true">Select project type</option>
              <option value="Water Supply">Water Supply</option>
              <option value="Sanitation">Sanitation</option>
            </select>
            </div>

            <div class="form-group-revised">
            <label>Project Type <small>(Public Tape or HHs Connected)</small></label>
            <select name="project_type_PorH" required="true" class="form-control">
              <option disabled="true">Select project type</option>
              <option value="Public Tape">Public Tape</option>
              <option value="HHs Connected">HHs Connected</option>
            </select>
            </div>


            <div class="form-group-revised">
            <label>Project Type <small>(Located in community, school or health center)</small></label>
            <select name="project_type_WinSorWinHCF" required="true" class="form-control">
              <option disabled="true">Select project type</option>
              <option value="Community">Community</option>
              <option value="WinS(WASH in School)">WinS(WASH in School")</option>
              <option value="WinHCF(WASH in health care facility)">WinHCF(WASH in health care facility)</option>
            </select>
            </div>


            <div class="form-group-revised">
            <label>Project Status </label>
            <select name="project_status" required="true" class="form-control">
              <option disabled="true">Select project Status</option>
              <option value="Ongoing">Ongoing</option>
              <option value="Planned">Planned</option>
              <option value="Completed/Handedover">Completed/Handedover</option>
              <option value="Failed">Failed</option> 
            </select>
            </div>



            <div class="form-group-revised">
            <label>Project Progressed out of 100!</label>
             
            <select name="project_progressed" required="true" class="form-control">
              <option disabled="true">Select Progressed %</option>

             

             <?PHP for($i = 0; $i<= 100; $i++) { ?>
            <option value="<?php echo $i; ?>"><?php echo $i."%"; ?></option>

             <?PHP } ?>
            </select>
            </div>



            <div class="form-group-revised">
            <label>Number of Planned Visites</label>
            <input type="number" name="number_planned_visits" class="form-control">
            </div>


            <div class="form-group-revised">
            <label>Number of Happened/Documented Visits </label>
            <input type="number" name="number_documented_visits" class="form-control" required="true">
            </div>



            <div class="form-group-revised">
            <label>Planned Duration</label>

            <div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
                 <div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
                     <input type="text"   name="planned_start_date" class="form-control text-center" placeholder="From">
                     <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
                     <input type="text" name="planned_completion_date" class="form-control text-center" placeholder="To">
                 </div>
               </div>
            </div>


            <div class="form-group-revised">
                 <label>Actual Duration</label>

                 <div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
                      <div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
                          <input type="text"   name="actual_start_date" class="form-control text-center" placeholder="From">
                          <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
                          <input type="text" name="actual_completion_date" class="form-control text-center" placeholder="To">
                      </div>
                    </div>
            </div>

             

            <div class="form-group-revised">
            <label>Relevant NTA <small>(National Technical Assistant)</small></label>
            <input type="text" name="relevant_NTA" class="form-control" placeholder="Name, C#: (078) 777 2013">
            </div>

            <div class="form-group-revised">
            <label> MRRD Site Engineer</label>
            <input type="text" name="MRRD_site_engineer" class="form-control" placeholder="Name, C#: (078) 777 2013">
            </div>


            <div class="form-group-revised">
            <label>CDC Representative</label>
            <input type="text" name="CDC_representative" class="form-control" placeholder="Name, C#: (078) 777 2013">
            </div>


            <div class="form-group-revised">
            <label>ORD's Site Engineer/Monitor</label>
            <input type="text" name="ORD_site_engineer" class="form-control" placeholder="Name, C#: (078) 777 2013">
            </div>


            <div class="form-group-revised">
             <label>Zone</label>
             <select name="zone" required="true" class="form-control">
               <option disabled="true">Select Relevant Zone</option>
               <option value="North">North</option>
               <option value="Northeast">Northeast</option>
               <option value="East">East</option>
             </select>
            </div>


            <div class="form-group-revised">
            <label>Province</label>

            <select name="province" required="true" class="form-control">
              <option disabled="true">Select Relevant Province</option>
              <option value="Balkh">Balkh</option>
              <option value="Baghlan">Baghlan</option>
              <option value="Samangon">Samangon</option>
              <option value="Sar-e-Pul">Sar-e-Pul</option>
              <option value="Badakhshan">Badakhshan</option>
              <option value="Takhar">Takhar</option>
              <option value="Jawzjan">Jawzjan</option>
              <option value="Faryab">Faryab</option>
              <option value="Kunduz">Kunduz</option> 
            </select>
            </div>


            <div class="form-group-revised">
            <label>District</label>
            <input type="text" name="district" class="form-control" placeholder="District">
            </div> 

              <div class="form-group-revised">
            <label>Village</label>
            <input type="text" name="village" class="form-control" placeholder="District">
            </div>


            <div class="form-group-revised">
            <label>Latitude</label>
            <input type="text" name="latitude" class="form-control" placeholder="Latitude">
            </div>

            <div class="form-group-revised">
            <label>Longitude</label>
            <input type="text" name="longitude" class="form-control" placeholder="village name">
            </div>


            <div class="form-group-revised">
            <label>Number Benefeciaries</label>
            <input type="number" name="benefeciaries" class="form-control">
            </div>

            <div class="form-group-revised">
            <div style="border: 1px solid lightblue; padding: 5px; border-radius: 4px; margin-top: 5px; margin-bottom: 5px;">
            <label>Water Quality Tested</label>
            <input type="radio" name="water_quality_tested" value="Yes"> Yes &nbsp; &nbsp;
            <input type="radio" name="water_quality_tested" value="No"> No &nbsp; &nbsp; 
            </div>
            </div>


            <div class="form-group-revised">
            <label>Implementing Partner(IP)</label><br>
             <label class="switch switch-primary">MRRD<input  type="checkbox" checked="" name="IP_MRRD" value="MRRD"><span></span></label> &nbsp; 
             <label class="switch switch-primary">PRRD<input  type="checkbox"   name="IP_PRRD" value="PRRD"><span></span></label>  &nbsp;
             <label class="switch switch-primary">NGO<input   type="checkbox"    name="IP_NGO" value="NGO"><span></span></label>  &nbsp; 
            </div>

            <div class="form-group-revised">
             <label class="switch switch-primary">O&M <small>(operation and maintainance )</small><input  type="checkbox" checked="" name="OM" value="yes"><span></span></label> 

             <label class="switch switch-primary">O&M Trained  <input  type="checkbox" checked="" name="OM_trained" value="yes"><span></span></label>
            </div>

            <div class="form-group-revised">
            <label>Remarks</label>
            <textarea class="form-control" name="remarks"></textarea>
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