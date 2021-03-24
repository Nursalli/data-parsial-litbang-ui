<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Parsial Litbang</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{!! asset('img/logo.png') !!}">

  <!-- DataTables -->
  <link rel="stylesheet" href="{!! asset('admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('admin-lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') !!}">

  <!-- Select2 -->
  <link rel="stylesheet" href="{!! asset('admin-lte/plugins/select2/css/select2.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('admin-lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') !!}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{!! asset('admin-lte/plugins/fontawesome-free/css/all.min.css') !!}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{!! asset('admin-lte/dist/css/adminlte.min.css') !!}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-info">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <ul class="navbar-nav ml-auto">
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li> -->
        <a class="btn btn-default" href="/admin/logout" role="button">
          <i class="fas fa-power-off"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/dashboard" class="brand-link">
      <img src="{!! asset('img/logo.png') !!}"
           alt="admin-lte Logo"
           class="brand-image img-square elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">@if (Auth::user()->namaOPD == '-') Provinsi
      @else {{ Auth::user()->namaOPD }} @endif</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{!! asset('admin-lte/dist/img/user2-160x160.jpg') !!}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/admin/profil" class="d-block mb-2">{{ Auth::user()->nama }}</a>
          <h6 class="mb-0 text-light">{{ $pageAdmin }} <br>(@if (Auth::user()->namaOPD == '-') Provinsi
      @else {{ Auth::user()->namaOPD }} @endif)</h6>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link @php if($page == 'dashboard') {echo 'active';} @endphp">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          @if($pageAdmin == 'Admin OPD' || $pageAdmin == 'Admin Ketua OPD')
          <li class="nav-item has-treeview @php if($page == 'pegawai' || $page == 'kantor' || $page == 'webaplikasi') {echo 'menu-open';} @endphp">
            <a href="#" class="nav-link @php if($page == 'pegawai' || $page == 'kantor' || $page == 'webaplikasi') {echo 'active';} @endphp">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Data Umum
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/data-umum/pegawai" class="nav-link @php if($page == 'pegawai') {echo 'active';} @endphp">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/data-umum/kantor" class="nav-link @php if($page == 'kantor') {echo 'active';} @endphp">
                  <i class="fas fa-building nav-icon"></i>
                  <p>Kantor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/data-umum/webaplikasi" class="nav-link @php if($page == 'webaplikasi') {echo 'active';} @endphp">
                  <i class="fas fa-desktop nav-icon"></i>
                  <p>Web/Aplikasi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview @php if($page == 'buku' || $page == 'penelitian' || $page == 'majalah' || $page == 'jurnal' || $page == 'mou') {echo 'menu-open';} @endphp">
            <a href="#" class="nav-link @php if($page == 'buku' || $page == 'penelitian' || $page == 'majalah' || $page == 'jurnal' || $page == 'mou') {echo 'active';} @endphp">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Data Khusus
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/data-khusus/buku" class="nav-link @php if($page == 'buku') {echo 'active';} @endphp">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Buku</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/data-khusus/penelitian" class="nav-link @php if($page == 'penelitian') {echo 'active';} @endphp">
                  <i class="fas fa-file-contract nav-icon"></i>
                  <p>Penelitian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/data-khusus/majalah" class="nav-link @php if($page == 'majalah') {echo 'active';} @endphp">
                  <i class="far fa-newspaper nav-icon"></i>
                  <p>Majalah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/data-khusus/jurnal" class="nav-link @php if($page == 'jurnal') {echo 'active';} @endphp">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>Jurnal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/data-khusus/mou" class="nav-link @php if($page == 'mou') {echo 'active';} @endphp">
                  <i class="fas fa-file-signature nav-icon"></i>
                  <p>MOU</p>
                </a>
              </li>
            </ul>
          </li>
          @endif

          @if($pageAdmin == 'Admin Utama' || $pageAdmin == 'Super Admin')
          <li class="nav-item">
            <a href="/admin/data-umum-admin-utama" class="nav-link @php if($page == 'data-umum') {echo 'active';} @endphp">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Data Umum OPD
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/data-khusus-admin-utama" class="nav-link @php if($page == 'data-khusus') {echo 'active';} @endphp">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Data Khusus OPD
              </p>
            </a>
          </li>
          @if($pageAdmin == 'Super Admin')
          <li class="nav-item">
            <a href="/admin/manajemen-user-opd" class="nav-link @php if($page == 'manajemen-user-opd') {echo 'active';} @endphp">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Manajemen User OPD
              </p>
            </a>
          </li>
          @endif
          @endif
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; <?php echo date('Y'); ?> Data Parsial Litbang</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{!! asset('admin-lte/plugins/jquery/jquery.min.js') !!}"></script>
<!-- Script Modal -->
<!-- <script src="{!! asset('js/script.js') !!}"></script> -->
<!-- Bootstrap 4 -->
<script src="{!! asset('admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
<!-- ChartJS -->
<script src="{!! asset('admin-lte/plugins/chart.js/Chart.min.js') !!}"></script>
<!-- admin-lte App -->
<script src="{!! asset('admin-lte/dist/js/adminlte.min.js') !!}"></script>
<!-- admin-lte for demo purposes -->
<script src="{!! asset('admin-lte/dist/js/demo.js') !!}"></script>
<!-- Select2 -->
<script src="{!! asset('admin-lte/plugins/select2/js/select2.full.min.js') !!}"></script>

<!-- DataTables -->
<script src="{!! asset('admin-lte/plugins/datatables/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') !!}"></script>
<script src="{!! asset('admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js') !!}"></script>
<script src="{!! asset('admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') !!}"></script>

<!-- bs-custom-file-input -->
<script src="{!! asset('admin-lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') !!}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $(".example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<!-- page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('.reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('.reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePicker24Hour: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY H:mm'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>

@yield('addScript')

<script type="text/javascript">
  $(document).ready(function () {
    bsCustomFileInput.init();
  });
</script>

</body>
</html>
