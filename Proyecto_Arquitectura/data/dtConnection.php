<?php

	class dtConnection{
	  
	  	var $conect;
	  
		function dtConnection(){}

		function __destruct() {}
		 
		function getCon(){
			return $this->conect;
		}

		function conect() {
		    if(!($con = mysqli_connect("localhost","root",""))){
			    echo "Error to conect the Data Base";
				exit();
		    }
			if (!mysqli_select_db($con,"BDEjemplo")) {
			   echo "Error to select the Data Base";
			   exit();
			}
		    
			$this->conect = $con;
			return true;
		}
	}

?>