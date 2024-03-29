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
           {{-- include job-list --}}


<div class="col-lg-8 column" >
    <div class="modrn-joblist np">
      <div class="filterbar" style="border-color:aqua solid 1px">
        <span class="emlthis"><a href="#" title="">
          <i class="fa fa-building text-success" aria-hidden="true"></i> 
          Industry type :
          
            {{-- {{ $industry->name }}  --}}
            (
             
                {{-- {{ $industry->company->count() }} companies --}}
              
              
            )
         
        </a></span>
        <div class="sortby-sec">
          <span>Sort by</span>
          
         <select data-placeholder="20 Per Page" class="chosen">
           <option>30 Per Page</option>
           <option>40 Per Page</option>
           <option>50 Per Page</option>
           <option>60 Per Page</option>
         </select>
        </div>
        
      </div>
    </div><!-- MOdern Job LIst -->
    <div class="job-list-modern">
      <div class="job-listings-sec" style="border: solid 0px; padding-left: 0px !importance; padding-right:5px">
       
       
       <div class="row" style="margin-left:1px;" >
          @foreach ($industryType as $industryTypes)
            <div class="col-12 col-md-6 col-sm-12" style="padding-right: 10px; border-shadow:1px ">	
                <div class="job-listing" style="border-bottom:aqua solid 0.5px; padding-left:2px">

                  <div class="job-title-sec" >
                    <div class="row" style="margin-bottom:-10px">
                        
                      <div class="col-3 col-md-3 col-sm-3">
                        <div class="c-logo" style="text-align:center" > 
                          <a href="{{ route('list-industry', ['id'=>$industryTypes->id]) }}" title="">
                           
                            {{-- <img src="{{ asset($company->logo) }}" alt="" width="65" style="display:block; margin-left:auto; margin-right:auto" />   --}}
                         </a>  

                        </div>
                      </div>

                      <div class="col-9 col-md-9 col-sm-9" style="padding-left:25px">
                        <h3 class="text-left font-weight-bold">
                            <a href="{{ route('list-industry', ['id'=>$industryTypes->id]) }}">
                              {{ $industryTypes->name }}
                          <a>                             
                          </a>
                        </h3>
                        <span class="text-left font-weight-bold">
                          @if($industryTypes->company->count()>1)
                            ({{ $industryTypes->company->count() }} companies)
                          @else
                            ({{ $industryTypes->company->count() }} company)
                          @endif
                        </span>
                        <br>
                        <p style="font-size:12px">
                            {{-- @foreach($location as $locations)
                                @if($company->location_id == $locations->id)
                                <i class="fa fa-map-marker text-info" aria-hidden="true"></i>
                                {{ $locations->name}}
                                @endif
                            @endforeach
                             --}}
                            
                        </p>    
                        
                      </div>                      
                    </div><!-- end row -->
                    
                  </div><!--	job-title-sec	-->
                  
              </div>	
            </div>	
          @endforeach
        </div>
      </div> 
     </div>
     
     <div class="pagination pull-right">
        {{-- {!! $companies->links() !!} --}}
     </div><!-- Pagination -->
    </div>
  </div>
</div>


				 					 	
</div>
</div>
</section> 
@endsection