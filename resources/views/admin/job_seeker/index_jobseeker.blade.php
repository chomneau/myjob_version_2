
@extends('admin.admin-layout.main')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Job Seeker</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <ul class="pagination pagination-split">
                          <li><a href="#">A</a></li>
                          <li><a href="#">B</a></li>
                          <li><a href="#">C</a></li>
                          <li><a href="#">D</a></li>
                          <li><a href="#">E</a></li>
                          <li>...</li>
                          <li><a href="#">W</a></li>
                          <li><a href="#">X</a></li>
                          <li><a href="#">Y</a></li>
                          <li><a href="#">Z</a></li>
                        </ul>
                      </div>

                      <div class="clearfix"></div>

                      <div class="container">
                        <div class="row">

                          @foreach($job_seeker as $job_seekers)
                          
                              <div class="col-lg-3 col-sm-6">

                                      <div class="card hovercard">
                                          <div class="cardheader" height="20px">

                                          </div>
                                          <div class="avatar">
                                              <img alt="" src="{{asset($job_seekers->Profile->avatar)}}">
                                          </div>
                                          <div class="info">
                                              <div class="title">
                                                  <a target="_blank" href="https://scripteden.com/">
                                                    {{ $job_seekers->Profile->last_name }}, 
                                                    {{ $job_seekers->Profile->first_name }}
                                                  </a>
                                              </div>
                                              <div class="desc" style="font-size:14px">{{ $job_seekers->Profile->position }}</div>
                                              <!-- <div class="desc">at Company</div> -->   
                                          </div>

                                          <a href="{{ route('admin.jobseeker.single',['jobseeker_id'=>$job_seekers->id]) }}" class="btn btn-success" style="margin-bottom:30px; border-radius: 25px 25px 25px 25px; width:110px; height:32px; line-height:18px; background-color: #FFFFFF; color: cadetblue">View Profile</a>

                                          
                                          
                                      </div>

                                  </div>

                          @endforeach
                        </div>
                      </div>

                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
  
    
  
@endsection
