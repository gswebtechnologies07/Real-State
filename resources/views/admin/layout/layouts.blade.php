<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>53 High Street</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ url('public/admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('public/admin/css/adminlte.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ url('public/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ url('public/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ url('public/admin/plugins/summernote/summernote-bs4.min.css')}}">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{asset('admin/images/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div> -->

    <!-- Navbar -->
    @include('admin.layout.header')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    @include('admin.layout.sidebar')

    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('admin.layout.footer')
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="{{ url('public/admin/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ url('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ url('public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ url('public/admin/js/adminlte.js') }}"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="{{ url('public/admin/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
  <script src="{{ url('public/admin/plugins/raphael/raphael.min.js') }}"></script>
  <script src="{{ url('public/admin/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
  <script src="{{ url('public/admin/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
  <!-- ChartJS -->
  <script src="{{ url('public/admin/plugins/chart.js/Chart.min.js') }}"></script>

  <!-- DataTables  & Plugins -->
  <script src="{{ url('public/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ url('public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ url('public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{ url('public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{ url('public/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{ url('public/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{ url('public/admin/plugins/jszip/jszip.min.js')}}"></script>
  <script src="{{ url('public/admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
  <script src="{{ url('public/admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
  <script src="{{ url('public/admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{ url('public/admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{ url('public/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
  <!-- Summernote -->
  <script src="{{ url('public/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
  <script src="https://kit.fontawesome.com/a2a64fe3e2.js" crossorigin="anonymous"></script>



  <!-- AdminLTE for demo purposes -->
  <!-- <script src="{{ url('admin/js/demo.js') }}"></script> -->
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- <script src="{{ url('admin/js/pages/dashboard2.js') }}"></script> -->

  <!-- custom js  -->
  <script src="{{ url('public/admin/js/custom.js')}}"></script>
  <!-- font awasame -->
  <script src="https://kit.fontawesome.com/a2a64fe3e2.js" crossorigin="anonymous"></script>

  <!-- Page specific script -->
  <script>
    $(function() {
      // index table id put here
      $("#cmspages").DataTable();
      $("#setting").DataTable();
      $("#availability").DataTable();
      $('#summernote').summernote()
      // $('#summernote').summernote()
    });
  </script>
</body>

</html>