@extends('frontend.layout.main-template-non-home')
@section('content')

<section>
    <div class="block no-padding" style="background-color:#D4FCFA">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner2">
              <div class="inner-title2" style="padding:30px ">
                  <div data-velocity="-.1" style="background: url({{asset('../images/top-nav-bg.svg')}}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
                <h3>News and Resources</h3>
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
             <div class="col-lg-9 column">
               <div class="bloglist-sec">

                @foreach ($news as $new)
                    
                 <div class="blogpost style2">
                   <div class="blog-posthumb"> 
                    <a href="{{ route('news.single', ['id'=>$new->id]) }}" title="">
                    <img src="{{ asset($new->image_feature) }}" alt="" />
                    </a> 
                  </div>
                   <div class="blog-postdetail">
                    <ul class="post-metas">
                        <li>
                          <a href="#" title="" class=" metascomment">
                                <i class="la la-calendar-o text-primary"></i>
                            {{  $new->created_at->diffForHumans()}}
                          </a>
                        </li>
                      <li>
                        <a class="metascomment" href="#" title="">
                          <i class="la la-tag text-primary"></i>
                          @foreach ($newsCategory as $cat)
                              @if($new->category_id == $cat->id)
                                {{ $cat->name  }}
                              @endif
                          @endforeach
                          
                        </a>
                      </li>
                    </ul>
                     <h3>
                        <a href="{{ route('news.single', ['id'=>$new->id]) }}" title="">
                       {{ $new->title }}
                        </a>
                      </h3>
                     <p>
                        {!! substr($new->body, 0, 250) !!} ...
                     </p>
                     <a class="bbutton" href="{{ route('news.single', ['id'=>$new->id]) }}" title="">Read More <i class="la la-long-arrow-right"></i></a>
                   </div>
                 </div><!-- Blog Post -->

                 @endforeach 
                 
                {{-- <div class="pagination">
                  <ul>
                    <li class="prev"><a href=""><i class="la la-long-arrow-left"></i> Prev</a></li>
                    <li><a href="">1</a></li>
                    <li class="active"><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><span class="delimeter">...</span></li>
                    <li><a href="">14</a></li>
                    <li class="next"><a href="">Next <i class="la la-long-arrow-right"></i></a></li>
                  </ul>
                </div> --}}
                <!-- Pagination -->
               </div>
            </div>
            <aside class="col-lg-3 column">
              
                <div class="widget">
                  <h3>Categories</h3>
                  <div class="sidebar-links">
                    @foreach ($category as $cat)                 
                  <a href="{{ route('news.category',['id'=>$cat->id]) }}" title="">
                      <i class="la la-angle-right"></i>{{$cat->name}}</a>
                    @endforeach
                  </div>
                </div>
                <div class="widget">
                  <h3>Recent Posts</h3>
                  <div class="post_widget">
 
                   @foreach ($news as $new)
                       
                   
                    <div class="mini-blog">
                    <span><a href="{{ route('news.single', ['id'=>$new->id]) }}" title="">
                      <img src="{{ asset($new->image_feature) }}" alt="" /></a></span>
                      <div class="mb-info">
                        <h3><a href="{{ route('news.single', ['id'=>$new->id]) }}" title="">
                       {{ $new->title }}   
                       </a></h3>
                     <span>{{ $new->created_at->diffForHumans() }}</span>
                      </div>
                    </div>
 
                   @endforeach
 
                   
                  </div>
                </div>
                
                {{-- <div class="widget">
                  <h3>Tags</h3>
                  <div class="tags_widget">
                    <a href="#" title="">Adwords</a>
                    <a href="#" title="">Sales</a>
                    <a href="#" title="">Travel</a>
                    <a href="#" title="">Our Blog</a>
                    <a href="#" title="">Trade</a>
                    <a href="#" title="">Traffic</a>
                  </div>
                </div> --}}
             </aside>
           </div>
        </div>
      </div>
    </section>




@endsection