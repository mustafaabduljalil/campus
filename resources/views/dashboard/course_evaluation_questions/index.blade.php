@extends('dashboard.layouts.master')
@section('title')
    جدول اسئلة تقييم الكورس
@endsection
@section('styles')
    <style>
        #doctors tbody tr {
            word-break: break-all;
        }
    </style>
@endsection
@section('modals')
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">

                    <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">جدول اسئلة تقييم الكورس</h3>
                                @if(\Illuminate\Support\Facades\Auth::user()->role == "admin")
                                    <a class="btn btn-cyan" style="float: left;" href="{{route('course.question.addForm')}}">اضف سؤال</a>
                                @endif
                            </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="questions" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>السؤال</th>
                                        <th>العمليات</th>
                                    </tr>
                                </thead>
                            </table>


                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('scripts')
    <script type="text/javascript">

        $('#questions').DataTable({
            destroy: true,
            processing: true,
            serverSide: true,
            order: [[0, "asc"]],
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copyHtml5',
                    exportOptions: {
                        columns: [ 0 ]
                    }
                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [ 0 ]
                    }
                },
                {
                    extend: 'pdfHtml5',
                    exportOptions: {
                        columns: [ 0 ]
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [ 0 ]
                    }
                },

            ],
            select: true,
            ajax: {
                "url": '{{route("course.question.fetchQuestions")}}',
                "type": 'GET'
            },
            columns: [
                {data: 'question', name: 'question'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            // aLengthMenu: [
            //     [10, 50, 100, 200, -1],
            //     [10, 50, 100, 200, "All"]
            // ]
            "oLanguage": {
                "sSearch": "بحث : "
            }
        });

        function deleteQuestion(id) {
            Swal.fire({
                title: 'هل انت متاكد من الحذف ؟',
                text: "ﻻ تستطيع استعاده السؤال بعد الحذف",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'نعم',
                cancelButtonText: 'ﻻ',
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        'url':'/courses/question/delete',
                        'type':'POST',
                        'data':{
                            'id' : id,
                            "_token": "{{ csrf_token() }}",
                        },
                        success:function(data){
                            location.reload(true);
                        },
                        error : function(){
                        }
                    });
                }
            })

        }

    </script>
@endsection

