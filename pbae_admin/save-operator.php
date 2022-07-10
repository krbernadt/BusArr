<?php  
include 'koneksi.php';
$oname      = $_POST['oname'];
$email      = $_POST['email'];
$psswd   = $_POST['psswd'];
$no_tlp   = $_POST['no_tlp'];

$link = mysqli_connect("localhost", "root", "", "pbae");
$sql = "INSERT INTO operator (oname, email, psswd, no_tlp) VALUES ('$oname', '$email','$psswd', '$no_tlp')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("location:data-operator.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>