<?php 
	
    require_once "../bd/conexion.php";
    require_once "../bd/CrudSolicitud.php";
          
          $obj= new CrudSolicitud();
	echo json_encode($obj->obtenDatos($_POST['idnitU']));
 ?>