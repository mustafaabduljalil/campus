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
    <form action="{{route('course.evaluation.store')}}" method="post" id="form">
        @csrf

        <div class="tabs-contain">
            <h1 class="title-tabs">Main Information</h1>
            <ul class="tabs">
                <li class="active" rel="tab1">Basic information</li>
                <li rel="tab2">Statistic</li>
                <li rel="tab3">Facilitites Available </li>

            </ul>
            <div class="tab_container">
                <h3 class="d_active tab_drawer_heading" rel="tab1">Basic information</h3>
                <div id="tab1" class="tab_content">
                    <h2>Basic information</h2>
                    <div class="row ro-op">
                        <div class="col-md-4">offering Department</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_offering_department">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">Year / Level</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_year_level">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">Exame External</div>


                        <div class="col-md-4">



                                <input type="radio" id="male" name="gender" value="male">
                                <label for="male">Male</label><br>
                                <input type="radio" id="female" name="gender" value="female">
                                <label for="female">Female</label><br>



                        </div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_exame_external">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">Number of instructor</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_number_of_instructor">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">Course TiTle</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_course_title">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">Course code</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_course_code">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">credit hours</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_credit_hours">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>

                </div>

                <!-- #tab1 -->
                <h3 class="tab_drawer_heading" rel="tab2">Course Statistics</h3>
                <div id="tab2" class="tab_content">
                    <h2>Course Statistics</h2>

                    <div class="row ro-op">
                        <div class="col-md-4">Number of Studnt</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_number_of_studnt">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>
                    <div class="row ro-op">
                        <div class="col-md-4">Passed</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_passed">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">Failed</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_failed">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">A+</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_a+">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">A</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_a">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">A-</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_a-">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">B+</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_b+">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">B</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_b">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">B-</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_b-">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">C+</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_c+">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">C</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_c">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">C-</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_c-">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">D+</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_d+">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">D</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_d">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>
                </div>
                <!-- #tab2 -->
                <h3 class="tab_drawer_heading" rel="tab3">Facilitites Available</h3>
                <div id="tab3" class="tab_content">
                    <h2>Course Description</h2>
                    <div class="row ro-op">
                        <div class="col-md-4">Scientific Reference</div>

                        <div class="col-md-4">

                                <input type="radio" id="Available" name="gender" value="Available">
                                <label for="Available">Available</label><br>
                                <input type="radio" id="nonAvailable" name="gender" value="nonAvailable">
                                <label for="nonAvailable">nonAvailable</label><br>
                                <input type="radio" id="limited" name="gender" value="limited">
                                <label for="limited">limited</label><br>

                        </div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_scientific_reference">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">Learninig Aids </div>

                        <div class="col-md-4">

                                <input type="radio" id="Available" name="gender" value="Available">
                                <label for="Available">Available</label><br>
                                <input type="radio" id="nonAvailable" name="gender" value="nonAvailable">
                                <label for="nonAvailable">nonAvailable</label><br>
                                <input type="radio" id="limited" name="gender" value="limited">
                                <label for="limited">limited</label><br>

                        </div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_learninig_aids">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">Supplies</div>

                        <div class="col-md-4">

                                <input type="radio" id="Available" name="gender" value="Available">
                                <label for="Available">Available</label><br>
                                <input type="radio" id="nonAvailable" name="gender" value="nonAvailable">
                                <label for="nonAvailable">nonAvailable</label><br>
                                <input type="radio" id="limited" name="gender" value="limited">
                                <label for="limited">limited</label><br>

                        </div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_supplies">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">Adminstrative</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_adminstrative">
                                <option selected="selected">20</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                                <option>10</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>

                    <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>
                </div>
                <!-- #tab3 -->
                <h3 class="tab_drawer_heading" rel="tab4">Tab 4</h3>
                <div id="tab4" class="tab_content">
                    <h2>Tab 4 content</h2>
                    <p>Integer ultrices lacus sit amet lorem viverra consequat. Vivamus lacinia interdum sapien non faucibus. Maecenas bibendum, lectus at ultrices viverra, elit magna egestas magna, a adipiscing mauris justo nec eros.</p>
                </div>
                <!-- #tab4 -->
            </div>

        </div>


        <div class="tabs-contain">
            <div  class="col-sm-12">
                <h3 class="title-tabs">Subject Teaching</h3>
                <hr/>
                <div class="col-xs-3"> <!-- required for floating -->
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-left sideways">
                        <li class="active"><a href="#home-v" data-toggle="tab">Taught curriculum Topic</a></li>
                        <li><a href="#profile-v" data-toggle="tab">curriculum Topic not Taught</a></li>
                        <li><a href="#messages-v" data-toggle="tab">Instructor Commitment</a></li>
                        <li><a href="#settings-v" data-toggle="tab">the extent ofthe exam coverage to curriclum topics</a></li>
                        <li><a href="#tab-5" data-toggle="tab">learning and teahing methods</a></li>
                        <li><a href="#tab-6" data-toggle="tab">student evaluation method</a></li>

                    </ul>
                </div>

                <div class="col-xs-9">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home-v">

                            <div class="row ro-op">
                                <div class="col-md-4">1- </div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_1[]">
                                        <option selected="selected">20</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">2- </div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_2[]">
                                        <option selected="selected">20</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">3- </div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_3[]">
                                        <option selected="selected">20</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">4- </div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_4[]">
                                        <option selected="selected">20</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">5- </div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_5[]">
                                        <option selected="selected">20</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                    </select>
                                </div>
                            </div>


                            <div class="row ro-op">
                                <div class="col-md-4">6- </div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_6[]">
                                        <option selected="selected">20</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                    </select>
                                </div>
                            </div>

                            <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>

                        </div>
                        <div class="tab-pane" id="profile-v">

                            <div class="row ro-op">
                                <div class="col-md-4">1- </div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_1[]">
                                        <option selected="selected">20</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">2- </div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_2[]">
                                        <option selected="selected">20</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">3- </div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_3[]">
                                        <option selected="selected">20</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                    </select>
                                </div>
                            </div>

                            <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>


                        </div>
                        <div class="tab-pane" id="messages-v">


                            <div class="row ro-op">



                                <div class="col-md-4">



                                        <input type="radio" id="less" name="gender" value="less">
                                        <label for="less">less than 60%</label><br>
                                        <input type="radio" id="mid" name="gender" value="mid">
                                        <label for="mid">60% to 80%</label><br>
                                        <input type="radio" id="over" name="gender" value="over">
                                        <label for="over">Over 85%</label><br>



                                </div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_curriculum_topic_not_taught">
                                        <option selected="selected">20</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                    </select>
                                </div>
                            </div>
                            <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>
                        </div>
                        <div class="tab-pane" id="settings-v">


                            <div class="row ro-op">

                                <div class="col-md-4">



                                        <input type="radio" id="less" name="gender" value="less">
                                        <label for="less">less than 60%</label><br>
                                        <input type="radio" id="mid" name="gender" value="mid">
                                        <label for="mid">60% to 80%</label><br>
                                        <input type="radio" id="over" name="gender" value="over">
                                        <label for="over">Over 85%</label><br>



                                </div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_instructor_commitment">
                                        <option selected="selected">20</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                    </select>
                                </div>
                            </div>
                            <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>

                        </div>

                        <div class="tab-pane" id="tab-5">


                            <div class="row ro-op">
                                <div class="col-md-4">theorotical lecture</div>
                                <div class="col-md-4">
                                    <div class="checkbox-custom">
                                        <label>
                                            <input type="checkbox">
                                            <b></b>

                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">Excercies</div>
                                <div class="col-md-4">
                                    <div class="checkbox-custom">
                                        <label>
                                            <input type="checkbox">
                                            <b></b>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">open discussions</div>
                                <div class="col-md-4">
                                    <div class="checkbox-custom">
                                        <label>
                                            <input type="checkbox">
                                            <b></b>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">E-Education</div>
                                <div class="col-md-4">
                                    <div class="checkbox-custom">
                                        <label>
                                            <input type="checkbox">
                                            <b></b>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">self - education</div>
                                <div class="col-md-4">
                                    <div class="checkbox-custom">
                                        <label>
                                            <input type="checkbox">
                                            <b></b>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">other</div>
                                <div class="col-md-4">
                                    <div class="checkbox-custom">
                                        <label>
                                            <input type="checkbox">
                                            <b></b>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">practice exercise</div>
                                <div class="col-md-4">
                                    <div class="checkbox-custom">
                                        <label>
                                            <input type="checkbox">
                                            <b></b>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">presentation</div>
                                <div class="col-md-4">
                                    <div class="checkbox-custom">
                                        <label>
                                            <input type="checkbox">
                                            <b></b>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">project</div>
                                <div class="col-md-4">
                                    <div class="checkbox-custom">
                                        <label>
                                            <input type="checkbox">
                                            <b></b>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">research</div>
                                <div class="col-md-4">
                                    <div class="checkbox-custom">
                                        <label>
                                            <input type="checkbox">
                                            <b></b>
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="row ro-op">
                                <div class="col-md-4">case study</div>
                                <div class="col-md-4">
                                    <div class="checkbox-custom">
                                        <label>
                                            <input type="checkbox">
                                            <b></b>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>

                        </div>

                        <div class="tab-pane" id="tab-6">



                            <div class="row ro-op">
                                <div class="col-md-4">final written </div>
                                <div class="col-md-4">
                                    <div class="checkbox-custom">
                                        <label>
                                            <input type="checkbox">
                                            <b></b>

                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">oral exam </div>
                                <div class="col-md-4">
                                    <div class="checkbox-custom">
                                        <label>
                                            <input type="checkbox">
                                            <b></b>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">quizzes</div>
                                <div class="col-md-4">
                                    <div class="checkbox-custom">
                                        <label>
                                            <input type="checkbox">
                                            <b></b>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">project</div>
                                <div class="col-md-4">
                                    <div class="checkbox-custom">
                                        <label>
                                            <input type="checkbox">
                                            <b></b>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">modterm exam</div>
                                <div class="col-md-4">
                                    <div class="checkbox-custom">
                                        <label>
                                            <input type="checkbox">
                                            <b></b>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">assignments</div>
                                <div class="col-md-4">
                                    <div class="checkbox-custom">
                                        <label>
                                            <input type="checkbox">
                                            <b></b>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">research</div>
                                <div class="col-md-4">
                                    <div class="checkbox-custom">
                                        <label>
                                            <input type="checkbox">
                                            <b></b>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">take home exam</div>
                                <div class="col-md-4">
                                    <div class="checkbox-custom">
                                        <label>
                                            <input type="checkbox">
                                            <b></b>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">other</div>
                                <div class="col-md-4">
                                    <div class="checkbox-custom">
                                        <label>
                                            <input type="checkbox">
                                            <b></b>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

            </div>
        </div>

        <div class="clearfix"></div>

        <br><br><br>

        <div class="tabs-contain">
            <div class="group blenderTabs">
                <h3 class="title-tabs">Left Tabs</h3>
                <div class="span_6">
                    <ol class="leading--zero">
                        <li class="active" data-tab="social">
                            <h3 class="content--inline">Social Excellence</h3></li>
                        <li data-tab="operations"><h3 class="content--inline">Operational Excellence</h3></li>
                        <li data-tab="organization"><h3 class="content--inline">Organizational Excellence</h3></li>
                        <li data-tab="project"><h3 class="content--inline">Project Development Excellence</h3></li>

                    </ol>
                </div>
                <div class="span_5 float--right">
                    <div id="social" class="tabContent active">
                        <div class="brand-color">

                            <div class="row ro-op">

                                <div class="col-md-4">



                                        <input type="radio" id="less" name="gender" value="less">
                                        <label for="less">less than 60%</label><br>
                                        <input type="radio" id="mid" name="gender" value="mid">
                                        <label for="mid">60% to 80%</label><br>
                                        <input type="radio" id="over" name="gender" value="over">
                                        <label for="over">Over 85%</label><br>



                                </div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_social_excellence">
                                        <option selected="selected">20</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                    </select>
                                </div>
                            </div>
                            <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>
                        </div>

                    </div>
                    <div id="operations" class="tabContent">
                        <div class="brand-color">
                            <div class="row ro-op">



                                <div class="col-md-4">



                                        <input type="radio" id="less" name="gender" value="less">
                                        <label for="less">less than 60%</label><br>
                                        <input type="radio" id="mid" name="gender" value="mid">
                                        <label for="mid">60% to 80%</label><br>
                                        <input type="radio" id="over" name="gender" value="over">
                                        <label for="over">Over 85%</label><br>



                                </div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_operational_excellence">
                                        <option selected="selected">20</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                    </select>
                                </div>
                            </div>

                            <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>
                        </div>
                    </div>
                    <div id="organization" class="tabContent">
                        <div class="brand-color">

                            <div class="row ro-op">



                                <div class="col-md-4">



                                        <input type="radio" id="less" name="gender" value="less">
                                        <label for="less">less than 60%</label><br>
                                        <input type="radio" id="mid" name="gender" value="mid">
                                        <label for="mid">60% to 80%</label><br>
                                        <input type="radio" id="over" name="gender" value="over">
                                        <label for="over">Over 85%</label><br>



                                </div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_organizational_excellence">
                                        <option selected="selected">20</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                    </select>
                                </div>
                            </div>
                            <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>
                        </div>
                    </div>
                    <div id="project" class="tabContent">
                        <div class="brand-color">
                            <div class="row ro-op">
                                <div class="col-md-4">A 1</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_project_development_excellence">
                                        <option selected="selected">20</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                        <option>10</option>
                                        <option>40</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>
                    </div>

                </div>
            </div>


        </div>


        <div class="clearfix"></div>

        <br><br><br>
        <div class="tabs-contain">
            <h3 class="title-tabs">The result of students' evaluation to the subject </h3>
            <div class="row component-wrapper">

                <div class="row ro-op">
                    <div class="col-md-4"><h3>Pivot</h3></div>
                    <div class="col-md-4"><h3>Percentage</h3></div>
                    <div class="col-md-4"><h3>Score</h3></div>

                </div>

                <div class="row ro-op">

                    <div class="col-md-4"><h5>General Opinion</h5></div>
                    <div class="col-md-4">
                        <select class="form-control js-example-tags" style="width:150px;" name="tab_general_opinion">
                            <option selected="selected">20</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <select class="form-control js-example-tags" style="width:150px;">
                            <option selected="selected">20</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                        </select>
                    </div>

                </div>

                <div class="row ro-op">

                    <div class="col-md-4"><h5>Learning output of Teaching</h5></div>
                    <div class="col-md-4">
                        <select class="form-control js-example-tags" style="width:150px;" name="tab_learning_output_of_teaching">
                            <option selected="selected">20</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <select class="form-control js-example-tags" style="width:150px;">
                            <option selected="selected">20</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                        </select>
                    </div>

                </div>

                <div class="row ro-op">

                    <div class="col-md-4"><h5>Lectures</h5></div>
                    <div class="col-md-4">
                        <select class="form-control js-example-tags" style="width:150px;" name="tab_lectures[]">
                            <option selected="selected">20</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <select class="form-control js-example-tags" style="width:150px;" name="tab_lectures[]">
                            <option selected="selected">20</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                        </select>
                    </div>

                </div>

                <div class="row ro-op">

                    <div class="col-md-4"><h5>Lecture</h5></div>
                    <div class="col-md-4">
                        <select class="form-control js-example-tags" style="width:150px;" name="tab_lectures[]">
                            <option selected="selected">20</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <select class="form-control js-example-tags" style="width:150px;" name="tab_lectures[]">
                            <option selected="selected">20</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                        </select>
                    </div>

                </div>

                <div class="row ro-op">

                    <div class="col-md-4"><h5>Teaching Assistant</h5></div>
                    <div class="col-md-4">
                        <select class="form-control js-example-tags" style="width:150px;" name="tab_teaching_assistant[]">
                            <option selected="selected">20</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <select class="form-control js-example-tags" style="width:150px;" name="tab_teaching_assistant[]">
                            <option selected="selected">20</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                        </select>
                    </div>

                </div>

                <div class="row ro-op">

                    <div class="col-md-4"><h5>Assessment System</h5></div>
                    <div class="col-md-4">
                        <select class="form-control js-example-tags" style="width:150px;" name="tab_assessment_system[]">
                            <option selected="selected">20</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <select class="form-control js-example-tags" style="width:150px;" name="tab_assessment_system[]">
                            <option selected="selected">20</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                        </select>
                    </div>

                </div>

                <div class="row ro-op">

                    <div class="col-md-4"><h5>Labs</h5></div>
                    <div class="col-md-4">
                        <select class="form-control js-example-tags" style="width:150px;" name="tab_Labs[]">
                            <option selected="selected">20</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <select class="form-control js-example-tags" style="width:150px;" name="tab_Labs[]">
                            <option selected="selected">20</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                        </select>
                    </div>

                </div>

                <div class="row ro-op">

                    <div class="col-md-4"><h3>Lecture Rooms</h3></div>
                    <div class="col-md-4">
                        <select class="form-control js-example-tags" style="width:150px;" name="tab_lecture_Rooms[]">
                            <option selected="selected">20</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <select class="form-control js-example-tags" style="width:150px;" name="tab_lecture_Rooms[]">
                            <option selected="selected">20</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                            <option>10</option>
                            <option>40</option>
                        </select>
                    </div>

                </div>
                <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>
                <br><br>

            </div>

        </div>


        <div class="tabs-contain">
            <h3 class="title-tabs">Subject Teaching</h3>
            <div id="wrapper">
                <!-- Page Content -->

                <div id="page-content-wrapper">
                    <div class="container-fluid">

                        <div class="row component-wrapper">

                            <div class="col-xs-3" style="padding:0">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs tabs-left">
                                    <li class="nav-title"><span>Course Development</span></li>
                                    <li class="active"><a href="#profile" data-toggle="tab">Course Improvment</a></li>
                                    <li><a href="#account" data-toggle="tab">Course dvelopment plan</a></li>
                                    <!-- <li><a href="#emails" data-toggle="tab">Emails</a></li>
                                    <li><a href="#notifications" data-toggle="tab">Notifications</a></li> -->
                                </ul>
                            </div>

                            <div class="col-xs-9">

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="profile">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h3>Course Improvment Proposals</h3>
                                                    <hr>



                                                    <div class="row ro-op">


                                                        <div class="col-md-12">
                                                            <div class="brand-color">
                                                                <h3>Course improvement proposals</h3>

                                                                <textarea  id="story" name="story" rows="5" cols="33" >   </textarea>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row ro-op">


                                                        <div class="col-md-12">
                                                            <div class="brand-color">
                                                                <h3>Notes of external reviewers </h3>

                                                                <textarea  id="story" name="story" rows="5" cols="33" >   </textarea>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row ro-op">


                                                        <div class="col-md-12">
                                                            <div class="brand-color">
                                                                <h3>What have been done of the last year suggestions of improvement</h3>

                                                                <textarea  id="story" name="story" rows="5" cols="33" >   </textarea>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row ro-op">


                                                        <div class="col-md-12">
                                                            <div class="brand-color">
                                                                <h3>What haven't been done of the suggestions (Name them and mention to the reasons)</h3>

                                                                <textarea  id="story" name="story" rows="5" cols="33" >   </textarea>
                                                            </div>
                                                        </div>

                                                    </div>



                                                    <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="account">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h3>Course dvelopment plan</h3>
                                                    <hr>
                                                    <div class="row ro-op">


                                                        <div class="col-md-12">
                                                            <div class="brand-color">
                                                                <h3>Tell us your story:</h3>

                                                                <textarea  id="story" name="story" rows="5" cols="33" >   </textarea>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row ro-op">


                                                        <div class="col-md-12">
                                                            <div class="brand-color">
                                                                <h3>Tell us your story:</h3>

                                                                <textarea  id="story" name="story" rows="5" cols="33" >   </textarea>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row ro-op">


                                                        <div class="col-md-12">
                                                            <div class="brand-color">
                                                                <h3>Tell us your story:</h3>

                                                                <textarea  id="story" name="story" rows="5" cols="33" >   </textarea>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row ro-op">


                                                        <div class="col-md-12">
                                                            <div class="brand-color">
                                                                <h3>Tell us your story:</h3>

                                                                <textarea  id="story" name="story" rows="5" cols="33" >   </textarea>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>
                                        </div>

                                    </div>

                                    <!-- <div class="tab-pane" id="emails">
                                        <div class="container-fluid">
                                        <div class="row">
                                          <div class="col-lg-12">
                                            <h3>Emails</h3>
                                            <hr>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="tab-pane" id="notifications">
                                        <div class="container-fluid">
                                        <div class="row">
                                          <div class="col-lg-12">
                                            <h3>Notifications</h3>
                                            <hr>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div> -->

                                </div>
                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>
                </div><!-- /#page-content-wrapper -->
            </div>
        </div>

        <input type="hidden" name="course_id" value="{{$course->id}}">
        <input type="hidden" name="doctor_id" value="{{$course->doctor_id}}">
        <input type="hidden" name="doc" value="{{$type}}">
        <input type="button" id="submit-btn" class="btn btn-success btn-lg" value="Submit" style="margin-bottom: 20px;     position: relative;
    left: 47%;
    top: 50px;    margin-bottom: 150px;">
    </form>
@endsection
@section('scripts')
    <script>
        $("#submit-btn").click(function () {
            $("#form").submit();
        });
    </script>
@endsection
