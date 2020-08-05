@extends('layouts.master')
@section('title')
    {{$course->name}}
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
                        <h1>Our Courses</h1>
                    </div>
                    <div class="wm-breadcrumb">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Courses</li>
                            <li>{{$course->name}}</li>
                        </ul>
                        @auth
                            @if(auth()->user()->role == "doctor" && auth()->id() == $course->doctor_id)
                                <ul style="display: block">
{{--                                    @if(is_null($doc1))--}}
                                        <li><a style="color: white;" href="/course/evaluation/{{$course->id}}/1">Doc1</a></li>
{{--                                    @endif--}}
{{--                                    @if(is_null($doc2))--}}
                                        <li><a style="color: white;" href="/course/evaluation/{{$course->id}}/2">Doc2</a></li>
{{--                                    @endif--}}
{{--                                    @if(is_null($doc3))--}}
                                        <li><a style="color: white;" href="/course/evaluation/{{$course->id}}/3">Doc3</a></li>
{{--                                    @endif--}}
                                </ul>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Mini Header \\-->
@endsection
@section('content')
    <!--// Main Content \\-->
    <div class="wm-main-content">

        <!--// Main Section \\-->
        <div class="wm-main-section">
            <div class="container">
                <div class="row">
                    <aside class="col-md-3">
                        <div class="widget widget_course-price">
                            <ul>
                                <li><a href="#"><i class=" wmicon-social7"></i>{{$course->students_count}} Students</a></li>
                                <li><a href="#"><i class=" wmicon-clock2"></i><time datetime="2017-02-14">Duration: {{$course->duration}}</time></a></li>
                                <li><a href="#"><i class=" wmicon-book2"></i>{{$course->lectures_count}} Lectures</a></li>
                                <li><a href="#"><i class=" wmicon-location"></i>Campus {{$course->level}}</a></li>
                                <li><a href="#">
                                        <div class="wm-levelrating">
                                            <span class="rating-box" style="width:70%"></span>
                                        </div>
                                        Intermediate</a></li>
                                <li><a href="#"><i class=" wmicon-technology"></i>{{$course->language}} Language</a></li>
                                @auth
                                    @if($course->doctor_id == auth()->id())

                                        <li class="active">
                                            <a href="/course/evaluation/{{$course->id}}/1" target="blank">
                                                <i class=" wmicon-pen"></i>
                                                Doc1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/course/evaluation/{{$course->id}}/2" target="blank">
                                                <i class=" wmicon-pen"></i>
                                                Doc2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/course/evaluation/{{$course->id}}/3" target="blank">
                                                <i class=" wmicon-pen"></i>
                                                Doc3
                                            </a>
                                        </li>
                                    @endif
                                @endauth
                            </ul>
                        </div>

                    </aside>
                    <div class="col-md-9">
                        <div class="wm-blog-single wm-courses">
                            <figure class="wm-detail-thumb">
                                <img src="{{$course->image}}" alt="" style="height: 430px;">
                            </figure>
                            <div class="wm-blog-author wm-ourcourses">
                                <div class="wm-blogauthor-left">
                                    <img src="{{$course->image}}" alt="" style="width: 63px;height: 65px;">
                                    <a class="wm-authorpost" href="#">{{$course->doctor->name}}</a>
                                </div>
                                <div class="wm-our-courses">
                                    <ul>
                                        <li>
                                            <a style="cursor: none;"><i class="wmicon-tool2"></i>{{$course->viewers}} Viewers</a>
                                        </li>
                                        @if(auth()->user()->role == "student")
                                            <li>
                                                <a href="{{route('doctor.evaluation',['id' => $course->doctor_id])}}"><i class="wmicon-pen"></i>Add Rate To Doctor</a>
                                            </li>
                                            <li>
                                                <a href="/course/evaluation/question/{{$course->id}}"><i class="wmicon-pen"></i>Add Rate To Course</a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="wm-courses-reviewes">
                            <div class="wm-ourcourses-left">
                                <h6>Reviews</h6>
                                <div class="wm-rating">
                                    <span class="rating-box" style="width:100%"></span>
                                </div>
                                <a href="#">{{number_format($course->rate(),1)}} Reviews</a>
                            </div>
                            <div class="wm-ourcourses-right">
                                <a class="wm-previous-icon" href="{{$course->id -1 }}"><i class="fa fa-angle-left" ></i>previous Course</a>
                                <a class="wm-Next-icon" href="{{$course->id +1 }}">Next Course<i class="fa fa-angle-right" ></i></a>
                            </div>
                        </div>
                        <div class="wm-our-course-detail">
                            <div class="wm-title-full">
                                <h2>Course Contents</h2>
                            </div>
                            <p class="wm-text">{{$course->description}}</p>
                            <!-- #tab4 -->
                        </div>
                        <!-- .tab_container -->
                    </div>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                    <div class="wm-title-full">
                        <h2>Related Courses</h2>
                    </div>
                    <div class="wm-courses wm-courses-popular">
                        <ul class="row">
                            @forelse($relatedCourses as $relatedCourse)
                                <li class="col-md-4">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="#"><img src="{{$relatedCourse->image}}" style="height: 207px;" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                        <figcaption>
                                            <img src="{{$relatedCourse->doctor->image}}" alt="" style="width: 44px;height: 56px">
                                            <h6><a href="#">{{$relatedCourse->doctor->name}}</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="/course/{{$relatedCourse->id}}">{{$relatedCourse->name}}</a></h6>


                                    </div>
                                </div>
                            </li>
                            @empty
                                <p style="text-align: center">No available related courses yet</p>
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
