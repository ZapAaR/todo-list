<?php 

session_start();
// cek apakah yang mengakses halaman ini sudah login
	if(!isset($_SESSION['is_login'])){
		header("location:../user/login.php");
	}

?>