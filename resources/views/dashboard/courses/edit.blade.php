@extends('dashboard.layouts.master')
@section('title')
    تعديل البيانات
@endsection
@section('styles')
@endsection
@section('modals')
@endsection
@section('content')
    <div class="content-wrapper" style="min-height: 1295.8px;">
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"> تعديل بيانات </h3>
                </div>
                <!-- /.box-header -->
                <form action="{{route('course.storeEdit')}}" method="post" data-parsley-validate="" enctype="multipart/form-data" novalidate class="error">
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="example-name-input" class="col-sm-2 col-form-label">الاسم</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" value="{{old('name',$course->name)}}" name="name" type="text" id="example-name-input" placeholder="اسم الكورس" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-description-input" class="col-sm-2 col-form-label">الوصف</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" value="{{old('description',$course->description)}}" name="description" id="example-description-input" placeholder="وصف الكورس" required>{{old('description',$course->description)}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-duration-input" class="col-sm-2 col-form-label">الفترة الزمنية</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" value="{{old('duration',$course->duration)}}" name="duration" type="text" id="example-duration-input" placeholder="الفتروالزمنية بالاسبوع" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-lectures-count-input" class="col-sm-2 col-form-label">عدد المحاضرات</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" value="{{old('lectures_count',$course->lectures_count)}}" name="lectures_count" type="number" min="1" id="example-lectures-count-input" placeholder="عدد المحاضرات" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-students-count-input" class="col-sm-2 col-form-label">عدد الطلاب</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" value="{{old('students_count',$course->students_count)}}" name="students_count" type="number" min="1" id="example-students-count-input" placeholder="عدد الطلاب" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-language-input" class="col-sm-2 col-form-label">اللغة</label>
                                    <div class="col-sm-10">
                                        <select class="form-control select2 select2-hidden-accessible" name="language" style="width: 100%;" tabindex="-1" aria-hidden="true" required>
                                            <option value="العربية" {{$course->language == "العربية" ? 'selected' : ''}}>العربية</option>
                                            <option value="English" {{$course->language == "English" ? 'English' : ''}}>English</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-level-input" class="col-sm-2 col-form-label">المستوي</label>
                                    <div class="col-sm-10">
                                        <select class="form-control select2 select2-hidden-accessible" name="level" style="width: 100%;" tabindex="-1" aria-hidden="true" required>
                                            <option value="1" {{$course->level == "1" ? 'selected' : ''}}>الاولي</option>
                                            <option value="2" {{$course->level == "2" ? 'selected' : ''}}>الثانية</option>
                                            <option value="3" {{$course->level == "3" ? 'selected' : ''}}>الثالثة</option>
                                            <option value="4" {{$course->level == "4" ? 'selected' : ''}}>الرابعة</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-doctor-id-input" class="col-sm-2 col-form-label">الدكتور</label>
                                    <div class="col-sm-10">
                                        <select class="form-control select2 select2-hidden-accessible" name="doctor_id" style="width: 100%;" tabindex="-1" aria-hidden="true" required>
                                            @foreach($doctors as $doctor)
                                                <option value="{{$doctor->id}}" {{$course->doctor_id == $doctor->id ? 'selected' : ''}}>{{$doctor->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-number-input" class="col-sm-2 col-form-label">الصوره</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image">
                                        <img src="{{$course->image}}" alt="admin image" class="img-responsive" style="width: 100px;">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-number-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <div class="demo-checkbox">
                                            <input type="submit" class="btn btn-blue" value="حفظ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="{{$course->id}}">
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </form>
                <!-- /.box-body -->
            </div>
        </section>
    </div>
@endsection
@section('scripts')
@endsection

