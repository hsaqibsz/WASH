@extends('layouts.app')

@section('page-content')


<div class="row text-center">
                            <div class="col-sm-6 col-lg-3">
                                <a href="{{route('project.create')}}" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-info">
                                        <h4 class="widget-content-light"><strong>Add New</strong> Project</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 text-info animation-expandOpen"><i class="fa fa-plus"></i></span></div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-danger">
                                        <h4 class="widget-content-light"><strong>Planned</strong> Visits</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 text-danger animation-expandOpen">71</span></div>
                                </a>
                            </div>

                      <div class="col-sm-6 col-lg-3">
                          <a href="javascript:void(0)" class="widget widget-hover-effect2">
                              <div class="widget-extra themed-background-warning">
                                  <h4 class="widget-content-light"><strong>Geo</strong> Locations in Map ({{$projects->count()}})</h4>
                              </div>
                              <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen"><i class="fa fa-map-marker"></i></span></div>
                          </a>
                      </div> 


                      <div class="col-sm-6 col-lg-3">
                          <a href="{{ route('project.export',['type'=>'xlsx']) }}" class="widget widget-hover-effect2">
                              <div class="widget-extra themed-background-success">
                                  <h4 class="widget-content-light"><strong>Export</strong> Report</h4>
                              </div>
                              <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen"><i class="fa fa-file-excel-o " style="color: green;"></i></span></div>
                          </a>
                      </div>

                             
                        </div>




 <div class="block full">
                             <div class="block-title">
                                 <h2><strong>Water></strong> Projects</h2>
                             </div>
                             <p> </p>

                             <div class="table-responsive">
                                 <div id="example-datatable_wrapper" class="dataTables_wrapper form-inline no-footer">

                                 	 <table id="example-datatable" class="table table-vcenter table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="example-datatable_info">
                                     <thead>
                                         <tr role="row">
                                         	
                                         	<th class="text-center sorting_asc" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 73px;">SR</th>


                                         	<th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Client: activate to sort column ascending" style="width: 136px;">Project Code</th>

                                         	<th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 267px;">Project Name</th>

                                         	<th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Subscription: activate to sort column ascending" style="width: 251px;">Progressed %</th>

                                         	<th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Subscription: activate to sort column ascending" style="width: 251px;">Status</th>

                                           <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Subscription: activate to sort column ascending" style="width: 251px;">Approval Status</th>

                                         	<th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 163px;">Actions</th></tr>

                                     </thead>
                                     <tbody>
                                         
                                       @foreach($projects as $project)
                                              <tr>
                                              	<td class="text-center">{{$loop->index+1}}</td>
                                              	<td class="text-center">{{$project->project_id}}</td>
                                              	<td class="text-center">{{$project->project_name}}</td>
                                              	<td class="text-center">{{$project->project_progressed}}%</td>
                                              	<td class="text-center">
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

                                                <td>
                                                  @if($project->approved_by == -1)
                                                   <span class="label label-info">Saved/Drafted</span>
                                                   @elseif($project->approved_by == 0)
                                                   <span class="label label-warning">Under Review</span>
                                                  @else
                                                  <span class="label label-success">Approved</span>
                                                  @endif
                                                </td>

                                              	<td class="text-center">
                                              		<div class="btn-group">
                                          @if($project->approved_by == -1)
	                                               <a href="{{route('project.request.approval', $project->id)}}" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Send to project manager for approval"><i class="fa fa-send"></i></a>

                                                 <a href="{{route('project.show', $project->id)}}" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Show"><i class="fa fa-eye"></i></a>

                                                 <a href="{{route('project.edit', $project->id)}}" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>


                                                 <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a> 
                                           @elseif($project->approved_by == 0)   

	                                                    

                                                      <a href="{{route('project.show', $project->id)}}" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Show"><i class="fa fa-eye"></i></a>

                                                      <a href="{{route('project.edit', $project->id)}}" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Request Edit"><i class="fa fa-pencil danger"></i></a> 
	                                                     
                                                  @else
                      

                                                        <a href="{{route('project.show', $project->id)}}" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="View Details"><i class="fa fa-eye fa-2x"></i></a>

                                                     
                                                  @endif
	                                                </div>
                                              	</td>
                                              </tr>
                                       @endforeach   

                                     </tbody>
                                 </table>

                                

                             </div>
                             </div>
                         </div>


 


@endsection

<script src="{{ asset('assets/admin/js/vendor/jquery.min.js') }}"></script>
 

  <script src="{{ asset('assets/admin/js/pages/tablesDatatables.js') }}"></script>
        <script>$(function(){ TablesDatatables.init(); });</script>