<?php 
	
	include ("dtConnection.php");

	class dtCategoria {
		
		function dtCategoria(){}

		function insertarCategoria($Categoria){
			$con = new dtConnection;

			if($con->conect()){

				$id = 0;

				$query = "INSERT INTO tbCategoria (idCategoria, nombreCategoria) VALUES (
									  '".$id."',
									  '".$Categoria->getNombreCategoria()."');";

				$result = mysqli_query($con->getCon(), $query);

				mysqli_close($con->getCon());

				if (!$result){
					return false;
				} else {
					return true;
				}
			}
		}

		function getCategorias(){
		
			$con = new dtConnection;
			
			$lista = array();
			
			if($con->conect()){
			
				$query = "SELECT * FROM tbCategoria";
				
				$result = mysqli_query($con->getCon(), $query);
				
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				
					$Categoria = new dCategoria;
					
					$Categoria->setIdCategoria($row['idCategoria']);					
					$Categoria->setNombreCategoria($row['nombreCategoria']);
					
					array_push($lista, $Categoria);
				}
				
				mysqli_close($con->getCon());

				if (!$lista){
					return false;
				} else {
					return $lista;
				}
			}
		}
		
		function getCategoria($idCategoria){
	
			$con = new dtConnection;
			$lista = array();
			
			if($con->conect()){
				
				$query = "SELECT * FROM tbCategoria WHERE idCategoria = $idCategoria";
				
				$result = mysqli_query($con->getCon(), $query);
				
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

					$Categoria = new dCategoria;
				
					$Categoria->setIdCategoria($row['idCategoria']);					
					$Categoria->setNombreCategoria($row['nombreCategoria']);
					
					array_push($lista, $Categoria);
				}

				mysqli_close($con->getCon());

				if (!$Categoria){					
					return false;
				} else {
					return $lista;
				}
			}
		}

		function eliminarCategoria($Categoria){
	
			$con = new dtConnection;
			
			if($con->conect()){
				$query = "DELETE FROM tbCategoria WHERE idCategoria = ".$Categoria->getIdCategoria()."";
				
				$result = mysqli_query($con->getCon(), $query);
				
				mysqli_close($con->getCon());

				if (!$result){
					return false;
				}else{
					return true;
				}
			}
		}

		function modificarCategoria($Categoria){
	
			$con = new dtConnection;
			
			if($con->conect()){
				$query = "UPDATE tbCategoria SET nombreCategoria='".$Categoria->getNombreCategoria()."' WHERE idCategoria=".$Categoria->getIdCategoria()."";
				
				$result = mysqli_query($con->getCon(), $query);

				mysqli_close($con->getCon());
				
				if (!$result){
					return false;
				}else{
					return true;
				}
			}
		}
	}

?>