<?php
session_start();
include 'config.php';
error_reporting(0);
$username   = $_POST['username'];
$password   = md5($_POST['pass']);

$login = mysqli_query($koneksi,"select * from akun where username='$username' and pass='$password'");


$cek = mysqli_num_rows($login);
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['level']=="admin"){
 
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";

        header("location:home.php");
 
	}else if($data['level']=="antap"){
		
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "antap";
	
		header("location:antap.php");
 
	
	}else if($data['level']=="siswa"){
	
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "siswa";
		
		header("location:hanjar.php");
 
	}else{
 
	
		header("location:index.php?pesan=gagal");
	}	
}
    else{
    echo "<script>alert('Username atau Password Salah !!!');</script>";
    echo "<script>location='login.php';</script>";
}

?>