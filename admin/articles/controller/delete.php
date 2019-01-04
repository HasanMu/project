<?php
	$koneksi = mysqli_connect("localhost", "root", "", "project");
	$id = $_GET['id'];

	$delete = "DELETE FROM articles WHERE id='$id'";
	mysqli_query($koneksi, $delete);
	header("location:http://localhost/project/admin/articles/home");
?>