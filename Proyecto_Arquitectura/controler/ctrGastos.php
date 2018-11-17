<?php 
	
	class ctrGastos {

		function ctrGastos(){}

		function ObtenerGastos(){
           $array = [];

           $prueba1 = ['Task', 'Hours per Day'];
           $prueba2 = ['Work',     11];
           $prueba3 = ['Eat',      2];
           $prueba4 =  ['Watch TV', 2];
           $prueba5 =  ['Sleep',    7];

        array_push($array,$prueba1);
        array_push($array,$prueba2);
        array_push($array,$prueba3);
        array_push($array,$prueba4); 
        array_push($array,$prueba5);
           
            echo json_encode($array);
		}

	
	}

	$op = $_POST['opcion'];
	$control = new ctrGastos;

	if($op == 1){
	 	$control->ObtenerGastos();
	} 

?>