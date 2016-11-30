<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<h1>Iniciar sesión</h1>
<form action="inicio.php" method="post" class="form-register">
<h2 class="form__titulo">INICIA SESIÓN</h2>
<div class="contenedor-inputs">
<input type="text" name="usuario_nombre" placeholder="Usuario" class="input-48" required>
<input type="password" name="usuario_pass" placeholder="Contrasenya" class="input-48" required>
<input type="submit" value="Iniciar" class="btn-enviar">
<p class="form__link">No tienes cuenta?<a href="index.html">Clic aqui</a></p>
</div>
</form>
</body>
</html>