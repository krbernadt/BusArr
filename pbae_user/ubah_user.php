<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: index.php");
    exit;
}

include 'koneksi.php';
$id_user   = $_SESSION['user'];
$user       = mysqli_query($conn, "select * from user where id_user='$id_user'");
$row            = mysqli_fetch_array($user);

?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Public Bus Arival</title>
    <link rel="stylesheet" href="./css/bootstrap.css"/>
    <link rel="stylesheet" href="./js/all.min.css"/>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="./css/font-awesome.min.css"/>
</head>
<body>
    <nav class="navbar">
      <div class="navbar-container container">
          <input type="checkbox" name="" id="">
          <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
          </div>
          <ul class="menu-items">
              <li>&emsp;<i class="fas fa-route"></i><a href="#home">&emsp;Rute</a></li>
              <li>&emsp;<i class="far fa-calendar-check"></i><a href="jadwal.php">&emsp;Jadwal</a></li>
              <li>&emsp;<i class="far fa-user"></i><a href="profil.php">&emsp;Profil</a></li>
          </ul>
      </div>
  </nav>
  <div class="Menu-Profil">
    
  </div>
  <form class="login" action="update-ubah_user.php" method="post">
  <input type="hidden" value="<?php echo $data['id_user'];?>" name="id_user">
        <div class="login__field" >
          Nama Lengkap<br>
          <!-- <a href="edit_nama.php"> -->
          <input type="text" name="uname" id="inputUname" class="login__input" placeholder="nama"  >
          </a>
        </div>
        <div class="login__field">
          Username<br>
          <input type="text" name="uname" id="inputUsername" class="login__input">
        </div>
        <div class="login__field">
           Email<br>
          <input type="text" name="email" id="inputEmail" class="login__input" placeholder="email">
      </div>
        <div class="login__field">
           No. Hp<br>
          <input type="text" name="no_telp" id="inputNo_telp" class="login__input" placeholder="no.hp">
        </div>
        <div class="login__field">
          Password<br>
          <a href="edit_password.php">
          <input type="password" class="login__input" placeholder="password">
        </a>
        </div>
          <div class="simpan">
          <button type="submit" name="submit" id="submit"> Simpan</button>
        </div>
      </form>
</body>
</html>