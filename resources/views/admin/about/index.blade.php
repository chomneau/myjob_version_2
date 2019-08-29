@extends('admin.admin-layout.main')
@section('content')
    
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
    tinymce.init({ selector:'textarea',
        plugins: "link",
       // menu: 'disable',
        plugins: "lists",
        toolbar: "numlist bullist",
        //plugin:"advlist",
        browser_spellcheck: true,
    });
</script>


<div class="right_col" role="main">
    <div class="clearfix"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>About <small>Setting</small></h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="title">
                      
                      <h3>{{ $about->title }}</h3>
                      <p style="font-size:16px">{!! $about->body !!}</p>

                      
                        <a href="{{route('about.edit',['id'=>$about->id])}}">
                        <button class="btn btn-primary">                        
                          Edit
                        </button>
                        </a>
                        
                      
                    </div>

                    <!-- <div class="row">
                      <div class="col-md-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, fugit dicta, repudiandae alias sequi aperiam tenetur modi rem sunt eius ex quidem, inventore quam. Assumenda laboriosam doloremque accusamus ipsum qui.
                      </div>
                      <div class="col-md-4">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae eveniet dicta minima voluptatem placeat tempore voluptates optio, quos nihil ratione doloremque deserunt. Culpa voluptatem voluptas, incidunt asperiores deleniti esse rerum!
                      </div>
                      <div class="col-md-4 display-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quas, libero accusantium id fugit iure natus dolorum aliquid magnam voluptate magni voluptatum. Suscipit recusandae non labore architecto reprehenderit explicabo cum!
                      </div>
                    </div> -->

                  



                    <div class="x_content">
                        <form action="{{ route('about.update',['id'=>$about->id]) }}" method="post">
                            {{csrf_field()}}

                            <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <div class="wizard">
                                       <div class="tab-content">
                                           <div class="tab-pane active" role="tabpanel" id="step1" style="margin-top: -25px">

                                            <div class="panel">
                                              <label for="title">Title</label>
                                              <input type="text" name="title" class="form-control" placeholder="title" value="{{$about->title}}">
                                            </div>

                                            <div class="panel">
                                              <label for="body">Body</label>
                                              <textarea name="body" id="" cols="70" rows="60">
                                                {{$about->body}}
                                              </textarea>
                                            </div>

                                           

                                           
                                               
                                               
                                               <ul class="list-inline pull-right">
                                                   <li><button type="submit" class="btn btn-primary">Post now</button></li>
                                               </ul>
                                           </div>
                                       </div>
                                    </div>
                                </div>
                            <div class="col-md-1"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection