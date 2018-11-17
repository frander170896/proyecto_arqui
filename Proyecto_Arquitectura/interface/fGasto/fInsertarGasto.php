<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Módulo Gastos</title>
	<script lang="JavaScript" src="../js/jsGasto.js"></script>
</head>
<body>	

    <?php
		include ("../../controler/ctrListaGastos.php");
		include ("../../domain/dCategoria.php");
		$control = new ctrListaGastos;
		$lista = $control->obtenerCategorias();
	?>

	<div class="row">
		<div class="col-md-3"></div>

		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title" style="text-align:center;">
						<a data-toggle="collapse" href="#collapse1" style="text-decoration:none;">Agregar Gasto</a>
					</h3>	
				</div>

				<div id="collapse1" class="panel-collapse collapse container-fluid">
					<h4>Ingrese los datos del formulario.</h4>
					<hr>
					<form id="formularioGasto" method="POST" role="form">
						<div class="form-group">
							<label class="sr-only" for="idCategoria">ID de Categoría</label>
                            <select class="form-control" id="idCategoria" name="idCategoria">
                                <option value="" selected disabled>Seleccione una Categoría</option>
                                <?php 
                                    foreach ($lista as $Categoria) {
                                        echo "<option value=\"".$Categoria->getIdCategoria()."\">".$Categoria->getNombreCategoria()."</option>";
                                    }
                                ?>
                            </select>
                         </div>

                        <div class="form-group">
							<label class="sr-only" for="dateExpense">Fecha del Gasto</label>
							<input type="date" class="form-control" id="dateExpense" name="dateExpense" placeholder="Ingrese la Fecha del Gasto" required>
						</div>

                        <div class="form-group">
							<label class="sr-only" for="merchantExpense">Nombre del Comercio</label>
							<input type="text" class="form-control" id="merchantExpense" name="merchantExpense" placeholder="Ingrese el nombre del Comercio" required>
						</div>

                        <div class="form-group">
							<label class="sr-only" for="amountExpense">Monto</label>
							<input type="number" class="form-control" id="amountExpense" name="amountExpense" placeholder="Ingrese el Monto del Gasto" required>
						</div>

                        <div class="form-group">
							<label class="sr-only" for="descriptionExpense">Descripción de Gasto</label>
							<textarea rows="2" class="form-control" id="descriptionExpense" name="descriptionExpense" placeholder="Ingrese una Descripción del Gasto" required></textarea>
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