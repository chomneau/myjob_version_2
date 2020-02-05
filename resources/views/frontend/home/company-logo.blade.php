<section>
	<div class="block gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading">
						<h2>Top Company Registered</h2>
						<span>Some of the companies we've helped recruit excellent applicants over the years.</span>
					</div><!-- Heading -->
					<div class="top-company-sec">
						<div class="row" id="companies-carousel">
							@foreach($companyCountJob as $companies)
								<div class="col-lg-3">
									<div class="top-compnay">
										<div class="company-logo">
											<a href="{{ route('companyProfile',['id'=>$companies->id]) }}">
											
												<img src="{{ asset($companies->logo) }}" style="
												width: 110px;
												height: auto;"  alt="" />
											</a>		
										</div>
										
										<h3><a href="#" title="">{{ $companies->companyName }}</a></h3>
										<span>
											@foreach($location as $locations)
													@if($companies->location_id === $locations->id )
														{{ $locations->name }}
													@endif
											@endforeach
											
										</span>
										<a href="{{ route('companyProfile',['id'=>$companies->id]) }}" title="">{{ $companies->job_count }} Open Positon</a>
									</div><!-- Top Company -->							
								</div>
							@endforeach
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</section>