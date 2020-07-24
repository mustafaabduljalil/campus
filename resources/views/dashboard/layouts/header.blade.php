
<header class="main-header">
  <!-- Logo -->
  <a href="/" class="logo" style="background-color: #fff;">
    <!-- mini logo for sidebar mini 50x50 pixels -->
  <b class="logo-mini">
	  <span class="light-logo"><img src="{{asset('images/logo-1.png')}}" alt="logo"></span>
	  <span class="dark-logo"><img src="{{asset('images/logo-1.png')}}" alt="logo"></span>
  </b>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg" style="background-color: #fff;">
	  <img src="{{asset('images/logo-1.png')}}" alt="logo" class="light-logo">
  	  <img src="{{asset('images/logo-1.png')}}" alt="logo" class="dark-logo">
  </span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

	  <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{Auth::user()->image}}" class="user-image rounded-circle" alt="User Image">
          </a>
          <ul class="dropdown-menu scale-up">
            <!-- User image -->
            <li class="user-header">
              <img src="{{Auth::user()->image}}" class="float-right rounded-circle" alt="User Image">

              <p>
                  {{Auth::user()->name}}
                <small class="mb-5">{{Auth::user()->email}}</small>
{{--                <a href="#" class="btn btn-danger btn-sm btn-rounded">View Profile</a>--}}
              </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
              <div class="row no-gutters">
{{--                <div class="col-12 text-right">--}}
{{--                  <a href="#"><i class="ion ion-person"></i> My Profile</a>--}}
{{--                </div>--}}
{{--                <div class="col-12 text-right">--}}
{{--                  <a href="#"><i class="ion ion-email-unread"></i> Inbox</a>--}}
{{--                </div>--}}
{{--                <div class="col-12 text-right">--}}
{{--                  <a href="#"><i class="ion ion-settings"></i> Setting</a>--}}
{{--                </div>--}}
{{--			<div role="separator" class="divider col-12"></div>--}}
{{--			  <div class="col-12 text-right">--}}
{{--                  <a href="#"><i class="fa fa-cog"></i> Account Setting</a>--}}
{{--                </div>--}}
			<div role="separator" class="divider col-12"></div>
			  <div class="col-12 text-right">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </div>
              </div>
              <!-- /.row -->
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
