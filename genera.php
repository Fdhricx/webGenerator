<?php
$msg = "";
	if (isset($_GET["boton"])) {
		$retorno = shell_exec('./carpeta.sh');
		$msg = $retorno;
		$retorno = shell_exec('chmod 777 test');	
	}else{
		$msg = "Presione el script par ejecutar";
	}

	$con = mysqli_connect("mattprofe.com.ar", "3629", "3629", "3629");
	var_dump($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>GENERA</title>
</head>
<body>
	<form action="" method="">
		<input type="submit" name="boton" value="GENERAR">
		<div>
			<?php
				echo $msg;
			?>
		</div>
	</form>
</body>
</html>