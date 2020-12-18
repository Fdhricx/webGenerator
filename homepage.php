<!DOCTYPE html>

<html><head>
	<title>Generator</title>
	<link href="styles/css/bootstrap.min.css" rel="stylesheet">
</head>
<body bgcolor="darkblue">
 <header class="jumbotron my-4">
<font face="Century Gothic" color="darkblue" size="+1">
	<center><h1> WEB GENERATOR </h1></center><br>
<center>
<?php
	echo '<p><a class="btn btn-primary" href="index.php?accion=form_login" role="button">Login</a></p><br />';
	echo '<p><a class="btn btn-primary" href="register.php" role="button">Register</a></p><br />';
?>

<p><a class="btn btn-primary" href="index.php?accion=panel" role="button">Panel</a></p><br />
<p><a class="btn btn-primary" href="index.php?accion=cerrar" role="button">Logout</a></p><br />
</font>
</center>
</header>

</body></html>