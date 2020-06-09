@extends('layouts.app')

@section('page-content')
 

 <!-- Page content -->
 <div id="page-content">
     <!-- User Profile Header -->
     <!-- For an image header add the class 'content-header-media' and an image as in the following example -->
     <div class="content-header content-header-media">
         <div class="header-section">
             <img src="{{$user->profile->avatar}}" alt="Avatar" class="pull-right img-circle" width="90px">&nbsp; <a href="{{route('user.edit.profile', $user->id)}}"><i class="hi hi-pencil"></i></a>
             <h1> {{$user->name}} {{$user->lastname}} <br><small>We found this user is {{$user->profile->position}} @ {{$user->profile->province}} Province </small></h1>
         </div>
         <!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
         <img src="{{ asset('assets/admin/img/placeholders/headers/profile_header.jpg') }}" alt="header image" class="animation-pulseSlow">
     </div>
     <!-- END User Profile Header -->

     <!-- User Profile Content -->
     <div class="row">

               <!-- Second Column -->
         <div class="col-lg-5">
             <!-- Info Block -->
             <div class="block">
                 <!-- Info Title -->
                 <div class="block-title">
                     <div class="block-options pull-right">
                       <!--   <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Friend Request"><i class="fa fa-plus"></i></a>
                         <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Hire"><i class="fa fa-briefcase"></i></a> -->
                     </div>
                     <h2>About <strong>{{$user->name}} <span style="text-transform: uppercase;">{{$user->lastname}}</span></strong> <small>&bull; <i class="fa fa-file-text text-primary"></i> <a href="javascript:void(0)" data-toggle="tooltip" title="Download Bio in PDF">Bio</a></small></h2>
                 </div>
                 <!-- END Info Title -->

                 <!-- Info Content -->
                  <table class="table table-borderless table-striped">
                    <tr><td>Full Name:</td> <td>{{$user->name}} <span style="text-transform: uppercase;">{{$user->lastname}}</span></td></tr>
                    <tr><td>Position/Duty Station:</td> <td>{{$user->profile->position}}/{{$user->profile->province}}</td></tr>
                    <tr><td>Tazkera/Passport No:</td> <td>{{$user->profile->NIC}}/{{$user->profile->passport}}</td></tr>
                    <tr><td>Telphone/WhatsApp Number:</td> <td>{{$user->profile->phone}}</td></tr>
                    <tr><td>Email:</td> <td><a href="mailto:{{$user->email}}"> {{$user->email}}</a></td></tr>
                    <tr><td>Contact Person Name:</td> <td>{{$user->profile->contact_person_name}}</td></tr>
                    <tr><td>Contact Person Telphone Number:</td> <td>{{$user->profile->contact_person_phone}}</td></tr>
                    <tr><td>Habits and Interests:</td> <td>{{$user->profile->habit_interests}}</td></tr>
                    
                  </table>
                 <!-- END Info Content -->
             </div>
             <!-- END Info Block -->

             <!-- Photos Block -->
             <div class="block">
                 <!-- Photos Title -->
                 <div class="block-title">
                     <div class="block-options pull-right">
                         <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                     </div>
                     <h2>New Submitted Project <strong>Photos</strong> <small>&bull; <a href="javascript:void(0)">25 Albums</a></small></h2>
                 </div>
                 <!-- END Photos Title -->

                 <!-- Photos Content -->
                 <div class="gallery" data-toggle="lightbox-gallery">
                     <div class="row">
                         <div class="col-xs-6 col-sm-3">
                             <a href="{{ asset('assets/admin/img/placeholders/photos/photo12.jpg') }}" class="gallery-link" title="Image Info">
                                 <img src="{{ asset('assets/admin/img/placeholders/photos/photo12.jpg') }}" alt="image">
                             </a>
                         </div>
                         <div class="col-xs-6 col-sm-3">
                             <a href="{{ asset('assets/admin/img/placeholders/photos/photo15.jpg') }}" class="gallery-link" title="Image Info">
                                 <img src="{{ asset('assets/admin/img/placeholders/photos/photo15.jpg') }}" alt="image">
                             </a>
                         </div>
                         <div class="col-xs-6 col-sm-3">
                             <a href="{{ asset('assets/admin/img/placeholders/photos/photo3.jpg') }}" class="gallery-link" title="Image Info">
                                 <img src="{{ asset('assets/admin/img/placeholders/photos/photo3.jpg') }}" alt="image">
                             </a>
                         </div>
                         <div class="col-xs-6 col-sm-3">
                             <a href="{{ asset('assets/admin/img/placeholders/photos/photo4.jpg') }}" class="gallery-link" title="Image Info">
                                 <img src="{{ asset('assets/admin/img/placeholders/photos/photo4.jpg') }}" alt="image">
                             </a>
                         </div>
                         <div class="col-xs-6 col-sm-3">
                             <a href="{{ asset('assets/admin/img/placeholders/photos/photo5.jpg') }}" class="gallery-link" title="Image Info">
                                 <img src="{{ asset('assets/admin/img/placeholders/photos/photo5.jpg') }}" alt="image">
                             </a>
                         </div>
                         <div class="col-xs-6 col-sm-3">
                             <a href="{{ asset('assets/admin/img/placeholders/photos/photo6.jpg') }}" class="gallery-link" title="Image Info">
                                 <img src="{{ asset('assets/admin/img/placeholders/photos/photo6.jpg') }}" alt="image">
                             </a>
                         </div>
                         <div class="col-xs-6 col-sm-3">
                             <a href="{{ asset('assets/admin/img/placeholders/photos/photo20.jpg') }}" class="gallery-link" title="Image Info">
                                 <img src="{{ asset('assets/admin/img/placeholders/photos/photo20.jpg') }}" alt="image">
                             </a>
                         </div>
                         <div class="col-xs-6 col-sm-3">
                             <a href="{{ asset('assets/admin/img/placeholders/photos/photo17.jpg') }}" class="gallery-link" title="Image Info">
                                 <img src="{{ asset('assets/admin/img/placeholders/photos/photo17.jpg') }}" alt="image">
                             </a>
                         </div>
                         <div class="col-xs-6 col-sm-3">
                             <a href="{{ asset('assets/admin/img/placeholders/photos/photo14.jpg') }}" class="gallery-link" title="Image Info">
                                 <img src="{{ asset('assets/admin/img/placeholders/photos/photo14.jpg') }}" alt="image">
                             </a>
                         </div>
                         <div class="col-xs-6 col-sm-3">
                             <a href="{{ asset('assets/admin/img/placeholders/photos/photo9.jpg') }}" class="gallery-link" title="Image Info">
                                 <img src="{{ asset('assets/admin/img/placeholders/photos/photo9.jpg') }}" alt="image">
                             </a>
                         </div>
                         <div class="col-xs-6 col-sm-3">
                             <a href="{{ asset('assets/admin/img/placeholders/photos/photo11.jpg') }}" class="gallery-link" title="Image Info">
                                 <img src="{{ asset('assets/admin/img/placeholders/photos/photo11.jpg') }}" alt="image">
                             </a>
                         </div>
                         <div class="col-xs-6 col-sm-3">
                             <a href="{{ asset('assets/admin/img/placeholders/photos/photo10.jpg') }}" class="gallery-link" title="Image Info">
                                 <img src="{{ asset('assets/admin/img/placeholders/photos/photo10.jpg') }}" alt="image">
                             </a>
                         </div>
                     </div>
                 </div>
                 <!-- END Photos Content -->
             </div>
             <!-- END Photos Block -->

     
         </div>
         <!-- END Second Column -->
         <!-- First Column -->
       <div class="col-lg-7">
                                <!-- Orders Block -->
                                <div class="block">
                                    <!-- Orders Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <span class="label label-success"><strong>Count Projects ({{$user->projects->count()}})</strong></span>
                                        </div>
                                        <h2><i class="gi gi-briefcase"></i> <strong>Projects</strong> </h2>
                                    </div>
                                    <!-- END Orders Title -->

                                    <!-- Orders Content -->
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

                                                                                <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 163px;">Actions</th></tr>

                                                                         </thead>
                                                                         <tbody>
                                                                             
                                                                           @foreach($user->projects as $project)
                                                                                  <tr>
                                                                                    <td class="text-center">{{$loop->index+1}}</td>
                                                                                    <td class="text-center">{{$project->project_id}}</td>
                                                                                    <td class="text-center">{{$project->project_name}}</td>
                                                                                    <td class="text-center"> 
                                                                                <div class="progress">
                                                                                                    <div  class="progress-bar progress-bar"  role="progressbar" style="width: {{$project->project_progressed}}%" aria-valuenow="{{$project->project_progressed}}" aria-valuemin="0" aria-valuemax="100">{{$project->project_progressed}}%</div>
                                                                                                  </div>
                                                                                    </td>
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

                                                                                    <td class="text-center">
                                                                                        <div class="btn-group">

                                                                                            <a href="#" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Send to project manager for approval"><i class="fa fa-send"></i></a>

                                                                                            <a href="{{route('project.show', $project->id)}}" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Show"><i class="fa fa-eye"></i></a>

                                                                                            <a href="{{route('project.edit', $project->id)}}" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
 

                                                                                        </div>
                                                                                    </td>
                                                                                  </tr>
                                                                           @endforeach   

                                                                         </tbody>
                                                                     </table>

                                                                    

                                                                 </div>
                                                                 </div>
                                    <!-- END Orders Content -->
                                </div>
                                <!-- END Orders Block -->

                            
 

                                <!-- Private Notes Block -->
                                <div class="block full">
                                    <!-- Private Notes Title -->
                                    <div class="block-title">
                                        <h2><i class="fa fa-file-text-o"></i> <strong>Private</strong> Notes</h2>
                                    </div>
                                    <!-- END Private Notes Title -->

                                    <!-- Private Notes Content -->
                                    <div class="alert alert-info">
                                        <i class="fa fa-fw fa-info-circle"></i> This note will be displayed to all employees but not to customers.
                                    </div>
                                    <form action="page_ecom_customer_view.html" method="post" onsubmit="return false;">
                                        <textarea id="private-note" name="private-note" class="form-control" rows="4" placeholder="Your note.."></textarea>
                                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Note</button>
                                    </form>
                                    <!-- END Private Notes Content -->
                                </div>
                                <!-- END Private Notes Block -->
                            </div>




     </div>
     <!-- END User Profile Content -->
 </div>
 <!-- END Page Content -->

@endsection

<script src="{{ asset('assets/admin/js/vendor/jquery.min.js') }}"></script>
 

  <script src="{{ asset('assets/admin/js/pages/tablesDatatables.js') }}"></script>
        <script>$(function(){ TablesDatatables.init(); });</script>