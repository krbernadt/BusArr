<?php  
include 'koneksi.php';
$code_corridor    = $_POST['code_corridor'];
$rute      = $_POST['rute'];

$link = mysqli_connect("localhost", "root", "", "pbae");
$sql = "INSERT INTO corridor (code_corridor, rute) VALUES ('$code_corridor','$rute')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("location:data-corridor.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>