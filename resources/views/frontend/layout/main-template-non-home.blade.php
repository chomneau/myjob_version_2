<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>paysjob.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="CreativeLayers">
	
	@include('frontend.include.include_style')
	
</head>
<body>

<div class="page-loading">
	<img src="images/loader.gif" alt="" />
	<span>Skip Loader</span>
</div>



<div class="theme-layout" id="scrollup">

	<!-- responsive or mobile menu navbar -->
	@include('frontend.header.responsive_menu')
	<!-- desktop or big screen top menu -->
	{{-- @include('frontend.header.desktop_menu') --}}
	@include('frontend.header.non-home-menu')


	@yield('content')
		


	<!-- footer section -->
	@include('frontend.include.footer')

</div>

<!-- signin employer -->
	{{-- @include('frontend.auth.employer_login') --}}
<!-- signin uptop seeker -->
	{{-- @include('frontend.auth.seeker_login') --}}

<!-- register uptop -->
	{{-- @include('frontend.auth.register') --}}

<!-- include all javascript file -->

	@include('frontend.include.include_javascript')

</body>
</html>

