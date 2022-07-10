<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_op   = $_POST['id_op'];
$oname      = $_POST['oname'];
$email      = $_POST['email'];
$psswd   = $_POST['psswd'];
$no_tlp   = $_POST['no_tlp'];

// query SQL untuk insert data
$query="UPDATE operator SET oname='$oname', email='$email', psswd='$psswd', no_tlp='$no_tlp' where id_op='$id_op'";
mysqli_query($connection, $query);
// mengalihkan ke halaman index.php
header("location:data-operator.php");
?>