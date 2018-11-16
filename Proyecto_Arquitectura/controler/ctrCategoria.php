<?php 
	
	include ("../data/dtCategoria.php");
	include ("../domain/dCategoria.php");

	class ctrCategoria {

		function ctrCategoria(){}

		function insertarCategoria(){
	      	$Categoria = new dCategoria;

	      	$Categoria->setNombreCategoria($_POST['nombreCategoria']);

	      	$dtCategoria = new dtCategoria;

	      	if($dtCategoria->insertarCategoria($Categoria) == true){
	      		echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha ingresado la Categoría correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al ingresar la Categoría.
					</div>
	      		';
	      	}
		}

		function eliminarCategoria(){

			$Categoria = new dCategoria;

			$idCategoria = $_GET['idCategoria'];

			$Categoria->setIdCategoria($idCategoria);	
			
			$dtCategoria = new dtCategoria;
			
			if($dtCategoria->eliminarCategoria($Categoria) == true){		
				echo "";
			}else{
				echo "";
			}
		}

		function modificarCategoria(){
		
			$Categoria = new dCategoria;
			
			$idCategoria = $_POST['idCategoria'];			
			$nombreCategoria = $_POST['nombreCategoria'];

			$Categoria->setIdCategoria($idCategoria);	
			$Categoria->setNombreCategoria($nombreCategoria);	

			$dtCategoria = new dtCategoria;
			
			if($dtCategoria->modificarCategoria($Categoria) == true){		
				echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha modificado la Categoría correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al modificar la Categoría.
					</div>
	      		';
	      	}
		}
	}

	$op = $_POST['opcion'];
	$control = new ctrCategoria;

	if($op == 1){
	 	$control->insertarCategoria();
	} else if($op == 2){
	 	$control->eliminarCategoria();
	} else if($op == 3){
	 	$control->modificarCategoria();
	}

?>