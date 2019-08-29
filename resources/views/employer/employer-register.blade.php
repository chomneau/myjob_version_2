@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 10em">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" >
                <div class="panel-heading text-center" style="background-color: #1CE1E8; font-size: 16px" >Employer Form Register </div>

                <div class="panel-body" style="margin-top: 2em">
                    <form class="form-horizontal" method="POST" action="{{ route('employer.register.submit') }}">
                        {{ csrf_field() }}

                        

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address <super>*</super></label>

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
                            <label for="password" class="col-md-4 control-label">Password<super>*</super></label>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password <super>*</super></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <hr width="70%" class="align-center">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Company/NGO Name<super>*</super></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Contact Person<super>*</super></label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="contactPerson" value="{{ old('contactPerson') }}" required autofocus>
                            </div>

                            @if ($errors->has('contactPerson'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('contactPerson') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Telephone <super>*</super></label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>
                            </div>

                             @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>


                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Type<super>*</super></label>

                            <div class="col-md-6">
                                <select name="companyType" id="" class="form-control" required>

                                @if(count($companyType))
                                    @foreach($companyType as $Types)
                                      <option value="{{ $Types->id }}"
                                      
                                      >{{ $Types->name }}</option>
                                    @endforeach
                                @endif

                            </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Address<super>*</super></label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>
                            </div>

                             @if ($errors->has('address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        



                        <div class="form-group" style="margin-bottom: 5em">
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
@endsection
