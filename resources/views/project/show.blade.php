@extends('layouts.app')

@section('page-content')


<div class="row text-center">
                            <div class="col-sm-6 col-lg-3">
                                <a href="{{route('project.create')}}" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-success">
                                        <h4 class="widget-content-light"><strong>Add New</strong> Project</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 text-success animation-expandOpen"><i class="fa fa-plus"></i></span></div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-danger">
                                        <h4 class="widget-content-light"><strong>Relevant photographs</strong> </h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 text-danger animation-expandOpen"><i class="gi gi-picture"></i></span></div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-warning">
                                        <h4 class="widget-content-light"><strong>Geo</strong> Location</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen"><i class="fa fa-map-marker"></i></span></div>
                                </a>
                            </div>  

                               <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-dark">
                                        <h4 class="widget-content-light"><strong>Relevant Documents/Reports</strong></h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen"><i class="gi gi-folder_open"></i></span></div>
                                </a>
                            </div>

                             
                        </div>




 <div class="block full">
                             <div class="block-title">
                              <h2>Project>Details  </h2> <small>• <i class="fa fa-file-text text-primary"></i> <a href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Download Project Details in PDF">Project Details</a></small>
                                  
                             </div>

                             <table class=" table table-hover">
                            <tbody>
                              <tr>
                                <td>Project Name & Location</td>
                                <td > {{$project->project_name}} located in {{$project->zone}} region>>{{$project->province}} province>>{{$project->district}} district>>{{$project->village}}</td>
                              </tr>
                   

                              <tr>
                                <td>Project type <small class="alert-info">Type of System</small></td>
                                 <td>{{$project->project_type}}</td></tr>

                                 <tr>
                                 <td>Project type <small class="alert-info">Water Supply or Sanitation?</small></td>
                                 <td>{{$project->project_type_WorS}}</td>
                              </tr>
                              
                              <tr>
                                <td>Project type <small class="alert-info">Located in Community, WinS or WinHCF?</small></td> <td>{{$project->project_type_WinSorWinHCF}}</td>
                              </tr> 

                               <tr>
                                <td>Project type <small class="alert-info">Public Tape or HHs Connected</small></td> <td>{{$project->project_type_PorH}}</td>
                              </tr> 

                               <tr>
                                <td>Project Status  </td> <td>

                                  @if($project->project_status =="Ongoing")
                                  <span class="label label-info">Ongoing</span>
                                   @elseif($project->project_status =="Planned")
                                  <span class="label label-warning">Planned</span>
                                   @elseif($project->project_status =="Completed/Handedover")
                                  <span class="label label-success">Completed/Handedover</span>
                                   @elseif($project->project_status =="Failed")
                                  <span class="label label-danger">Failed</span>

                                  @else
                                  <span class="label label-default">Note Reported</span>
                                  @endif
                                </td>
                              </tr>



                             <tr>
                              <td>Project Progressed </td> <td>
                              <div class="progress">
                                                  <div  class="progress-bar progress-bar"  role="progressbar" style="width: {{$project->project_progressed}}%" aria-valuenow="{{$project->project_progressed}}" aria-valuemin="0" aria-valuemax="100">{{$project->project_progressed}}%</div>
                                                </div>
                              </td>
                            </tr>

                            <tr>
                            <td>  Number of documented visits/planned</td> <td>{{$project->number_documented_visits}}/{{$project->number_planned_visits}}</td>
                            </tr> 

                           

                            <tr>
                              <td>Planned/Actual Start Date</td> <td>{{$project->planned_start_date}}/{{$project->actual_start_date}}</td>
                            </tr>

                            <tr>
                              <td>Planned/Actual Completion Date</td> <td>{{$project->planned_completion_date}}/{{$project->actual_completion_date}}</td>
                            </tr>

                       

                            <tr>
                              <td>Relevant NTA <small class="alert-info">National Technical Assistant</small></td> <td>{{$project->relevant_NTA}}</td>
                            </tr>

                            <tr>
                              <td>MRRD Site Engineer <small class="alert-info">Ministry of Rural Rehabilitation and Development  </small></td> <td>{{$project->MRRD_site_engineer}}</td>
                            </tr> 

                            <tr>
                              <td>CDC Representative <small class="alert-info">Community Development Council  </small></td> <td>{{$project->CDC_representative}}</td>
                            </tr> 

                             <tr>
                              <td>ORD Site Engineer  </td> <td>{{$project->ORD_site_engineer}}</td>
                            </tr>
 
                            

                             <tr>
                              <td>Location (Latidude/Longitude) </td> <td>{{$project->latitude}}/{{$project->longitude}}</td>
                            </tr>
                            
                            <tr>
                              <td>Total Benefeciaries </td><td>{{$project->benefeciaries}}</td>
                            </tr>

                             <tr>
                              <td>Water Quality <small class="alert-info">Tested or No</small>   </td><td>{{$project->water_quality_tested}}</td>
                            </tr>

                            <tr>
                              <td>O&M Committee Establised/Trained <small class="alert-info">Operation and Maintainance</small></td> <td>{{$project->OM}}/{{$project->OM_trained}}</td>
                            </tr>

                            <tr>
                              <td>IPs <small class="alert-info">Implementing Partners</small></td> <td>{{$project->IP_MRRD}}, {{$project->IP_PRRD}}, {{$project->IP_NGO}}</td>
                            </tr>

                            <tr>
                              <td colspan="2">Remarks:<br> {{$project->remarks}}</td>
                            </tr>
   


                            </tbody>
                               
                             </table>

                            
                         </div>


 


@endsection

<script src="{{ asset('assets/admin/js/vendor/jquery.min.js') }}"></script>
 

  <script src="{{ asset('assets/admin/js/pages/tablesDatatables.js') }}"></script>
        <script>$(function(){ TablesDatatables.init(); });</script>



        <style type="text/css">
          small {
            padding: 4px; 
            margin: 4px; 
           /* background-color: #033980 !important;
            color: white !important;*/
          }
        </style>