<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_user = $_POST['id_user'];
$uname      = $_POST['uname'];
$username     = $_POST['username'];
$email      = $_POST['email'];
$psswd   = $_POST['psswd'];
$no_tlp   = $_POST['no_tlp'];

// query SQL untuk insert data
$query="UPDATE user SET uname='$uname', username='$username', email='$email', psswd='$psswd', no_tlp='$no_tlp' where id_user='$id_user'";
mysqli_query($connection, $query);
// mengalihkan ke halaman index.php
header("location:data-user.php");
?> 