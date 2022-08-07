<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Public Bus Arival</title>
    <link rel="stylesheet" href="./css/bootstrap.css"/>
    <link rel="stylesheet" href="./js/all.min.css"/>
      <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="./css/font-awesome.min.css"/>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/logo.png" alt="Bus-Arr" height="60" width="80">
    </div>
     <!-- Navbar -->
    <nav class="navbar">
      <div class="navbar-container container">
          <input type="checkbox" name="" id="">
          <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
          </div>
          <ul class="menu-items">
              <li>&emsp;<i class="fas fa-route"></i><a href="pilih_rute.php">&emsp;Rute</a></li>
              <li>&emsp;<i class="far fa-calendar-check"></i><a href="jadwal.php">&emsp;Jadwal</a></li>
              <li>&emsp;<i class="far fa-user"></i><a href="profil.php">&emsp;Profil</a></li>
          </ul>
      </div>
  </nav>
  <br>
  <div class="container1">
    <div class="row" style="margin-right :0px !important" style="--bs-gutter-x:none !important">
      <div class="col"> 
          <div class="bus">BUS ARR </div>
      </div>
      <div class="col">
        <div class="gambar">
              <img src="pic/logo.png" style="width: 80px" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
  <br>

  <div class="container2">
    <div class="row" style="margin-right :0px !important" style="--bs-gutter-x:none !important">
      <div class="col-md-12">
        <div class="cari">
          Cari Rute Trans Batam <br><br><br>
          Klik Untuk Memilih Rute <br>
          <a href="pilih_rute.php"><button>Pilih Rute</button></a>
        </div>
      </div>

      <div class="box1">
      <!-- Content Profil -->
      <div class="col" style="flex-shrink: none !important">
        <div class="profil">
        <a href="profil.php">
          <li><i class="far fa-user" style="font-size: 55px;"></i><br>Profil</li>
        </a>
        </div>
      </div>
      <!-- Content Jadwal -->
      <div class="col">
        <div class="jadwal">
          <a href="jadwal.php">
            <li><i class="far fa-calendar-check" style="font-size: 55px;"></i><br>Jadwal</li>
            </a>
        </div>
      </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="box2"></div>
  </footer>
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