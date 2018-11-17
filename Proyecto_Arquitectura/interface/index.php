<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Expensify</title>

	<link rel="stylesheet" href="../js/bootstrap/css/bootstrap.min.css">
	<script lang="JavaScript" src="../js/jQuery.js"></script>
	<script lang="JavaScript" src="../js/bootstrap/js/bootstrap.min.js"></script>
	<script lang="JavaScript" src="../js/jsAcciones.js"></script>
	<script lang="JavaScript" src="../js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      
    </script>
</head>
<body onload="cargarPagina('../interface/fDashBoard/fDashBoard.php')">
	<br>
	<div class="container">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
					<a class="navbar-brand" onclick="cargarPagina('../interface/fDashBoard/fDashBoard.php')">Expensify</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="#" onclick="cargarPagina('../interface/fGasto/fGestionarGasto.php')">Gastos</a></li> 
						<li><a href="#" onclick="cargarPagina('../interface/fCategoria/fGestionarCategoria.php')">Categorías</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<hr>
		
		<div id="contenedor">
		</div>
	</div>
</body>
</html>