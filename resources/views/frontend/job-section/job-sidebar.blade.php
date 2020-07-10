<aside class="col-lg-4 column">
    
    

    <div class="widget border">
      <h3 class="sb-title open">Job Function</h3>
      <div class="specialism_widget">
       
        <div class="simple-checkbox">
          @if(count($countCategory))
            @foreach($countCategory as $countCategories)
            <p>
              
                <i class="fa fa-caret-right fa-lg text-info" aria-hidden="true"></i>
                
                  <a href="{{ route('jobByCategory', ['id'=>$countCategories->id]) }}">
                      
                    {{ $countCategories->name }} ({{ $countCategories->job_count }})
                  </a>
                </label>
              
            </p>

            @endforeach
          @endif
          <p>
            <label for="as">
                <a href="{{ route('allCategory', ['id'=>$countCategories->id]) }}"><strong>More job function</strong> </a>
            </label>
          </p> 
          

        </div>
      </div>
    </div>
    <div class="widget border">
      <h3 class="sb-title closed">Location</h3>
      <div class="specialism_widget">
        <div class="simple-checkbox">
          @if(count($location))
            @foreach($location as $locationCounts)
            <p>
              <input type="checkbox" name="smplechk" id="1">
              <label for="1">
                <a href="{{ route('jobByLocation', ['id'=>$locationCounts->id]) }}">
                  {{ $locationCounts->name }}
                  <span class="badge">
                  ({{ $locationCounts->job->where('status',1)->count() }})
                  </span>
                </a>
              </label>
            </p>

            @endforeach
         @endif
         
        </div>
      </div>
    </div>

    <div class="widget border">
        <h3 class="sb-title closed">Industry</h3>
        <div class="specialism_widget">
          <div class="simple-checkbox">
            @foreach ($industryType as $industryTypes)
            <p>
              <input type="checkbox" name="smplechk" id="16">
              <label for="16">
              <a href="{{ route('list-industry', ['id'=>$industryTypes->id]) }}">
                  
                    {{ $industryTypes->name }}
                      <span class="badge">
                      ({{ $industryTypes->company->count() }})
                      </span>
                    </a>
              </label>
            </p>
            @endforeach
           
           
          </div>
        </div>
      </div>
    <div class="widget border">
      <h3 class="sb-title closed">Company | NGO</h3>
      <div class="specialism_widget">
        <div class="simple-checkbox">
         <p><input type="checkbox" name="smplechk" id="5">
          <label for="5">
            <a href="{{ route('allCompanyNGO') }}">
                All Companies ({{ $company->count() }})
            </a>
                       
          </label>
        </p>
         
        </div>
      </div>
    </div>
    
    
    
    
    <div class="banner_widget">
      <a href="#" title=""><img src="{{ asset('images/paysjob-advertise.svg') }}" alt="" /></a>
   </div>
  </aside>