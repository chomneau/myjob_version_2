@extends('admin.admin-layout.main')
@section('content')


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Inbox Design<small>User Mail</small></h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
              <div class="col-sm-3 mail_list_column">
                {{-- <button id="compose" class="btn btn-sm btn-success btn-block" type="button">COMPOSE</button> --}}

                @foreach ($contacts as $contact)
              <a href="{{ route('admin.contact.detail', ['id'=>$contact->id]) }}">
                    <div class="mail_list">
                      <div class="left">
                        <i class="fa fa-circle"></i> 
                      </div>
                      <div class="right">
                        <h3>{{ $contact->name}} <small>{{ $contact->created_at->format('M j, Y')}}</small></h3>
                        
                      <p style="color:darkgray"><strong>{{ $contact->title }}</strong></p>
                      </div>
                    </div>
                  </a>
                @endforeach
                
                
              </div>
              <!-- /MAIL LIST -->

              <!-- CONTENT MAIL -->
              <div class="col-sm-9 mail_view">
                <div class="inbox-body">
                  <div class="mail_heading row">
                    <div class="col-md-8">
                      {{-- <div class="btn-group">
                        <button class="btn btn-sm btn-primary" type="button"><i class="fa fa-reply"></i> Reply</button>
                        <button class="btn btn-sm btn-default" type="button"  data-placement="top" data-toggle="tooltip" data-original-title="Forward"><i class="fa fa-share"></i></button>
                        <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Print"><i class="fa fa-print"></i></button>
                        <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Trash"><i class="fa fa-trash-o"></i></button>
                      </div> --}}
                    </div>
                    <div class="col-md-4 text-right">
                      <p class="date"> 00:00 PM 12 Month Year</p>
                    </div>
                    <div class="col-md-12">
                      <h4> Sample Title</h4>
                    </div>
                  </div>
                  <div class="sender-info">
                    <div class="row">
                      <div class="col-md-12">
                        <strong>Sample Name</strong>
                        <span>(sample@gmail.com)</span> to
                        <strong>me</strong>
                        <a class="sender-dropdown"><i class="fa fa-chevron-down"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="view-mail">
                    <p>Sample Description </p>
                    
                  </div>
                  
                </div>

              </div>
              <!-- /CONTENT MAIL -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->


@endsection