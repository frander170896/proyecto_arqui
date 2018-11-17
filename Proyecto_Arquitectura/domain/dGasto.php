<?php
	
	class dGasto {

		private $idExpense;
        private $idCategoria;
        private $dateExpense;
        private $merchantExpense;
        private $amountExpense;
        private $descriptionExpense;

		function dGasto(){}

		function setIdExpense($idExpense) {
			$this->idExpense = $idExpense;
		} 
		function getIdExpense() {
			return $this->idExpense;
        }
        
        function setIdCategoria($idCategoria) {
			$this->idCategoria = $idCategoria;
		}
		function getIdCategoria() {
			return $this->idCategoria;
        }
        
        function setDateExpense($dateExpense) {
			$this->dateExpense = $dateExpense;
		}
		function getDateExpense() {
			return $this->dateExpense;
        }
        
        function setMerchantExpense($merchantExpense) {
			$this->merchantExpense = $merchantExpense;
		}
		function getMerchantExpense() {
			return $this->merchantExpense;
        }
        
        function setAmountExpense($amountExpense) {
			$this->amountExpense = $amountExpense;
		}
		function getAmountExpense() {
			return $this->amountExpense;
        }
        
        function setDescriptionExpense($descriptionExpense) {
			$this->descriptionExpense = $descriptionExpense;
		}
		function getDescriptionExpense() {
			return $this->descriptionExpense;
		}
	}
	
?>