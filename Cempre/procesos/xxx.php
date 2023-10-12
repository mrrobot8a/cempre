<?php 
	
    require_once "../bd/conexion.php";
	require_once "../bd/CrudHojaDeVida.php";
	
	$obj= new CrudHojaDeVida();
	echo json_encode($obj->obtenDatosX($_POST['cedulaX']));
 ?>