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
	echo "<a href='cerrar_sesion.php'> Cerrar Sesion</a></br>";
	echo "<a href='administrador.php'> Atras</a></br>";
	
}
else{
	header("Location: index.html");
}
?>
<?php
			$recurso_id=$_REQUEST['recurso_id'];
			include("conexion.php");
			$query="SELECT * FROM recursos WHERE recurso_id='$recurso_id'";
			$resultado=$conexion->query($query);
			$row=$resultado-> fetch_assoc();
?>
<h1>Modificación (ADMINISTRADOR)</h1>
<form action="modificar2.proc.php?recurso_id=<?php echo $row['recurso_id']; ?>" method="post" enctype="multipart/from-data">
<h2 class="form__titulo">Modifica recursos</h2>

<div class="contenedor-inputs">
<input type="text" name="recurso_nombre" placeholder="Nombre Recurso" class="input-48" value="<?php echo $row['recurso_nombre']; ?>" required>
<input type="text" name="recurso_tipo" placeholder="Tipo recurso" class="input-48" value="<?php echo $row['recurso_tipo']; ?>" required>
<input type="text" name="recurso_disponible" placeholder="Disponible Si / NO" class="input-48" value="<?php echo $row['recurso_disponible']; ?>" required>
<img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['recurso_foto']); ?>" width='175' height='120'/>
<input type="file" name="recurso_foto"/><br/>
<input type="submit" value="Cambiar" class="btn-enviar">
</div>
</form>
</body>
</html>