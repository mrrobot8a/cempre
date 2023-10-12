<?php 
    require_once "../bd/conexion.php";
	require_once "../bd/CrudHojaDeVida.php";
	$obj= new CrudHojaDeVida();

	echo $obj->eliminar($_POST['cedula']);

 ?>