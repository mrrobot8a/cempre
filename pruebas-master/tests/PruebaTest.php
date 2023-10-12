<?php

use App\PruebaUnit\Funciones;








class FuncionesTest extends \PHPUnit\Framework\TestCase {

	/** @test **/
	public function probarconexion() {
		$conexion = new Funciones;

		$res = $conexion->on();

		$this->assertEquals(true, $res);
	}

	
	public function insertarUsuario() {
		$usuario = new Funciones;

		$res = $usuario->agregar('fernado','fernando@gmail.com','1234','admin','activo');

		$this->assertEquals(true, $res);
	}

	 
	public function GetDataUsuario() {
		$usuario = new Funciones;

		$res = $usuario->obtenDatos(28);

		$this->assertEquals(true, $res);
	}

	
	
	public function postSolicitud() {
		$solicitud = new funciones;
		$array = [
			      'nit',
			      'nombre',
			       'ciudad',
			     'Direccion',
			'telefono',
			'sitioweb',
			'actividades',
		    'nombrecontacto',
			'cargo',
			'celular',
			'correo',
			'programa',
			'tipopractica',
			'funciones',
			'remuneracion',
			'valor',
			'observaciones',
			28
		];

		$res = $solicitud->agregarSolicitud($array);

		$this->assertEquals(true, $res);
	}


     
	public function putSolicutad() {
		$solicitud = new Funciones;
		$array = [
			      '1223342',
			      'nombre',
			       'ciudad',
			     'Direccion',
			'telefono',
			'sitioweb',
			'actividades',
		    'nombrecontacto',
			'cargo',
			'celular',
			'correo',
			'programa',
			'tipopractica',
			'funciones',
			'remuneracion',
			'valor',
			'observaciones',
			28
		];

		$res = $solicitud->actualizar($array);

		$this->assertEquals(true, $res);
	}
	

	
	 
	public function deleteSolicitud() {
		$solicitud = new Funciones;

		$res = $solicitud->eliminar(27);

		$this->assertEquals(true, $res);
	}
	

		
}


