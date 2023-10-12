<?php 

	require_once "../bd/conexion.php";
	require_once "../bd/CrudUsuario.php";
	
	$obj= new CrudUsuario();
    $clave = md5($_POST['clave']);
	$datos=array(
		 $_POST['usuario'],
         $_POST['correo'],
         $clave,
         $_POST['rol']
      
	);
	echo $obj->agregar($datos);
 ?>