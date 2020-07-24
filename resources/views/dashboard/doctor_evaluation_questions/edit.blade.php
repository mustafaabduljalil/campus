@extends('dashboard.layouts.master')
@section('title')
    تعديل اسئلة تقييم الدكتور
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
                <h3 class="box-title"> تعديل اسئلة تقييم الدكتور </h3>
            </div>
            <!-- /.box-header -->
            <form action="{{route('doctor.question.storeEdit')}}" method="post" data-parsley-validate="" enctype="multipart/form-data" novalidate class="error">
                @csrf
                <div class="box-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">الاسم</label>
                                <div class="col-sm-10">
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="question" id="example-question-input" required>{{old('question',$question->question)}}</textarea>
                                    </div>                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-number-input" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="demo-checkbox">
                                        <input type="submit" class="btn btn-blue" value="حفظ">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="{{$question->id}}">
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

