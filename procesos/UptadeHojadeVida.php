<?php 
	require_once "../bd/conexion.php";
    require_once "../bd/CrudHojaDeVida.php";       
    $obj= new CrudHojaDeVida();

	$datos=array(
        $_POST['programaX'],
		$_POST['primerapellidoX'],
        $_POST['segundoapellidoX'],
        $_POST['nombresX'],
        $_POST['fechaNaciminetoX'],
        $_POST['estadoCivilX'],
        $_POST['direccionX'],
        $_POST['telefonoX'],
        $_POST['epsX'],
        $_POST['correoElectronicoX'],
        $_POST['ciudadX'],
        $_POST['instituto_01X'],
        $_POST['titulo_01X'],
        $_POST['fecha_01X'], 
        $_POST['instituto_02X'],
        $_POST['titulo_02X'],
        $_POST['fecha_02X'],
        $_POST['ingles_01X'],
        $_POST['ingles_02X'],
        $_POST['ingles_03X'],
        $_POST['ingles_04X'],
        $_POST['aleman_01X'],
        $_POST['aleman_02X'],
        $_POST['aleman_03X'],
        $_POST['aleman_04X'],
        $_POST['frances_01X'],
        $_POST['frances_02X'],
        $_POST['frances_03X'],
        $_POST['frances_04X'],
        $_POST['otros_01X'],
        $_POST['otros_02X'],
        $_POST['otros_03X'],
        $_POST['otros_04X'],
        $_POST['apartado_03X'],
        $_POST['apartado_04X'],
        $_POST['apartado_05X'],
        $_POST['apartado_06X'],
        $_POST['entidad_01X'],
        $_POST['cargo_01X'],
        $_POST['funcion_01X'],
        $_POST['duracion_01X'],
        $_POST['entidad_02X'],
        $_POST['cargo_02X'],
        $_POST['funcion_02X'],
        $_POST['duracion_02X'],
        $_POST['apartado_08X'],
        $_POST['cedulaX']
        );
    					 
	echo $obj->actualizar($datos);
    
 ?>