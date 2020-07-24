@extends('layouts.master')
@section('title')
    {{$user->name}}
@endsection
@section('style')
@endsection
@section('banner')
    <!--// Mini Header \\-->
    <div class="wm-mini-header">
        <span class="wm-blue-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wm-mini-title">
                        <h1>DR.{{$user->name}}</h1>
                    </div>
                    <div class="wm-breadcrumb">
                        <ul>
                            <li><a href="/">Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Mini Header \\-->
@endsection
@section('content')
    <!--// Main Section \\-->
    <div class="wm-main-section">
        <div class="container">


            <div class="row">

                <aside class="col-md-3">
                    <div class="widget widget_our-professors">
                        <figure>
                            <a href="#"><img src="{{$user->image}}" alt=""></a>
                            <figcaption>
                                <a href="#">{{$user->name}}</a>
                                <span>{{$user->specialization}}</span>
                            </figcaption>
                        </figure>
{{--                        <ul>--}}
{{--                            <li><a href="#"><i class="wmicon-social5" aria-hidden="true"></i></a></li>--}}
{{--                            <li><a href="#"><i class="wmicon-social4" aria-hidden="true"></i></a></li>--}}
{{--                            <li><a href="#"><i class="wmicon-logo" aria-hidden="true"></i></a></li>--}}
{{--                        </ul>--}}
                </aside>

                <div class="col-md-9">
                    <div class="wm-courses wm-courses-popular">
                        <ul class="row">
                            @forelse($user->doctorCourses as $course)
                                <li class="col-md-4">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="{{$course->image}}" alt="" style="height: 226px;"></a>
                                        <figcaption>
                                            <img src="{{$user->image}}" alt="" style="width: 40px;height: 46px;">
                                            <h6><a href="">{{$user->name}}</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="/course/{{$course->id}}">{{$course->name}}</a></h6>

                                    </div>
                                </div>
                            </li>
                            @empty
                                <p>{{$user->name}} hasn't courses yet</p>
                            @endforelse
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->
@endsection
@section('scripts')
@endsection
