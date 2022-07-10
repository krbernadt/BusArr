<?php 
 // include database connection file 
include 'koneksi.php';  $id_user = $_GET['id_user']; 
 $result = mysqli_query($connection, "DELETE FROM user WHERE id_user='$id_user'");
header("Location:data-user.php");  
?> 
