<?php
	session_start();
	
	if($_SESSION['user']){
		session_destroy();

		header("location:../fLogin/fLogin.php");
	}else{
		header("location:../fLogin/fLogin.php");
	}
?>