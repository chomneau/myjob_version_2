@extends('frontend.layout.main-template-non-home')
@section('content')
<section>
  <div class="block no-padding " style="background-color:#D4FCFA">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner2">
            <div class="inner-title2">
              <h3>About Us</h3>
              <span>Keep in touch and learn more about us</span>
            </div>
            <div class="page-breacrumbs">
              <ul class="breadcrumbs">
                <li><a href="/" title="">Home</a></li>
              <li><a href="{{ route('about-paysjob') }}" title="">about us</a></li>
                
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
        <div class="col-lg-12">
          <div class="terms-conditions">
            <div class="terms">
              @foreach ($about as $abouts)
                                
                <h2>{{$abouts->title }}</h2>
                <div class="job-details">
                  {!! $abouts->body !!}
                </div>
              @endforeach
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('frontend.home.career-tips')

@endsection