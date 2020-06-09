@extends('layouts.app')
<!-- Bootstrap is included in its original form, unaltered -->
<link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css')}}">

<!-- Related styles of various icon packs and plugins -->
<link rel="stylesheet" href="{{ asset('asset/admin/css/plugins.css') }}">

<!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
<link rel="stylesheet" href="{{ asset('asset/admin/css/main.css') }}">

<!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

<!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
<link rel="stylesheet" href="{{ asset('asset/admin/css/themes.css') }}">
<!-- END Stylesheets -->

<!-- Modernizr (browser feature detection library) -->
<script src="{{asset('assets/adin/js/vendor/modernizr.min.js') }}"></script>

@section('page-content')

 <div id="page-content" style="min-height: 1631px;">
                         <!-- Files Header -->
                         <div class="content-header">
                             <div class="header-section">
                                 <h1>
                                     <i class="gi gi-file"></i>{{$project->project_name}} Project Files<br><small>Manage the files</small>
                                 </h1>
                             </div>
                         </div>
                         <ul class="breadcrumb breadcrumb-top">
                             <li>Project</li>
                             <li><a href="">Files</a></li>
                         </ul>
                         <!-- END Files Header -->

                         <!-- Main Row -->
                         <div class="row">
                             <div class="col-md-4 col-lg-3">
                                 <!-- Navigation Block -->
                                 <div class="block full">
                                     <!-- Navigation Title -->
                                     <div class="block-title">
                                         <div class="block-options pull-right">
                                             <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="" data-original-title="Settings"><i class="fa fa-cog"></i></a>
                                         </div>
                                         <h2><i class="fa fa-compass"></i> Files <strong>Navigation</strong></h2>
                                     </div>
                                     <!-- END Navigation Title -->

                                     <!-- Filter by Type links -->
                                     <!-- Custom files functionality is initialized in js/pages/readyFiles.js -->
                                     <!-- Add the category value you want each link in .media-filter to filter out in its data-category attribute. Add the value 'all' to show all items -->
                                     <ul class="nav nav-pills nav-stacked nav-icons media-filter">
                                         <li @if($class_type == 'All') class="active" @endif>
                                             <a href="javascript:void(0)" data-category="all">
                                                 <i class="fa fa-fw fa-folder-open themed-color-dark icon-push"></i> <strong>All</strong>
                                             </a>
                                         </li>
                                         <li @if($class_type == 'Video/Audio') class="active" @endif>
                                             <a href="javascript:void(0)" data-category="Video/Audio">
                                                 <i class="fa fa-fw fa-film text-danger icon-push"></i> <strong>Video/Audio</strong>
                                             </a>
                                         </li>
                                         <li @if($class_type == 'Photo') class="active" @endif>
                                             <a href="javascript:void(0)" data-category="photo">
                                                 <i class="fa fa-fw fa-picture-o text-success icon-push"></i> <strong>Photos</strong>
                                             </a>
                                         </li>
                                         <li @if($class_type == 'Report') class="active" @endif>
                                             <a href="javascript:void(0)" data-category="reports">
                                                 <i class="fa fa-fw fa-file text-info icon-push"></i> <strong>Reports</strong>
                                             </a>
                                         </li>
                                         <li @if($class_type == 'Manuals/Policies') class="active" @endif>
                                             <a href="javascript:void(0)" data-category="Manuals/Policies">
                                                 <i class="fa fa-fw fa-book text-warning icon-push"></i> <strong>Manuals/Policies</strong>
                                             </a>
                                         </li>

                                          <li @if($class_type == 'Manuals/Policies') class="active" @endif>
                                             <a href="javascript:void(0)" data-category="add-new-object">
                                                 <i class="fa fa-fw fa-plus text-info icon-push"></i> <strong>Add New Object</strong>
                                             </a>
                                         </li>  

                                         <li @if($class_type == 'discussion') class="active" @endif>
                                             <a href="javascript:void(0)" data-category="add-new-discussion">
                                                 <i class="fa fa-fw fa-comments text-info icon-push"></i> <strong>Add New Discussion</strong>
                                             </a>
                                         </li>
                                     </ul>
                                     <!-- END Filter by Type links -->
                                 </div>
                                 <!-- END Navigation Block -->
  
                             </div>

                             <div class="col-md-8 col-lg-9">
                                 <!-- Files Block -->
                               <div class="block">
                                   <!-- Files Content -->
                                   <!-- Add the category value for each item in its data-category attribute (for the filter functionality to work) -->
                                   <div class="row media-filter-items">
                                        @foreach($project->files as $files)
                                             @if($files->category == 'Report')
                                       <div class="col-sm-6 col-lg-4">
                                           <div class="media-items animation-fadeInQuickInv" data-category="reports">
                                               <div class="media-items-options text-left">
                                                   <a href="{{route('file.edit', $files->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                                   <a href="{{$files->file}}" class="btn btn-xs btn-primary"><i class="fa fa-download"></i></a>
                                                   <a href="#" class="btn btn-xs btn-primary" data-toggle="tooltip" data-original-title="Get Sharable Link"><i class="fa fa-link"></i></a>
                                               </div>
                                               <div class="media-items-content">
                                                   <i class="fi fi-pdf fa-5x text-warning"></i>
                                               </div>
                                               <h4>
                                                   <strong>{{$files->label}}</strong><br>
                                                   <small>{{$files->pages+1}} Pages | {{$files->size}} MB</small>
                                               </h4>
                                           </div>

                                       </div>
                                                  @endif
                                           @endforeach


                                           @foreach($project->files as $files)
                                                @if($files->category == 'Manuals/Policies')
                                          <div class="col-sm-6 col-lg-4">
                                              <div class="media-items animation-fadeInQuickInv" data-category="Manuals/Policies">
                                                  <div class="media-items-options text-left">

                                                    <a href="#" class="btn btn-xs btn-primary"><i class="fa fa-check fa-5x text-success"></i></a>
                                                    <a href="{{route('file.edit', $files->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                                      <a href="{{$files->file}}" class="btn btn-xs btn-primary"><i class="fa fa-download"></i></a>
                                                      <a href="#" class="btn btn-xs btn-primary" data-toggle="tooltip" data-original-title="Get Sharable Link"><i class="fa fa-link"></i></a>
                                                  </div>
                                                  <div class="media-items-content">
                                                      <i class="fi fi-pdf fa-5x text-warning"></i>
                                                  </div>
                                                  <h4>
                                                      <strong>{{$files->label}}</strong><br>
                                                      <small>{{$files->pages+1}} Pages | {{$files->size}} MB</small>
                                                  </h4>
                                              </div>

                                          </div>

                                       @endif
                                       @endforeach

 



                                       @foreach($project->files as $files)
                                                @if($files->category == 'Photo')
                                 <div class="col-sm-6 col-lg-4">
                                     <div class="media-items animation-fadeInQuickInv" data-category="photo">
                                         <div class="media-items-options text-left">

                                          <a href="{{route('file.edit', $files->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                             
                                             <a href="{{$files->file}}" class="btn btn-xs btn-danger" data-toggle="lightbox-image"><i class="fa fa-search"></i></a>
                                             <a href="{{route('discussion.create', $files->id)}}" class="btn btn-xs btn-primary" data-toggle="tooltip" data-original-title="Open Discussion "><i class="fa fa-comment"></i></a>

                                              <a href="{{route('discussion.view', $files->id)}}" class="btn btn-xs btn-info" data-toggle="tooltip" data-original-title="View Discussion "><i class="fa fa-comments"></i></a>
                                         </div>
                                         <div class="media-items-content">
                                             <i class="fi fi-jpg fa-5x text-success"></i>
                                             <a href="#" class="btn btn-xs" data-toggle="tooltip" data-original-title="Approved by Mohammad Hamid DAWAJAN"><i class="fa fa-check fa-3x text-success"></i></a>
                                         </div>
                                         <h4>
                                             <strong>{{$files->label}}</strong><br>
                                             <small>{{$files->size}} MB</small>
                                         </h4>
                                     </div>
                                 </div>

                                       @endif
                                       @endforeach



                                       @foreach($project->files as $files)
                                                @if($files->category == 'Video/Audio')
                                         <div class="col-sm-6 col-lg-4">
                                             <div class="media-items animation-fadeInQuickInv" data-category="Video/Audio">
                                                 <div class="media-items-options text-left">
                                                  <a href="{{route('file.edit', $files->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                                     <a href="{{$files->file}}" class="btn btn-xs btn-primary"><i class="fa fa-play"></i></a>
                                                 </div>
                                                 <div class="media-items-content">
                                                     <i class="fi fi-mov fa-5x text-danger"></i>
                                                 </div>
                                                 <h4>
                                                     <strong>{{$files->label}}</strong><br>
                                                     <small>{{$files->size_min}} min | {{$files->size}} MB</small>
                                                 </h4>
                                             </div>
                                         </div>

                                       @endif
                                       @endforeach

                                      <!-- Add new object -->
                                        <div class="col-lg-12" style="display: none;">
                                           <div class="media-items animation-fadeInQuickInv" data-category="add-new-object" style="padding: 30px;">
                                               <h3>Add new object</h3>
                                               <form enctype="multipart/form-data" method="post" action="{{route('file.store', $project->id)}}">
                                                 @csrf
                                                 <label>Label</label>
                                                 <input type="text" name="label" class="form-control" placeholder="Third Site Visit Report" required="true">

                                                 <label>Category</label>
                                                 <select name="category" id="category" class="form-control" onchange="FilePages();" required="true">
                                                   <option value="Report">Report</option>
                                                   <option value="Video/Audio">Video/Audio</option>
                                                   <option value="Photo">Photo</option>
                                                   <option value="Contract">Contract</option>
                                                   <option value="Success/Case Studeis">Success/Case Studeis</option>
                                                 </select>

                                            
                                                 <input type="number" name="pages" id="pages" class="form-control" placeholder="Pages" style="visibility: hidden;">
                                                 <input type="number" name="size_min" id="size_min" class="form-control" placeholder="Size in minuts" style="visibility: hidden;">

                                                  <label>Size (MB)</label>
                                                 <input type="text" name="size" class="form-control" placeholder="Size in MB">

                                                 <label>Upload Object</label>
                                                 <input type="file" name="file" class="form-control" required="true">

                                                 <button class="btn btn-primary  pull-left"><i class="fa fa-save"></i></button>
                                                  

                                               </form>
                                           </div>
                                       </div>


                                     <!-- Add new discussion -->
                                        <div class="col-lg-12" style="display: none;">
                                        <div class="media-items animation-fadeInQuickInv" data-category="add-new-discussion" style="padding: 30px;">
                                               <h3>Create New Discussion on  <span class="text-info"> {{$project->project_name}}</span> Project</h3>
                                               <form enctype="multipart/form-data" method="post" action="{{route('discussion.create', $project->id)}}">
                                                 @csrf

                                                 <label>Object/File</label>
                                                 <select name="file_id" id="file_id" class="form-control"  required="true">

                                                   @foreach($project->files as $file)
                                                   <option value="{{$file->id}}">{{$file->label}}</option>
                                                   @endforeach
                                                  
                                                 </select>


                                                 <label>Title</label>
                                                 <input type="text" name="title" class="form-control" placeholder="Photo or scanned file is in low quality" required="true">

                                                 <label>Content</label>
                                                   <textarea class="form-control" name="content" placeholder="Descriptions"></textarea>

                                                 <button class="btn btn-primary  pull-left"><i class="fa fa-send"></i></button>
                                                  

                                               </form>
                                           </div>
                                       </div>

                                   </div>
                                   <!-- END Files Content -->
                               </div>
                                 <!-- END Files Block -->
                             </div>
                         </div>
                         <!-- END Main Row -->
                     </div>

 


