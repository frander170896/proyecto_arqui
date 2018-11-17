<?php
	
	include ("../../data/dtGasto.php");

	class ctrListaGastos {
		
		function ctrListaGastos(){
		}

		function __destruct() {}
	
		function obtenerGastos(){
		
			$dtGasto = new dtGasto;
			
			$lista = $dtGasto->getGastos();
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
		
		function obtenerGasto($idGasto){
		
			$dtGasto = new dtGasto;

			$lista = $dtGasto->getGasto($idGasto);
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}

		function obtenerCategorias(){
		
			$dtGasto = new dtGasto;
			
			$lista = $dtGasto->getCategorias();
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
	}

?>