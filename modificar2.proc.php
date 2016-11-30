<?php
include 'conexion.php';
$recurso_id= $_REQUEST['recurso_id'];
$recu_nombre= $_POST['recurso_nombre'];
$recu_tipo= $_POST['recurso_tipo'];
$recu_disponible= $_POST['recurso_disponible'];
$recurso_foto = $_POST['recurso_foto'];
echo $recurso_foto;

//$imagen= addslashes(file_get_contents($_FILES['recurso_foto']['tmp_name']));
$imagen = '"C:\\xampp\\htdocs\\proyecto33\\img\\'.$recurso_foto.'"';
echo $imagen;
//$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query="UPDATE recursos SET recurso_nombre='$recu_nombre', recurso_tipo='$recu_tipo', recurso_disponible='$recu_disponible', recurso_foto=$imagen WHERE recurso_id='$recurso_id' ";
echo $query;
$resultado = $conexion->query($query);

if ($resultado) {
	header("Location: administrador.php");
}else {
	echo ' No se modifico';
		
	
}


