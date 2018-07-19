@extends('layouts.app')
   @section('content')
       @include('inc.search')
       
       {{--Recent jobs--}}
       <div class="container" style="margin-top: 1.5em" >
            <div class="row">


                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="recent_job text-center" style="margin-bottom: 1.5em; letter-spacing: 2px">
                            <h3 style="font-family: 'Anton', sans-serif">RECENT JOBS</h3>
                            <hr style="width: 20%; color: #524E4E">
                        </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="panel panel-default">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">List group item heading</h4>
                                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                </a>
                            </div>
                            <div class="panel-heading text-center"><a href="#">View Now</a> </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="panel panel-default">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">List group item heading</h4>
                                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                </a>
                            </div>
                            <div class="panel-heading text-center"><a href="#">View Now</a> </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="panel panel-default">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">List group item heading</h4>
                                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                </a>
                            </div>
                            <div class="panel-heading text-center"><a href="#">View Now</a> </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-6">
                        <div class="panel panel-default">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">List group item heading</h4>
                                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                </a>
                            </div>
                            <div class="panel-heading text-center"><a href="#">View Now</a> </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-6">
                        <div class="panel panel-default">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">List group item heading</h4>
                                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                </a>
                            </div>
                            <div class="panel-heading text-center"><a href="#">View Now</a> </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-6">
                        <div class="panel panel-default">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">List group item heading</h4>
                                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                </a>
                            </div>
                            <div class="panel-heading text-center"><a href="#">View Now</a> </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="panel panel-default">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">List group item heading</h4>
                                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                </a>
                            </div>
                            <div class="panel-heading text-center"><a href="#">View Now</a> </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="panel panel-default">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">List group item heading</h4>
                                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                </a>
                            </div>
                            <div class="panel-heading text-center"><a href="#">View Now</a> </div>
                        </div>
                    </div>
                    {{--More recent job--}}
                    </div>
                    <div class="panel-heading text-center" style="font-size: 20px"><a href="#">View more </a> </div>
                </div>


                </div>
           </div>

       {{--Job category--}}

       <div class="container" style="margin-top: 1em">
           <div class="row">
               <div class="panel panel-default">
                   <div class="panel-body">
                       <div class="recent_job text-center" style="margin-bottom: 1.5em; letter-spacing: 2px">
                           <h3 style="font-family: 'Anton', sans-serif">SEARCH MORE JOBS BY TYPE HERE</h3>
                           <hr style="width: 20%; color: #524E4E">
                       </div>
                    {{--Category--}}
                           <div class="col-lg-3">
                               <div class="bs-component">
                                   <ul class="list-group">
                                       <li class="list-group-item text-center text-uppercase" style="background-color: #F8F4F4">
                                           <a href="#"><strong>Job Categories</strong></a>
                                       </li>
                                       <li class="list-group-item">
                                           <span class="badge">14</span>
                                           Cras justo odio
                                       </li>
                                       <li class="list-group-item">
                                           <span class="badge">2</span>
                                           Dapibus ac facilisis in
                                       </li>
                                       <li class="list-group-item">
                                           <span class="badge">1</span>
                                           Morbi leo risus
                                       </li>

                                       <li class="list-group-item text-center text-uppercase" >
                                           <a href="#"><strong>View more</strong>  <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
                                       </li>
                                   </ul>
                               </div>
                           </div>

                       {{--Location--}}
                       <div class="col-lg-3">
                           <div class="bs-component">
                               <ul class="list-group">
                                   <li class="list-group-item text-center text-uppercase" style="background-color: #F8F4F4">
                                       <a href="#"><strong>Job by Locations</strong></a>
                                   </li>
                                   <li class="list-group-item">
                                       <span class="badge">14</span>
                                       Cras justo odio
                                   </li>
                                   <li class="list-group-item">
                                       <span class="badge">2</span>
                                       Dapibus ac facilisis in
                                   </li>
                                   <li class="list-group-item">
                                       <span class="badge">1</span>
                                       Morbi leo risus
                                   </li>

                                   <li class="list-group-item text-center text-uppercase" >
                                       <a href="#"><strong>View more</strong>  <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
                                   </li>
                               </ul>
                           </div>
                       </div>

                       {{--Industry--}}

                       <div class="col-lg-3">
                           <div class="bs-component">
                               <ul class="list-group">
                                   <li class="list-group-item text-center text-uppercase" style="background-color: #F8F4F4">
                                       <a href="#"><strong>Job by Industries</strong></a>
                                   </li>
                                   <li class="list-group-item">
                                       <span class="badge">14</span>
                                       Cras justo odio
                                   </li>
                                   <li class="list-group-item">
                                       <span class="badge">2</span>
                                       Dapibus ac facilisis in
                                   </li>
                                   <li class="list-group-item">
                                       <span class="badge">1</span>
                                       Morbi leo risus
                                   </li>

                                   <li class="list-group-item text-center text-uppercase" >
                                       <a href="#"><strong>View more</strong>  <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
                                   </li>
                               </ul>
                           </div>
                       </div>

                       {{--Salary--}}
                       <div class="col-lg-3">
                           <div class="bs-component">
                               <ul class="list-group">
                                   <li class="list-group-item text-center text-uppercase" style="background-color: #F8F4F4">
                                       <a href="#"><strong>Job by Salary</strong></a>
                                   </li>
                                   <li class="list-group-item">
                                       <span class="badge">14</span>
                                       Cras justo odio
                                   </li>
                                   <li class="list-group-item">
                                       <span class="badge">2</span>
                                       Dapibus ac facilisis in
                                   </li>
                                   <li class="list-group-item">
                                       <span class="badge">1</span>
                                       Morbi leo risus
                                   </li>

                                   <li class="list-group-item text-center text-uppercase" >
                                       <a href="#"><strong>View more</strong>  <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
                                   </li>

                               </ul>
                           </div>
                       </div>



                   </div>
                   <div class="panel-heading text-center" style="font-size: 20px"><a href="#">View all Jobs </a> </div>
               </div>
           </div>
       </div>


       {{--Tab for job category and location--}}
       {{--<div class="container">--}}
           {{--<div class="row">--}}
               {{--<div class="col-lg-12 col-sm-12">--}}
                   {{--<div class="card hovercard">--}}
                       {{--<div class="card-background">--}}
                           {{--<img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">--}}
                           {{--<!-- http://lorempixel.com/850/280/people/9/ -->--}}
                       {{--</div>--}}
                       {{--<div class="useravatar">--}}
                           {{--<img alt="" src="http://lorempixel.com/100/100/people/9/">--}}
                       {{--</div>--}}
                       {{--<div class="card-info"> <span class="card-title">Pamela Anderson</span>--}}

                       {{--</div>--}}
                   {{--</div>--}}
                   {{--<div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">--}}
                       {{--<div class="btn-group" role="group">--}}
                           {{--<button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>--}}
                               {{--<div class="hidden-xs">Stars</div>--}}
                           {{--</button>--}}
                       {{--</div>--}}
                       {{--<div class="btn-group" role="group">--}}
                           {{--<button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>--}}
                               {{--<div class="hidden-xs">Favorites</div>--}}
                           {{--</button>--}}
                       {{--</div>--}}
                       {{--<div class="btn-group" role="group">--}}
                           {{--<button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>--}}
                               {{--<div class="hidden-xs">Following</div>--}}
                           {{--</button>--}}
                       {{--</div>--}}

                       {{--<div class="btn-group" role="group">--}}
                           {{--<button type="button" id="following" class="btn btn-default" href="#tab4" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>--}}
                               {{--<div class="hidden-xs">Salary</div>--}}
                           {{--</button>--}}
                       {{--</div>--}}
                   {{--</div>--}}

                   {{--<div class="well">--}}
                       {{--<div class="tab-content">--}}
                           {{--<div class="tab-pane fade in active" id="tab1">--}}
                               {{--<h3>This is tab 1</h3>--}}
                           {{--</div>--}}
                           {{--<div class="tab-pane fade in" id="tab2">--}}
                               {{--<h3>This is tab 2</h3>--}}
                           {{--</div>--}}
                           {{--<div class="tab-pane fade in" id="tab3">--}}
                               {{--<h3>This is tab 3</h3>--}}
                           {{--</div>--}}

                           {{--<div class="tab-pane fade in" id="tab4">--}}
                               {{--<h3>This is tab 4</h3>--}}
                           {{--</div>--}}
                       {{--</div>--}}
                   {{--</div>--}}

               {{--</div>--}}

           {{--</div>--}}{{--end row--}}
       {{--</div>--}}{{--end containner--}}

       @include('inc.logoSlider')



   @endsection



