<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>F</b>A</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Forum</b>Asisten</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">{{ trans('message.togglenav') }}</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Auth::guest() -->
                @if (1==0)
                    <li><a href="{{ url('/register') }}">{{ trans('message.register') }}</a></li>
                    <li><a href="{{ url('/login') }}">{{ trans('message.login') }}</a></li>
                @else
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="{{asset('/img/user2-160x160.jpg')}}" class="user-image" alt="User Image"/>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <!-- Auth::user()->name -->
                            <span class="hidden-xs">{{ ('Forum') }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                                <p>
                                    <!-- Auth::user()->name -->
                                    {{ ('Forum') }}
                                    <small>{{ trans('message.login') }} Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">{{ trans('message.profile') }}</a>
                                </div>
                                <div class="pull-right">
                                    <a href="@yield('logout-url')" class="btn btn-default btn-flat">{{ trans('message.signout') }}</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</header>
