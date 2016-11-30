<?php
include 'conexion.php';
//recogida con el POST
$usuario_nombre = $_POST["usuario_nombre"];
$usuario_tipo = $_POST["usuario_tipo"];
$usuario_pass = $_POST["usuario_pass"];

//inserts a la BBDD de usuarios
$insertar="INSERT INTO usuarios(usuario_nombre, usuario_pass, usuario_tipo) VALUES ('$usuario_nombre', '$usuario_pass', '$usuario_tipo')";
//evitar duplicidad de usuarios
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario_nombre = '$usuario_nombre'");
if(mysqli_num_rows($verificar_usuario) > 0){
	echo '<script>
	alert ("El usuario ya esta registrado");
	window.history.go(-1);
	</script>';
	exit;
}



//ejecucion dl insert
$resultado = mysqli_query($conexion, $insertar);
//porsi falla
if (!$resultado) {
	echo 'Error al resgitrar';
}else {
	//echo ' Usuario registrado correctament';
		
	header("Location: iniciar_sesion.php");
}

//cerramos la conex
mysqli_close($conexion);