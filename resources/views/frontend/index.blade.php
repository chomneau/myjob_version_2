@extends('frontend.layout.main-template')
@section('content')



	<!-- slider and search section -->
	@include('frontend.header.slide-and-search')

		<!-- job feature -->
		@include('frontend.home.job-feature')

	<!-- popular category section -->
	{{-- @include('frontend.home.popular-category') --}}

	{{-- job by category --}}
	{{-- @include('frontend.home.job-category') --}}

	<!-- create user account section -->
	@include('frontend.home.create-user-account')



	{{-- Test grid --}}
	{{-- @include('frontend.home.test-grid') --}}


	<!-- Testimony -->

	@include('frontend.home.candidate-testimony')

	
	<!-- companies logo -->
	@include('frontend.home.company-logo')


	<!-- career tips -->
	@include('frontend.home.career-tips')
	

	<!-- FAQs -->
	@include('frontend.home.faq-question')



@endsection