<?php 

	require_once "../bd/conexion.php";
	require_once "../bd/CrudSolicitud.php";
	
    $obj= new CrudSolicitud();
    session_start();
    $id = $_SESSION['idUsuario'];
	$datos=array(
         $_POST['nit'],
         $_POST['nombre'],
         $_POST['ciudad'],
         $_POST['Direccion'],
         $_POST['telefono'],
         $_POST['sitioweb'],
         $_POST['actividades'],
         $_POST['nombrecontacto'],
         $_POST['cargo'],
         $_POST['celular'],
         $_POST['correo'],
         $_POST['programa'],
         $_POST['tipopractica'],
         $_POST['funciones'],
         $_POST['remuneracion'],
         $_POST['valor'],
         $_POST['observaciones'],
         $id
	);
	echo $obj->agregar($datos);
 ?>