<?php 
session_start();
	if(isset($_SESSION['login'])):
		unset($_SESSION['login']);
		header(("location:http://localhost/project/auth/login"));
	endif;
?>