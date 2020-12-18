<?php

	function iniciar_login($email, $pass){
		global $bd;
		$sql = "SELECT * FROM usuarios WHERE email= '$email' AND password= '$pass'";
		$q = $bd->query($sql);
		return $q->fetch_array();
	}
	function register_usuario($email, $pass, $fecha){
		global $bd;
		$sql = "INSERT INTO usuarios (email, password, fechaRegistro) VALUES ('$email', '$pass', '$fecha')";
		$bd->query($sql);
	}
	function verificar_correo($email){
		global $bd;
		$sql = "SELECT email FROM usuarios WHERE email='$email'";
		$q= $bd->query($sql);
		return $q->fetch_array();
	}
	function registrar_dominio($dominio, $id, $fecha){
		global $bd;
		$sql = "INSERT INTO webs (idUsuario, dominio, fechaCreacion) VALUES ('$id', '$dominio', '$fecha')";
		$bd->query($sql);
	}
	function buscardom($dom){
		global $bd;
		$sql = "SELECT dominio FROM webs WHERE dominio = '$dom'";
		$q = $bd->query($sql);
		return $q->fetch_array();
	}
?>
