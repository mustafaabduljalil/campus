<?php

namespace App\Http\Controllers\Dashboard;

use App\Course;
use App\User;
use App\UserCourse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    // return student view
    public function index(){
        return view('dashboard.students.index');
    }

    // fetch students for datatable
    public function fetchStudents()
    {
        $students = User::where('role', 'student')->get();

        return DataTables::of($students)
            ->addColumn('name', function ($student) {
                return $student->name;
            })
            ->addColumn('email', function ($student) {
                return $student->email;
            })
            ->addColumn('phone', function ($student) {
                return $student->phone;
            })
            ->addColumn('image', function ($student) {
                return '<img src="'.$student->image.'" style="width:60px;">';
            })
            ->addColumn('action', function ($student) {

                if(Auth::user()->role == "subAdmin"){
                    return '';
                }

                if($student->id != Auth::user()->id){
                    return '
                    <a class="btn action-btn" href=\'/students/edit/'.$student->id.'\'><span class="fa fa-pencil"></span></a>
                    <a class="btn action-btn" onclick=\'deleteStudent('.$student->id.')\'><span class="fa fa-trash-o"></span></a>';
                    ;
                }else{
                    return '
                    <a class="btn action-btn" href=\'/student/edit/'.$student->id.'\'><span class="fa fa-pencil"></span></a>';
                    ;
                }

            })
            ->rawColumns(['action', 'image'])
            ->make(true);
    }

    // return edit view
    public function editForm($id){
        $user = User::find($id);
        $courses = Course::get();
        $studentCourse = UserCourse::where('student_id',$user->id)->pluck('course_id')->toArray();
        return view('dashboard.students.edit',compact('user','courses','studentCourse'));
    }

    // store edit
    public function storeEdit(Request $request){

        $rules = [
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'password' => 'nullable|string|min:6',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $this->validate($request,$rules);
        $user = User::find($request->id);

        // upload image if exist
        if($request->hasFile('image')){
            $image      = $request->file('image');
            $imageName   = time() . '.' . $image->getClientOriginalExtension();
            $path = 'images/students/'.$imageName;
            Storage::disk('public')->putFileAs('images/students/', $image, $imageName);
            $user->image = $path;

        }

        if(!is_null($request->password)){
            $user->password = bcrypt($request->password);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->update();

        // courses
        if($request->has('courses') && count($request->courses) > 0){
            UserCourse::where('student_id',$user->id)->delete();
            foreach ($request->courses as $course){
                UserCourse::create([
                    'student_id' => $user->id,
                    'course_id' => $course
                ]);
            }
        }

        \Session::flash('success', 'تم تعديل بيانات الطالب بنجاح');
        return redirect()->route('student.index');

    }

    // return add view
    public function addForm(){
        return view('dashboard.students.add');
    }

    // store new student
    public function storeAdding(Request $request){
        $rules = [
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|min:6',
        ];
        $this->validate($request,$rules);

        $newStudent = new User();
        $newStudent->name = $request->name;
        $newStudent->email = $request->email;
        $newStudent->password = bcrypt($request->password);
        $newStudent->phone = $request->phone;
        $newStudent->role = 'student';
        $newStudent->save();

        \Session::flash('success', 'تم انشاء الطالب بنجاح');
        return redirect()->route('student.index');
    }

    // delete student
    public function delete(Request $request){
        User::where('id',$request->id)->delete();
        \Session::flash('success', 'تم خذف الطالب بنجاح');
        return redirect()->route('student.index');
    }

}
