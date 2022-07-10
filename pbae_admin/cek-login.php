<?php
// mengaktifkan session php
session_start();
// menghubungkan dengan koneksi
include 'koneksi.php';
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$psswd = $_POST['psswd'];
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($connection, "select * from adminbus where email='$email' and psswd='$psswd'");
if (mysqli_num_rows($data)>0){
	$row= mysqli_fetch_array($data); //membuat session
			$_SESSION['email'] = $row['email'];
			$_SESSION['pass'] = $row['psswd'];
		header("location:index.php");
	}else{
		die("<script>alert('Account not found!')</script>");
	}
?>