<?php

namespace App\Http\Controllers\Dashboard;

use App\Course;
use App\CourseEvaluation;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class CourseController extends Controller
{
    // return student view
    public function index(){
        return view('dashboard.courses.index');
    }

    // fetch courses for datatable
    public function fetchCourses()
    {
        $courses = Course::get();

        return DataTables::of($courses)
            ->addColumn('name', function ($course) {
                return $course->name;
            })
            ->addColumn('description', function ($course) {
                return $course->description;
            })
            ->addColumn('duration', function ($course) {
                return $course->duration;
            })
            ->addColumn('level', function ($course) {
                return $course->level;
            })
            ->addColumn('language', function ($course) {
                return $course->language;
            })
            ->addColumn('doctor', function ($course) {
                return $course->doctor->name;
            })
            ->addColumn('doc1', function ($course) {
                return '<a href="/courses/courseEvaluations/'.$course->id.'/doc1" class="btn btn-sm btn-info">Evaluation 1</a>';
            })
            ->addColumn('doc2', function ($course) {
                return '<a href="/courses/courseEvaluations/'.$course->id.'/doc2" class="btn btn-sm btn-info">Evaluation 2</a>';
            })
            ->addColumn('doc3', function ($course) {
                return '<a href="/courses/courseEvaluations/'.$course->id.'/doc3" class="btn btn-sm btn-info">Evaluation 3</a>';
            })
            ->addColumn('lectures_count', function ($course) {
                return $course->lectures_count;
            })
            ->addColumn('students_count', function ($course) {
                return $course->students_count;
            })
            ->addColumn('image', function ($course) {
                return '<img src="'.$course->image.'" style="width:60px;">';
            })
            ->addColumn('action', function ($course) {
                if(Auth::user()->role == "subAdmin"){
                    return '';
                }
                return '<a class="btn action-btn" href=\'/courses/edit/'.$course->id.'\'><span class="fa fa-pencil"></span></a>
                <a class="btn action-btn" onclick=\'deleteCourse('.$course->id.')\'><span class="fa fa-trash-o"></span></a>';
            })
            ->rawColumns(['action', 'image', 'doc1', 'doc2', 'doc3'])
            ->make(true);
    }

    // return student view
    public function courseEvaluations($courseId,$type){
        return view('dashboard.courses.course-evaluations',compact('courseId','type'));
    }

    // fetch course evaluations
    public function fetchCoursesEvaluation($courseId,$type)
    {
        $evaluations = CourseEvaluation::where('course_id',$courseId)->where('type',$type)
                                        ->where('value','>=',0)->selectRaw('AVG(value) avg , evaluation_number as number')
                                        ->groupBy('evaluation_number')->get();

        return DataTables::of($evaluations)
            ->addColumn('number', function ($evaluation) {
                return $evaluation->number;
            })
            ->addColumn('avg', function ($evaluation) {
                return number_format($evaluation->avg,2).'%';
            })
            ->addColumn('action', function ($evaluation) use($courseId,$type) {
                return '<a class="btn action-btn btn-info" href=\'/courses/courseEvaluationsResults/'.$courseId.'/'.$type.'\'><span class="fa fa-pencil"></span></a>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    // return student view
    public function courseEvaluationsResults($courseId,$type){
        return view('dashboard.courses.course-evaluations-results',compact('courseId','type'));
    }

    // fetch course evaluations
    public function fetchCoursesEvaluationResults($courseId,$type)
    {
        $evaluations = CourseEvaluation::where('course_id',$courseId)->where('type',$type)
                                        ->where('value','>=',0)
                                        ->orderByDesc('created_at')
                                        ->whereNotIn('option',['type','course_id','doc','doctor_id'])
                                        ->get();

        return DataTables::of($evaluations)
            ->addColumn('option', function ($evaluation) {
                return $evaluation->option;
            })
            ->addColumn('value', function ($evaluation) {
                return $evaluation->value;
            })
            ->make(true);
    }


    // return edit view
    public function editForm($id){
        $course = Course::find($id);
        $doctors = User::where('role','doctor')->get();
        return view('dashboard.courses.edit',compact('course','doctors'));
    }

    // store edit
    public function storeEdit(Request $request){

        $rules = [
            'name' => 'required|string',
            'description' => 'required|string',
            'level' => 'required|string',
            'duration' => 'required|string',
            'students_count' => 'required|string',
            'lectures_count' => 'required|string',
            'language' => 'required|string',
            'doctor_id' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:3500',
        ];
        $this->validate($request,$rules);

        $course = Course::find($request->id);
        $course->name = $request->name;
        $course->description = $request->description;
        $course->level = $request->level;
        $course->duration = $request->duration;
        $course->students_count = $request->students_count;
        $course->lectures_count = $request->lectures_count;
        $course->language = $request->language;
        $course->doctor_id = $request->doctor_id;

        // upload image if exist
        if($request->hasFile('image')){
            $image      = $request->file('image');
            $imageName   = time() . '.' . $image->getClientOriginalExtension();
            $path = 'images/courses/'.$imageName;
            Storage::disk('public')->putFileAs('images/courses/', $image, $imageName);
            $course->image = $path;
        }
        $course->update();

        \Session::flash('success', 'تم تعديل بيانات الكورس بنجاح');
        return redirect()->route('course.index');

    }

    // return add view
    public function addForm(){
        $doctors = User::where('role','doctor')->get();
        return view('dashboard.courses.add',compact('doctors'));
    }

    // store new student
    public function storeAdding(Request $request){
        $rules = [
            'name' => 'required|string',
            'description' => 'required|string',
            'level' => 'required|string',
            'duration' => 'required|string',
            'students_count' => 'required|string',
            'lectures_count' => 'required|string',
            'language' => 'required|string',
            'doctor_id' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3500',
        ];
        $this->validate($request,$rules);

        $newCourse = new Course();
        $newCourse->name = $request->name;
        $newCourse->description = $request->description;
        $newCourse->level = $request->level;
        $newCourse->duration = $request->duration;
        $newCourse->students_count = $request->students_count;
        $newCourse->lectures_count = $request->lectures_count;
        $newCourse->language = $request->language;
        $newCourse->doctor_id = $request->doctor_id;

        // upload image if exist
        if($request->hasFile('image')){
            $image      = $request->file('image');
            $imageName   = time() . '.' . $image->getClientOriginalExtension();
            $path = 'images/courses/'.$imageName;
            Storage::disk('public')->putFileAs('images/courses/', $image, $imageName);
            $newCourse->image = $path;
        }
        $newCourse->save();

        \Session::flash('success', 'تم انشاء الكورس بنجاح');
        return redirect()->route('course.index');
    }

    // delete course
    public function delete(Request $request){
        Course::where('id',$request->id)->delete();
        \Session::flash('success', 'تم خذف الكورس بنجاح');
        return redirect()->route('course.index');
    }
}
