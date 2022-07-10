<?php 
 // include database connection file 
include 'koneksi.php';  $id_corridor = $_GET['id_corridor']; 
 $result = mysqli_query($connection, "DELETE FROM corridor WHERE id_corridor='$id_corridor'");
header("Location:data-corridor.php");  
?> 