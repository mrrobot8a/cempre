<?php 
 require_once "../bd/conexion.php";
 require_once "../bd/CrudSolicitud.php";
       
       $obj= new CrudSolicitud();

	$datos=array(
        $_POST['nombreU'],
        $_POST['ciudadU'],
        $_POST['DireccionU'],
        $_POST['telefonoU'],
        $_POST['sitiowebU'],
        $_POST['actividadesU'],
        $_POST['nombrecontactoU'],
        $_POST['cargoU'],
        $_POST['celularU'],
        $_POST['correoU'],
        $_POST['tipopracticaU'],
        $_POST['funcionesU'],
        $_POST['remuneracionU'],
        $_POST['valorU'],
        $_POST['funcionesU'],
        $_POST['observacionesU'],
        $_POST['estadoU'],
        $_POST['idnitU']
        );
    					 
	echo $obj->actualizar($datos);


 ?>