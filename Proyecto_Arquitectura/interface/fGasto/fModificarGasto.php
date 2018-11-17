<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Módulo Gastos</title>
	<script lang="JavaScript" src="../js/jsGasto.js"></script>

	<?php 
		$idExpense = $_GET['idExpense'];
		include ("../../controler/ctrListaGastos.php");
		include ("../../domain/dGasto.php");
        include ("../../domain/dCategoria.php");

		$control = new ctrListaGastos;
		$lista = $control->obtenerGasto($idExpense); 

		foreach($lista as $Gasto){
			$idExpense = $Gasto->getIdExpense();
            $idCategoria = $Gasto->getIdCategoria();
            $dateExpense = $Gasto->getDateExpense();
            $merchantExpense = $Gasto->getMerchantExpense();
            $amountExpense = $Gasto->getAmountExpense();
            $descriptionExpense = $Gasto->getDescriptionExpense();
        }
        
		$lista2 = $control->obtenerCategorias();
	?>

</head>
<body>
	<div class="row">
		<div class="col-md-3"></div>

		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title" style="text-align:center;">Formulario para modificar un Gasto.</h3>
				</div>

				<div class="container-fluid">
					<h4>Modificando los datos del Gasto.</h4>
					<hr>
					<form id="formularioModificarGasto" method="POST" role="form">
						
						<input type="hidden" id="idExpense" name="idExpense" value="<?php echo $idExpense; ?>">

                        <div class="form-group">
							<label class="sr-only" for="idCategoria">ID de Categoría</label>
                            <select class="form-control" id="idCategoria" name="idCategoria">
                                <?php 
                                    foreach ($lista2 as $Categoria) {
                                        if($Categoria->getIdCategoria() == $idCategoria){
                                            echo "<option selected value=\"".$Categoria->getIdCategoria()."\">".$Categoria->getNombreCategoria()."</option>";
                                        } else {
                                            echo "<option value=\"".$Categoria->getIdCategoria()."\">".$Categoria->getNombreCategoria()."</option>";
                                        }                                        
                                    }
                                ?>
                            </select>
                         </div>

                        <div class="form-group">
							<label class="sr-only" for="dateExpense">Fecha del Gasto</label>
							<input type="date" class="form-control" id="dateExpense" name="dateExpense" value="<?php echo $dateExpense; ?>" required>
						</div>

                        <div class="form-group">
							<label class="sr-only" for="merchantExpense">Nombre del Comercio</label>
							<input type="text" class="form-control" id="merchantExpense" name="merchantExpense" placeholder="Dato: <?php echo $merchantExpense; ?>" value="<?php echo $merchantExpense; ?>" required>
						</div>

                        <div class="form-group">
							<label class="sr-only" for="amountExpense">Monto</label>
							<input type="number" class="form-control" id="amountExpense" name="amountExpense" placeholder="Dato: <?php echo $amountExpense; ?>" value="<?php echo $amountExpense; ?>" required>
						</div>

                        <div class="form-group">
							<label class="sr-only" for="descriptionExpense">Descripción de Gasto</label>
							<textarea rows="2" class="form-control" id="descriptionExpense" name="descriptionExpense" placeholder="Dato: <?php echo $descriptionExpense; ?>" required><?php echo $descriptionExpense; ?></textarea>
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