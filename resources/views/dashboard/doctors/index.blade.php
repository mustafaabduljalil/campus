@extends('dashboard.layouts.master')
@section('title')
    الدكاترة
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
                            <h3 class="box-title">جدول الدكاترة</h3>
                            @if(\Illuminate\Support\Facades\Auth::user()->role == "admin")
                                <a class="btn btn-cyan" style="float: left;" href="{{route('doctor.addForm')}}">اضف دكتور</a>
                            @endif
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="doctors" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>الاسم</th>
                                        <th>البريد الالكتروني</th>
                                        <th>التليفون</th>
                                        <th>التقيم</th>
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

        $('#doctors').DataTable({
            destroy: true,
            processing: true,
            serverSide: true,
            order: [[0, "asc"]],
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copyHtml5',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3,4 ]
                    }
                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3,4 ]
                    }
                },
                {
                    extend: 'pdfHtml5',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3,4 ]
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3,4 ]
                    }
                },

            ],
            select: true,
            ajax: {
                "url": '{{route("doctor.fetchDoctors")}}',
                "type": 'GET'
            },
            columns: [
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'phone', name: 'phone'},
                {data: 'rate', name: 'rate'},
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

        function deleteDoctor(id) {
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
                        'url':'/doctors/delete',
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

