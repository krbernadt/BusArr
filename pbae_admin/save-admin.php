<?php  
include 'koneksi.php';
$aname      = $_POST['aname'];
$email      = $_POST['email'];
$psswd   = $_POST['psswd'];

$link = mysqli_connect("localhost", "root", "", "pbae");
$sql = "INSERT INTO adminbus (aname, email, psswd) VALUES ('$aname', '$email','$psswd')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("location:data-admin.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>