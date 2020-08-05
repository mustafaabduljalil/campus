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
                        <h1>{{$user->name}}</h1>
                    </div>
                    <div class="wm-breadcrumb">
                        <ul>
                            <li><a href="/">Home</a></li>
{{--                            <!-- <li><a href="index.html">Courses</a></li>-->--}}
{{--                            <li>Evaluate</li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Mini Header \\-->
@endsection
@section('content')
    <div class="wm-main-section">
        <div class="container">

            <!--Courses-->
            <div class="row">
                <div class="col-md-12">
                    <div class="wm-filter-box">
                        <div class="wm-apply-select">
                            <h2>Course</h2>
                        </div>
                    </div>
                    <div class="wm-courses wm-courses-popular">
                        <ul class="row">
                            @forelse($user->courses as $course)
                                <li class="col-md-4">
                                    <div class="wm-courses-popular-wrap">
                                        <figure> <a href="/course/{{$course->id}}"><img src="{{isset($course->image) ? $course->image : 'extra-images/papular-courses-1.jpg'}}" alt="" style="height: 250px"> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                            <figcaption>
                                                <img src="{{isset($course->doctor->image) ? $course->doctor->image : 'extra-images/papular-courses-thumb-1.jpg'}}" style="max-width: 65px;" alt="">
                                                <h6><a href="/course/{{$course->id}}">{{$course->doctor->name}}</a></h6>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-popular-courses-text">
                                            <h6><a href="/course/{{$course->id}}">{{$course->name}}</a></h6>

                                        </div>
                                    </div>
                                </li>
                            @empty
                                <h5 style="text-align: center">No courses assigned yet</h5>
                            @endforelse
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Doctors-->
            <div class="row">
                <div class="col-md-12">
                    <div class="wm-filter-box">
                        <div class="wm-apply-select">
                            <h2>Doctor</h2>
                        </div>
                    </div>

                    <div class="wm-courses wm-courses-popular">
                        <ul class="row">
                            <!-- (1)-->
                            @forelse($doctors as $doctor)
                            <li class="col-md-4">
                                <div class="wm-courses-popular-wrap">
                                    <figure>
                                        <a href="Doctor-evaluation.html"><img src="{{$doctor->image}}" alt="">
                                        </a>
                                        <figcaption>
                                            <h6><a href="Doctor-evaluation.html">{{$doctor->name}}</a></h6>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            @empty
                                <h5 style="text-align: center">No doctor assigned yet</h5>
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
