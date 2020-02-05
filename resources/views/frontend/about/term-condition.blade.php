@extends('frontend.layout.main-template-non-home')
@section('content')
<section>
  <div class="block no-padding" style="background-color:#D4FCFA">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner2">
            <div class="inner-title2">
              <h3>Terms and Conditions</h3>
              <span>Keep up to date with the latest news</span>
            </div>
            <div class="page-breacrumbs">
              <ul class="breadcrumbs">
                <li><a href="#" title="">Home</a></li>
                <li><a href="/term-condition" title="">Team and Condition</a></li>
                
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
              @foreach ($terms as $term)
            <div class="terms">
              
            <h2>{{ $term->title }}</h2>
              <p>
                {!! $term->body !!}
              </p>
              
              
            </div>
            @endforeach
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection