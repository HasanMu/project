<?php
	$koneksi = mysqli_connect("localhost", "root", "", "project");

	$a = $_POST['judul'];
	$b = $_POST['content'];
	$id = $_POST['id'];

	$nama_file = $_FILES['foto']['name'];
	$tmp_file = $_FILES['foto']['tmp_name'];
	$loc = "../images/$nama_file";

	$timestamp = date('Y-m-d H:i:s');

	$path = "images/".$nama_file;
	if(move_uploaded_file($tmp_file, $loc))
	{
		$ubah = "UPDATE articles SET judul='$a', content='$b', updated_at='$timestamp', foto='$path' WHERE id='$id'";
		mysqli_query($koneksi, $ubah);
		header("location:http://localhost/project/admin/articles/home");
	} elseif(!move_uploaded_file($tmp_name, $loc)) {
		$ubah = "UPDATE articles SET judul='$a', updated_at='$timestamp', content='$b' WHERE id='$id'";
		mysqli_query($koneksi, $ubah);
		header("location:http://localhost/project/admin/articles/home");
	} else {
		header("location:http://localhost/project/admin/articles/$id/edit");
	}

	
?>