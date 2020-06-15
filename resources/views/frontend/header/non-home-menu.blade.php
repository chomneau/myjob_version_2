<header class="gradient">
  <div class="menu-sec" style="padding-top:-60px; padding-bottom:-30px">
    <div class="container">
      <div class="logo">
        <a href="/" title=""><img src="{{ asset('template/images/logo/paysjob_white.png') }}" alt="" /></a>
      </div><!-- Logo -->
      <div class="btn-extars" style="margin-top:2px">
        <a href="{{ route('employer.login') }}" title="" class="post-job-btn" style="background-color:rgba(20, 168, 168,0); border:#14A8A8 solid 1px; border-radius:5px;"><i class="la la-plus"></i>Post Jobs</a>
        <ul class="account-btns">
          <li><a href="{{ route('register') }}" title=""><i class="la la-key"></i> Sign Up</a></li>
          <li><a href="{{ route('login') }}" title=""><i class="la la-external-link-square"></i> Login</a></li>
        </ul>
      </div><!-- Btn Extras -->
      <nav>
        <ul>
          <li>
          <a href="/" title="">Home</a>
            
          </li>
          <li>
            <a href="#" title="">Employers <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul>
              <li><a href="{{ route('allCompanyNGO') }}" title=""> Companies</a></li>
              <li><a href="{{ route('allIndustry') }}" title="">Industry</a></li>
            </ul>
          </li>
{{--          <li>--}}
{{--            <a href="#" title="">Candidates <i class="fa fa-angle-down" aria-hidden="true"></i></a>--}}
{{--            <ul>--}}
{{--              <li><a href="candidates_list.html" title="">Candidates List 1</a></li>--}}
{{--              <li><a href="candidates_list2.html" title="">Candidates List 2</a></li>--}}
{{--              <li><a href="candidates_list3.html" title="">Candidates List 3</a></li>--}}
{{--              <li><a href="candidates_single.html" title="">Candidates Single 1</a></li>--}}
{{--              <li><a href="candidates_single2.html" title="">Candidates Single 2</a></li>--}}

{{--            </ul>--}}
{{--          </li>--}}
          <li >
              <a href="{{ route('news.list')}}" title="">News <i class="fa fa-angle-down" aria-hidden="true"></i></a>
							<ul>
								
								<li><a href="{{ route('news.list')}}">News</a></li>

							</ul>
						
          </li>
          <li>
							<a href="#" title="">Job <i class="fa fa-angle-down" aria-hidden="true"></i></a>
							<ul>
								<li><a href="{{ route('home.joblist')}}">Job List</a></li>
							<li><a href="{{ route('home.jobGrid') }}">Job List Grid</a></li>
								
							</ul>
					</li>
          <li>
            <a href="#" title="">About <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul>
              <li><a href="{{ route('about.paysjob') }}" title="">About Us</a></li>
              <li><a href="{{ route('contact') }}" title="">Contact</a></li>
              <li><a href="{{ route('condition') }}" title="">Terms & Condition</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- Menus -->
    </div>
  </div>
</header>