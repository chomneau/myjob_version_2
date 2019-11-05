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

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit a news </h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> Edit a news</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">



                            <!-- start project list -->
                            <form action="{{ route('admin.updateNews',['id'=>$news->id]) }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}    
                                
                                    <div class="col-md-12">
                                        <div class="wizard">
                                           <div class="tab-content">
                                               <div class="tab-pane active" role="tabpanel" id="step1" style="margin-top: -25px">

                                                <div class="panel">
                                                    <label for="image_feature">Image Feature
                                                        
                                                    </label>
                                                    <input type="file" name="image_feature" class="form-control" placeholder="image feature" >
                                                </div>
    
                                                <div class="panel">
                                                  <label for="title">Title</label>
                                                <input type="text" name="title" value="{{ $news->title }}" class="form-control" placeholder="title" >
                                                </div>
    
                                                <div class="panel">
                                                  <label for="body">Body</label>
                                                  <textarea name="body" class="form-control" cols="120" rows="20">
                                                    {{ $news->body }}
                                                  </textarea>
                                                </div>

                                                <div class="panel">
                                                  <label for="category">Category</label>
                                                  <select name="category" class="form-control">
                                                    @if(count($newsCategory))
                                                        @foreach($newsCategory as $newsCategories)
                                                            <option value="{{ $newsCategories->id }}"
                                                                @if($news->category_id  == $newsCategories->id)
                                                                    selected
                                                                @endif
                                                                >{{ $newsCategories->name }}</option>
                                                        @endforeach
                                                    @endif
                                                  </select>
                                                </div>
    
                                               <ul class="list-inline pull-right">
                                                   <li><button type="submit" class="btn btn-primary">Update now</button></li>
                                               </ul>
                                               </div>
                                           </div>
                                        </div>
                                    </div>
                                
                            </form>
                            <!-- end project list -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->


@endsection