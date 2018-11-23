<?Php 
	session_start();
	
	if($_SESSION) {
		header("location:../index.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../js/bootstrap/css/bootstrap.min.css">
	<script lang="JavaScript" src="../../js/jQuery.js"></script>
	<script lang="JavaScript" src="../../js/bootstrap/js/bootstrap.min.js"></script>
	<script lang="JavaScript" src="../../js/jsLogin.js"></script>
    <script lang="JavaScript" src="../../js/jquery.validate.min.js"></script>
    <title>Login</title>
</head>
<style>
    .Margin{
        margin-top: 10em;
    }
</style>
<body>
    <div class="container Margin">
        <div class="row">
            <div class="col-md-offset-3 col-lg-offset-3 col-sx-12 col-sm-12 col-md-6 col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Expensify</h3>
                </div>
                <div class="panel-body">
                    <form role="form" id="inicioSesion" action="fAccesoUsuario.php" method="POST">
                        <fieldset>
                            <input type="hidden" id="nombre" name="nombre">
                            <div class="form-group">
                                <input class="validate form-control" placeholder="Usuario" name="user" id="user" type="text" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="validate form-control" placeholder="Contraseña" name="password" id="password" type="password" value="">
                            </div>
                            <input type="submit" value = "Ingresar" name="btn_login" class="col s12 btn btn-large btn-success waves-effect indigo">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>