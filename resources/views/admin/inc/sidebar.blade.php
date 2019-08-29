<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            @if(Auth::guard('admin')->check())
            <a href="/admin" class="site_title"><i class="fa fa-paw"></i> <span>Admin !</span></a>
            @elseif(Auth::guard('employer')->check())
               <a href="/employer" class="site_title">
                <span>Employer !</span></a>
            @endif
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        @if(Auth::guard('admin')->check())
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ asset('uploads/logos/1510817755img.png') }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
            </div>
        </div>


        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>ADMIN PANEL</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/admin">Dashboard</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-th-large"></i> Job Dashboard <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('company.index') }}">View all Companies</a></li>
                            <li><a href="{{ route('company.create') }}">Create new Company</a></li>
                            {{--<li><a href="{{ route('createjob.index') }}">View all post jobs</a></li>--}}

                        </ul>
                    </li>
                    <li><a><i class="fa fa-user"></i> Users <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.showUsers') }}">View all User</a></li>
                            <li><a href="{{ route('admin.register') }}">Create new User</a></li>
                            {{--<li><a href="{{ route('createjob.index') }}">View all post jobs</a></li>--}}

                        </ul>
                    </li>
                    <!-- all job seeker -->
                    <li><a href="{{ route('admin.jobseeker') }}">
                        <i class="fa fa-users" aria-hidden="true"></i> 
                        Job Seeker <span class="fa fa-chevron-down"></span></a>
                        
                    </li>



                    <li><a><i class="fa fa-sliders"></i> Setting <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="{{ route('category.index') }}">Job Categories
                                </a>
                            </li>
                            <li>
                                <a href=" {{ route('industry.index') }}">
                                    Job Industry type
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('location.index') }}">
                                    Job Location
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('employeeSize.index') }}">
                                    Employee Size
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('companyType.index') }}">
                                    Company type
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('salaryRange.index') }}">
                                    Salary Range
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contractType.index') }}">
                                    Job Contract type
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('degree.index') }}">
                                    Preferred degree
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('preferredLevel.index') }}">Preferred level
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('preExperience.index') }}">
                                    Preferred Experience
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.index') }}">
                                    About
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{--<li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>--}}
                        {{--<ul class="nav child_menu">--}}
                            {{--<li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>--}}
                            {{--<li><a href="fixed_footer.html">Fixed Footer</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}


                </ul>
            </div>
        </div>



    @elseif(Auth::guard('employer')->check())

            <div class="profile clearfix">
                <div class="profile_pic">
                    <img src="{{ asset(Auth::user()->company->logo) }}" alt="..." class="img-circle profile_img" >
                </div>
                <div class="profile_info">
                    <span>Welcome,</span>
                    <h2>{{ Auth::user()->name }}</h2>
                </div>
            </div>


        <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <h3>General</h3>
                    <ul class="nav side-menu">
                        <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="/employer">Company profile</a></li>
                                {{--<li><a href="/employer">About Company</a></li>--}}
                            </ul>
                        </li>

                        




                        <li><a><i class="fa fa-bookmark" aria-hidden="true"></i> Your Note <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="fixed_sidebar.html">Your note</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>



            </div>

    @endif
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a href="{{ route('logout') }}"
               data-toggle="tooltip" data-placement="top" title="Logout"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">


                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>