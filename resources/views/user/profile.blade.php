
@extends('frontend.layout.main-template-non-home')
@section('content')
    @include('user.headBlank')

    <div class="bootstrap-iso" style="margin-top: 8em">
    <div class="container" style="margin-top: 1em">
        <div class="row">
            <div class="col-md-3 pull-left">
                @include('user.userSidebar')
            </div>

            <div class="col-md-9 pull-right">
                @include('user.editprofile')
            </div>

            {{--@include('inc.logoSlider')--}}

        </div>
    </div>
</div>
@endsection






