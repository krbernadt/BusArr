<?php  
include 'koneksi.php';
$email      = $_POST['email'];
$username      = $_POST['username'];
$psswd   = $_POST['psswd'];

$link = mysqli_connect("localhost", "root", "", "pbae");
$sql = "INSERT INTO user (username, email, psswd) VALUES ('$username', '$email','$psswd')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("location:login.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>