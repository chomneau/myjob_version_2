{{-- @extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 10em">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" >
                <div class="panel-heading" style="background-color: #1CE1E8" >Register</div>

                <div class="panel-body" style="margin-top: 2em">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btnSubmit">
                                   <strong><i class="fa fa-user-plus" aria-hidden="true"></i></strong>  Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}




        
        
        
@extends('frontend.layout.main-template-non-home')
@section('content')
        
        <section>
          <div class="block no-padding " style="background-color:#D4FCFA">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="inner2">
                    <div class="inner-title2">
                      <h3>Job Seeker Register</h3>
                      
                    </div>
                    <div class="page-breacrumbs">
                      <ul class="breadcrumbs">
                        <li><a href="/" title="">Home</a></li>
                      <li><a href="{{ route('register') }}" title="">Job Seeker Register</a></li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="row">
            <div class="col-12 col-md-6">
                <img src="{{ asset('../images/seeker-register.svg') }}" alt="" width="80%" style="margin-left:20%; margin-top:15%; margin-bottom:5%">
            </div>
            <div class="col-12 col-md-6">
                <section>
                    <div class="block remove-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="account-popup-area signup-popup-box static">
                                        <div class="account-popup">
                                            <h3>Sign Up</h3>
                                            <span>Lorem ipsum dolor sit amet consectetur adipiscing elit odio duis risus at lobortis ullamcorper</span>
                                            <div class="select-user">
                                                <span>Candidate</span>
                                                <span>Employer</span>
                                            </div>
                                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                                {{ csrf_field() }}
                        
                                                <div class="cfield">
                                                    <input type="text" name="name" class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" placeholder="Username" />
                                                    <i class="la la-user"></i>
                                                </div>

                                                <div class="cfield">
                                                <input type="text" name="email" value="{{ old('email') }}" required placeholder="Email" />
                                                    <i class="la la-envelope-o"></i>
                                                </div>

                                                <div class="cfield">
                                                    <input type="password" name="password"
                                                    placeholder="Password" />
                                                    <i class="la la-key"></i>
                                                </div>

                                                <div class="cfield">
                                                    <input type="password" name="password_confirmation" required placeholder="Confirm Password" />
                                                    <i class="la la-key"></i>
                                                </div>
                                                
                                                
                                                {{-- <div class="cfield">
                                                    <input type="text" placeholder="Phone Number" />
                                                    <i class="la la-phone"></i>
                                                </div> --}}

                                                <button type="submit">Signup</button>
                                            </form>
                                            <div class="extra-login">
                                                <span>Or</span>
                                                <div class="login-social">
                                                    <a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
                                                    <a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- SIGNUP POPUP -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    </div>
</div>


@endsection
