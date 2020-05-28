@extends('layouts.app')

@section('page-content')

  <div id="page-content" style="min-height: 1631px;">
    <a href="#" data-animation="animation-stretchLeft">click me</a>
                          <!-- Contacts Header -->
                          <div class="content-header">
                              <div class="header-section">
                                  <h1>
                                      <i class="gi gi-parents"></i>Implementation Team<br><small>Reach IMoRWP Team Memebers!</small>
                                  </h1>
                              </div>
                          </div>
                          <ul class="breadcrumb breadcrumb-top">
                              <li>Human Resource</li>
                              <li><a href="">Implementation Team</a></li>
                          </ul>
                          <!-- END Contacts Header -->

                          <!-- Main Row -->
                          <div class="row">
                              <div class="col-lg-12">
                                  <!-- Contacts Block -->
                                  <div class="block">
                                      <!-- Contacts Title -->
                                      <div class="block-title">
                                          <div class="block-options text-center">
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">A</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">B</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">C</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">D</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">E</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">F</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">G</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">H</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">I</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">J</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">K</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">L</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">M</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">N</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">O</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">P</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">Q</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">R</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">S</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">T</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">V</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">U</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">W</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">X</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">Y</a>
                                              <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">Z</a>
                                          </div>
                                      </div>
                                      <!-- END Contacts Title -->

                                      <!-- Contacts Content -->
                                      <div class="row style-alt">
                                          <!-- Contact Widget -->

                                          @foreach($users as $user)


                                          <div class="col-sm-6 col-md-4">
                                                                          <!-- Advanced Active Theme Color Widget -->
                                                                          <div class="widget">
                                                                              <div class="widget-advanced">
                                                                                  <!-- Widget Header -->
                                                                                  <div class="widget-header text-center themed-background-dark">
                                                                                      <h3 class="widget-content-light">
                                                                                          <a href="{{route('user.profile', $user->id)}}" class="themed-color"><span style="transition: capitalized;">{{$user->name}}</span> <span style="text-transform: uppercase;">{{$user->lastname}}</span></a><br>
                                                                                          <small>{{$user->profile->province}}</small>
                                                                                          <small>{{$user->profile->postion}}</small>
                                                                                      </h3>
                                                                                  </div>
                                                                                  <!-- END Widget Header -->

                                                                                  <!-- Widget Main -->
                                                                                  <div class="widget-main">
                                                                                      <a href="{{route('user.profile', $user->id)}}" class="widget-image-container animation-hatch">
                                                                                          <img src="{{$user->profile->avatar}}" alt="avatar" class="widget-image img-circle" >
                                                                                      </a>
                                                                                      <div class="row text-center animation-fadeIn">
                                                                                          <div class="col-xs-4">
                                                                                              <h3><strong>140</strong><br><small>Votes</small></h3>
                                                                                          </div>
                                                                                          <div class="col-xs-4">
                                                                                              <h3><strong>15</strong><br><small>Projects</small></h3>
                                                                                          </div>
                                                                                          <div class="col-xs-4">
                                                                                              <h3><strong>980</strong><br><small>Submitted Reports</small></h3>
                                                                                          </div>
                                                                                      </div>
                                                                                  </div>
                                                                                  <!-- END Widget Main -->
                                                                              </div>
                                                                          </div>
                                                                          <!-- END Advanced Active Theme Color Widget -->
                                                                      </div>
                                        @endforeach
                                         
                                      </div>
                                      <!-- END Contacts Content -->
                                  </div>
                                  <!-- END Contacts Block -->
                              </div>





                           
                          </div>
                          <!-- END Main Row -->
                      </div>
@endsection