<?php
include("conexion.php");
$nombre= $_POST['recurso_nombre'];
$recurso= $_POST['recurso_tipo'];
$disponible= $_POST['recurso_disponible'];
$imagen= addslashes(file_get_contents($_FILES['recurso_foto']['tmp_name']));

$query= "INSERT INTO recursos(recurso_nombre,recurso_tipo, recurso_disponible, recurso_foto) VALUES('$nombre','$recurso','$disponible','$imagen') ";
$resultado= $conexion->query($query);

if($resultado){
	//echo "se ha insertado";
	header("Location: administrador.php");
}
else{
	echo "no se ha insertado";
}
?>