<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_corridor    = $_POST['id_corridor'];
$code_corridor    = $_POST['code_corridor'];
$rute      = $_POST['rute'];

// query SQL untuk insert data
$query="UPDATE corridor SET  code_corridor='$code_corridor', rute='$rute' where id_corridor='$id_corridor'";
mysqli_query($connection, $query);
// mengalihkan ke halaman index.php
header("location:data-corridor.php");
?>