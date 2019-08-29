{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}

@extends('layouts.app')
@section('content')
    @include('inc.search')
    <div class="container" style="margin-top: 2em">
        <div class="row">
            @include('pages.find-by-sidebar')

            {{--Listing job in the right side--}}

            <div class="col-md-9 col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading text-center" style="font-size: 18px; ;color: #8d9193 ">Browse Jobs by company</div>
                    <div class="row" style="margin-top: 20px; margin-right: 20px; margin-left: 20px">
                        @if(count($company))
                            @foreach($company as $companies)
                                <div class="col-md-6"  style="padding-top: -30px">
                                    <div class="bs-component" >

                                        <ul class="list-group" style="width:100%; height:70px">
                                            <a href="{{ route('jobByIndustry', ['id'=>$companies->id]) }}">
                                                <li class="list-group-item" style="font-size: 16px; padding-bottom: 15px; padding-top: 15px">
                                                    <img src="{{ asset($companies->logo) }} " alt="" style=" max-width: 30px; max-height: 100% " >
                                                    <span>
                                                        {{ $companies->companyName }}
                                                    </span>
                                                    
                                                    {{-- <span class="badge">
                                                        {{ $companies->job->count() }}
                                                    </span> --}}
                                                    
                                                </li>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach

                        @endif

                        
                    </div>
                    <div class="text-right">
                        {!! $company->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