@endsection

<script src="{{ asset('assets/admin/js/vendor/jquery.min.js') }}"></script> 

<!-- Load and execute javascript code used only in this page -->
<script src="{{asset('assets/admin/js/pages/readyFiles.js') }} "></script>
<script>$(function(){ ReadyFiles.init(); });</script>


<script type="text/javascript">

  function FilePages()
  {
    var category = document.getElementById('category').value;

    if (category == 'Report' || category == 'Contract' || category == 'Success/Case Studeis') {
      document.getElementById('pages').style.visibility='visible'; 
      document.getElementById('size_min').style.visibility='hidden'; 
    }else if(category == 'Video/Audio') {
      document.getElementById('size_min').style.visibility='visible'; 
      document.getElementById('pages').style.visibility='hidden'; 
    }else if(category !== 'Video/Audio') {
      document.getElementById('size_min').style.visibility='hidden'; 
    }
    else{
      document.getElementById('pages').style.visibility='hidden'; 
      document.getElementById('size_min').style.visibility='hidden'; 
    }



    if(category == 'Photo') {
          document.getElementById('size_min').style.visibility='hidden'; 
          document.getElementById('pages').style.visibility='hidden'; 
        }

        

  }
</script>




<style type="text/css">
  
  label {
    float: left;
  }
</style>