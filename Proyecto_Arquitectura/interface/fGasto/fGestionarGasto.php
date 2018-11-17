
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>Módulo Gastos</title>
		<script lang="JavaScript" src="../js/jsGasto.js"></script>
	</head>
	<body>
		<div id="datos" class="container">
			<?php
				include ("../../interface/fGasto/fInsertarGasto.php");
			?>		
		</div>

		<div class="container">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div id="mensaje"></div>
			</div>
			<div class="col-md-3"></div>
		</div>

		<p><hr></p>

		<div id="lista" class="container">		
			<?php
				include ("../../interface/fGasto/fListaGastos.php");
			?>		
		</div>
	</body>
</html>