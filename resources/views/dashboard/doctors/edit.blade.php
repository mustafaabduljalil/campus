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
            <form action="{{route('doctor.storeEdit')}}" method="post" data-parsley-validate="" enctype="multipart/form-data" novalidate class="error">
                @csrf
                <div class="box-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">الاسم</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="name" type="text" value="{{$user->name}}" id="example-name-input" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-sm-2 col-form-label">البريد الالكتروني</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="email" type="email" value="{{$user->email}}" id="example-email-input" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-password-input" class="col-sm-2 col-form-label">كلمة المرور</label>
                                <div class="col-sm-10">
                                    <input class="form-control" placeholder="اذا لم تقوم بتغير كلمة المرور اتركها فارغه" name="password" type="password" id="example-password-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-sm-2 col-form-label">التليفون</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="phone" type="text" value="{{$user->phone}}" id="example-phone-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-specialization-input" class="col-sm-2 col-form-label">التخصص العلمي</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{$user->specialization}}" name="specialization" type="text" id="example-specialization-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-number-input" class="col-sm-2 col-form-label">الصوره</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image">
                                    <img src="{{$user->image}}" alt="admin image" class="img-responsive" style="width: 100px;">
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
                            <input type="hidden" name="id" value="{{$user->id}}">
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

