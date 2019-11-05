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
          @include('frontend.job-section.job-list') 
				 					 	
			</div>
		</div>
  </section> 
@endsection