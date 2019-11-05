@extends('admin.admin-layout.main')
@section('content')
    
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
    tinymce.init({ selector:'textarea',
        plugins: "link",
        menu: 'disable',
        plugins: "lists",
        toolbar: "numlist bullist",
        //plugin:"advlist",
        browser_spellcheck: true,
    });
</script>
{{-- 
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>

  tinymce.init({
  selector: "textarea",  // change this value according to your HTML
 // plugins: "lists",
 // toolbar: "numlist bullist"
  plugins: "fullpage",
  plugins: "lists",
 fullpage_default_text_color: "blue",
  fullpage_default_font_size: "14px"
}); --}}


</script>




<div class="right_col" role="main">
    <div class="clearfix"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Update About <small>Setting</small></h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <form action="{{ route('about.update',['id'=>$about->id]) }}" method="post">
                            {{csrf_field()}}

                            
                                <div class="col-md-12">
                                    <div class="wizard">
                                       <div class="tab-content">
                                           <div class="tab-pane active" role="tabpanel" id="step1" style="margin-top: -25px">

                                            <div class="panel">
                                              <label for="title">Title</label>
                                              <input type="text" name="title" class="form-control" placeholder="title" value="{{$about->title}}">
                                            </div>

                                            <div class="panel">
                                              <label for="body">Body</label>
                                              <textarea name="body" id="" cols="70" rows="30">
                                                {{$about->body}}
                                              </textarea>
                                            </div>

                                           <ul class="list-inline pull-right">
                                               <li><button type="submit" class="btn btn-primary">Update now</button></li>
                                           </ul>
                                           </div>
                                       </div>
                                    </div>
                                </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection