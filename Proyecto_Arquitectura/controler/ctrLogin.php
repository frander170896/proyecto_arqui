<?php 

include_once ("../data/dtLogin.php");

class ctrLogin {
	
	function ctrLogin(){}
	
	function ExisteUsuario(){
		
		$usuario = $_POST['user'];
		$clave = $_POST['password'];
		$dtLogin = new dtLogin;
		$datos = $dtLogin->ObtenerDatosUsuario($usuario,$clave);
		
		echo "".json_encode($datos)."";
	}
}

$op = $_POST['opcion'];
$control = new ctrLogin;

if($op == 1){
	$control->ExisteUsuario();
}

?>