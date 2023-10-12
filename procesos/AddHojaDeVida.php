<?php 

	require_once "../bd/conexion.php";
	require_once "../bd/CrudHojaDeVida.php";
	
	$obj= new CrudHojaDeVida();
    session_start();
    $id = $_SESSION['idUsuario'];
	$datos=array(
         $_POST['fecha'],
         $_POST['programa'],
         $_POST['primerapellido'],
         $_POST['segundoapellido'],
         $_POST['nombres'],
         $_POST['cedula'],
         $_POST['fechaNacimineto'],
         $_POST['estadoCivil'],
         $_POST['direccion'],
         $_POST['telefono'],
         $_POST['eps'],
         $_POST['correoElectronico'],
         $_POST['ciudad'],
         $_POST['instituto_01'],
         $_POST['titulo_01'],
         $_POST['fecha_01'], 
         $_POST['instituto_02'],
         $_POST['titulo_02'],
         $_POST['fecha_02'],
         $_POST['ingles_01'],
         $_POST['ingles_02'],
         $_POST['ingles_03'],
         $_POST['ingles_04'],
         $_POST['aleman_01'],
         $_POST['aleman_02'],
         $_POST['aleman_03'],
         $_POST['aleman_04'],
         $_POST['frances_01'],
         $_POST['frances_02'],
         $_POST['frances_03'],
         $_POST['frances_04'],
         $_POST['otros_01'],
         $_POST['otros_02'],
         $_POST['otros_03'],
         $_POST['otros_04'],
         $_POST['apartado_03'],
         $_POST['apartado_04'],
         $_POST['apartado_05'],
         $_POST['apartado_06'],
         $_POST['entidad_01'],
         $_POST['cargo_01'],
         $_POST['funcion_01'],
         $_POST['duracion_01'],
         $_POST['entidad_02'],
         $_POST['cargo_02'],
         $_POST['funcion_02'],
         $_POST['duracion_02'],
         $_POST['apartado_08'],
         $id

         
	);
	echo $obj->agregar($datos);
 ?>