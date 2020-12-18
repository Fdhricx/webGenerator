<!DOCTYPE html>
<html>
<head>
	<link href="styles/css/bootstrap.min.css" rel="stylesheet">
	<title>WEB GENERATOR</title>
</head>
<body>

	<center><h1>BIENVENIDO AL PANEL</h1></center>
	<a href="index.php?accion=cerrar">Cerrar sesion de <?php echo $_SESSION['id_u'];?></a>
	<h1>GENERAR WEB</h1>
	<form action="index.php" method="get">
		<input type="hidden" name="accion" value="dominio">
		<input type="text" name="web">
		<input type="submit" name="boton" value="Enviar">
	</form>
	<?php
		if (isset($_SESSION['admin'])) {
			$con = mysqli_connect("localhost","adm_webgenerator","webgenerator2020","webgenerator");
			$ssql = "SELECT * FROM webs";
			$res = mysqli_query($con,$ssql);

			while ($fila = mysqli_fetch_array($res, MYSQLI_ASSOC)){
				$dom = $fila["dominio"];
				echo "<a href=".$dom."/>".$dom."</a> -------";
				echo "<a href=index.php?accion=descargar&dominio=".$dom."> Descargar WEB</a><br>";
			}
		}else{
			$con = mysqli_connect("localhost","adm_webgenerator","webgenerator2020","webgenerator");
			$ssql = "SELECT * FROM webs WHERE idUsuario=".$_SESSION['id_u'];
			$res = mysqli_query($con,$ssql);

			while ($fila = mysqli_fetch_array($res, MYSQLI_ASSOC)){
				$dom = $fila["dominio"];
				echo "<a href=".$dom."/>".$dom."</a> -------";
				echo "<a href=index.php?accion=descargar&dominio=".$dom."> Descargar WEB</a><br>";
			}

		}
		
	?>

</body>
</html>