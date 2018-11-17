<?php 
	
	include ("../data/dtGasto.php");
	include ("../domain/dGasto.php");

	class ctrGasto {

		function ctrGasto(){}

		function insertarGasto(){
	      	$Gasto = new dGasto;

            $Gasto->setIdCategoria($_POST['idCategoria']);
            $Gasto->setDateExpense($_POST['dateExpense']);
            $Gasto->setMerchantExpense($_POST['merchantExpense']);
            $Gasto->setAmountExpense($_POST['amountExpense']);
            $Gasto->setDescriptionExpense($_POST['descriptionExpense']);

	      	$dtGasto = new dtGasto;

	      	if($dtGasto->insertarGasto($Gasto) == true){
	      		echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha ingresado el Gasto correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al ingresar el Gasto.
					</div>
	      		';
            }
        }

        function eliminarGasto(){

			$Gasto = new dGasto;

			$idExpense = $_GET['idExpense'];

			$Gasto->setIdExpense($idExpense);	
			
			$dtGasto = new dtGasto;
			
			if($dtGasto->eliminarGasto($Gasto) == true){		
				echo "";
			}else{
				echo "";
			}
        }
        
        function modificarGasto(){
		
			$Gasto = new dGasto;

            $Gasto->setIdExpense($_POST['idExpense']);
			$Gasto->setIdCategoria($_POST['idCategoria']);
            $Gasto->setDateExpense($_POST['dateExpense']);
            $Gasto->setMerchantExpense($_POST['merchantExpense']);
            $Gasto->setAmountExpense($_POST['amountExpense']);
            $Gasto->setDescriptionExpense($_POST['descriptionExpense']);	

			$dtGasto = new dtGasto;
			
			if($dtGasto->modificarGasto($Gasto) == true){		
				echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha modificado el Gasto correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al modificar el Gasto.
					</div>
	      		';
	      	}
		}
    }

	$op = $_POST['opcion'];
	$control = new ctrGasto;

	if($op == 1){
	 	$control->insertarGasto();
	} else if($op == 2){
        $control->eliminarGasto();
    } else if($op == 3){
        $control->modificarGasto();
   }

?>