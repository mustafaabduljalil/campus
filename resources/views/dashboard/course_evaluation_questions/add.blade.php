@extends('dashboard.layouts.master')
@section('title')
    اضافة اسئلة تقييم الكورس
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
                    <h3 class="box-title">اضافة اسئلة تقييم الكورس</h3>
                </div>
                <!-- /.box-header -->
                <form action="{{route('course.question.storeAdding')}}" method="post" data-parsley-validate="" novalidate class="error">
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="example-question-input" class="col-sm-2 col-form-label">السؤال</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" value="{{old('question')}}" name="question" id="example-question-input" required></textarea>
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

