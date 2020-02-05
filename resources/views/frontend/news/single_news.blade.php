@extends('frontend.layout.main-template-non-home')
@section('content')

<section>
    <div class="block no-padding  gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner2">
              <div class="inner-title2" style="padding:30px ">
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
               <div class="blog-single">
                 <div class="bs-thumb">
                 <img src=" {{ asset($single_news->image_feature) }} " alt="" /></div>
                 <ul class="post-metas">
                   <li><a href="#" title="" class=" metascomment">
                     <i class="la la-calendar-o text-primary"></i>
                     {{  $single_news->created_at->diffForHumans()}}
                    </a>
                  </li>
                  {{-- <li>
                    <a class="metascomment" href="#" title="">
                      <i class="la la-comments"></i>
                      4 comments
                    </a>
                  </li> --}}
                  <li>
                      <a class="metascomment " href="#" title="">
                          <i class="la la-tag text-primary"></i>
                          @foreach ($newsCategory as $cat)
                              @if($single_news->category_id == $cat->id)
                                {{ $cat->name  }}
                              @endif
                          @endforeach
                          
                        </a>
                      </li>
                    </ul>
                 <h2>
                    {!! $single_news->title !!}
                 </h2>
                 <p style="font-size:18px !importance">{!! $single_news->body !!} </p>
                 
                 <div class="tags-share">
                     {{-- <div class="tags_widget">
                       <span>Tags</span>
                       <a href="#" title="">Adwords</a>
                       <a href="#" title="">Sales</a>
                       <a href="#" title="">Travel</a>
                     </div> --}}
                   <div class="share-bar">
                     <a href="#" title="" class="share-fb"><i class="fa fa-facebook"></i></a><a href="#" title="" class="share-twitter"><i class="fa fa-twitter"></i></a><a href="#" title="" class="share-google"><i class="la la-google"></i></a><span>Share</span>
                   </div>
                 </div>
                 
                 
                 
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