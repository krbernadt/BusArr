<?php 
 // include database connection file 
include 'koneksi.php';  $id_monitor = $_GET['id_monitor']; 
 $result = mysqli_query($connection, "DELETE FROM monitoring WHERE id_monitor='$id_monitor'");
header("Location:monitoring.php");  
?> 
