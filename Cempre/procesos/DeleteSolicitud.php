<?php 
  		require_once "../bd/conexion.php";
          require_once "../bd/CrudSolicitud.php";
          
          $obj= new CrudSolicitud();

	echo $obj->eliminar($_POST['idnit']);

 ?>