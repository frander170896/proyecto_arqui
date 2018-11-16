<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Módulo Categoria</title>
	<script lang="JavaScript" src="../js/jsCategoria.js"></script>

	<?php 
		$idCategoria = $_GET['idCategoria'];
		include ("../../controler/ctrListaCategorias.php");
		include ("../../domain/dCategoria.php");
		$control = new ctrListaCategorias;
		$lista = $control->obtenerCategoria($idCategoria); 

		foreach($lista as $Categoria){
			$idCategoria = $Categoria->getIdCategoria();
			$nombreCategoria = $Categoria->getNombreCategoria();
		}
	?>

</head>
<body>
	<div class="row">
		<div class="col-md-3"></div>

		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title" style="text-align:center;">Formulario para modificar un Categoria.</h3>
				</div>

				<div class="container-fluid">
					<h4>Modificando los datos del Categoria.</h4>
					<hr>
					<form id="formularioModificarCategoria" method="POST" role="form">
						
						<input type="hidden" id="idCategoria" name="idCategoria" value="<?php echo $idCategoria; ?>">

						<div class="form-group">
							<label class="sr-only" for="nombreCategoria">Nombre del Categoria</label>
							<input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria" placeholder="Dato: <?php echo $nombreCategoria; ?>" value="<?php echo $nombreCategoria; ?>" required>
						</div>

						<div class="form-group">
							<input type="button" onclick="atras()" class="btn btn-danger" value="Cancelar">
							<input type="submit" class="btn btn-primary" value="Modificar">
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="col-md-3"></div>
	</div>
</body>
</html>