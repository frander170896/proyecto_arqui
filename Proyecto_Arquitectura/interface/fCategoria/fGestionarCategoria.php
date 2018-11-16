<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Módulo Categoría</title>
	<script lang="JavaScript" src="../js/jsCategoria.js"></script>
</head>
<body>
	<div id="datos" class="container">
		<?php
			include ("../../interface/fCategoria/fInsertarCategoria.php");
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
			include ("../../interface/fCategoria/fListaCategorias.php");
	  	?>		
	</div>
</body>
</html>