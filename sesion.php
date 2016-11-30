<!DOCTYPE html>
<html>
<head>
	<title>SESSION</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
<body>
<?php
session_start();
//session_destroy();
if(isset($_SESSION['u_usuario'])){
	
	echo "Bienvenido! " . $_SESSION['u_usuario'];

	echo "<a href='cerrar_sesion.php'> Cerrar Sesion</a><br/>";
	
	echo "<a href='administrador.php'> <img src='admin.png' height='50' width='90'></a>";
}
else{
	header("Location: index.html");
}
?>
<h1>Reserva de recursos</h1>
<form action="reserva.php" method="post">

<center>
	<table border="2">
		<thead>
		<tr>
			<th>Recursos</th>
		</tr>
		</thead>
		<tbody>
			<tr>
				<td>Recurso</td>
				<td>ID</td>
				<td>Tipo</td>
				<td>Disponible</td>
				<td>Foto</td>

			</tr>
			<?php
			include("conexion.php");
			$query="SELECT * FROM recursos";
			$resultado=$conexion->query($query);
			while($row=$resultado-> fetch_assoc()){
			?>
			<tr>
			<td><b><u><?php echo $row['recurso_nombre']; ?></u></b> 

	Inicio reserva:	
	<input type="datetime-local" name="inicio_reserva">';
	Fin reserva:
	<input type="datetime-local" name="fin_reserva">';
	<input type="submit" value="Reservar">;

			 </td>
			<td><?php echo $row['recurso_id']; ?></td>
			<td><?php echo $row['recurso_tipo']; ?></td>
			<td><?php echo $row['recurso_disponible']; ?></td>
			<td><img src="data:image/jpg;base64,<?php echo base64_encode($row['recurso_foto']); ?>" width='175' height='120'/> </td>
			
			</tr>	
			<?php
			}
			?>

		</tbody>
	</table>
</center>




</body>
</html>







