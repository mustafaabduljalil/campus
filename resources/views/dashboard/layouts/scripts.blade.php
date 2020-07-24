<!-- jQuery 3 -->
<script src="{{asset('assets/vendor_components/jquery/dist/jquery.min.js')}}"></script>
<!-- popper -->
<script src="{{asset('assets/vendor_components/popper/dist/popper.min.js')}}"></script>
<!-- Bootstrap 4.0-->
<script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('assets/vendor_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('assets/vendor_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('assets/vendor_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('assets/vendor_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('assets/vendor_components/fastclick/lib/fastclick.js')}}"></script>
<!-- peity -->
<script src="{{asset('assets/vendor_components/jquery.peity/jquery.peity.js')}}"></script>
<!-- easypiechart -->
<script type="text/javascript" src="{{asset('assets/vendor_components/easypiechart/dist/jquery.easypiechart.js')}}"></script>
<!-- Alfa_admin App -->
<script src="{{asset('js/template.js')}}"></script>

<!-- start - This is for export functionality only -->
<script src="{{asset('assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js')}}"></script>
<script src="{{asset('assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js')}}"></script>
<!-- end - This is for export functionality only -->
<!-- Alfa_admin for Data Table -->
<script src="{{asset('js/sweetalert2.min.js')}}"></script>

<script src="{{asset('/js/pages/data-table.js')}}"></script>
<!-- Parsly validation -->
<script src="{{asset('js/parsley.min.js')}}"></script>
{{--Toaster js--}}
<script src="{{asset('js/toastr.min.js')}}"></script>
{{--sweet alert--}}
<script src="{{asset('assets/vendor_components/select2/dist/js/select2.full.js')}}"></script>
<script>
    $(".select2").select2();

</script>
@yield('scripts')
