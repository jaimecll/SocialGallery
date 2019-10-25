<?php
include "conection.php";

$user = $_REQUEST['user'];
$pass = $_REQUEST['password'];


$encript = MD5($pass);


if (isset( $_REQUEST['user'])) {
	
$query = "SELECT * FROM usuario WHERE user = '$user' and pass = '$encript'";
$result = mysqli_query($link,$query);
if (!empty($result) && mysqli_num_rows($result)==1) {
	$columna=mysqli_fetch_array($result);
	$id=$columna['id_user'];
	session_start();
	$_SESSION ['nombre']=$user;
	$_SESSION ['id']=$id;
	header("location: Galeria.php");
}else{
	header("location: Index.php");
	
}
}else{
	header("location: Index.php");
}
?>