<?php 
	
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'cempre';

	$conection = @mysqli_connect($host,$user,$password,$db);
     //mysqli_close($conection);
	if(!$conection){
		echo "Error en la conexión awui";
	}

?>