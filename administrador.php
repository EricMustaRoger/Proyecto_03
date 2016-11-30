<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
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
	echo "<a href='sesion.php'> Atras</a></br>";
}
else{
	header("Location: index.html");
}
?>
<h1>Administración</h1>
<center>
	<table border="2">
		<thead>
		<tr>
			<th colspan="4">Usuarios</th>
		</tr>
		</thead>
		<tbody>
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td>Password</td>
				<td>Tipo</td>
			</tr>
			<?php
			include("conexion.php");
			$query="SELECT * FROM usuarios";
			$resultado=$conexion->query($query);
			while($row=$resultado-> fetch_assoc()){
			?>
			<tr>
			<td><?php echo $row['usuario_id']; ?></td>
			<td><?php echo $row['usuario_nombre']; ?></td>
			<td><?php echo $row['usuario_pass']; ?></td>
			<td><?php echo $row['usuario_tipo']; ?></td>
			<?php $usuario_id=$row['usuario_id']; ?>
			
			<td><a href="modificar.php?usuario_id=<?php echo $row; ?>"><img src="modificar.png" height="40" width="70"></a></td>
			<td><a href="eliminar.php?usuario_id=<?php echo $usuario_id; ?>"><img src="eliminar.png" height="40" width="70"></a></td>
			</tr>
			<?php
			}
			?>

		</tbody>
	</table>
</center>

<center>
	<table border="2">
		<thead>
		<tr>
			<th colspan="5">Recursos</th>
		</tr>
		</thead>
		<tbody>
			<tr>
				<td>ID recurso</td>
				<td>Nombre recurso</td>
				<td>Tipo Recurso</td>
				<td>Disponible</td>
				<td>Foto</td>
				<td><a href="guardar_recurso.php"> <img src="boton_nuevo.png" height="50" width="110"></a></td>
			</tr>
			<?php
			include("conexion.php");
			$query="SELECT * FROM recursos";
			$resultado=$conexion->query($query);
			while($row=$resultado-> fetch_assoc()){
			?>
			<tr>
			<td><?php echo $row['recurso_id']; ?></td>
			<td><?php echo $row['recurso_nombre']; ?></td>
			<td><?php echo $row['recurso_tipo']; ?></td>
			<td><?php echo $row['recurso_disponible']; ?></td>
			<td><img src="data:image/jpg;base64,<?php echo base64_encode($row['recurso_foto']); ?>" width='175' height='120'/> </td>
			<?php $recurso_id=$row['recurso_id']; ?>
			<td><a href="modificar2.php?recurso_id=<?php echo $recurso_id; ?>"><img src="modificar.png" height="40" width="70"></a></td>
			<td><a href="eliminar2.php?recurso_id=<?php echo $recurso_id; ?>"><img src="eliminar.png" height="40" width="70"></a></td>
			</tr>

			<?php
			}
			?>

		</tbody>
	</table>
</center>

<center>
	<table border="2">
		<thead>
		<tr>
			<th colspan="5">Reservas</th>
		</tr>
		</thead>
		<tbody>
			<tr>
				<td>ID reserva</td>
				<td>ID recurso</td>
				<td>ID usuario</td>
				<td>Fecha Reserva Recogida</td>
				<td>Fecha Reserva Entrega</td>
			</tr>
			<?php
			include("conexion.php");
			$query="SELECT * FROM reserva";
			$resultado=$conexion->query($query);
			while($row=$resultado-> fetch_assoc()){
			?>
			<tr>
			<td><?php echo $row['reserva_id']; ?></td>
			<td><?php echo $row['recurso_id']; ?></td>
			<td><?php echo $row['usuario_id']; ?></td>
			<td><?php echo $row['reserva_ini']; ?></td>
			<td><?php echo $row['reserva_fin']; ?></td>

			<td><a href="modificar3.php?usuario_id=<?php echo $row; ?>">Modificar</a></td>
			<!--<td><a href="eliminar3.php?usuario_id=<?php echo $row; ?>">Eliminar</a></td>-->
			<td><a href="eliminar3.php?usuario_id=<?php echo $reserva_id; ?>">Eliminar</a></td>
			</tr>
			<?php
			}
			?>

		</tbody>
	</table>
</center>
</body>
</html>