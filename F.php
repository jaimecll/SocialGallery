
<!DOCTYPE html>
<html>
<head>
<?php

session_start();
	if (isset($_SESSION['nombre'])) {
	$us=$_SESSION['nombre'];
	echo "<a href=logout.proc.php>Cerrar sesion para $us</a>";
?>
	<link href="estilos.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
	<title>Publica tu imagen</title>
</head>
<body>

	
	<div class="login_panel">
		<h3 style="text-align: center;">Publica tu imagen</h3>
	<center>

		<!--formulario-->
<form action="formulario.php" method="REQUEST" enctype="multipart/form-data">
	<label>Titulo</label>
	<input type="text" name="Titulo" placeholder="Titulo" id="Titulo" required> 
	<br> <br>

	<label>Subir Imágen</label>
	<input type="file" accept="image/jpg, image/jpeg, image/png" name="imagen" id="imagen" required>
	<br> <br>
	<input type="submit" name="Enviar" placeholder="Enviar">
	<input type="reset" name="Borrar" value="Borrar">
	</form>
	<input type="button" onclick="location.href='Galeria.php'" name="Volver" value="Volver">
	<?php
	}else{
header("location: index.php");
}
?>
</center>
</div>
</body>
</html>




