<?php  
include 'koneksi.php';
$uname      = $_POST['uname'];
$email      = $_POST['email'];
$username      = $_POST['username'];
$psswd   = $_POST['psswd'];
$no_tlp   = $_POST['no_tlp'];

$link = mysqli_connect("localhost", "root", "", "pbae");
$sql = "INSERT INTO user (uname, username, email, psswd, no_tlp) VALUES ('$uname','$username', '$email','$psswd', '$no_tlp')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("location:data-user.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>