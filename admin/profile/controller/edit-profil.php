<?php
	$koneksi = mysqli_connect("localhost", "root", "", "project");

	$a = $_POST['nama'];
	$b = $_POST['email'];
	$id = $_POST['id'];

	$nama_file = $_FILES['foto']['name'];
	$tmp_file = $_FILES['foto']['tmp_name'];
	$loc = "../images/$nama_file";

	$timestamp = date('Y-m-d H:i:s');

	$path = "images/$nama_file";
	if(move_uploaded_file($tmp_file, $loc))
	{
		$ubah = "UPDATE admin SET nama='$a', email='$b', foto='$path', updated_at='$timestamp' WHERE id='$id'";
		mysqli_query($koneksi, $ubah);
		header("location:http://localhost/project/admin/home");
	} elseif (!move_uploaded_file($tmp_file, $loc)) {
		$ubah = "UPDATE admin SET nama='$a', email='$b', updated_at='$timestamp' WHERE id='$id'";
		mysqli_query($koneksi, $ubah);
		header("location:http://localhost/project/admin/home");
	} 
	else {
		echo "<script>alert('maaf data tidak tersimpan kedalam database!')</script>";
	}
	
?>