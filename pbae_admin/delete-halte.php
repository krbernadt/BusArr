<?php 
 // include database connection file 
include 'koneksi.php';  $id_halte = $_GET['id_halte']; 
 $result = mysqli_query($connection, "DELETE FROM halte WHERE id_halte='$id_halte'");
header("Location:data-halte.php");  
?> 
