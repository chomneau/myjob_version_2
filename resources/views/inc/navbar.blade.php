
{{--navbar-fixed-top--}}
        <div class="navbar navbar-default navbar-fixed-top ">
            <div class="container">
                <div class="navbar-header">
                    <a href="/" class="navbar-brand" style="font-size: 2em; font-family: 'Abel', sans-serif;; color: #ede3e3">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                        paysjob.com</a>
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar-main">
                    <ul class="nav navbar-nav" style="margin-left: 20%">
                        @if (Auth::guest() || Auth::guard('web')->check())
                            <li>
                                <a href="/">Home</a>
                            </li>

                            <li>
                                <a href="{{ route('findjob') }}">Find Job</a>
                            </li>


                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Training <span class="caret"></span></a>
                                <ul class="dropdown-menu" aria-labelledby="download">
                                    <li><a href="#">Training Resources</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Human Resource</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">How to Find jobs</a></li>

                                </ul>
                            </li>
                            
                        @elseif(Auth::guard('admin')->check())
                            <li>
                                <a href="../admin">Dashboard</a>
                            </li>

                            <li>
                                <a href="/findjob">Find Job</a>
                            </li>


                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Job Controller <span class="caret"></span></a>
                                <ul class="dropdown-menu" aria-labelledby="download">
                                    <li><a href="{{ route('admin.showcategory') }}">Category</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Job location</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Salary Rank</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                            <li><a href="{{ route('employer.login') }}"> For Employer </a></li>
                            <li><a href="{{ route('login') }}"><i class="fa fa-lock" aria-hidden="true"></i> Login</a></li>
                            <li><a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>

                        @elseif(Auth::guard('admin')->check())

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/home"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                                    <li class="divider"></li>
                                    <li><a href="/mycv"><i class="fa fa-user" aria-hidden="true"></i> my Cv</a></li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('home.profile') }}"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                                    <li class="divider"></li>

                                    {{--<li><a href="../home/mycv"><i class="fa fa-user" aria-hidden="true"></i> My CV</a></li>--}}
                                    {{--<li class="divider"></li>--}}

                                    {{--<li><a href="../home/applied"><i class="fa fa-user" aria-hidden="true"></i> Job applied</a></li>--}}
                                    {{--<li class="divider"></li>--}}


                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>



                </div>
            </div>
        </div>
