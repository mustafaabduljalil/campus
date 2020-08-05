<?php

namespace App\Http\Controllers\Dashboard;

use App\CourseEvaluationQuestion;
use App\DoctorEvaluationQuestion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class CourseEvaluationQuestionController extends Controller
{
    // return doctor evaluation questions view
    public function index(){
        return view('dashboard.course_evaluation_questions.index');
    }

    // fetch doctors for datatable
    public function fetchQuestions()
    {
        $questions = CourseEvaluationQuestion::all();

        return DataTables::of($questions)
            ->addColumn('question', function ($question) {
                return $question->question;
            })
            ->addColumn('action', function ($question) {
                if(Auth::user()->role == "subAdmin"){
                    return '';
                }
                return '<a class="btn action-btn" href=\'/courses/question/edit/'.$question->id.'\'><span class="fa fa-pencil"></span></a>
                <a class="btn action-btn" onclick=\'deleteQuestion('.$question->id.')\'><span class="fa fa-trash-o"></span></a>';

            })
            ->rawColumns(['action'])
            ->make(true);
    }

    // return edit view
    public function editForm($id){
        $question = CourseEvaluationQuestion::find($id);
        return view('dashboard.course_evaluation_questions.edit',compact('question'));
    }

    // store edit
    public function storeEdit(Request $request){

        $rules = [
            'question' => 'required|string',
        ];

        $this->validate($request,$rules);
        $question = CourseEvaluationQuestion::find($request->id);
        $question->question = $request->question;
        $question->update();

        \Session::flash('success', 'تم تعديل بيانات السؤال بنجاح');
        return redirect()->route('course.question.index');

    }

    // return add view
    public function addForm(){
        return view('dashboard.course_evaluation_questions.add');
    }

    // store new doctor
    public function storeAdding(Request $request){
        $rules = [
            'question' => 'required|string',
        ];
        $this->validate($request,$rules);

        $newQuestion = new CourseEvaluationQuestion();
        $newQuestion->question = $request->question;
        $newQuestion->save();

        \Session::flash('success', 'تم انشاء السؤال بنجاح');
        return redirect()->route('course.question.index');
    }

    // delete doctor
    public function delete(Request $request){
        CourseEvaluationQuestion::where('id',$request->id)->delete();
        \Session::flash('success', 'تم خذف السؤال بنجاح');
        return redirect()->route('course.question.index');
    }
}
