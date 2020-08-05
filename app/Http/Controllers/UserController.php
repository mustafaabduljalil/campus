<?php

namespace App\Http\Controllers;

use App\Course;
use App\CourseEvaluationQuestion;
use App\DoctorEvaluationQuestion;
use App\StudentEvaluationCourse;
use App\StudentEvaluationDoctor;
use App\User;
use App\UserCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // return profile
    public function profile(){
        if(auth()->user()->role == "student"){
            $user = User::with('courses')->where('id',Auth::user()->id)->first();
            $doctorsIds = Course::whereIn('id',$user->courses->pluck('id'))->pluck('doctor_id');
            $doctors = User::whereIn('id',$doctorsIds)->get();
            return view('profile',compact('user','doctors'));
        }else{
            $user = User::with('doctorCourses')->where('id',Auth::user()->id)->first();
            return view('dr-profile',compact('user'));
        }
    }

    // return evaluation view
    public function evaluation($id){
        if(\auth()->user()->role == "doctor")
            abort(403);
        $doctor = User::find($id);
        $questions = DoctorEvaluationQuestion::all();
        $checkUserEvaluatedBefore = StudentEvaluationDoctor::where('student_id',\auth()->id())
                                    ->where('doctor_id',$id)
                                    ->first();
        if(!is_null($checkUserEvaluatedBefore))
            $questions = [];
        return view('dr-evaluation',compact('doctor','questions'));

    }

    // store doctor evaluation
    public function storeEvaluation(Request $request){
        foreach ($request->questions as $key => $question){
            $answer = 'answers_'.$key;
            StudentEvaluationDoctor::create([
                'doctor_id' => $request->doctor_id,
//                'course_id' => $request->course_id,
                'student_id' => \auth()->id(),
                'question_id' => $question,
                'rate' => $request->$answer,
            ]);
        }

        \Session::flash('success', 'Submitted successfully, thanks for your time');
        return redirect()->back();

    }


    // return evaluation view
    public function courseEvaluation($id){
        if(\auth()->user()->role == "doctor")
            abort(403);
        $course = Course::find($id);
        $questions = CourseEvaluationQuestion::all();
        $checkUserEvaluatedBefore = StudentEvaluationCourse::where('student_id',\auth()->id())
            ->where('course_id',$course->id)->first();
        if(!is_null($checkUserEvaluatedBefore))
            $questions = [];
        return view('course-evaluation',compact('questions','course'));

    }

    // store doctor evaluation
    public function storeCourseEvaluation(Request $request){
        foreach ($request->questions as $key => $question){
            $answer = 'answers_'.$key;
            StudentEvaluationCourse::create([
                'course_id' => $request->course_id,
                'student_id' => \auth()->id(),
                'question_id' => $question,
                'rate' => $request->$answer,
            ]);
        }

        \Session::flash('success', 'Submitted successfully, thanks for your time');
        return redirect()->back();

    }

}
