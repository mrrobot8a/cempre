<?php 
	require_once "../bd/conexion.php";
    require_once "../bd/CrudUsuario.php";       
    $obj= new CrudUsuario();
	$clave = md5($_POST['claveU']);
	$datos=array(

        $clave,
        $_POST['idUsuarioU']
        );
    					 
	echo $obj->actualizar($datos);
    
 ?>