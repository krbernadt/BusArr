<?php 
 // include database connection file 
include 'koneksi.php';  $id_op = $_GET['id_op']; 
 $result = mysqli_query($connection, "DELETE FROM operator WHERE id_op='$id_op'");
header("Location:data-operator.php");  
?> 
