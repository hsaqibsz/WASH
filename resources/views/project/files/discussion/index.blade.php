
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

 
  <div class="panel panel-primary ">
      <div class="panel-heading">

          <img class="animation-pulse" src="{{ Auth::user()->profile->avatar }}" alt="" width="40px" height="40px" style="border-radius: 50px;">&nbsp;&nbsp;&nbsp;
          <span  data-toggle="tooltip" data-original-title="Hikmatullah SAQIB the Senior MIS officer @ ORD-Kabul">Hikmatullah SAQIB, <b> 2 Hours Ago</b></span>
          
      </div>

      <div class="panel-body">
          <h4 class="text-center">
              <h3 style="font-weight: bold;" class="text-center">File Label</h3>
          </h4>
          <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>


          <div class="col-lg-10 col-md-10">
         

          </div>
      </div>
      <div class="panel-footer">
           
        <button class="btn btn-primary" onclick="showReply();" id="showReply_btn"><i class="fa fa-comments"></i> 7 Replys</button> &nbsp; &nbsp; 
        <button class="btn btn-danger" onclick="hideReply();" id="hideReply_btn" style="display: none;"><i class="fa fa-share"></i> Hide 7 Replys</button> &nbsp; &nbsp; 
          <button class="btn btn-default"><i class="fa fa-glass"> 5 Votes</i></button>
      </div>
  </div>
 





  <div  id="replys" style="display: none;">
                                      <table class="table table-bordered table-striped">
                                          <thead>
                                              <tr>
                                                  <th colspan="2">All the new Features <small>by <a href="page_ready_user_profile.html"><strong>Randy Sanders</strong></a> on <em>May 1, 2014</em></small></th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <td class="text-center"><a href="page_ready_user_profile.html"><strong>User</strong></a></td>
                                                  <td>on <em>May 10, 2014 - 12:00</em></td>
                                              </tr>
                                              <tr>
                                                  <td class="text-center" style="width: 12%;">
                                                      <div class="push-bit">
                                                          <a href="page_ready_user_profile.html">
                                                              <img src="img/placeholders/avatars/avatar14.jpg" alt="avatar" class="img-circle">
                                                          </a>
                                                      </div>
                                                      <small>1253 Posts</small>
                                                  </td>
                                                  <td>
                                                      <p>Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.</p>
                                                      <em>Signature</em>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td class="text-center"><a href="page_ready_user_profile.html"><strong>User</strong></a></td>
                                                  <td>on <em>May 25, 2014 - 19:30</em></td>
                                              </tr>
                                              <tr>
                                                  <td class="text-center">
                                                      <div class="push-bit">
                                                          <a href="page_ready_user_profile.html">
                                                              <img src="img/placeholders/avatars/avatar14.jpg" alt="avatar" class="img-circle">
                                                          </a>
                                                      </div>
                                                      <small>5213 Posts</small>
                                                  </td>
                                                  <td>
                                                      <p>Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.</p>
                                                      <em>Signature</em>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td class="text-center"><a href="page_ready_user_profile.html"><strong>User</strong></a></td>
                                                  <td>on <em>June 1, 2014 - 16:01</em></td>
                                              </tr>
                                              <tr>
                                                  <td class="text-center">
                                                      <div class="push-bit">
                                                          <a href="page_ready_user_profile.html">
                                                              <img src="img/placeholders/avatars/avatar14.jpg" alt="avatar" class="img-circle">
                                                          </a>
                                                      </div>
                                                      <small>2585 Posts</small>
                                                  </td>
                                                  <td>
                                                      <p>Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.</p>
                                                      <em>Signature</em>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td class="text-center"><a href="page_ready_user_profile.html"><strong>User</strong></a></td>
                                                  <td>on <em>June 10, 2014 - 09:16</em></td>
                                              </tr>
                                              <tr>
                                                  <td class="text-center">
                                                      <div class="push-bit">
                                                          <a href="page_ready_user_profile.html">
                                                              <img src="img/placeholders/avatars/avatar5.jpg" alt="avatar" class="img-circle">
                                                          </a>
                                                      </div>
                                                      <small>3251 Posts</small>
                                                  </td>
                                                  <td>
                                                      <p>Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.</p>
                                                      <em>Signature</em>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td class="text-center"><a href="page_ready_user_profile.html"><strong>User</strong></a></td>
                                                  <td>on <em>June 15, 2014 - 15:15</em></td>
                                              </tr>
                                              <tr>
                                                  <td class="text-center">
                                                      <div class="push-bit">
                                                          <a href="page_ready_user_profile.html">
                                                              <img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle">
                                                          </a>
                                                      </div>
                                                      <small>5621 Posts</small>
                                                  </td>
                                                  <td>
                                                      <p>Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.</p>
                                                      <em>Signature</em>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td class="text-center"><a href="page_ready_user_profile.html"><strong>You</strong></a></td>
                                                  <td><em>Now</em></td>
                                              </tr>
                                              <tr>
                                                  <td class="text-center">
                                                      <a href="page_ready_user_profile.html"><img src="img/placeholders/avatars/avatar.jpg" class="img-circle" alt="avatar"></a>
                                                  </td>
                                                  <td>
                                                      <form action="page_ready_forum.html" method="post" class="form-horizontal" onsubmit="return false;">
                                                          <div class="form-group">
                                                              <div class="col-md-12">
                                                                  <textarea id="textarea-message" name="textarea-message" rows="8" class="form-control"></textarea>
                                                              </div>
                                                          </div>
                                                          <div class="form-group">
                                                              <div class="col-md-12">
                                                                  <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-reply"></i> Reply</button>
                                                              </div>
                                                          </div>
                                                      </form>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table>
                                      <div class="text-center">
                                          <ul class="pagination pagination-sm">
                                              <li class="disabled"><a href="javascript:void(0)">Prev</a></li>
                                              <li class="active"><a href="javascript:void(0)">1</a></li>
                                              <li><a href="javascript:void(0)">2</a></li>
                                              <li><a href="javascript:void(0)">3</a></li>
                                              <li><a href="javascript:void(0)">...</a></li>
                                              <li><a href="javascript:void(0)">10</a></li>
                                              <li><a href="javascript:void(0)">Next</a></li>
                                          </ul>
                                      </div>
                                  </div>


 

@endsection


<script type="text/javascript">
  function showReply()
  {
    document.getElementById('replys').style.display='inline'; 
    document.getElementById('showReply_btn').style.display='none'; 
    document.getElementById('hideReply_btn').style.display='inline'; 
  } 


   function hideReply()
  {
    document.getElementById('replys').style.display='none'; 
    document.getElementById('showReply_btn').style.display='inline'; 
    document.getElementById('hideReply_btn').style.display='none'; 
  }
</script>