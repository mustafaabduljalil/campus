<aside class="main-sidebar" style="height:-webkit-fill-available;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="user-profile treeview">
                <a href="{{route('doctor.index')}}">
                    <img src="{{Auth::user()->image}}" alt="user">
                    <span>{{Auth::user()->name}}</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-left"></i>
              </span>
                </a>
                <ul class="treeview-menu">
{{--                    <li><a href="javascript:void()">My Profile </a></li>--}}
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </li>
                </ul>
            </li>
            <li class="nav-devider"></li>
{{--            <li class="header nav-small-cap"></li>--}}
                <li class="active">
                    <a href="{{route('doctor.index')}}">
                        <i class="fa fa-user"></i><span>الدكاترة</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('student.index')}}">
                        <i class="fa fa-pencil"></i> <span>الطلاب</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('doctor.question.index')}}">
                        <i class="fa fa-pencil"></i><span>اسئلة تقييم الدكاترة</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('course.index')}}">
                        <i class="fa fa-pencil"></i> <span>الكورسات</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
        </ul>
    </section>
</aside>
