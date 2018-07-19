
@extends('layouts.app')

@section('content')
@include('user.headBlank')
<div class="container" style="margin-top: 1em">
    <div class="row">
        <div class="col-md-3 pull-left">
            @include('user.userSidebar')
        </div>
        {{--@include('inc.message')--}}
        <div class="col-md-9 pull-right">
            {{--start show--}}
            <div class="well bs-component">
                {{--<form class="form-horizontal" action="home/profile" method="post">--}}

                {!! Form::open( ['action' => 'ProfileController@store', 'class'=>'form-horizontal']) !!}
                <fieldset>
                    <legend>MY PROFILE</legend>

                        <div class="row">
                            {{--Left side--}}
                            <div class="col-md-4 col-sm-12">
                                <div class="panel-body" >
                                    <ul id="item-list-display">

                                        <li style="font-size: 22px">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                {{ $user->profile->first_name }} {{ $user->profile->last_name }}
                                        </li>
                                        <li class="list-style">
                                                Sex : <span style="padding-left: 10px">{{ $user->profile->sex }}</span>
                                        </li>
                                        <li class="item-list" >
                                                DOB : <span style="padding-left: 6px">{{ date('M j, Y', strtotime($user->profile->date_of_birth)) }}</span>

                                                ({{ floor((time() - strtotime($user->profile->date_of_birth)) / 31556926) }} years old)
                                        </li>
                                        <li class="item-list" >
                                            Nationality :  {{$user->profile->nationality}}
                                        </li>

                                    </ul>
                                </div>

                            </div>
                            <div class="col-md-2 col-sm-12"></div>
                            {{--Right side--}}
                            <div class="col-md-4 col-sm-12">
                                <div class="panel-body" >
                                    <ul id="item-list-display" style="padding-left: 5px; width:350px ">

                                        <li style="font-size: 22px">
                                            <i class="fa fa-address-book-o" aria-hidden="true"></i>
                                            Contact
                                        </li>
                                        <li>
                                            <i class="fa fa-mobile fa-lg" aria-hidden="true"></i>
                                            <span style="padding-left: 13px">{{$user->profile->phone}}</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <span style="padding-left: 10px">{{$user->email}}</span>

                                        </li>
                                        <li>
                                            <i class="fa fa-address-book-o" aria-hidden="true"></i>
                                            <span style="padding-left: 10px">{{$user->profile->address}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>


                </fieldset>

                    <legend>CAREER EXPECTATION</legend>

                        <div class="row">
                            {{--Left side--}}
                            <div class="col-lg-4 col-sm-12">
                                <div class="panel-body" >
                                    <ul id="item-list-display">

                                        <li class="list-style">
                                            Position : <span style="padding-left: 10px;color: #00b3ee">{{ $user->profile->position }}</span>
                                        </li>
                                        <li class="item-list" >
                                            Expected Salary : <span style="padding-left: 10px;color: #00b3ee">{{ $user->profile->expected_salary }}</span>
                                        </li>

                                    </ul>
                                </div>

                            </div>
                            <div class="col-md-2 col-sm-12"></div>
                            {{--Right side--}}
                            <div class="col-lg-4 col-sm-12">
                                <div class="panel-body" >
                                    <ul id="item-list-display" style="padding-left: 5px; ">
                                        <li>
                                           Location : <span style="padding-left: 13px; color: #00b3ee">
                                            @if(count($location))
                                                @foreach($location as $locations)
                                                    @if(Auth::user()->profile->location_id  == $locations->id)
                                                        {{ $locations->name }}
                                                    @endif

                                                @endforeach
                                            @endif
                                            </span>
                                        </li>
                                        <li>
                                            Experience : <span style="padding-left: 10px;color: #00b3ee">{{$user->profile->experience}}</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>


                {{--CV and COVER LETER--}}
                <fieldset>
                <legend>RESUME AND COVER LETTER</legend>
                <div class="row">
                    <table class="table table-sm">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>CV name</th>
                            <th>upload date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($uploadCv))
                            @foreach($uploadCv as $uploadCvs)
                                <tr>
                                    <td>#</td>
                                    <td>{{ substr($uploadCvs->name,0, 50) }}</td>
                                    <td>{{ $uploadCvs->created_at->format('j-M-Y , g:ia') }}</td>
                                    <td>
                                        <a href="{{ route('user.cv.delete', ['id'=>$uploadCvs->id]) }}" alt="delete">
                                            <span class="badge badge-danger badge-md">Delete</span>

                                        </a>

                                        <a href="{{ asset('uploads/cv/'.$uploadCvs->name) }}" target="_blank">
                                            <span class="badge badge-success ">download</span>
                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    {{--end table--}}
                    </div>

                </fieldset>
            </div>


            {{--@component('components.who')--}}
            {{--@endcomponent--}}
            {{--end show--}}
        </div>
        {{--@include('inc.logoSlider')--}}
    </div>
</div>



@endsection
