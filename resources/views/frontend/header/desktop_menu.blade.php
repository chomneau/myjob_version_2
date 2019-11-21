<header class="stick-top forsticky">
		<div class="menu-sec">
			<div class="container">
				<div class="logo">
					<a href="index.html" title=""><img class="hidesticky" src="{{asset('../template/images/logo/paysjob_white.png') }}" alt="" />
						<img class="showsticky" src="{{ asset('../template/images/logo/paysjob_blue.png') }}" alt="" /></a>
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
						<li>
							<a href="#" title="">Candidates <i class="fa fa-angle-down" aria-hidden="true"></i></a>
							<ul>
								<li><a href="candidates_list.html" title="">Candidates List 1</a></li>
								<li><a href="candidates_list2.html" title="">Candidates List 2</a></li>
								<li><a href="candidates_list3.html" title="">Candidates List 3</a></li>
								<li><a href="candidates_single.html" title="">Candidates Single 1</a></li>
								<li><a href="candidates_single2.html" title="">Candidates Single 2</a></li>
								<li class="menu-item-has-children">
									<a href="#" title="">Candidates Dashboard</a>
									<ul>
										<li><a href="candidates_my_resume.html" title="">Candidates Resume</a></li>
										<li><a href="candidates_my_resume_add_new.html" title="">Candidates Resume new</a></li>
										<li><a href="candidates_profile.html" title="">Candidates Profile</a></li>
										<li><a href="candidates_shortlist.html" title="">Candidates Shortlist</a></li>
										<li><a href="candidates_job_alert.html" title="">Candidates Job Alert</a></li>
										<li><a href="candidates_dashboard.html" title="">Candidates Dashboard</a></li>
										<li><a href="candidates_cv_cover_letter.html" title="">CV Cover Letter</a></li>
										<li><a href="candidates_change_password.html" title="">Change Password</a></li>
										<li><a href="candidates_applied_jobs.html" title="">Candidates Applied Jobs</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
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
								<li><a href="/about-paysjob" title="">About Us</a></li>
								<li><a href="/contact-paysjob" title="">Contact</a></li>
								<li><a href="/term-condition" title="">Terms & Condition</a></li>
							</ul>
						</li>
					</ul>
				</nav><!-- Menus -->
			</div>
		</div>
	</header>