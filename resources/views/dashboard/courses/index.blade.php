@extends('dashboard.layouts.master')
@section('title')
    الكورسات
@endsection
@section('styles')
    <style>
        #courses tbody tr {
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
                                <h3 class="box-title">جدول الكورسات</h3>
                                @if(\Illuminate\Support\Facades\Auth::user()->role == "admin")
                                    <a class="btn btn-cyan" style="float: left;" href="{{route('course.addForm')}}">اضف كورس</a>
                                @endif
                            </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="courses" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>الاسم</th>
                                    <th>الوصف</th>
                                    <th>الفترة الزمنية</th>
                                    <th>المستوي</th>
                                    <th>اللغة</th>
                                    <th>عدد المحاضرات</th>
                                    <th>عدد الطلاب</th>
                                    <th>الدكتور</th>
                                    <th>تقييم الاول</th>
                                    <th>تقييم الثاني</th>
                                    <th>تقييم الثالث</th>
                                    <th>الصوره</th>
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

        $('#courses').DataTable({
            destroy: true,
            processing: true,
            serverSide: true,
            order: [[0, "asc"]],
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copyHtml5',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3,4,5,6 ]
                    }
                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3,4,5,6 ]
                    }
                },
                {
                    extend: 'pdfHtml5',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3,4,5,6 ]
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3,4,5,6 ]
                    }
                },

            ],
            select: true,
            ajax: {
                "url": '{{route("course.fetchCourses")}}',
                "type": 'GET'
            },
            columns: [
                {data: 'name', name: 'name'},
                {data: 'description', name: 'description'},
                {data: 'duration', name: 'duration'},
                {data: 'level', name: 'level'},
                {data: 'language', name: 'language'},
                {data: 'lectures_count', name: 'lectures_count'},
                {data: 'students_count', name: 'students_count'},
                {data: 'doctor', name: 'doctor'},
                {data: 'doc1', name: 'doc1'},
                {data: 'doc2', name: 'doc2'},
                {data: 'doc3', name: 'doc3'},
                {data: 'image', name: 'image'},
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

        function deleteCourse(id) {
            Swal.fire({
                title: 'هل انت متاكد من الحذف ؟',
                text: "ﻻ تستطيع استعاده الدكتور بعد الحذف",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'نعم',
                cancelButtonText: 'ﻻ',
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        'url':'/courses/delete',
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

