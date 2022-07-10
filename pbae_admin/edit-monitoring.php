<?php
include 'koneksi.php';
$id_monitor    = $_GET['id_monitor'];
$query       = mysqli_query($connection, "select * from monitoring where id_monitor='$id_monitor'");
$data        = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bus-Arr | Monitoring </title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
          <span class="brand-text font-weight-light">Bus-Arr</span>
        </a>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="monitoring.php" class="nav-link active">
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
              <a href="data-pengguna.php" class="nav-link ">
                <i class="nav-icon fas fa-user-circle"></i>
                <p>
                Data Pengguna
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
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-12">
                <div class="col-sm-6"></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Project Add</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>
      <script>
        $(document).ready(function(){
        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();
        // Select/Deselect checkboxes
        var checkbox = $('table tbody input[type="checkbox"]');
        $("#selectAll").click(function(){
          if(this.checked){
            checkbox.each(function(){
              this.checked = true;                        
            });
          } 
          else{
            checkbox.each(function(){
              this.checked = false;                        
            });
          } 
        });
          checkbox.click(function(){
            if(!this.checked){
              $("#selectAll").prop("checked", false);
             }
          });
        });
      </script>   
      <div class="container-xl">
      <div class="table-responsive">
        <div class="table-wrapper">
        <div class="table-title">
          <div class="row">
            <div class="col-sm-12">
              <h2>Edit Data <b>Monitoring</b></h2>
              <hr />
            </div>
          <br>
          <div class="col-md-12">
          <div class="table table-striped table-hover">
          <form method="post" action="update-monitoring.php">
            <input type="hidden" value="<?php echo $data['id_monitor'];?>" name="id_monitor">
              <div class="form-group">
                <label> Nopol</label>
                  <input type="text" name="nopol" class="form-control" id="nopol"  value="<?php echo $data['nopol'];?>">
              </div>
              <div class="form-group">
                <label>Operator</label>
                  <input type="text" name="operator" class="form-control" id="operator"  value="<?php echo $data['operator'];?>">
              </div>
              <div class="form-group">
                <label>Tujuan</label>
                  <input type="text" name="tujuan" class="form-control" id="tujuan"  value="<?php echo $data['tujuan'];?>">
              </div>
              <div class="form-group">
                <label>Estimasi</label>
                  <input type="text" name="estimasi" class="form-control" id="estimasi"  value="<?php echo $data['estimasi'];?>">
              </div>
              <button type="submit" name="submit" id="submit" class="btn btn-outline-secondary">Save</button>
              </div>
          </form>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
    </div>        
    </div>
  </body>
  <!--Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a>Bus-Arr</a>. </strong> All rights reserved. 
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
</html>