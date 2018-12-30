<?php
session_start();
unset($_SESSION['login']);
if(isset($_POST['login'])):

	$koneksi = mysqli_connect("localhost", "root", "", "project");

	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "SELECT * FROM admin WHERE email='$email' and password='$password'";
	$execute = mysqli_query($koneksi, $query);
	$cek = mysqli_num_rows($execute);
	$nama_admin = mysqli_fetch_array($execute);
	if($cek <= 0)
	{
		header("location:login.php");
	}
	else
	{
		$_SESSION['login'] = $nama_admin;
		header("location:../admin/home");
	}
endif;
?>
