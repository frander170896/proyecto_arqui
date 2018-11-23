<?php 
    include ("dtConnection.php");
	class dtLogin{

		public function dtLogin(){}

		function ObtenerDatosUsuario($usuario,$contrasena){
			
			$con = new dtConnection();
            $datos = [];
            if($con->conect()){
				$query = ("SELECT * FROM tbuser WHERE user = '$usuario' and password='$contrasena'");
				
				$result = mysqli_query($con->getCon(), $query);
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				

				$existe;
                if(strlen($row['user']) == 0 ){
                    $existe = false;
                }else{
                    $existe = true;
                }
                
                $datos = array("nombre"=>$row['fullName'],"existe"=>$existe);  
                mysqli_close($con->getCon()); 
            }

            return $datos;
		}

	}

 ?>