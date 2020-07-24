@extends('dashboard.layouts.master')
@section('title')
    اضافة طالب جديد
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
                    <h3 class="box-title">اضافة طالب جديد</h3>
                </div>
                <!-- /.box-header -->
                <form action="{{route('student.storeAdding')}}" method="post" data-parsley-validate="" novalidate class="error">
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="example-name-input" class="col-sm-2 col-form-label">الاسم</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" value="{{old('name')}}" name="name" type="text" id="example-name-input" placeholder="اسم الطالب" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">البريد الالكتروني</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" value="{{old('email')}}" name="email" type="email" placeholder="البريد الالكتروني" id="example-email-input" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-password-input" class="col-sm-2 col-form-label">كلمة المرور</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="password" type="password" placeholder="كلمة المرور" id="example-password-input" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-phone-input" class="col-sm-2 col-form-label">التليفون</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" value="{{old('phone')}}" data-parsley-type="digits" placeholder="رقم التليفون"	 name="phone" type="text" id="example-phone-input">
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

