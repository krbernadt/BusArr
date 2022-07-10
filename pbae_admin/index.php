<?php
session_start();
if(!isset($_SESSION['email'])){
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bus-Arr | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

  <script src="index.js"></script>

  <link rel="stylesheet" href="style.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/logo.png" alt="Bus-Arr" height="60" width="80">
    </div>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button">
            <i class="fas fa-bars"></i>
          </a>
      </ul>


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
        <!-- lAYAR PENUH -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>  
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <img src="dist/img/BusArrLogo.png" width="50" alt="AdminLTE Logo" class=""
          style="opacity: .8">
        <span class="brand-text font-weight-light"> Bus-Arr</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Aditya Pratama</a>
          </div>
        </div> -->
        
      <!-- Sidebar Menu -->
 <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->

      
      <li class="nav-item">
        <a href="index.php" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="monitoring.php" class="nav-link">
          <i class="nav-icon fa fa-map"></i>
          <p>
            Monitoring
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="data-corridor.php" class="nav-link">
          <i class="nav-icon fas fa fa-bus"></i>
          <p>
            Data Corridor
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="data-halte.php" class="nav-link">
          <i class="nav-icon fa fa-university"></i>
          <p>
            Data Halte
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
     </li>
      <li class="nav-item">
        <a href="data-user.php" class="nav-link">
          <i class="nav-icon fas fa-user-circle"></i>
          <p>
            Data User
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="data-operator.php" class="nav-link">
          <i class="nav-icon fa fa-users"></i>
          <p>
            Data Operator
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Project Add</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body rounded-top" style="background-color: #17a2b7; color: #fff;">
                <div class="row">
                  <div class="col-md-6">
                    <h1>00</h1>
                    <h4>Pengguna Aktif</h4>
                  </div>
                  <div class="col-md-6" style="text-align: right;">
                    <i class="fas fa-user" style="font-size: 100px; color: #1491a5;"></i>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <div class="card-footer rounded-bottom"
                style="line-height: 5.5px; text-align: center; background-color: #1491a5">
                <a href="#" style="color: #fff;">More Info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
            <div class="card rounded">
              <div class="card-body rounded-top" style="background-color: #17a2b7; color: #fff;">
                <div class="row">
                  <div class="col-md-6">
                    <h1></h1>
                    <?php
                              include 'koneksi.php';

                              $query = mysqli_query($connection, "SELECT * FROM user WHERE id_user IN (SELECT MAX(id_user) FROM user)");
                              while ($data = mysqli_fetch_assoc($query)) {
                            ?>

                                <h1><?php echo $data['id_user'];?></h1>
                              
                              <?php
          }
          ?>
                    <h4>Daftar Pengguna</h4>
                  </div>
                  <div class="col-md-6" style="text-align: right;">
                    <i class="fas fa-user-plus" style="font-size: 100px; color: #1491a5;"></i>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <div class="card-footer rounded-bottom"
                style="line-height: 5.5px; text-align: center; background-color: #1491a5">
                <a href="#" style="color: #fff;">More Info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-body" style="height: 460px;">
                        <div id="map"></div>
                          <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
                          <script
                          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGXEIieQ3VpO2lqwL0LJmX85JhfwgYZ1Q&callback=initMap&v=weekly"
                          async>
                          </script>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2021 <a>Bus-Arr</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>