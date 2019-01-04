<?php
	$koneksi = mysqli_connect("localhost", "root", "", "project");

	$a = $_POST['judul'];
	$b = $_POST['content'];

	$nama_file = $_FILES['foto']['name'];
	$tmp_file = $_FILES['foto']['tmp_name'];
	$loc = "../images/$nama_file";

	$timestamp = date('Y-m-d H:i:s');

	$path = "images/".$nama_file;
	if(move_uploaded_file($tmp_file, $loc))
	{
		$tambah = "INSERT INTO articles SET judul='$a', created_at='$timestamp', content='$b',foto='$path'";
		mysqli_query($koneksi, $tambah);
		header("location:http://localhost/project/admin/articles/home");
	} else {
		echo "<script>alert('maaf data tidak tersimpan kedalam database!')</script>";
	}
	
?>