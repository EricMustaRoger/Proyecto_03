<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Modificaciones</title>
</head>
<body>
<?php
session_start();
//session_destroy();
if(isset($_SESSION['u_usuario'])){
	//echo "Session exitosa\n Bienvenido";
	echo "Bienvenido! " . $_SESSION['u_usuario'];

	echo "<a href='cerrar_sesion.php'> Cerrar Sesion</a>";
	
}
else{
	header("Location: index.html");
}
?>
<?php
			$usuario_id=$_REQUEST['usuario_id'];
			include("conexion.php");
			$query="SELECT * FROM usuarios WHERE usuario_id='$usuario_id'";
			$resultado=$conexion->query($query);
			$row=$resultado-> fetch_assoc();
?>
<h1>Modificación (ADMINISTRADOR)</h1>
<form action="modificar.proc.php?usuario_id=<?php echo $row['usuario_id']; ?>" method="post" enctype="multipart/from-data">

<h2 class="form__titulo">Modifica Datos</h2>

<div class="contenedor-inputs">

<input type="text" name="usuario_nombre" placeholder="Usuario" class="input-48" value="<?php echo $row['usuario_nombre']; ?>" required>
<input type="text" name="usuario_tipo" placeholder="Tipo Usuario" class="input-48" value="<?php echo $row['usuario_tipo']; ?>" required>
<input type="password" name="usuario_pass" placeholder="Contrasenya" class="input-48" value="<?php echo $row['usuario_pass']; ?>" required>
<input type="submit" value="Cambiar" class="btn-enviar">

</div>
</form>
</body>
</html>
