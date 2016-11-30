
<?php

$query = "SELECT * FROM usuarios WHERE usuario_nombre='$usuario_nombre' AND usuario_pass='$usuario_pass'";
$result = mysql_query($query);

$row = mysql_fetch_array($result);
if ($row["usuario_tipo"] == 'usuario') {
header("Location:sesion.php");
}
elseif ($row["usuario_tipo"] == 'administrador') {
header("Location:administrador.php");
}
else {
header("Location:index.html");
}
mysql_close($conn);
?>