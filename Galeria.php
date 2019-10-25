<!-- Atributos de la imagen 
titulo|formato|fecha|imagen|id_img-->
<!DOCTYPE html>
<html>
<head>
	<link href="estilos.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php  

	session_start();
	$id=$_SESSION['id'];
	if (isset($_SESSION['nombre'])) {
		
	$us=$_SESSION['nombre'];
	echo "<a href=logout.proc.php>Cerrar sesion para $us</a>";
	//datos para conectar la base de datos
	$link = mysqli_connect('localhost', 'root', '', 'bd_gamers');
	$link->set_charset('utf8');

	//recoger variable orden

if (!isset($_POST['orden'])) {
		$orden = 'titulo';
		
	}else{
		$orden = $_POST['orden'];
	}


	//consulta de la base de datos

	if(!$link){
		echo "<h2>Error de conexión!</h2>";
	    echo "Connect failed: ". mysqli_connect_error();
	    exit();

	} else {
		$gamers = mysqli_query($link, "SELECT * from imagen where id_user=$id order by $orden");


		
		



	?>
	<!-- Filtros para ordenar imagenes-->

	<p><form action="Galeria.php" method="POST" accept-charset="utf-8">
	<SELECT name="orden">
			<option value="fecha">Fecha</option>
			<option value="titulo asc">Titulo A-Z</option>
			<option value="titulo desc">Titulo Z-A</option>
			<option value="peso">Peso</option>
			<option value="formato">Tipo</option>
		</SELECT>
		<input style="background:rgb(0,0,200,0.9);"type="submit" name="Buscar" value="Buscar" onmouseover="this.style.background='rgb(173, 172, 253)'" onmouseout="this.style.background='rgb(0,0,200,0.9)'">
		<input type="button" onclick="location.href='F.php'" name="Introducir imagen" value="Introducir imagen"></p>
	
	<?php

	//Muestra los productos de la base de datos
	
			if(mysqli_num_rows($gamers)>0){
			
				
			while($juego=mysqli_fetch_array($gamers))
			{
				echo "<div style='float:left; margin-left:3%;'>";
				echo "<h3><img src='img/".$juego['imagen']."' style='width:400px; height:300px;'>";
				echo "<h3>".$juego['titulo'];
				echo "<h3 class='fecha'>".$juego['fecha'];
				echo "</div>";
			
			}
			
		} else {
			echo "<h2>No hay productos que mostrar!</h2>";
		}
	}
}else{
	header("location: index.php");
}
?>
</body>
</html>
