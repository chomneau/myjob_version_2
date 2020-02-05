@extends('admin.admin-layout.main')
@section('content')



<div class="right_col" role="main">
    <div class="clearfix"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    

                    
                        <div class="title">  
                            <div class="x_title">
                                <h2>{{ $news->title }} <small>
                                    
                                    <a href="{{ route('admin.editNews', ['id'=>$news->id]) }}" style="margin-right:5px">
                                        <i class="fa fa-edit text-primary"></i>
                                        Edit
                                    </a>

                                    <a href="{{route('admin.deleteNews',['id'=>$news->id])}}" onclick="return confirm('Are you sure you want to delete this item?');">
                                        <i class="fa fa-trash text-danger"></i> 
                                        Delete
                                    </a>
                                </small></h2>
                                <div class="clearfix"></div>
                            </div> 
                            
                            <div class="image">
                            <img src="{{ asset($news->image_feature) }}" alt="" width="600" height="auto">
                            </div>
                            
                            <p style="font-size:16px">{!! $news->body !!}</p>                   
                               
                        </div>

                        
                    

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection