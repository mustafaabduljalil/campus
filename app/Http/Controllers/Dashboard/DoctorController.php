<?php

namespace App\Http\Controllers\Dashboard;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    // return doctors view
    public function index(){
        return view('dashboard.doctors.index');
    }

    // fetch doctors for datatable
    public function fetchDoctors()
    {
        $doctors = User::where('role', 'doctor')->get();

        return DataTables::of($doctors)
            ->addColumn('name', function ($doctor) {
                return $doctor->name;
            })
            ->addColumn('email', function ($doctor) {
                return $doctor->email;
            })
            ->addColumn('phone', function ($doctor) {
                return $doctor->phone;
            })
            ->addColumn('rate', function ($doctor) {
                return $doctor->rates->avg('rate');
            })
            ->addColumn('image', function ($doctor) {
                return '<img src="'.$doctor->image.'" style="width:60px;">';
            })
            ->addColumn('action', function ($doctor) {
                if(Auth::user()->role == "subAdmin"){
                    return '';
                }
                if($doctor->id != Auth::user()->id){
                    return '
                    <a class="btn action-btn" href=\'/doctors/edit/'.$doctor->id.'\'><span class="fa fa-pencil"></span></a>
                    <a class="btn action-btn" onclick=\'deleteDoctor('.$doctor->id.')\'><span class="fa fa-trash-o"></span></a>';
                    ;
                }else{
                    return '
                    <a class="btn action-btn" href=\'/doctor/edit/'.$doctor->id.'\'><span class="fa fa-pencil"></span></a>';
                    ;
                }

            })
            ->rawColumns(['action', 'image'])
            ->make(true);
    }

    // return edit view
    public function editForm($id){
        $user = User::find($id);
        return view('dashboard.doctors.edit',compact('user'));
    }

    // store edit
    public function storeEdit(Request $request){

        $rules = [
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'specialization' => 'required|string',
            'password' => 'nullable|string|min:6',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $this->validate($request,$rules);
        $user = User::find($request->id);

        // upload image if exist
        if($request->hasFile('image')){
            $image      = $request->file('image');
            $imageName   = time() . '.' . $image->getClientOriginalExtension();
            $path = 'images/doctors/'.$imageName;
            Storage::disk('public')->putFileAs('images/doctors/', $image, $imageName);
            $user->image = $path;

        }

        if(!is_null($request->password)){
            $user->password = bcrypt($request->password);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->specialization = $request->specialization;
        $user->update();

        \Session::flash('success', 'تم تعديل بيانات الدكتور بنجاح');
        return redirect()->route('doctor.index');

    }

    // return add view
    public function addForm(){
        return view('dashboard.doctors.add');
    }

    // store new doctor
    public function storeAdding(Request $request){
        $rules = [
            'name' => 'required|string',
            'phone' => 'required|string',
            'specialization' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|min:6',
        ];
        $this->validate($request,$rules);

        $newDoctor = new User();
        $newDoctor->name = $request->name;
        $newDoctor->email = $request->email;
        $newDoctor->password = bcrypt($request->password);
        $newDoctor->phone = $request->phone;
        $newDoctor->specialization = $request->specialization;
        $newDoctor->role = 'doctor';
        $newDoctor->save();

        \Session::flash('success', 'تم انشاء الدكتور بنجاح');
        return redirect()->route('doctor.index');
    }

    // delete doctor
    public function delete(Request $request){
        User::where('id',$request->id)->delete();
        \Session::flash('success', 'تم خذف الدكتور بنجاح');
        \Session::flash('success', 'تم خذف الدكتور بنجاح');
        return redirect()->route('doctor.index');
    }

}
