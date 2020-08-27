@extends('frontend.layout.main-template-non-home')
@section('content')



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container mb-5">
    	<div class="row">
    		<div class="col-md-3">
    		    <img src="https://scocre.com/assets/img/forgot.png" class="img-fluid" alt="">
            </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
    		<div class="col-md-9" style="padding-top:100px">
    		    <h2 class="font-weight-light">Forgot your password?</h2>
    		    Not to worry. Just enter your email address below and we'll send you an the link to reset password to your email.
                <form method="POST" action="{{ route('password.email') }}">
                @csrf
                    <input type="email" class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Your email address" required>
                   
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
    		        
    		        <button type="submit" class="btn btn-primary">
                        {{ __('Send Password Reset Link') }}
                    </button>
    		    </form>
    		</div>
    	</div>
    </div>
    @endsection