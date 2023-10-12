<?php 
	require_once "../bd/conexion.php";
    require_once "../bd/CrudUsuario.php";       
    $obj= new CrudUsuario();

	$datos=array(

        $_POST['rolX'],
        $_POST['estadoX'],
        $_POST['idUsuarioX']
        );
    					 
	echo $obj->actualizarRol($datos);
    
 ?>

 