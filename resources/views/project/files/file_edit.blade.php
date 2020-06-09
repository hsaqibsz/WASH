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
                       

                                      
                                        <div class="col-lg-12" >
                                           <div class="media-items animation-fadeInQuickInv" data-category="add-new" style="padding: 30px;">
                                               <h3><span style="font-weight: bold;"> {{$file->label}}</span>  Edit Form</h3>
                                               <form enctype="multipart/form-data" method="post" action="{{route('file.update', $file->project_id)}}">
                                                 @csrf
                                                 @field_method('patch')
                                                 <label>Label</label>
                                                 <input type="text" value="{{$file->label}}" name="label" class="form-control" placeholder="Third Site Visit Report" required="true">

                                                 <label>Category</label>
                                                 <select name="category" id="category" class="form-control" onchange="FilePages();" required="true">
                                                   <option @if($file->category == "Report") selected @endif value="Report">Report</option>
                                                   <option @if($file->category == "Video/Audio") selected @endif value="Video/Audio">Video/Audio</option>
                                                   <option @if($file->category == "Photo") selected @endif value="Photo">Photo</option>
                                                   <option @if($file->category == "Contract") selected @endif value="Contract">Contract</option>
                                                   <option @if($file->category == "Success/Case Studeis") selected @endif value="Success/Case Studeis">Success/Case Studeis</option>
                                                 </select>

                                            
                                                 <input type="number" value="{{$file->pages}}" name="pages" id="pages" class="form-control" placeholder="Pages" style="visibility: hidden;">
                                                 <input type="number" value="{{$file->size_min}}" name="size_min" id="size_min" class="form-control" placeholder="Size in minuts" style="visibility: hidden;">

                                                  <label>Size (MB)</label>
                                                 <input type="text" value="{{$file->size}}" name="size" class="form-control" placeholder="Size in MB">

                                                 <label>Upload Object  <small>Current object available at  @if($file->category == 'Photo') <a href="{{$file->file}}" class="btn btn-xs btn-danger" data-toggle="lightbox-image"><i class="fa fa-search"></i></a> @else  
                                                 <a href="{{$file->file}}" class="btn btn-xs btn-danger" ><i class="fa fa-search"></i></a> 

                                                 @endif</small></label> 

                                                 <input type="file" name="file" class="form-control" >

                                                 <button class="btn btn-primary  pull-left"><i class="fa fa-save"></i></button>
                                                  

                                               </form>
                                           </div>
                                       </div>

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