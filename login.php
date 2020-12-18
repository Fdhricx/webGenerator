<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>WEB GENERATOR</title>
	<link href="styles/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<center><h1>WEB GENERATOR</h1></center>
	<div class="container">
		<div class="row justify-content-md-center">
				<form action="." method="GET">
					<input type="hidden" name="accion" value="login">
					<font size="+2" color="black" face="Century Gothic">
					<p class"font-weight-light"> Ingresar E-mail: </p>
					<input type="text" class="form-control" name="email" placeholder="ejemplo@gmail.com" required><br> <br>

					<p class="font-weight-light">Ingresar contraseña: </p>
					<input type="password" class="form-control" name="pw" required><br>
					<button type="submit" class="btn btn-primary">Iniciar sesion</button>
					</font>
				</form>
				<div class="text-center">
	               	<a class="small" href="register.php">Obtener una cuenta</a>
	            </div>
		</div>
	</div>

</body>
</html>