<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Módulo Categoría</title>
	<script lang="JavaScript" src="../js/jsCategoria.js"></script>
</head>
<body>	
	<div class="row">
		<div class="col-md-3"></div>

		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title" style="text-align:center;">
						<a data-toggle="collapse" href="#collapse1" style="text-decoration:none;">Agregar Categoría</a>
					</h3>	
				</div>

				<div id="collapse1" class="panel-collapse collapse container-fluid">
					<h4>Ingrese los datos del formulario.</h4>
					<hr>
					<form id="formularioCategoria" method="POST" role="form">
						<div class="form-group">
							<label class="sr-only" for="nombreCategoria">Nombre del Categoría</label>
							<input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria" placeholder="Ingrese el nombre del Categoría" required>
						</div>

						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Agregar">
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="col-md-3"></div>
	</div>
</body>
</html>