<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Wavepad Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ url('admin/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ url('admin/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ url('admin/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <link rel="stylesheet" href="{{ url('admin/vendors/mdi/css/materialdesignicons.min.css') }}">
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ url('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ url('admin/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('admin/js/select.dataTables.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ url('admin/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ url('admin/images/favicon.png') }}" />
  <!-- datatable -->
  <link rel="stylesheet" href="{{ url('admin/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ url('admin/css/dataTables.bootstrap4.min.css') }}">

</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.layout.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      
      <!-- partial -->
      @include('admin.layout.sidebar')
      <!-- partial -->
     @yield('content')
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ url('admin/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ url('admin/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ url('admin/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ url('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ url('admin/js/dataTables.select.min.js') }}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ url('admin/js/off-canvas.js') }}"></script>
  <script src="{{ url('admin/js/hoverable-collapse.js') }}"></script>
  <script src="{{ url('admin/js/template.js') }}"></script>
  <script src="{{ url('admin/js/settings.js') }}"></script>
  <script src="{{ url('admin/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ url('admin/js/dashboard.js') }}"></script>
  <script src="{{ url('admin/js/Chart.roundedBarCharts.js') }}"></script>
  <!-- End custom js for this page-->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://code.jquery.com/jquery.dataTables.min.js"></script>
  <script src="https://code.jquery.com/dataTables.bootstrap4.min.js"></script>
 

  <script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>
  <script src="{{url ('admin/js/custom.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>

