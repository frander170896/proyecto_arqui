<?php 
	
	include ("dtConnection.php");

	class dtGasto {
		
		function dtGasto(){}

		function insertarGasto($Gasto){
			$con = new dtConnection;

			if($con->conect()){

				$id = 0;

				$query = "INSERT INTO tbExpense (idExpense, idCategoria, dateExpense, merchantExpense, amountExpense, descriptionExpense) VALUES (
									  '".$id."',
                                      '".$Gasto->getIdCategoria()."',
                                      '".$Gasto->getDateExpense()."',
                                      '".$Gasto->getMerchantExpense()."',
                                      '".$Gasto->getAmountExpense()."',
                                      '".$Gasto->getDescriptionExpense()."');";

				$result = mysqli_query($con->getCon(), $query);

				mysqli_close($con->getCon());

				if (!$result){
					return false;
				} else {
					return true;
				}
			}
		}

		function getGastos(){
		
			$con = new dtConnection;
			
			$lista = array();
			
			if($con->conect()){
			
				$query = "SELECT A.idExpense, B.nombreCategoria AS idCategoria, DATE_FORMAT(A.dateExpense,'%d/%m/%Y') AS dateExpense, A.merchantExpense, A.amountExpense, A.descriptionExpense FROM tbExpense A INNER JOIN tbCategoria B ON A.IdCategoria = B.IdCategoria";
				
				$result = mysqli_query($con->getCon(), $query);
				
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				
					$Gasto = new dGasto;
					
					$Gasto->setIdExpense($row['idExpense']);					
                    $Gasto->setIdCategoria($row['idCategoria']);
                    $Gasto->setDateExpense($row['dateExpense']);
                    $Gasto->setMerchantExpense($row['merchantExpense']);
                    $Gasto->setAmountExpense($row['amountExpense']);
                    $Gasto->setDescriptionExpense($row['descriptionExpense']);
					
					array_push($lista, $Gasto);
				}

				mysqli_close($con->getCon());

				if (!$lista){
					return false;
				} else {
					return $lista;
				}
			}
		}

		function getGastosDashboard(){
		
			$con = new dtConnection;
			
			$lista = array();
			
			if($con->conect()){
			
				$query = "SELECT B.nombreCategoria AS idCategoria, SUM(a.amountExpense) as amountExpense FROM tbExpense A INNER JOIN tbCategoria B ON A.IdCategoria = B.IdCategoria GROUP BY B.nombreCategoria";
				
				$result = mysqli_query($con->getCon(), $query);
				
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				
					$Gasto = new dGasto;
								
                    $Gasto->setIdCategoria($row['idCategoria']);
                    $Gasto->setAmountExpense($row['amountExpense']);
               
					array_push($lista, $Gasto);
				}

				mysqli_close($con->getCon());

				if (!$lista){
					return false;
				} else {
					return $lista;
				}
			}
		}
		
		function getGasto($idExpense){
	
			$con = new dtConnection;
			$lista = array();
			
			if($con->conect()){
				
				$query = "SELECT * FROM tbExpense WHERE idExpense = $idExpense";
				
				$result = mysqli_query($con->getCon(), $query);
				
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

					$Gasto = new dGasto;
				
					$Gasto->setIdExpense($row['idExpense']);					
                    $Gasto->setIdCategoria($row['idCategoria']);
                    $Gasto->setDateExpense($row['dateExpense']);
                    $Gasto->setMerchantExpense($row['merchantExpense']);
                    $Gasto->setAmountExpense($row['amountExpense']);
                    $Gasto->setDescriptionExpense($row['descriptionExpense']);
					
					array_push($lista, $Gasto);
				}

				mysqli_close($con->getCon());

				if (!$Gasto){					
					return false;
				} else {
					return $lista;
				}
			}
		}

		function eliminarGasto($Gasto){
	
			$con = new dtConnection;
			
			if($con->conect()){
				$query = "DELETE FROM tbExpense WHERE idExpense = ".$Gasto->getIdExpense()."";
				
				$result = mysqli_query($con->getCon(), $query);
				
				mysqli_close($con->getCon());

				if (!$result){
					return false;
				}else{
					return true;
				}
			}
		}

		function modificarGasto($Gasto){
	
			$con = new dtConnection;
			
			if($con->conect()){
				$query = "UPDATE tbExpense SET idCategoria='".$Gasto->getIdCategoria()."', dateExpense='".$Gasto->getDateExpense()."', merchantExpense='".$Gasto->getMerchantExpense()."', amountExpense='".$Gasto->getAmountExpense()."', descriptionExpense='".$Gasto->getDescriptionExpense()."' WHERE idExpense=".$Gasto->getIdExpense()."";
				
				$result = mysqli_query($con->getCon(), $query);

				mysqli_close($con->getCon());
				
				if (!$result){
					return false;
				}else{
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
	}

?>