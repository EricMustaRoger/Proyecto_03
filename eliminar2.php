<?php
include 'conexion.php';
$recurso_id= $_REQUEST['recurso_id'];

$query="DELETE FROM recursos WHERE recurso_id = '$recurso_id'";
$resultado = $conexion->query($query);

if ($resultado) {
	//echo 'Se elimino';
	header("Location: administrador.php");
}else {
	echo ' No se elimino';
		
	}

