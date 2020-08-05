@extends('layouts.master')
@section('title')
    {{$course->name}}
@endsection
@section('style')
@endsection
@section('banner')
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
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Courses</a></li>
                            <li>Single Course</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('content')
    <form action="{{route('course.evaluation.store')}}" method="post">
        @csrf


        <div class="tabs-contain">
            <h1 class="title-tabs">Main Information</h1>
            <ul class="tabs">
                <li class="active" rel="tab0">Topic</li>
                <li rel="tab1"> Time Table</li>
                <li rel="tab2">Text book(s)</li>
                <li rel="tab3">Supplementary book(s)</li>
                <li rel="tab4">Course With Labs</li>
            </ul>
            <div class="tab_container">

                <h3 class="d_active tab_drawer_heading" rel="tab0">Tab 0</h3>
                <div id="tab0" class="tab_content">
                    <h2>Topic</h2>
                    <div class="row ro-op">
                        <div class="col-md-4">1- </div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_topic1">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>30</option>
                                <option>10</option>
                                <option>30</option>
                                <option>10</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">2- </div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_topic2">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>30</option>
                                <option>10</option>
                                <option>30</option>
                                <option>10</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">3- </div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_topic3">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>30</option>
                                <option>10</option>
                                <option>30</option>
                                <option>10</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">4- </div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_topic4">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>30</option>
                                <option>10</option>
                                <option>30</option>
                                <option>10</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>


                    <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>

                </div>

                <h3 class="tab_drawer_heading" rel="tab1">Lectures Time Table</h3>
                <div id="tab1" class="tab_content">
                    <h2>Lectures Time Table</h2>


                    <table class="fixed_headers">
                        <thead>
                        <tr>
                            <th>Lecture</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Topic</th>
                            <th>Attendance</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>1</td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_date[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_time[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_topic[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_attendance[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_date[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_time[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_topic[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_attendance[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_date[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_time[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_topic[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_attendance[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_date[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_time[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_topic[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_attendance[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_date[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_time[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_topic[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_attendance[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_date[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_time[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_topic[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_attendance[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_date[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_time[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_topic[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_attendance[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>9</td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_date[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_time[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_topic[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_attendance[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_date[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_time[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_topic[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_attendance[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>11</td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_date[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_time[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_topic[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_attendance[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>12</td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_date[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_time[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_topic[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_attendance[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>13</td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_date[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_time[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_topic[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_attendance[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>14</td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_date[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_time[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_topic[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_attendance[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>15</td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_date[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_time[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_topic[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>

                            <td>
                                <select class="form-control js-example-tags" style="width:150px;" name="tab_attendance[]">
                                    <option selected="selected">20</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                    <option>10</option>
                                    <option>30</option>
                                </select>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>

                </div>

                <!-- #tab1 -->
                <h3 class="tab_drawer_heading" rel="tab2">Text book</h3>
                <div id="tab2" class="tab_content">
                    <h2>Text book</h2>
                    <div class="row ro-op">
                        <div class="col-md-4">1- </div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_text_book1">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>30</option>
                                <option>10</option>
                                <option>30</option>
                                <option>10</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">2- </div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_text_book2">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>30</option>
                                <option>10</option>
                                <option>30</option>
                                <option>10</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>

                    <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>


                </div>
                <!-- #tab2 -->
                <h3 class="tab_drawer_heading" rel="tab3">Supplementary books</h3>
                <div id="tab3" class="tab_content">
                    <h2>Supplementary books</h2>
                    <div class="row ro-op">
                        <div class="col-md-4">1- </div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_supplementary_book1">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>30</option>
                                <option>10</option>
                                <option>30</option>
                                <option>10</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">2- </div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_supplementary_book2">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>30</option>
                                <option>10</option>
                                <option>30</option>
                                <option>10</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>

                    <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>


                </div>
                <!-- #tab3 -->
                <h3 class="tab_drawer_heading" rel="tab4">Courses With Lab</h3>
                <div id="tab4" class="tab_content">
                    <h2>Courses With Lab</h2>

                    <div class="row ro-op">
                        <div class="col-md-4"> Software </div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_software">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>30</option>
                                <option>10</option>
                                <option>30</option>
                                <option>10</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4"> Required Equipment </div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_required_equipment">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>30</option>
                                <option>10</option>
                                <option>30</option>
                                <option>10</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>


                    <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>


                </div>
                <!-- #tab4 -->
            </div>

        </div>


        <div class="clearfix"></div>

        <br><br><br>
        <div class="tabs-contain">
            <h1 class="title-tabs">Follow Up Sheet</h1>
            <div class="wm-title-full">
                <h2>Ta / Demonestrator</h2>
            </div>

            <div class="wm-faq">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls=" collapseOne">
                                    If (s)he was active during the semester?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">


                                    <label class="radio-inline">
                                        <input type="radio" name="optradio" checked>Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio">NO
                                    </label>



                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    If (s)he was active was helpful to the students ?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">


                                    <label class="radio-inline">
                                        <input type="radio" name="optradio" checked>Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio">NO
                                    </label>


                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    If (s)he follows up your instructions and deliver her/his duties (quizzes, assignments, projects issuing and degrees) on time?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">


                                    <label class="radio-inline">
                                        <input type="radio" name="optradio" checked>Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio">NO
                                    </label>



                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Do you agree for the TA/Demonstrator to continue in the course next year?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body">


                                    <label class="radio-inline">
                                        <input type="radio" name="optradio" checked>Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio">NO
                                    </label>

                                    <br><br>
                                    <div class="brand-color">
                                        <h3>If No Please mention your comments/reasons.</h3>

                                        <textarea  id="story" name="story" rows="5" cols="33" >

                            </textarea>



                                    </div>



                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <div class="clearfix"></div>

        <br><br><br>

        <div class="tabs-contain">

            <div class="wm-title-full">
                <h2>Lab</h2>
            </div>

            <div class="wm-faq">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Was the software required for the course available?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFive">
                            <div class="panel-body">


                                    <label class="radio-inline">
                                        <input type="radio" name="optradio" value="1" checked>Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio" value="0">NO
                                    </label>


                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingSix">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Were there any complains from the lab equipment or from students?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                            <div class="panel-body">


                                    <label class="radio-inline">
                                        <input type="radio" name="optradio" checked>Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio">NO
                                    </label>
                                    <br><br>
                                    <div class="brand-color">
                                        <h3>If No Please mention your comments/reasons.</h3>

                                        <textarea  id="story" name="story" rows="5" cols="33" >

                            </textarea>



                                    </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="clearfix"></div>

        <br><br><br>
        <div class="tabs-contain">

            <div class="wm-title-full">
                <h2>Lecture Hall</h2>
            </div>


            <div class="wm-faq">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingSeven">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="true" aria-controls=" collapseSeven">
                                    Was it suitable for teaching?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseSeven" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSeven">
                            <div class="panel-body">


                                    <label class="radio-inline">
                                        <input type="radio" name="optradio" checked>Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio">NO
                                    </label>



                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingEight">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Was the room's equipment suitable for all your requirements?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseEight" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingEight">
                            <div class="panel-body">


                                    <label class="radio-inline">
                                        <input type="radio" name="optradio" checked>Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio">NO
                                    </label>


                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingNine">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    If it was able to accommodate all students or not?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                            <div class="panel-body">


                                    <label class="radio-inline">
                                        <input type="radio" name="optradio" checked>Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio">NO
                                    </label>



                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <br><br>
            <div class="brand-color">
                <h3>Do you have any suggestions for this course?</h3>

                <textarea  id="story" name="story" rows="5" cols="33" ></textarea>



            </div>
            <br><br>
            <br><br>
        </div>

        <input type="hidden" name="course_id" value="{{$course->id}}">
        <input type="hidden" name="doctor_id" value="{{$course->doctor_id}}">
        <input type="hidden" name="doc" value="{{$type}}">
        <input type="submit" class="btn btn-success btn-lg" value="Submit" style="margin-bottom: 20px;     position: relative;
    left: 47%;
    top: 50px;    margin-bottom: 150px;">
    </form>
@endsection
@section('scripts')


@endsection
