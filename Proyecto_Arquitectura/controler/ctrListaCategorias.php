<?php
	
	include ("../../data/dtCategoria.php");

	class ctrListaCategorias {
		
		function ctrListaCategorias(){
		}

		function __destruct() {}
	
		function obtenerCategorias(){
		
			$dtCategoria = new dtCategoria;
			
			$lista = $dtCategoria->getCategorias();
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
		
		function obtenerCategoria($idCategoria){
		
			$dtCategoria = new dtCategoria;

			$lista = $dtCategoria->getCategoria($idCategoria);
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
	}

?>