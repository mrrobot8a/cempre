<?php

namespace App\PruebaUnit;
require_once "conexion.php";





use App\Calculadora\Excepciones\DivisionPorCeroException;
use App\Calculadora\Excepciones\ArregloException;
use conectar;

class Funciones {
	


	public function on(){
    
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $db = 'cempre'; 
        $conection = @mysqli_connect($host,$user,$password,$db);
		
		if($conection){
			$conection =true;
		}else{
			
		}
        return $conection;
    }
	
	public function conexion(){
		
		$host = 'localhost';
		$user = 'root';
		$password = '';
		$db = 'cempre'; 
		$conexion=mysqli_connect($host,$user,$password,$db);
		   
		return $conexion;
	}
    
	
		public function agregar($usuario,$correo,$clave,$rol,$estado){
			$obj= new conectar;
			$conexion=$obj->conexion();
			$sql="INSERT into usuarios (usuario,
			                            correo,
										clave,
										rol,
										estado)
									values ('$usuario',
											'$correo',
											'$clave',
											'$rol',
											'Inactivo')";
			$resul = mysqli_query($conexion,$sql);	

			if($resul){
            return	$conection =true;
			}else{
				
			}
			return $conection = false;
	}
	
	 
	public function obtenDatos($idUsuarioU){
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="SELECT idUsuario,
					 clave
				from usuarios 
				where idUsuario='$idUsuarioU'";
	
		$result=mysqli_query($conexion,$sql);
		$ver=mysqli_fetch_row($result);

		$datos=array(
			'idUsuario' => $ver[0],
			'clave' => $ver[1]
			);
             
			if($ver!=NULL){
				return	$resl =true;
				}else{
					return	$resl =false;
				}
	
	}

	public function agregarSolicitud($datos){
		$obj= new conectar();
		$conexion=$obj->conexion();
		$sql="INSERT into solicitud (nit,
									 nombre,
									 ciudad,
									 Direccion,
									 telefono,
									 sitioweb,
									 actividades,
									 nombrecontacto,
									 cargo,
									 celular,
									 correo,
									 programa,
									 tipopractica,
									 funciones,
									 remuneracion,
									 valor,
									 observaciones,
									 idUsuario,
									 estado)
								values ('$datos[0]',
										'$datos[1]',
										'$datos[2]',
										'$datos[3]',
										'$datos[4]',
										'$datos[5]',
										'$datos[6]',
										'$datos[7]',
										'$datos[8]',
										'$datos[9]',
										'$datos[10]',
										'$datos[11]',
										'$datos[12]',
										'$datos[13]',
										'$datos[14]',
										'$datos[15]',
										'$datos[16]',
										'$datos[17]',
										'PENDIENTE')";
		$resul = mysqli_query($conexion,$sql);	

		if(!$resul){
			return $bolean = false ;
		}else{
			return $bolean = true ;
		}
}


public function actualizar($datos){
	$obj= new conectar();
	$conexion=$obj->conexion();

	$sql="UPDATE solicitud set  nombre='$datos[0]',
							   ciudad='$datos[1]',
							   Direccion ='$datos[2]',
							   telefono= '$datos[3]',
							   sitioweb='$datos[4]',
							   actividades='$datos[5]',
							   nombrecontacto ='$datos[6]',
							   cargo= '$datos[7]',
							   celular='$datos[8]',
							   correo='$datos[9]',
							   tipopractica ='$datos[10]',
							   funciones= '$datos[11]',
							   remuneracion='$datos[12]',
							   valor ='$datos[13]',
							   funciones= '$datos[14]',
							   observaciones = '$datos[15]',
							   estado = '$datos[16]'			   
						 where idnit ='$datos[17]'";
	
	return mysqli_query($conexion,$sql);
}

public function eliminar($idnit){
	$obj= new conectar();
	$conexion=$obj->conexion();

	$sql="DELETE from solicitud where idnit='$idnit'";
	return mysqli_query($conexion,$sql);
}

}