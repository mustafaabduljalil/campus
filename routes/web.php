<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/', 'HomeController@index')->name('index');
Route::get('/course/{id}','CourseController@details')->name('course.details');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['dashboard.permission']], function () {
        // Doctors Routes
        Route::group(['prefix' => 'doctors'], function() {
            Route::get('/','Dashboard\DoctorController@index')->name('doctor.index');
            Route::get('/fetchAdmins','Dashboard\DoctorController@fetchDoctors')->name('doctor.fetchDoctors');
            Route::group(['middleware' => ['admin.permission']], function () {
                Route::get('/edit/{id}','Dashboard\DoctorController@editForm')->name('doctor.editForm');
                Route::post('/store_edit','Dashboard\DoctorController@storeEdit')->name('doctor.storeEdit');
                Route::post('/delete','Dashboard\DoctorController@delete')->name('doctor.delete');
                Route::get('/add_new_doctor','Dashboard\DoctorController@addForm')->name('doctor.addForm');
                Route::post('/store_adding','Dashboard\DoctorController@storeAdding')->name('doctor.storeAdding');
            });
        });
        // Students Routes
        Route::group(['prefix' => 'students'], function() {
            Route::get('/','Dashboard\StudentController@index')->name('student.index');
            Route::get('/fetchStudents','Dashboard\StudentController@fetchStudents')->name('student.fetchStudents');
            Route::group(['middleware' => ['admin.permission']], function () {
                Route::get('/edit/{id}','Dashboard\StudentController@editForm')->name('student.editForm');
                Route::post('/store_edit','Dashboard\StudentController@storeEdit')->name('student.storeEdit');
                Route::post('/delete','Dashboard\StudentController@delete')->name('student.delete');
                Route::get('/add_new_student','Dashboard\StudentController@addForm')->name('student.addForm');
                Route::post('/store_adding','Dashboard\StudentController@storeAdding')->name('student.storeAdding');
            });
        });
        // Courses Routes
        Route::group(['prefix' => 'courses'], function() {
            Route::get('/','Dashboard\CourseController@index')->name('course.index');
            Route::get('/fetchCourses','Dashboard\CourseController@fetchCourses')->name('course.fetchCourses');
            Route::get('/courseEvaluations/{courseId}/{type}','Dashboard\CourseController@courseEvaluations')->name('course.courseEvaluations');
            Route::get('/fetchCoursesEvaluation/{courseId}/{type}','Dashboard\CourseController@fetchCoursesEvaluation')->name('course.fetchCoursesEvaluations');
            Route::get('/courseEvaluationsResults/{courseId}/{type}','Dashboard\CourseController@courseEvaluationsResults')->name('course.courseEvaluations');
            Route::get('/fetchCoursesEvaluationResults/{courseId}/{type}','Dashboard\CourseController@fetchCoursesEvaluationResults')->name('course.fetchCoursesEvaluationResults');

            Route::group(['middleware' => ['admin.permission']], function () {
                Route::get('/edit/{id}','Dashboard\CourseController@editForm')->name('course.editForm');
                Route::post('/store_edit','Dashboard\CourseController@storeEdit')->name('course.storeEdit');
                Route::post('/delete','Dashboard\CourseController@delete')->name('course.delete');
                Route::get('/add_new_course','Dashboard\CourseController@addForm')->name('course.addForm');
                Route::post('/store_adding','Dashboard\CourseController@storeAdding')->name('course.storeAdding');
            });
        });
        // Doctors Evaluation questions
        Route::group(['prefix' => 'question'], function() {
            Route::get('/','Dashboard\EvaluationQuestionController@index')->name('doctor.question.index');
            Route::get('/fetchQuestions','Dashboard\EvaluationQuestionController@fetchQuestions')->name('doctor.question.fetchQuestions');

            Route::group(['middleware' => ['admin.permission']], function () {
                Route::get('/edit/{id}','Dashboard\EvaluationQuestionController@editForm')->name('doctor.question.editForm');
                Route::post('/store_edit','Dashboard\EvaluationQuestionController@storeEdit')->name('doctor.question.storeEdit');
                Route::post('/delete','Dashboard\EvaluationQuestionController@delete')->name('doctor.question.delete');
                Route::get('/add_new_question','Dashboard\EvaluationQuestionController@addForm')->name('doctor.question.addForm');
                Route::post('/store_adding','Dashboard\EvaluationQuestionController@storeAdding')->name('doctor.question.storeAdding');
            });
        });
        // Courses Evaluation questions
        Route::group(['prefix' => '/courses/question'], function() {
            Route::get('/','Dashboard\CourseEvaluationQuestionController@index')->name('course.question.index');
            Route::get('/fetchQuestions','Dashboard\CourseEvaluationQuestionController@fetchQuestions')->name('course.question.fetchQuestions');

            Route::group(['middleware' => ['admin.permission']], function () {
                Route::get('/edit/{id}','Dashboard\CourseEvaluationQuestionController@editForm')->name('course.question.editForm');
                Route::post('/store_edit','Dashboard\CourseEvaluationQuestionController@storeEdit')->name('course.question.storeEdit');
                Route::post('/delete','Dashboard\CourseEvaluationQuestionController@delete')->name('course.question.delete');
                Route::get('/add_new_question','Dashboard\CourseEvaluationQuestionController@addForm')->name('course.question.addForm');
                Route::post('/store_adding','Dashboard\CourseEvaluationQuestionController@storeAdding')->name('course.question.storeAdding');
            });
        });



    });

    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::get('/doctor/evaluation/{id}', 'UserController@evaluation')->name('doctor.evaluation');
    Route::post('/store/evaluation', 'UserController@storeEvaluation')->name('doctor.evaluation.store');

    Route::get('/course/evaluation/question/{id}', 'UserController@courseEvaluation')->name('course.evaluation.question');
    Route::post('/course/evaluation/question', 'UserController@storeCourseEvaluation')->name('course.evaluation.question');

    Route::get('/course/evaluation/{id}/{number}', 'CourseController@courseEvaluation')->name('course.courseEvaluation.one');
    Route::post('/course/evaluation', 'CourseController@storeEvaluation')->name('course.evaluation.store');


});


Route::match(['get', 'post'], '/botman', 'BotManController@handle');
