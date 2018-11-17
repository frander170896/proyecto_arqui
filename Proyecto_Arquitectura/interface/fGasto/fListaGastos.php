<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lista de Categorías</title>
	<script lang="JavaScript" src="../js/jsGasto.js"></script>
</head>
<body>
	<?php
		include_once ("../../controler/ctrListaGastos.php");	
		include ("../../domain/dGasto.php");	

		$control = new ctrListaGastos;
		$lista = $control->obtenerGastos();
	?>
	<div class="col-md-3"></div>
		<div class="col-md-6">
			<?php 
			if($lista){
			?>
			
			<div class="input-group">
		        <input  type="text" id="datosGasto" class="form-control" placeholder="Buscar" aria-describedby="basic-addon2">
				<span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
        	</div>
			<br>
			<div class="table-responsive">					
				<table class="table table-hover" id="Gasto">
					<thead>
						<tr>
							<th><p>Fecha</p></th>
							<th><p>Categoría</p></th>
                            <th><p>Comercio</p></th>
							<th><p>Monto</p></th>
							<th colspan="2" style="text-align:center;"><p>Opciones</p></th>
						</tr>
					</thead>
					<tbody id="Gasto1">
						<?php 					
							foreach ($lista as $Gasto){
							
								echo "<tr>";
								echo 	"<td>".$Gasto->getDateExpense()."</td>";
                                echo 	"<td>".$Gasto->getIdCategoria()."</td>";
                                echo 	"<td>".$Gasto->getMerchantExpense()."</td>";
								echo 	"<td>".$Gasto->getAmountExpense()."</td>";
								echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" onclick=\"paginaModificarGasto('".$Gasto->getIdExpense()."')\"><span class='glyphicon glyphicon-pencil'></span> </button></td>";
								echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-danger\" type=\"button\" onclick=\"eliminarGasto('".$Gasto->getIdExpense()."')\"><span class='glyphicon glyphicon-trash'></span> </button></td>";
								echo "</tr>";
								
							}
						?>
					</tbody>
				</table>				
			</div>

			<?php 
				} else {
					echo 
					'
						<div class="alert alert-warning">
							<strong>Ups!</strong> No se han encontrado Gastos registrados.
						</div>
					';
				}
			 ?>
		</div>
	<div class="col-md-3"></div>
</body>
</html>