<?php
include 'conexion.php';
//recogida con el POST
$usuario_id= $_REQUEST['usuario_id'];

//inserts a la BBDD de usuarios
$query="DELETE FROM usuarios WHERE usuario_id='$usuario_id' ";
$resultado = $conexion->query($query);
//porsi falla
if (!$resultado) {
	echo 'Error al borrar';
}else {
	//echo ' Usuario registrado correctament';
		
	header("Location: administrador.php");
}

