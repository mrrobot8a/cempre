<?php 
	
    require_once "../bd/conexion.php";
	require_once "../bd/CrudUsuario.php";
	
	$obj= new CrudUsuario();
	echo json_encode($obj->obtenDatosRol($_POST['idUsuarioX']));
 ?>