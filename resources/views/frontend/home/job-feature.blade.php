
	<section>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>Featured Jobs</h2>
							<span>Leading Employers already using job and talent.</span>
						</div><!-- Heading -->
						<div class="job-listings-sec">
							<div class="row">
								@foreach ($job as $jobs)
									<div class="col-12 col-md-6 col-sm-6">	
											<div class="job-listing" style="border-bottom:gainsboro solid 0.5px">

												<div class="job-title-sec" >
													<div class="row">
														<div class="col-3 col-md-3 col-sm-3">
															<div class="c-logo" > 
																<img src="{{ asset($jobs->company->logo) }}" alt="" width="75" />  
															</div>
														</div>

														<div class="col-9 col-md-9 col-sm-9">
															<h3 class="text-left">
																<a href="{{ route('singleJob',['id'=>$jobs->id, 'company_id'=>$jobs->company->id]) }}" title="">{{ $jobs->jobTitle }}</a>
															</h3>
															<span class="text-left font-weight-bold">{{ $jobs->company->companyName }}</span>
															<br>
															
																<p style="font-size:12px">
																	{{-- <i class="fa fa-envelope text-info"></i> --}}
																	{{-- P-000001   --}}
																	{{-- <i class="fa fa-map-marker text-info" aria-hidden="true"></i> --}}
																	#
																	{{ $jobs->id}}
																	{{-- {{ $jobs->location->name }} --}}

																	<i class="fa fa-calendar-check-o text-success" aria-hidden="true" style="margin-left:15px"></i> 
																	{{ Carbon\Carbon::createFromTimestamp(strtotime($jobs->created_at))->diffForHumans() }}

																	<i class="fa fa-calendar-times-o text-danger" aria-hidden="true" style="margin-left:15px"></i>
																	{{ Carbon\Carbon::createFromTimestamp(strtotime($jobs->deadLine))->toFormattedDateString()}}
																	
																</p>

														</div>
														
													</div><!-- end row -->
													
												</div><!--	job-title-sec	-->
												
												
												
										</div>	
									</div>	
								@endforeach
							</div>
							
							
							
						</div>
					</div>
					<div class="col-lg-12">
						<div class="browse-all-cat">
							<a href="{{ route('home.joblist')}}" title="">Load more listings</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>