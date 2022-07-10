<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_admin   = $_POST['id_admin'];
$aname      = $_POST['aname'];
$email      = $_POST['email'];
$psswd   = $_POST['psswd'];

// query SQL untuk insert data
$query="UPDATE adminbus SET aname='$aname', email='$email', psswd='$psswd' where id_admin='$id_admin'";
mysqli_query($connection, $query);
// mengalihkan ke halaman index.php
header("location:data-admin.php");
?>