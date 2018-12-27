<?php
	$koneksi = mysqli_connect("localhost", "root", "", "project");

	$a = $_POST['judul'];
	$b = $_POST['content'];
	$id = $_POST['id'];

	$nama_file = $_FILES['foto']['name'];
	$tmp_file = $_FILES['foto']['tmp_name'];
	$loc = "../images/$nama_file";

	$path = "images/".$nama_file;
	if(move_uploaded_file($tmp_file, $loc))
	{
		$ubah = "UPDATE articles SET judul='$a', content='$b', foto='$path' WHERE id='$id'";
		mysqli_query($koneksi, $ubah);
		header("location:../index.php");
	} else {
		// echo "<script>alert('maaf data tidak tersimpan kedalam database!')</script>";
		header("location:../edit.php?id=$id");
	}
	
?>