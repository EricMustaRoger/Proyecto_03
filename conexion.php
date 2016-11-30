<?php
$conexion = mysqli_connect("localhost", "root", "", "bd_cromo2");
if($conexion) {
	echo 'Conectado a la BBDD';
}
else{
	echo 'No Conectado a la BBDD';
}

