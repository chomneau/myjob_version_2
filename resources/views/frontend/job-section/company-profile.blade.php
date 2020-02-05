@extends('frontend.layout.main-template-non-home')
@section('content')

<section>
    <div class="block no-padding " style="background-color:#D4FCFA">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner2">
              <div class="inner-title2" style="padding:30px ">
                <h4>{{ $company->companyName }}</h4>
              </div>
              <div class="page-breacrumbs">
                  <ul class="breadcrumbs">
                    <li><a href="/" title="">Home</a></li>
                    <li><a href="{{ route('allCompanyNGO') }}" title="">Campany Profile</a></li>
                    
                  </ul>
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
                            <img src="{{ asset($company->logo) }}"  alt="" style="
                            width: 100%; height: auto;" /> 
                          </div>
                      </div>
                      <div class="col-9 col-md-9 col-sm-9">
                        <div class="job-head-info">
                            <h4 class="font-weight-bold" style="margin-bottom:-2px">{{ $company->companyName }}</h4>
                            {{-- <span>{{ $company->address }}</span> --}}
                            <p class="" style="margin-bottom:-10px">
                             <i class="la la-briefcase" aria-hidden="true"></i>
                                
                              @if(count($industryType))
                                @foreach($industryType as $industryTypes)
                                  @if($company->industry_type_id == $industryTypes->id )
                                      {{ $industryTypes->name }}
                                  @endif
                                @endforeach
                              @endif
                              
                            </p>
                            <p style="margin-bottom:-10px">
                              <i class="la la-phone text-info"></i> 
                             <a href="tel:{{ $company->phone }}">{{ $company->phone }}</a>
                           </p>
                           <p style="margin-bottom:-10px">
                              <i class="la la-envelope-o text-info"></i> 
                             <a href="tel:{{ $company->email }}">{{ $company->email }}</a>
                           </p>
                            <p>
                              
                              <i class="la la-map text-info"></i> 
                              {{ $company->address }}
                            </p>
                        </div>
                      </div>
                  </div>
				 				
				 				
              </div><!-- Job Head -->
               
				 			<div class="job-details">
				 				<h3 class="font-weight-bold">About Company</h3>
                 {!! $company->about !!}
                 
				 				

                 
                 
				 			</div>
				 			
               <div class="share-bar">
                  <h5>
                      Job Opening 
                      ({{ $company->job->where('status',1)->count() }})
                     
                   </h5>
                </div>
				 			<div class="recent-jobs">
				 				
				 				<div class="job-list">
								 	<div class="job-listings-sec">
                     <div class="row">

                     
                        @foreach($company->job->where('status',1) as $job)
                          <div class="col-12 col-md-12 col-sm-12">
                            <div class="job-listing">
                              <div class="job-title-sec">
                                <div class="row">
                                  <div class="col-3 col-md-2 col-sm-3">
                                    <div class="c-logo"> 
                                      <a href="{{ route('singleJob',['id'=>$job->id, 'company_id'=>$job->company->id]) }}">
                                        <img src="{{ asset($job->company->logo) }}" alt="" width="75" style="display:block; margin-left:auto; margin-right:auto" /> 
                                      </a>   
                                    </div>
                                  </div>
                                  <div class="col-9 col-md-10 col-sm-9">
                                    <h3>
                                      <a href="{{ route('singleJob',['id'=>$job->id, 'company_id'=>$job->company->id]) }}" title="">
                                          {{ $job->jobTitle }}
                                      </a>
                                    </h3>
                                    <span class="font-weight-bold">{{ $job->company->companyName }}</span>
                                    <br>
                                        
                                        <p style="font-size:12px">
                                            {{-- <i class="fa fa-envelope text-info"></i> --}}
                                            {{-- P-000001   --}}
                                            {{-- <i class="fa fa-map-marker text-info" aria-hidden="true"></i> --}}
                                            {{-- {{ $simJob->location->name }} --}}
                                            #{{ $job->id }}
                
                                            <i class="fa fa-calendar-check-o text-success" aria-hidden="true" style="margin-left:10px"></i> 
                                            {{ Carbon\Carbon::createFromTimestamp(strtotime($job->created_at))->diffForHumans() }}
                
                                            <i class="fa fa-calendar-times-o text-danger" aria-hidden="true" style="margin-left:10px"></i>
                                            {{ Carbon\Carbon::createFromTimestamp(strtotime($job->deadLine))->toFormattedDateString()}}
                                            
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
                   <h3>Industry Type</h3>
                  <span style="margin-top:2px">
                    @if(count($industryType))
                      @foreach($industryType as $industryTypes)
                        @if($company->industry_type_id == $industryTypes->id )
                            {{ $industryTypes->name }}
                        @endif
                      @endforeach
                    @endif
                  </span>
                </li>

                  <li>
                      <i class="fa fa-briefcase" aria-hidden="true"></i>
                      <h3>Company Type</h3>
                      <span style="margin-top:2px">
                        @if(count($companyType))
                          @foreach($companyType as $companyTypes)
                            @if($company->companyType_id == $companyTypes->id )
                                {{ $companyTypes->name }}
                            @endif
                          @endforeach
                        @endif
                      </span>
                  </li>
                 <li>
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                   <h3>Employees</h3>
                   <span style="margin-top:2px">
                    @if(count($employeeSize))
                      @foreach($employeeSize as $employeeSizes)
                        @if($company->employeeSize_id == $employeeSizes->id )
                            {{ $employeeSizes->name }}
                        @endif
                      @endforeach
                    @endif
                  </span>
                  </li>
                  <li>
                      <i class="fa fa-map-o" aria-hidden="true"></i>
                    <h3>Company Location</h3>
                    <span style="margin-top:2px">
                      @if(count($location))
                        @foreach($location as $locations)
                          @if($company->location_id == $locations->id )
                              
                              {{ $locations->name }}
                          @endif
                        @endforeach
                      @endif
                    </span>
                  </li>
				 				
				 			</ul>
				 		</div><!-- Job Overview -->
				 		<div class="job-location">
				 			<h3>Company Map</h3>
				 			<div class="job-lctn-map">
                  
                {!!$company->location_map !!}
                  
				 			</div>
				 		</div>
				 		<div class="extra-job-info">
				 			<span><i class="la la-clock-o"></i><strong>35</strong> Days</span>
				 			<span><i class="la la-search-plus"></i><strong>35697</strong> Displayed</span>
				 			<span><i class="la la-file-text"></i><strong>300-500</strong> Application</span>
				 		</div>
				 	</div>
				</div>
			</div>
		</div>
	</section>
@endsection