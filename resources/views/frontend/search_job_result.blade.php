@extends('frontend.layout.main-template')
@section('content')
<!-- slider and search section -->
@include('frontend.header.slide-and-search')
  <section>
		<div class="block remove-top">
			<div class="container">
				 <div class="row no-gape">
           {{-- include job sidebar --}}
          @include('frontend.job-section.job-sidebar')

          <div class="col-lg-8 column" >
            <div class="modrn-joblist np">
              <div class="filterbar">
                <span class="emlthis"><a href="mailto:example.com" title="">
                  <i class="la la-envelope-o"></i> Search Result ( {{ $job->count() }} )</a></span>
                <div class="sortby-sec">
                  {{-- <span>Sort by</span>
                  
                <select data-placeholder="20 Per Page" class="chosen">
                  <option>30 Per Page</option>
                  <option>40 Per Page</option>
                  <option>50 Per Page</option>
                  <option>60 Per Page</option>
                </select> --}}
                </div>      
              </div>
            </div><!-- MOdern Job LIst -->
            <div class="job-list-modern">
              <div class="job-listings-sec">
              
              
              <div class="row" style="margin-left:8px;" >
                  @foreach ($job as $jobs)
                    <div class="col-12 col-md-12 col-sm-12" style="background-color:aqua; padding: 0 2px 0 2px; border-shadow:1px ">	
                        <div class="job-listing" style="border-bottom:aqua solid 0.5px">

                          <div class="job-title-sec" >
                            <div class="row">
                                
                              <div class="col-3 col-md-2 col-sm-3">
                                <div class="c-logo" style="text-align:center" > 
                                  <a href="{{ route('singleJob',['id'=>$jobs->id, 'company_id'=>$jobs->company->id]) }}" title="">
                                    <img src="{{ asset($jobs->company->logo) }}" alt="" width="75" style="display:block; margin-left:auto; margin-right:auto" />  
                                  </a>  
                                </div>
                              </div>

                              <div class="col-9 col-md-10 col-sm-9">
                                <h3 class="text-left font-weight-bold">
                                  <a href="{{ route('singleJob',['id'=>$jobs->id, 'company_id'=>$jobs->company->id]) }}" title="">{{ $jobs->jobTitle }}</a>
                                </h3>
                                <span class="text-left font-weight-bold">
                                  {{ $jobs->company->companyName }}
                                </span>
                                <br>
                                
                                  <p style="font-size:12px">
                                    {{-- <i class="fa fa-envelope text-info"></i> --}}
                                    {{-- P-000001   --}}
                                    {{-- <i class="fa fa-map-marker text-info" aria-hidden="true"></i> --}}
                                    # {{ $jobs->id }}
                                    {{-- {{ $jobs->location->name }} --}}

                                    <i class="fa fa-calendar-check-o text-success" aria-hidden="true" style="margin-left:10px"></i> 
                                    {{ Carbon\Carbon::createFromTimestamp(strtotime($jobs->created_at))->diffForHumans() }}

                                    <i class="fa fa-calendar-times-o text-danger" aria-hidden="true" style="margin-left:10px"></i>
                                    {{ Carbon\Carbon::createFromTimestamp(strtotime($jobs->deadLine))->toFormattedDateString()}}
                                    
                                  </p>
                              </div>                      
                            </div><!-- end row -->
                            
                          </div><!--	job-title-sec	-->
                          
                      </div>	
                    </div>	
                  @endforeach
                </div>
              
            </div>

            
            {{-- <div class="pagination">
                <ul>          
                  <li class="prev"><a href="" disabled><i class="la la-long-arrow-left"></i> Prev</a></li>
                  <li><a href="">1</a></li>
                  <li class="active"><a href="">2</a></li>
                  <li><a href="">3</a></li>
                  <li><span class="delimeter">...</span></li>
                  <li><a href="">14</a></li>
                  <li class="next"><a href="">Next <i class="la la-long-arrow-right"></i></a></li>
                </ul>
              </div> --}}
              <!-- Pagination -->
            
            <div class="pagination">
                {!! $job->links() !!}
            </div><!-- Pagination -->
            
            </div>
          </div>
          </div>

      </div>
    </div>
  </section> 
@endsection