<?php

namespace App\Http\Controllers;

use App\Course;
use App\CourseEvaluation;
use App\StudentEvaluationDoctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    //
    public function details($id){
        $course = Course::find($id);
        $course->viewers = $course->viewers +1;
        $course->update();
        $relatedCourses = Course::with('doctor')->where('id','!=',$id)->where('doctor_id',$course->doctor_id)->get();
        $doc1 = CourseEvaluation::where('course_id',$id)->where('type','doc1')->first();
        $doc2 = CourseEvaluation::where('course_id',$id)->where('type','doc2')->first();
        $doc3 = CourseEvaluation::where('course_id',$id)->where('type','doc3')->first();

        return view('course-details',compact('course','relatedCourses','doc1','doc2','doc3'));
    }

    // return course evaluate view
    public function courseEvaluation($id,$number){
        $course = Course::find($id);
        switch ($number){
            case 2:
                $type = 'doc2';
                break;
            case 3:
                $type = 'doc3';
                break;
            default:
                $type = 'doc1';
                break;

        }
        $checkIfSubmittedBefore = CourseEvaluation::where('id',$id)->where('type',$type)->first();
//        if(!is_null($checkIfSubmittedBefore)){
//            \Session::flash('success', 'Submitted before successfully, thanks for your time');
//            return redirect('/course/'.$id);
//        }
        return view('course-evaluation-'.$number,compact('course','type'));
    }


    // store doctor evaluation
    public function storeEvaluation(Request $request){
//dd($request->all());
        try {
            DB::beginTransaction();
            $getLastEvaluationNumber = CourseEvaluation::where('course_id',$request->course_id)
                                                        ->where('doctor_id',$request->doctor_id)
                                                        ->where('type',$request->doc)
                                                        ->orderByDesc('created_at')
                                                        ->first();
            foreach ($request->all() as $option => $value){

                if($option != "_token"){
                    if(is_array($value)){
                        foreach ($value as $index => $val){
                            CourseEvaluation::create([
                                'course_id' => $request->course_id,
                                'doctor_id' => $request->doctor_id,
                                'option' => $option,
                                'value' => $index,
                                'type' => $request->doc,
                                'evaluation_number' => !is_null($getLastEvaluationNumber) ? $getLastEvaluationNumber->evaluation_number + 1 : 1,
                            ]);
                        }
                    }else{
                        CourseEvaluation::create([
                            'course_id' => $request->course_id,
                            'doctor_id' => $request->doctor_id,
                            'option' => $option,
                            'value' => $value,
                            'type' => $request->doc,
                            'evaluation_number' => !is_null($getLastEvaluationNumber) ? $getLastEvaluationNumber->evaluation_number + 1 : 1,
                        ]);
                    }

                }

            }

            DB::commit();
        }catch (\Exception $e){
            DB::rollBack();
            \Session::flash('error', 'Something wrong , try again');
            return redirect()->back();
        }

        \Session::flash('success', 'Submitted successfully, thanks for your time');
        return redirect('/course/'.$request->course_id);

    }

}
