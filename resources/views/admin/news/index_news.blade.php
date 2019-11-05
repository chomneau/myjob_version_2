@extends('admin.admin-layout.main')

@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>ALL News <small>all news and resources</small></h3>
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
                            <h2> <a href="{{ route('admin.createNews.form', ['id'=>auth()->user()->id] ) }}" class="btn btn-primary btn-sm">Post News</a> </h2>
                            
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">



                            <!-- start project list -->
                            <table class="table table-striped projects">
                                <thead>
                                <tr>
                                    <th style="width: 1%">#</th>
                                    <th style="width: 10%">image feature</th>
                                    <th style="width: 40%">Title</th>
                                    <th>category</th>
                                    <th>Post Date</th>
                                    
                                    <th style="width: 20%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($news))
                                    @foreach($news as $new)
                                        <tr>
                                        <td>#{{ $new->id}}</td>
                                        <td>
                                            <img src="{{ asset($new->image_feature)}}" alt="" width="90" height="70">
                                        </td>
                                            <td>
                                                <a>{{ $new->title }}</a>
                                                <br />
                                                <small>posted  {{ $new->created_at->diffForHumans() }}</small>
                                            </td>
                                            <td>
                                                

                                                @if(count($newsCategory))
                                                    @foreach($newsCategory as $newsCategories)
                                                        
                                                        @if($new->category_id  == $newsCategories->id)
                                                            {{ $newsCategories->name }}
                                                        @endif
                                                        
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td class="project_progress">
                                                {{ $new->created_at }}
                                            </td>
                                            
                                            <td>
                                                <a href="{{ route('admin.news.single', ['id'=>$new->id] ) }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                                                <a href="{{ route('admin.editNews', ['id'=>$new->id]) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                            <!-- end project list -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->


@endsection