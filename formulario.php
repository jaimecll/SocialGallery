


<?php  
	
	//Recogida de datos de la pagina del formulario
	session_start();
	if (isset($_SESSION['nombre'])) {
		
	$titulo = $_REQUEST['Titulo'];
	$imagen = $_REQUEST['imagen'];
	$link = mysqli_connect('localhost', 'root', '', 'bd_gamers');
	$link->set_charset('utf8');
	


	$paso=0;
	//consulta de la base de datos
	$fecha=date('y-m-d');
	if(!$link){
		echo "<h2>Error de conexión!</h2>";
	    echo "Connect failed: ". mysqli_connect_error();
	    exit();

	    
	} else {
	
		//coger peso y tipo de la imagen
		$ruta="img/".$imagen;
	$tipo =pathinfo($ruta, PATHINFO_EXTENSION);
	$peso=filesize("img/$imagen");
	//Si se quiere recoger kb se tendria que dividir peso entre 1024 ya que este lo devuelve en bytes
	
	

		//Consultar las imagenes para comprobar que no existan
		$gamers = mysqli_query($link, "SELECT imagen from imagen where '$imagen' = imagen");
	if (mysqli_num_rows($gamers)==0) {
		
	
		
	
		//Insercion de los datos en la base de datos

		$insertar = "INSERT INTO imagen (titulo,imagen,fecha,peso,formato) VALUES ('$titulo', '$imagen', '$fecha','$peso','$tipo')";

	$resultado = mysqli_query($link, $insertar);
		if (!$resultado) {
			echo "Error al introducir la imagen";
		} else {
			echo "Se ha introducido la imagen<br>";
		}

}else{
	echo "La imagen ya existe<br>";
}}
	?>
	<input type="button" onclick="location.href='Galeria.php'" name="Volver" value="Volver">
	<?php
	}else{
header("location: index.php");
}
	?>

	<!-- Enviar automaticamente a la pagina galeria-->

	<!--<META HTTP-EQUIV="REFRESH" CONTENT="0;Galeria.php"> -->

	