<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lista de Categorías</title>
	<script lang="JavaScript" src="../js/jsCategoria.js"></script>
</head>
<body>
	<?php
		include ("../../controler/ctrListaCategorias.php");
		include ("../../domain/dCategoria.php");
		$control = new ctrListaCategorias;
		$lista = $control->obtenerCategorias();
	?>
	<div class="col-md-3"></div>
		<div class="col-md-6">
			<?php 
			if($lista){
			?>
			
			<div class="input-group">
		        <input  type="text" id="datosCategoria" class="form-control" placeholder="Buscar" aria-describedby="basic-addon2">
				<span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
        	</div>
			<br>
			<div class="table-responsive">					
				<table class="table table-hover" id="categoria">
					<thead>
						<tr>
							<th><p>Código</p></th>
							<th><p>Categoría</p></th>
							<th colspan="2" style="text-align:center;"><p>Opciones</p></th>
						</tr>
					</thead>
					<tbody id="categoria1">
						<?php 					
							foreach ($lista as $Categoria){
							
								echo "<tr>";
								echo 	"<td>".$Categoria->getIdCategoria()."</td>";
								echo 	"<td>".$Categoria->getNombreCategoria()."</td>";
								echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-success\" type=\"button\" onclick=\"paginaModificarCategoria('".$Categoria->getIdCategoria()."')\"><span class='glyphicon glyphicon-pencil'></span> Modificar</button></td>";
								echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-danger\" type=\"button\" onclick=\"eliminarCategoria('".$Categoria->getIdCategoria()."')\"><span class='glyphicon glyphicon-trash'></span> Eliminar</button></td>";
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
							<strong>Ups!</strong> No se han encontrado Categorías registradas.
						</div>
					';
				}
			 ?>
		</div>
	<div class="col-md-3"></div>
</body>
</html>