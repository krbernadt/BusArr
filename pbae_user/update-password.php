<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_user = $_POST['id_user'];
$psswd   = $_POST['psswd'];


// query SQL untuk insert data
$query="UPDATE user SET psswd='$psswd' where id_user='$id_user'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:ubah_user.php");
?> 