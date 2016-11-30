<?php
include 'conexion.php';
//recogida con el POST
$ini_reserva=$_POST ['inicio_reserva'];
$fi_reserva=$_POST ['fin_reserva'];
$re_id= $_POST['recurso_id'];

//inserts a la BBDD
$query="UPDATE recursos SET recurso_disponble='NO', WHERE recurso_id='recurso_id' ";
//inserta en la tbl reservas
$query2= "INSERT INTO reserva(reserva_id,recurso_id, usuario_id, reserva_ini, reserva_fin) VALUES('','$re_id','','$ini_reserva','fi_reserva') ";
$resultado = $conexion->query($query);
$resultado2 = $conexion->query($query2);
//porsi falla
if (!$resultado) {
	echo 'Error al reservar';
}else {
	echo ' Registrado correctament';
		
	header("Location: sesion.php");
}

?>

