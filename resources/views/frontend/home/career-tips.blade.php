	<section>
		<div class="block">
		<div data-velocity="-.1" style="background: url({{ asset('../images/news_background.svg') }}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>Quick Career Tips</h2>
							<span>Found by employers communicate directly with hiring managers and recruiters.</span>
						</div><!-- Heading -->
						<div class="blog-sec">
							<div class="row">
								@foreach ($news as $new)
										
								
								<div class="col-lg-4">
									<div class="my-blog">
										<div class="blog-thumb">
										<a href="{{ route('news.single', ['id'=>$new->id]) }}" title=""><img src="{{ asset($new->image_feature) }}" alt="" /></a>
											<div class="blog-metas">
											<a href="#" title="">{{  $new->created_at->diffForHumans()}}</a>
												<a href="#" title=""><i class="la la-tag"></i>
                          @foreach ($newsCategory as $cat)
                              @if($new->category_id == $cat->id)
                                {{ $cat->name  }}
                              @endif
                          @endforeach</a>
											</div>
										</div>
										<div class="blog-details">
											<h3>
												<a href="{{ route('news.single', ['id'=>$new->id]) }}" title="">
													{{  $new->title }}
												</a>
											</h3>
											<p>													
												{!! substr($new->body, 0, 200) !!} ...
											</p>
										<a href="{{ route('news.single', ['id'=>$new->id]) }}" title="">Read More <i class="la la-long-arrow-right"></i></a>
										</div>
									</div>
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