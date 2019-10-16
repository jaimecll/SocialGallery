<?php 
 $link = mysqli_connect ('localhost', 'root', '', 'bd_gamers');
 if ($link) {
 	echo "OK<br>";

 }else{
 	echo "NO OK<br>";
 }

 ?>