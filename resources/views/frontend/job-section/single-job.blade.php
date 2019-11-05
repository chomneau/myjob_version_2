@extends('frontend.layout.main-template-non-home')
@section('content')

<section>
    <div class="block no-padding" style="background-color:#D4FCFA">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner2">
              <div class="inner-title2" style="padding:30px ">
                <h4>{{ $singleJob->jobTitle }}</h4>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<section>
		<div class="block">
			<div class="container">
				<div class="row">
				 	<div class="col-lg-8 column">
				 		<div class="job-single-sec">
               
				 			<div class="job-single-head">
                  <div class="row">
                      <div class="col-3 col-md-3 col-sm-3">
                          <div style="position: relative;
                          width: 120px;
                          height: 120px;
                          overflow: hidden;
                          border: solid #2ab5fa 1px; padding: 5px; "> 
                          <a href="{{ route('companyProfile',['id'=>$company->id]) }}">
                            <img src="{{ asset($company->logo) }}"  alt="" style="
                            width: 100%; height: auto;" /> 
                          </a>  
                          </div>
                      </div>
                      <div class="col-9 col-md-9 col-sm-9">
                        <div class="job-head-info">
                            <h4 class="font-weight-bold" style="margin-bottom:-2px">{{ $company->companyName }}</h4>
                            {{-- <span>{{ $company->address }}</span> --}}
                            <p class="text-primary" style="margin-bottom:-10px">
                              <a href="{{ $company->website }}" target="_blank"><i class="la la-unlink"></i> {{ $company->website }}</a>
                            </p>
                            <p style="margin-bottom:-10px">
                              <i class="la la-phone text-primary"></i> 
                             <a href="tel:{{ $company->phone }}">{{ $company->phone }}</a>
                           </p>
                            <p><i class="la la-envelope-o text-primary"></i> {{ $company->email }}</p>
                        </div>
                      </div>
                  </div>
				 				
				 				
              </div><!-- Job Head -->
               
				 			<div class="job-details">
				 				<h3 class="font-weight-bold">Job Description</h3>
                 {!! $singleJob->jobDescription !!}
                 
				 				<h3 class="font-weight-bold">Job Requirement</h3>
                 {!! $singleJob->jobRequirement !!}

                 <h3 class="font-weight-bold">Job Location</h3>

                 <div class="location-tag" style="margin-bottom:20px">
                  
                  
                  @foreach ($singleJob->location as $location)

                  
                  <a href="{{ route('jobByLocation', ['id'=>$location->id]) }}" title="" class="btn btn-outline-info text-secondary" style="padding:4px 12px 4px 12px; border-radius: 2px; font-size:14px; margin-bottom:8px">
                                     
                      <i class="fa fa-map-marker text-primary" aria-hidden="true"></i> {{ $location->name }}
                      
                  </a>
                  @endforeach

                </div>
                 
				 			</div>
				 			<div class="share-bar">
				 				<span>Share</span><a href="#" title="" class="share-fb"><i class="fa fa-facebook"></i></a><a href="#" title="" class="share-twitter"><i class="fa fa-twitter"></i></a>
				 			</div>
				 			<div class="recent-jobs">
				 				<h3>Related Jobs</h3>
				 				<div class="job-list">
								 	<div class="job-listings-sec">
                     <div class="row">

                     
                        @foreach($similarJob as $simJob)
                          <div class="col-12 col-md-12 col-sm-12">
                            <div class="job-listing">
                              <div class="job-title-sec">
                                <div class="row">
                                  <div class="col-3 col-md-2 col-sm-3">
                                    <div class="c-logo"> 
                                      <a href="{{ route('singleJob',['id'=>$simJob->id, 'company_id'=>$simJob->company->id]) }}">
                                        <img src="{{ asset($simJob->company->logo) }}" alt="" width="75" style="display:block; margin-left:auto; margin-right:auto" /> 
                                      </a>   
                                    </div>
                                  </div>
                                  <div class="col-9 col-md-10 col-sm-9">
                                    <h3>
                                      <a href="{{ route('singleJob',['id'=>$simJob->id, 'company_id'=>$simJob->company->id]) }}" title="">
                                          {{ $simJob->jobTitle }}
                                      </a>
                                    </h3>
                                    <span class="font-weight-bold">{{ $simJob->company->companyName }}</span>
                                    <br>
                                        
                                        <p style="font-size:12px">
                                            {{-- <i class="fa fa-envelope text-info"></i> --}}
                                            {{-- P-000001   --}}
                                            {{-- <i class="fa fa-map-marker text-info" aria-hidden="true"></i> --}}
                                            {{-- {{ $simJob->location->name }} --}}
                                            #{{ $simJob->id }}
                
                                            <i class="fa fa-calendar-check-o text-success" aria-hidden="true" style="margin-left:10px"></i> 
                                            {{ Carbon\Carbon::createFromTimestamp(strtotime($simJob->created_at))->diffForHumans() }}
                
                                            <i class="fa fa-calendar-times-o text-danger" aria-hidden="true" style="margin-left:10px"></i>
                                            {{ Carbon\Carbon::createFromTimestamp(strtotime($simJob->deadLine))->toFormattedDateString()}}
                                            
                                        </p>

                                  </div>  
                                  
                                </div>
                                {{-- end row --}}
                              </div>
                              {{-- end job-title-sec --}}
                            </div>
                          </div>
                        @endforeach
                      </div>{{-- end row --}}
                        
                  </div>
                  
								 </div>
				 			</div>
				 		</div>
           </div>
           

				 	<div class="col-lg-4 column">
              <a class="apply-thisjob" href="{{ $company->website }}" target="__blank" >
                 <i class="la la-unlink"></i> 
                 Company website
               </a>
              <div class="apply-alternative">
              <a href="{{ $company->linkedin_url}}" target="__blank" style="margin-right:5px"  class="text-primary">
                  <i class="la la-linkedin"></i>
                  Linkedin
               </a>
                <a href="{{ $company->twitter_url}}" target="__blank"  style="margin-right:5px" class="text-primary">
                  <i class="la la-twitter"></i>
                  Twitter
               </a>
                <a href="{{ $company->facebook_url}}" target="__blank"  class="text-primary">
                  <i class="la la-facebook"></i>
                  Facebook
               </a>
                
              </div>
              <div class="job-overview">
                <h3>Company Overview</h3>
                <ul>
                  
                  <li>
                     <i class="fa fa-university" aria-hidden="true"></i>
                    <h3>Salary Range</h3>
                   <span style="margin-top:2px">
                     @if(count($salaryRange))
                       @foreach($salaryRange as $salaryRanges)
                         @if($singleJob->salaryRange_id == $salaryRanges->id )
                             {{ $salaryRanges->name }}
                         @endif
                       @endforeach
                     @endif
                   </span>
                 </li>
 
                   <li>
                       <i class="fa fa-briefcase" aria-hidden="true"></i>
                       <h3>Job Contract</h3>
                       <span style="margin-top:2px">
                         @if(count($contractType))
                           @foreach($contractType as $contractTypes)
                             @if($singleJob->contractType_id == $contractTypes->id )
                                 {{ $contractTypes->name }}
                             @endif
                           @endforeach
                         @endif
                       </span>
                   </li>
                  <li>
                     <i class="fa fa-user-plus" aria-hidden="true"></i>
                    <h3>Prefer Experience</h3>
                    <span style="margin-top:2px">
                     @if(count($preExperience))
                       @foreach($preExperience as $preExperiences)
                         @if($singleJob->job_experience_id == $preExperiences->id )
                             {{ $preExperiences->name }}
                         @endif
                       @endforeach
                     @endif
                   </span>
                   </li>
                   <li>
                       <i class="fa fa-map-o" aria-hidden="true"></i>
                     <h3>Degree</h3>
                     <span style="margin-top:2px">
                       @if(count($degree))
                         @foreach($degree as $degrees)
                           @if($singleJob->degree_id == $degrees->id )          
                               {{ $degrees->name }}
                           @endif
                         @endforeach
                       @endif
                     </span>
                   </li>
                   
                  
                </ul>
              </div><!-- Job Overview -->
              
              <div class="extra-job-info ">
                <span><i class="la la-clock-o text-danger"></i><strong>
                  DeadLine: {{ Carbon\Carbon::createFromTimestamp(strtotime($singleJob->deadLine))->toFormattedDateString()}}</strong> </span>
              <span><i class="la la-users"></i><strong>Hire: {{ $singleJob->hire }}</strong> Position</span>
                <span><i class="la la-file-text"></i><strong>300-500</strong> Application</span>
              </div>
            </div>
				</div>
			</div>
		</div>
	</section>
@endsection