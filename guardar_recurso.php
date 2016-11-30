<!DOCTYPE html>
<html>
<head>
	<title>Añadir recurso</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php
session_start();
//session_destroy();
if(isset($_SESSION['u_usuario'])){
	echo "Session exitosa\n Bienvenido";
	echo " " . $_SESSION['u_usuario'];

	echo "<a href='cerrar_sesion.php'> Cerrar Sesion</a></br>";
	echo "<a href='administrador.php'> Atras</a></br>";
}
else{
	header("Location: index.html");
}
?>
<center>
	<form action="guardar_recurso_proc.php" method="POST" enctype="multipart/form-data"><br/><br/>
	<input type="Text" required name="recurso_nombre" placeholder="Nombre recurso" value="" /><br/>
	<input type="Text" required name="recurso_tipo" placeholder="Tipo Recurso" value="" /><br/>
	<input type="Text" required name="recurso_disponible" placeholder="Disponible SI/NO" value="" /><br/>
	<input type="file" required name="recurso_foto" /><br/>
	<input type="submit" value="Guardar" />
</center>
</body>
</html>