<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_monitor  = $_POST['id_monitor'];
$nopol      = $_POST['nopol'];
$operator      = $_POST['operator'];
$tujuan   = $_POST['tujuan'];
$estimasi   = $_POST['estimasi'];

// query SQL untuk insert data
$query="UPDATE monitoring SET nopol='$nopol', operator='$operator', tujuan='$tujuan', estimasi='$estimasi' where id_monitor='$id_monitor'";
mysqli_query($connection, $query);
// mengalihkan ke halaman index.php
header("location:monitoring.php");
?>