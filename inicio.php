<?php

session_start();

//recogida con el POST
$usuario_nombre = $_POST["usuario_nombre"];
$usuario_pass = $_POST["usuario_pass"];
include ("conexion.php");

$proceso = $conexion->query("SELECT * FROM usuarios WHERE usuario_nombre='$usuario_nombre' AND usuario_pass='$usuario_pass'");
if($resultado = mysqli_fetch_array($proceso)){
	$_SESSION['u_usuario'] = $usuario_nombre;
	header("Location: sesion.php");
	//echo "funciona bien";
}
else{
	header("Location: index.html");
	//echo "sesion mal realizada";
}

?>

