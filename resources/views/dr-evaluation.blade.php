@extends('layouts.master')
@section('title')
    {{$doctor->name}}
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
                        <h1>{{$doctor->name}}</h1>
                    </div>
                    <div class="wm-breadcrumb">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Doctor's evaluation</li>
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
                <div class="col-md-12">
                    <div class="wm-blog-single wm-courses">
                        <figure class="wm-detail-thumb">
                            <img src="{{asset('extra-images/our-courses1.jpg')}}" alt="">
                        </figure>
                        <div class="wm-blog-author wm-ourcourses">
                            <div class="wm-blogauthor-left">
                                <img src="{{$doctor->image}}" alt="" style="width: 40px;height: 46px">
                                <a class="wm-authorpost">{{$doctor->name}}</a>
                            </div>
                            <div class="wm-our-courses">

                            </div>
                        </div>
                    </div>
                    <div class="wm-courses-reviewes">
{{--                        <div class="wm-ourcourses-left">--}}
{{--                            <h6>Reviews</h6>--}}
{{--                            <div class="wm-rating">--}}
{{--                                <span class="rating-box" style="width:100%"></span>--}}
{{--                            </div>--}}
{{--                            <a href="#">{{number_format($course->rate(),1)}} Reviews</a>--}}
{{--                        </div>--}}
                        <div class="wm-ourcourses-right">
                            <a class="wm-previous-icon" href="#"><i class="fa fa-angle-left" ></i>previous Course</a>
                            <a class="wm-Next-icon" href="#">Next Course<i class="fa fa-angle-right" ></i></a>
                        </div>
                    </div>
                    <div class="wm-our-course-detail">
                        <div class="wm-title-full">
                            <h2>{{$doctor->name}}</h2>
                        </div>

                        <div class="wm-courses-info">

                        </div>
                        <div class="wm-title-full">
                            <h2>Doctor's Evaluation</h2>
                        </div>
                        <div class="wm-faq">
                            <form action="{{route('doctor.evaluation.store')}}" method="post">
                                @csrf
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    @forelse($questions as $key => $question)
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls=" collapseOne">
                                                        {{$question->question}}
                                                    </a>
                                                </h4>
                                            </div>
                                            <input type="hidden" name="questions[]" value="{{$question->id}}">
                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    <div class="radio-wrapper">
                                                        <label>
                                                            <input type="radio" name="answers_{{$key}}" value="5" checked />
                                                            <span class="radio"></span>
                                                            <span>Strongly agree</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="answers_{{$key}}" value="4" />
                                                            <span class="radio"></span>
                                                            <span>Agree</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="answers_{{$key}}" value="2" />
                                                            <span class="radio"></span>
                                                            <span>Neutral</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="answers_{{$key}}" value="1" />
                                                            <span class="radio"></span>
                                                            <span>Disagree</span>
                                                        </label>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <p style="text-align: center">Not available questions yet</p>
                                    @endforelse
                                    @if(count($questions) > 0)
                                        <input type="submit" class="btn btn-success" value="Submit">
                                    @endif
                                </div>
                                <input type="hidden" name="doctor_id" value="{{$doctor->id}}">
{{--                                <input type="hidden" name="course_id" value="{{$course->id}}">--}}
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection
