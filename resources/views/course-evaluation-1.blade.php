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
            <h1 class="title-tabs">Quality Assurance Unit</h1>
            <ul class="tabs">

                <li class="active" rel="tab2">Course Specification</li>
                <li rel="tab3">Course Description </li>
                <li rel="tab4">Basic Information </li>

            </ul>
            <div class="tab_container">

                <!-- #tab1 -->
                <h3 class="tab_drawer_heading" rel="tab2">Course Specification</h3>
                <div id="tab2" class="tab_content">
                    <h2>Course Specification</h2>
                    <div class="row ro-op">
                        <div class="col-md-4">institute</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_institute[]">
                                <option selected="selected">10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">Department Offering the Course</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_department_offering_course">
                                <option selected="selected">10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>
                    <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>
                </div>
                <!-- #tab2 -->


                <h3 class="tab_drawer_heading" rel="tab3">Course Description</h3>
                <div id="tab3" class="tab_content">
                    <h2>Course Description</h2>
                    <div class="row ro-op">
                        <div class="col-md-4">The Program Related to Course</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_program_related_course[]">
                                <option selected="selected">10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">Components and subComponents</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_components_subComponents[]">
                                <option selected="selected">10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">The Section Related to Course</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_section_related_course">
                                <option selected="selected">10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">institute</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_institute[]">
                                <option selected="selected">10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">Academic level</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_academic_level">
                                <option selected="selected">10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">Data Approreal of Course</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_data_approreal_course">
                                <option selected="selected">10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>

                    <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>
                </div>
                <!-- #tab3 -->
                <div id="tab4" class="tab_content">
                    <h2>Basic Information</h2>
                    <div class="row ro-op">
                        <div class="col-md-4">The Program Related to Course</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_program_related_course">
                                <option selected="selected">10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">Components and subComponents</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_components_subcomponents[]">
                                <option selected="selected">10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">The Section Related to Course</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_section_related_course">
                                <option selected="selected">10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">institute</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_institute[]">
                                <option selected="selected">10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">Academic level</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_academic_level[]">
                                <option selected="selected">10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ro-op">
                        <div class="col-md-4">Data Approreal of Course</div>
                        <div class="col-md-4">
                            <select class="form-control js-example-tags" style="width:150px;" name="tab_data_approreal_course[]">
                                <option selected="selected">10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
                                <option>30</option>
                                <option>20</option>
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
            <div  class="col-sm-12">
                <h3 class="title-tabs">Overall Aims Of Course</h3>
                <hr/>
                <div class="col-xs-3"> <!-- required for floating -->
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-left sideways">
                        <li class="active"><a href="#home-v" data-toggle="tab">knowledge & Understanding </a></li>
                        <li><a href="#profile-v" data-toggle="tab">Intellectual Skills</a></li>
                        <li><a href="#messages-v" data-toggle="tab">Proffisonal & Practical Skills</a></li>
                        <li><a href="#settings-v" data-toggle="tab">General Skills</a></li>
                    </ul>
                </div>

                <div class="col-xs-9">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home-v">

                            <div class="row ro-op">
                                <div class="col-md-4">A 1</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_knowledge_understanding_A1">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">A 2</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_knowledge_understanding_A2">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">A 3</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_knowledge_understanding_A3">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">A 4</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_knowledge_understanding_A4">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">A 5</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_knowledge_understanding_A5">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>

                        </div>
                        <div class="tab-pane" id="profile-v">

                            <div class="row ro-op">
                                <div class="col-md-4">B 1</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_Intellectual SkillsB1">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">B 2</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_Intellectual SkillsB2">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">B 3</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_Intellectual SkillsB3">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">B 4</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_Intellectual SkillsB4">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">B 5</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_Intellectual SkillsB5">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>


                        </div>


                        <div class="tab-pane" id="messages-v">


                            <div class="row ro-op">
                                <div class="col-md-4">C 1</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_proffisonal_practicalC1">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">C 2</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_proffisonal_practicalC2">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">C 3</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_proffisonal_practicalC3">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">C 4</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_proffisonal_practicalC4">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">C 5</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_proffisonal_practicalC5">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>
                            <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>
                        </div>
                        <div class="tab-pane" id="settings-v">


                            <div class="row ro-op">
                                <div class="col-md-4">D 1</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_general_skillsD1">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">D 2</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_general_skillsD1">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">D 3</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_general_skillsD3">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">D 4</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_general_skillsD4">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">D 5</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_general_skillsD5">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

            </div>
        </div>
        <div class="clearfix"></div>

        <br><br><br>

        <div class="tabs-contain">
            <h3 class="title-tabs">Table of Content</h3>
            <div class="worko-tabs">

                <input class="state" type="radio" title="tab-one" name="tabs-state" id="tab-one" checked />
                <input class="state" type="radio" title="tab-two" name="tabs-state" id="tab-two" />
                <input class="state" type="radio" title="tab-three" name="tabs-state" id="tab-three" />
                <input class="state" type="radio" title="tab-four" name="tabs-state" id="tab-four" />

                <div class="tabs flex-tabs">
                    <label for="tab-one" id="tab-one-label" class="tab">4/1 Lectures</label>
                    <label for="tab-two" id="tab-two-label" class="tab">4/2 Practical Lesson </label>
                    <!-- <label for="tab-three" id="tab-three-label" class="tab">Tab Three</label>
      <label for="tab-four" id="tab-four-label" class="tab">Tab Four</label> -->


                    <div id="tab-one-panel" class="panel active">
                        <h3>Lectures</h3>

                        <div class="row component-wrapper">

                            <div class="row ro-op">
                                <div class="col-md-4"><h3>Date</h3></div>
                                <div class="col-md-4"><h3>Topic</h3></div>
                                <div class="col-md-4"><h3>Houres Per Week</h3></div>

                            </div>

                            <div class="row ro-op">

                                <div class="col-md-4"><h5>General Opinion</h5></div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_general_opinion[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_general_opinion[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row ro-op">

                                <div class="col-md-4"><h5>Learning output of Teaching</h5></div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_learning_output_teaching[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_learning_output_teaching[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row ro-op">

                                <div class="col-md-4"><h5>Lectures</h5></div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_lectures[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_lectures[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row ro-op">

                                <div class="col-md-4"><h5>Lecture</h5></div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_lecture[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_lecture[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row ro-op">

                                <div class="col-md-4"><h5>Teaching Assistant</h5></div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_teaching_assistant[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_teaching_assistant[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row ro-op">

                                <div class="col-md-4"><h5>Assessment System</h5></div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;"  name="tab_assessment_system[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_assessment_system[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row ro-op">

                                <div class="col-md-4"><h5>Labs</h5></div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_labs[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_labs[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row ro-op">

                                <div class="col-md-4"><h3>Lecture Rooms</h3></div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_lecture_rooms[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_lecture_rooms[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                            </div>

                        </div>
                        <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>

                    </div>
                    <div id="tab-two-panel" class="panel">
                        <h3>Practical Lesson</h3>

                        <div class="row component-wrapper">

                            <div class="row ro-op">
                                <div class="col-md-4"><h3>Date</h3></div>
                                <div class="col-md-4"><h3>Topic</h3></div>
                                <div class="col-md-4"><h3>Houres Per Week</h3></div>

                            </div>

                            <div class="row ro-op">

                                <div class="col-md-4"><h5>General Opinion</h5></div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_general_opinion[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_general_opinion[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row ro-op">

                                <div class="col-md-4"><h5>Learning output of Teaching</h5></div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_learning_teaching[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_learning_teaching[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row ro-op">

                                <div class="col-md-4"><h5>Lectures</h5></div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_lectures[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_lectures[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row ro-op">

                                <div class="col-md-4"><h5>Lecture</h5></div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_lecture[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_lecture[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row ro-op">

                                <div class="col-md-4"><h5>Teaching Assistant</h5></div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_teaching_assistant[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_teaching_assistant[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row ro-op">

                                <div class="col-md-4"><h5>Assessment System</h5></div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_assessment_system[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_assessment_system[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row ro-op">

                                <div class="col-md-4"><h5>Labs</h5></div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_labs[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_labs[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row ro-op">

                                <div class="col-md-4"><h3>Lecture Rooms</h3></div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_lecture_rooms[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_lecture_rooms[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- <div id="tab-three-panel" class="panel">
          Tab three content
      </div>
      <div id="tab-four-panel" class="panel">
          Tab four content
      </div> -->
                </div>

            </div>
        </div>



        <div class="clearfix"></div>

        <br><br><br>

        <div class="tabs-contain">
            <div class="group blenderTabs">
                <h3 class="title-tabs">Methods</h3>
                <div class="span_6">
                    <ol class="leading--zero">
                        <li class="active" data-tab="social">
                            <h3 class="content--inline">Learning Methods</h3></li>
                        <li data-tab="operations"><h3 class="content--inline">Student Assessment</h3></li>
                        <li data-tab="organization"><h3 class="content--inline">Table Assessment</h3></li>
                        <li data-tab="project"><h3 class="content--inline">Weight Of Assessment</h3></li>
                        <li data-tab="growth"><h3 class="content--inline">List Of Reffrence</h3></li>
                        <li data-tab="seven"><h3 class="content--inline">Method For Evaluation</h3></li>
                        <li data-tab="eight"><h3 class="content--inline">necessary Fasilitat</h3></li>

                    </ol>
                </div>
                <div class="span_5 float--right">
                    <div id="social" class="tabContent active">
                        <div class="brand-color">

                            <div class="row ro-op">
                                <div class="col-md-4">5-1</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_learning_methods5-1[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">5-2</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_learning_methods5-2[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">5-3</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;"  name="tab_learning_methods5-3[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">5-4</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;"  name="tab_learning_methods5-4[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>
                    </div>
                    <div id="operations" class="tabContent">
                        <div class="brand-color">

                            <div class="row component-wrapper">

                                <div class="row ro-op">
                                    <div class="col-md-4"><h6></h6></div>
                                    <div class="col-md-4"><h6>Kind Of Evaluation</h6></div>
                                    <div class="col-md-4"><h6>Evaluation For</h6></div>

                                </div>

                                <div class="row ro-op">

                                    <div class="col-md-4"><h5>6-1</h5></div>
                                    <div class="col-md-4">
                                        <select class="form-control js-example-tags" style="width:150px;" name="tab_student_assessment6-1[]">
                                            <option selected="selected">10</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <select class="form-control js-example-tags" style="width:150px;"name="tab_student_assessment6-1[]">
                                            <option selected="selected">10</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row ro-op">

                                    <div class="col-md-4"><h3>6-2</h3></div>
                                    <div class="col-md-4">
                                        <select class="form-control js-example-tags" style="width:150px;" name="tab_student_assessment6-2[]">
                                            <option selected="selected">10</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <select class="form-control js-example-tags" style="width:150px;" name="tab_student_assessment6-2[]">
                                            <option selected="selected">10</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                        </select>
                                    </div>
                                    <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>
                                </div>
                                <div class="row ro-op">

                                    <div class="col-md-4"><h5>6-3</h5></div>
                                    <div class="col-md-4">
                                        <select class="form-control js-example-tags" style="width:150px;" name="tab_student_assessment6-3[]">
                                            <option selected="selected">10</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <select class="form-control js-example-tags" style="width:150px;" name="tab_student_assessment6-3[]">
                                            <option selected="selected">10</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row ro-op">

                                    <div class="col-md-4"><h3>6-4</h3></div>
                                    <div class="col-md-4">
                                        <select class="form-control js-example-tags" style="width:150px;" name="tab_student_assessment6-4[]">
                                            <option selected="selected">10</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <select class="form-control js-example-tags" style="width:150px;" name="tab_student_assessment6-4[]">
                                            <option selected="selected">10</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                        </select>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div id="organization" class="tabContent">
                        <div class="brand-color">

                            <div class="row component-wrapper">

                                <div class="row ro-op">
                                    <div class="col-md-4"><h6></h6></div>
                                    <div class="col-md-4"><h6>Type Of Assessment</h6></div>
                                    <div class="col-md-4"><h6>Date Of Assessment</h6></div>

                                </div>

                                <div class="row ro-op">

                                    <div class="col-md-4"><h5>First Evaluatiov</h5></div>
                                    <div class="col-md-4">
                                        <select class="form-control js-example-tags" style="width:150px;" name="tab_first_evaluatiov[]">
                                            <option selected="selected">10</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <select class="form-control js-example-tags" style="width:150px;" name="tab_first_evaluatiov[]">
                                            <option selected="selected">10</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row ro-op">

                                    <div class="col-md-4"><h5>Second Evaluatiov</h5></div>
                                    <div class="col-md-4">
                                        <select class="form-control js-example-tags" style="width:150px;" name="tab_second_evaluatiov[]">
                                            <option selected="selected">10</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <select class="form-control js-example-tags" style="width:150px;" name="tab_second_evaluatiov[]">
                                            <option selected="selected">10</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                        </select>
                                    </div>
                                    <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>
                                </div>
                                <div class="row ro-op">

                                    <div class="col-md-4"><h5>Third Evaluatiov</h5></div>
                                    <div class="col-md-4">
                                        <select class="form-control js-example-tags" style="width:150px;" name="tab_third_evaluatiov[]">
                                            <option selected="selected">10</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <select class="form-control js-example-tags" style="width:150px;" name="tab_third_evaluatiov[]">
                                            <option selected="selected">10</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row ro-op">

                                    <div class="col-md-4"><h5>Fourth Evaluation</h5></div>
                                    <div class="col-md-4">
                                        <select class="form-control js-example-tags" style="width:150px;" name="tab_fourth_evaluatiov[]">
                                            <option selected="selected">10</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <select class="form-control js-example-tags" style="width:150px;" name="tab_fourth_evaluatiov[]">
                                            <option selected="selected">10</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>20</option>
                                            <option>30</option>
                                        </select>
                                    </div>

                                </div>

                            </div>


                        </div>

                    </div>
                    <div id="project" class="tabContent">
                        <div class="brand-color">
                            <div class="row ro-op">
                                <div class="col-md-4">5-1</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_weight_assessment5-1[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">5-1</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_weight_assessment5-1[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">5-1</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_weight_assessment5-1[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">5-1</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_weight_assessment5-1[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">5-1</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_weight_assessment5-1[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>
                        </div>

                    </div>

                    <div id="growth" class="tabContent">
                        <div class="brand-color">
                            <div class="row ro-op">
                                <div class="col-md-4">5-1</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_list_reffrence5-1[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">5-1</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_list_reffrence5-1[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">5-1</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_list_reffrence5-1[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row ro-op">
                                <div class="col-md-4">5-1</div>
                                <div class="col-md-4">
                                    <select class="form-control js-example-tags" style="width:150px;" name="tab_list_reffrence5-1[]">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>

                            <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>
                        </div>

                    </div>
                    <div id="seven" class="tabContent">
                        <div class="brand-color">
                            <h3>Tell us your story:</h3>

                            <textarea  id="story" name="story" rows="5" cols="33" >   </textarea>
                        </div>
                        <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>
                    </div>
                    <div id="eight" class="tabContent">
                        <div class="brand-color">
                            <h3>Tell us your story:</h3>

                            <textarea  id="story" name="story" rows="5" cols="33" >

        </textarea>



                        </div>
                        <a href="#" class="wm-banner-btn submit" tabindex="0">learn more</a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="clearfix"></div>

        <br><br><br>
        <div class="responsiv-table">
            <table>
                <h3 class="title-tabs">Methods</h3>
                <col>
                <col>
                <colgroup span="6"></colgroup>
                <thead>
                <tr>

                    <th colspan="5" scope="colgroup">General & Transable Skill <br> (D)</th>
                    <th colspan="5" scope="colgroup">Professional & Practical Skill <br> (C)</th>
                    <th colspan="5" scope="colgroup">Intellectual Skill <br> (B)</th>
                    <th colspan="5" scope="colgroup">Knowledge & Understanding Skill <br> (A)</th>
                    <th colspan="1" scope="colgroup">Week</th>
                    <th colspan="1" scope="colgroup">Content</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>D5</td>
                    <td>D4</td>
                    <td>D3</td>
                    <td>D2</td>
                    <td>D1</td>

                    <td>C5</td>
                    <td>C4</td>
                    <td>C3</td>
                    <td>C2</td>
                    <td>C1</td>

                    <td>B5</td>
                    <td>B4</td>
                    <td>B3</td>
                    <td>B2</td>
                    <td>B1</td>

                    <td>A1</td>
                    <td>A4</td>
                    <td>A3</td>
                    <td>A2</td>
                    <td>A1</td>
                </tr>


                <tr>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom" name="professional_practical_skill []">
                            <label>
                                <input type="checkbox">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom" name="professional_practical_skill []">
                            <label>
                                <input type="checkbox">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom" name="professional_practical_skill []">
                            <label>
                                <input type="checkbox">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom" name="professional_practical_skill []">
                            <label>
                                <input type="checkbox">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom" name="professional_practical_skill []">
                            <label>
                                <input type="checkbox">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom" name="professional_practical_skill []">
                            <label>
                                <input type="checkbox">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom" name="professional_practical_skill []">
                            <label>
                                <input type="checkbox">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom" name="professional_practical_skill []">
                            <label>
                                <input type="checkbox">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom" name="professional_practical_skill []">
                            <label>
                                <input type="checkbox">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom" name="professional_practical_skill []">
                            <label>
                                <input type="checkbox">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom" name="professional_practical_skill []">
                            <label>
                                <input type="checkbox">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom" name="professional_practical_skill []">
                            <label>
                                <input type="checkbox">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_transable_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom" name="professional_practical_skill []">
                            <label>
                                <input type="checkbox">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill []">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>





                </tbody>

            </table>

        </div>

        <div class="clearfix"></div>

        <br><br><br>
        <div class="responsiv-tabl">
            <table>
                <h3 class="title-tabs">Methods</h3>
                <col>
                <col>
                <colgroup span="6"></colgroup>
                <thead>
                <tr>

                    <th colspan="1" scope="colgroup">1</th>
                    <th colspan="1" scope="colgroup">2</th>
                    <th colspan="1" scope="colgroup">3</th>
                    <th colspan="1" scope="colgroup">General & Transable Skill <br> (D)</th>
                    <th colspan="1" scope="colgroup">Professional & Practical Skill <br> (C)</th>
                    <th colspan="1" scope="colgroup">Intellectual Skill <br> (B)</th>
                    <th colspan="1" scope="colgroup">Knowledge & Understanding Skill <br> (A)</th>
                    <th colspan="1" scope="colgroup">Week</th>
                    <th colspan="1" scope="colgroup">Content</th>
                </tr>
                </thead>
                <tbody>



                <tr>

                    <td>
                        <input type="text" id="lname" name="lname">
                        <p></p>
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_dransable_skill_d[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill_C[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill_b[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill_a[]">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>

                    <td>
                        <input type="text" id="lname" name="lname">
                        <p></p>
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_dransable_skill_d[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill_C[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill_b[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill_a[]">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>

                    <td>
                        <input type="text" id="lname" name="lname">
                        <p></p>
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_dransable_skill_d[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill_C[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill_b[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill_a[]">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>

                    <td>
                        <input type="text" id="lname" name="lname">
                        <p></p>
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_dransable_skill_d[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill_C[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill_b[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill_a[]">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>

                    <td>
                        <input type="text" id="lname" name="lname">
                        <p></p>
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_dransable_skill_d[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill_C[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill_b[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill_a[]">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>

                    <td>
                        <input type="text" id="lname" name="lname">
                        <p></p>
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_dransable_skill_d[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill_C[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill_b[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill_a[]">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>

                    <td>
                        <input type="text" id="lname" name="lname">
                        <p></p>
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_dransable_skill_d[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill_C[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill_b[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill_a[]">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>

                    <td>
                        <input type="text" id="lname" name="lname">
                        <p></p>
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_dransable_skill_d[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill_C[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill_b[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill_a[]">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>

                    <td>
                        <input type="text" id="lname" name="lname">
                        <p></p>
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_dransable_skill_d[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill_C[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill_b[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill_a[]">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>

                    <td>
                        <input type="text" id="lname" name="lname">
                        <p></p>
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_dransable_skill_d[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill_C[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill_b[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill_a[]">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>

                    <td>
                        <input type="text" id="lname" name="lname">
                        <p></p>
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_dransable_skill_d[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill_C[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill_b[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill_a[]">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>

                    <td>
                        <input type="text" id="lname" name="lname">
                        <p></p>
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_dransable_skill_d[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill_C[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill_b[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill_a[]">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>

                <tr>

                    <td>
                        <input type="text" id="lname" name="lname">
                        <p></p>
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="general_dransable_skill_d[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="professional_practical_skill_C[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="intellectual_skill_b[]">
                                <b></b>
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="checkbox-custom">
                            <label>
                                <input type="checkbox" name="knowledge_understanding_skill_a[]">
                                <b></b>
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>

                    <td>
                        <input type="text" id="lname" name="lname">
                    </td>
                </tr>




                </tbody>

            </table>

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
