<?php
include 'conexion.php';
$usuario_id= $_REQUEST['usuario_id'];
$usu_nombre= $_POST['usuario_nombre'];
$usu_pass= $_POST['usuario_pass'];
$usu_tipo= $_POST['usuario_tipo'];

$query="UPDATE usuarios SET usuario_nombre='$usu_nombre', usuario_pass='$usu_pass', usuario_tipo='$usu_tipo' WHERE usuario_id='$usuario_id' ";
$resultado = $conexion->query($query);
if ($resultado) {
	header("Location: administrador.php");
}else {
	echo ' No se modifico';
}
