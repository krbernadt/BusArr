<?php  
include 'koneksi.php';
$halte      = $_POST['halte'];
$code_corridor     = $_POST['code_corridor'];
$lng   = $_POST['lng'];
$lat   = $_POST['lat'];
$pict   = $_POST['pict'];

$link = mysqli_connect("localhost", "root", "", "pbae");
$sql = "INSERT INTO halte (halte, code_corridor, lng, lat, pict) VALUES ('$halte', '$code_corridor','$lng','$lat','$pict')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("location:data-halte.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>