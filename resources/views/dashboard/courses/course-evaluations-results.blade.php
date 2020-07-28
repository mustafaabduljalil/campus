@extends('dashboard.layouts.master')
@section('title')
    التقييم
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
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="courses-evaluation" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>السوال</th>
                                    <th>الاجابة</th>
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

        $('#courses-evaluation').DataTable({
            destroy: true,
            processing: true,
            serverSide: true,
            order: [[0, "asc"]],
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copyHtml5',
                    exportOptions: {
                        columns: [ 0,1 ]
                    }
                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [ 0,1 ]
                    }
                },
                {
                    extend: 'pdfHtml5',
                    exportOptions: {
                        columns: [ 0,1 ]
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [ 0,1 ]
                    }
                },

            ],
            select: true,
            ajax: {
                "url": '/courses/fetchCoursesEvaluationResults/{{$courseId}}/{{$type}}',
                "type": 'GET'
            },
            columns: [
                {data: 'option', name: 'option'},
                {data: 'value', name: 'value'},
            ],
            "oLanguage": {
                "sSearch": "بحث : "
            }
        });

    </script>
@endsection

