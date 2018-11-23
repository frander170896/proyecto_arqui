<?php
    
	$usuario = $_POST['user'];
	$contrasena = $_POST['password'];
	$nombre = $_POST['nombre'];
	
	if(isset($usuario)  && isset($contrasena)  && isset($nombre) )
	{
        session_start();
		$_SESSION['user'] = $usuario;
		$_SESSION['nombre'] =$nombre;
		
		header("location:../index.php");
	}else{
		header("location:../fLogin/fLogin.php");
	}
			
?>