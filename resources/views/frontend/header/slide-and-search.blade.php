<section>
		<div class="block no-padding">
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="main-featured-sec">
							<ul class="main-slider-sec text-arrows" style="
							height: 400px">
								<!-- <li class="slideHome"><img src="images/slide/bg-slide-1" alt="" /></li> -->
								<!-- <li class="slideHome"><img src="images/slide/bg-slide-2" alt="" /></li> -->
								<li class="slideHome"><img src="{{asset('images/news_background_search.svg')}}" alt="" /></li>
							</ul>
							<div class="job-search-sec">
								<div class="job-search" style="margin-top:50px">
									<h4>Find your dream job with us</h4>
									{{-- <span>Find Jobs, Employment & Career Opportunities</span> --}}
									<form action="{{route('result')}}" method="get"> 
										<div class="row">
											<div class="col-lg-7 col-md-5 col-sm-5 col-xs-12">
												<div class="job-field">
													<input type="text" placeholder="Job title, keywords or company name" name="query" style="padding-left:16px" />
													<i class="la la-keyboard-o" style="margin-top:-5px; "></i>
												</div>
											</div>
											<div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
												<div class="job-field" >
													<select data-placeholder="job and company" name="select_type" class="chosen-city" style="border-radius:2px; font-size:16px">
														<option value="all_jobs" style="font-size:16px; font-fam">All Jobs</option>
														<option value="all_companies">All Companies</option>					
													</select>
													<i class="fa fa-bars" aria-hidden="true" style="margin-top:2px; font-size:16px; padding-right:-15px;"></i>
													{{-- <i class="la la-map-marker" style="margin-top:-5px"></i> --}}
												</div>
											</div>
											<div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
												<button type="submit" style="background-color:seagreen; padding:1px; border-radius:5px; border:skyblue solid 1px">
													<i class="la la-search"></i>
												</button>
											</div>
										</div>
									</form>
									<div class="or-browser">
										<span>Or browse job offers by </span>
									<a href="{{ route('home.joblist')}}" title="">category</a>
									</div>
								</div>
							</div>
							<!-- <div class="scroll-to">
								<a href="#scroll-here" title=""><i class="la la-arrow-down"></i></a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>