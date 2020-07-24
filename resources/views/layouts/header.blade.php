<!--// Main Wrapper \\-->
<div class="wm-main-wrapper">

    <!--// Header \\-->
    <header id="wm-header" class="wm-header-two">

        <!--// TopStrip \\-->
        <div class="wm-topstrip">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="wm-stripinfo">
                            <li><i class="wmicon-location"></i>29 Ismailia Desert Rd, Al Shorouk, Cairo Governorate</li>
                            <li><i class="wmicon-technology4"></i>02-24772248</li>
                            <li><i class="wmicon-clock2"></i> sunday - thursday: 9:00am - 4:30pm</li>
                        </ul>
                        <div class="wm-right-section">
                            <ul class="wm-login-section">
                                @auth
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
                                        <br>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item logout" href="{{ route('profile') }}">
                                                {{ __('profile') }}
                                            </a>
                                            <a class="dropdown-item logout" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endauth
                                @guest
                                    <li><a href="#" data-toggle="modal" data-target="#ModalLogin">Login</a></li>
                                @endguest
                                    {{--                                <li><a href="#" data-toggle="modal" data-target="#ModalLoginTwo">Login as Instructor</a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// TopStrip \\-->

        <!--// MainHeader \\-->
        <div class="wm-main-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <a href="index.html.html" class="wm-logo"><img src="images/logo-1.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!--// MainHeader \\-->

    </header>
    <!--// Header \\-->



</div>
<!--// Main Banner \\-->
