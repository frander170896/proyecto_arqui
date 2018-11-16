<?php
	
	class dCategoria {

		private $idCategoria;
		private $nombreCategoria;

		function dCategoria(){}

		function setIdCategoria($idCategoria) {
			$this->idCategoria = $idCategoria;
		}
		function getIdCategoria() {
			return $this->idCategoria;
		}

		function setNombreCategoria($nombreCategoria) {
			$this->nombreCategoria = $nombreCategoria;
		}
		function getNombreCategoria() {
			return $this->nombreCategoria;
		}
	}
	
?>