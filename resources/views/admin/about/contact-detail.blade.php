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
            <h2>Contact Inbox<small>User Mail</small></h2>
            
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
                      <p class="date"> {{ $contact->created_at->format('M j, Y')}}</p>
                    </div>
                    <div class="col-md-12">
                    <h4> {{ $contactDetail->title }} 
                      <span class="pull-right" style="margin-right:10px; margin-bottom:10px">
                      <a href="{{ route('admin.contact.delete', ['id'=>$contactDetail->id])}}" class="btn btn-danger outline btn-sm">
                          <i class="fa fa-trash"></i> 
                          Delete
                        </a>
                      </span>
                    </h4>
                    </div>
                  </div>
                  <div class="sender-info">
                    <div class="row">
                      <div class="col-md-12">
                        <strong>{{ $contactDetail->name }}</strong>
                        <span>{{ $contactDetail->email }}</span> to
                        <strong>me</strong>
                        <a class="sender-dropdown"><i class="fa fa-chevron-down"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="view-mail" style="font-size:14px; margin-top:15px">
                    <p>{{ $contactDetail->body }} </p>
                    
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