<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_halte       = $_POST['id_halte'];
$halte          = $_POST['halte'];
$code_corridor  = $_POST['code_corridor'];
$lng   = $_POST['lng'];
$lat   = $_POST['lat'];
$pict   = $_POST['pict'];

// query SQL untuk insert data
$query="UPDATE halte SET halte='$halte', code_corridor='$code_corridor', lng='$lng', lat='$lat', pict='$pict' where id_halte ='$id_halte'";
mysqli_query($connection, $query);
// mengalihkan ke halaman index.php
header("location:data-halte.php");
?>