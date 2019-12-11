{{-- @extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 10em">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #1CE1E8">User Login</div>
                <div class="space"></div>
                <div class="panel-body" style="margin-top: 2em" >
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btnSubmit">
                                    <strong><i class="fa fa-lock" aria-hidden="true"></i></strong>
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


 --}}

 @extends('frontend.layout.main-template-non-home')
@section('content')

<section>
  <div class="block no-padding " style="background-color:#D4FCFA">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner2">
            <div class="inner-title2">
              <h3>Job Seeker Login</h3>
              
            </div>
            <div class="page-breacrumbs">
              <ul class="breadcrumbs">
                <li><a href="/" title="">Home</a></li>
              <li><a href="{{ route('about-paysjob') }}" title="">Job Seeker Login</a></li>
                
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
        <img src="{{ asset('../images/login-seeker.svg') }}" alt="" width="80%" style="margin-left:20%; margin-top:5%; margin-bottom:5%">
    </div>
    <div class="col-12 col-md-6">
            <section>
                    <div class="block remove-bottom">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="account-popup-area signin-popup-box static">
                              <div class="account-popup">
                                <h3 style="color:cadetblue">Welcome Back!</h3>
                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    @if ($errors->has('email'))
                                        <div class="text-danger text-left" style="margin-top:-10px">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </div>
                                    @endif

                                    @if ($message = Session::get('message'))
                                    <div class="alert alert-danger">
                                        
                                            <strong>{{ $message }}</strong>
                                    </div>
                                    @endif


                                  <div class="cfield form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                  <input type="email" name="email" value="{{ old('email') }}"  required autofocus placeholder="Email"  />
                                    <i class="la la-user"></i>                                   
                                  </div>

                                    
                                    @if ($errors->has('password'))
                                    <div class="text-danger text-left">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                                  <div class="cfield">
                                    <input type="password" name="password" placeholder="********" required />
                                    <i class="la la-key"></i>
                                  </div>
                                  


                                  
                                  <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                  </a>
                                  <button style="background-color:#FFFFFF; border:2px solid aqua; color:cadetblue" type="submit">Login</button>
                                </form>
                                <div class="extra-login">
                                  <span>Create Account</span>
                                    <ul style="margin-top:20px">
                                        <li>
                                            <a href="{{ route('register') }}" title="" class="text-primary">
                                                    <i class="fa fa-address-arrow-o" aria-hidden="true"></i>
                                                    <u>Create an Account  </u> 
                                            </a>
                                        </li>
                                    </ul>
                                      
                                        
                                  
                                    
                                    
                                  
                                  
                                </div>
                              </div>
                            </div><!-- LOGIN POPUP -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
    </div>
</div>


@endsection
