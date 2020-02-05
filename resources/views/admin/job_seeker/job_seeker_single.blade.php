@extends('admin.admin-layout.main')
@section('content')



<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                      <div class="clearfix"></div>                         
                        <div class="col-lg-12 col-sm-12"> 
                            <div class="card hovercard" style="background-color:#16c4e0">
                              <div class="cardheader" height="150px"></div>
                                  <div class="avatar">
                                      <img alt="" src="{{asset($job_seeker->Profile->avatar)}}">
                                  </div>
                                  <div class="info">
                                    <div class="title">
                                        <a target="_blank" href="#" style="color:white">
                                          {{ $job_seeker->Profile->last_name }}, 
                                          {{ $job_seeker->Profile->first_name }}
                                        </a>
                                    </div>
                                    <div class="desc" style="font-size:16px; text-transform:capitalize; color:white">{{ $job_seeker->Profile->position }}</div>
                                  </div>   
                              </div>
                              <div class="education">
                                <h4>CANTACT</h4>
                                <hr>
                                <div class="message_wrapper">
                                  
                                  <blockquote class="message">

                                   

                                    <table border="0">
                                       <tr>
                                         <td style="padding-right:20px">
                                         Gender
                                        </td>
                                         <td style="padding-right:15px;"> : </td>
                                         <td> </td>
                                         <td style="text-transform:capitalize" >
                                           {{$job_seeker->Profile->sex}}</td>
                                           
                                       </tr>
                                       <tr>
                                         <td>Date of Birth</td>
                                         <td>: </td>
                                         <td> </td>
                                         <td> {{$job_seeker->profile->date_of_birth}}</td>
                                       </tr>
                                       <tr>
                                         <td>Nationality</td>
                                         <td>: </td>
                                         <td> </td>
                                         <td> {{$job_seeker->profile->nationality}}</td>
                                       </tr>
                                       <tr>
                                         <td>Phone</td>
                                         <td>:</td>
                                         <td></td>

                                         <td>
                                            {{$job_seeker->profile->phone  }}

                                         </td>
                                       </tr>
                                       <tr>
                                         <td>Email</td>
                                         <td>:</td>
                                         <td></td>

                                         <td>
                                            {{$job_seeker->email  }}

                                         </td>
                                       </tr>

                                       <tr>
                                         <td>Address </td>
                                         <td>: </td>
                                         <td></td>

                                         <td>
                                            {{$job_seeker->profile->address  }}

                                         </td>
                                       </tr>
                                     </table>

                                  </blockquote>
                                  <br />
                                  
                                </div>
                              </div>

                              

                              <div class="experience">
                                <h4>EXPERIENCE</h4>
                                <hr>
                                <div class="message_wrapper">
                                  <h4 class="heading">
                                    Position : {{$job_seeker->Profile->position}}
                                  </h4>
                                  <blockquote class="message">
                                     <table border="0">
                                       <tr>
                                         <td style="padding-right:15px">Expected Salary</td>
                                         <td style="padding-right:15px"> : </td>
                                         <td> </td>
                                         <td >
                                           {{$job_seeker->Profile->expected_salary}}</td>
                                           
                                       </tr>
                                       <tr>
                                         <td>Experience</td>
                                         <td>: </td>
                                         <td> </td>
                                         <td style="text-transform:capitalize"> {{$job_seeker->profile->experience}}</td>
                                       </tr>
                                       <tr>
                                         <td>Expected Salary</td>
                                         <td>: </td>
                                         <td> </td>
                                         <td> {{$job_seeker->profile->expected_salary}}</td>
                                       </tr>
                                       <tr>
                                         <td>Location</td>
                                         <td>:</td>
                                         <td></td>

                                         <td>
                                         @if(count($location))
                                                @foreach($location as $locations)
                                                    @if($job_seeker->profile->location_id  == $locations->id)
                                                        {{ $locations->name }}
                                                    @endif

                                                @endforeach
                                            @endif
                                           
                                         
                                         </td>
                                       </tr>
                                     </table>
                                    </blockquote>
                                  <br />
                                  
                                </div>
                              </div>

                              <div class="experience">
                                <h4>RESUME AND COVER LETTER</h4>
                                <hr>
                                <table class="table table-md">
                                  <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">File Name</th>
                                      <th scope="col">Upload Date</th>
                                      <th scope="col">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  @if(count($uploadCv))
                                    @foreach($uploadCv as $uploadCvs)
                                        <tr>
                                            <td>#</td>
                                            <td>{{ substr($uploadCvs->name,0, 50) }}</td>
                                            <td>{{ $uploadCvs->created_at->format('j-M-Y , g:ia') }}</td>
                                            <td>
                                                <a href="{{ asset('uploads/cv/'.$uploadCvs->name) }}" target="_blank" style="border-radius: 25px 25px 25px 25px ; width:110px; height:32px; line-height:18px; background-color: #FFFFFF; color: cadetblue">
                                                    <span ><i class="fa fa-download" aria-hidden="true"></i> Download</span>
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach
                                @endif
                                  </tbody>
                                </table>
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
