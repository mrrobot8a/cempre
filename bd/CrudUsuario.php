<?php 

	class CrudUsuario{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="INSERT into usuarios (usuario,
			                            correo,
										clave,
										rol,
										estado)
									values ('$datos[0]',
											'$datos[1]',
											'$datos[2]',
											'$datos[3]',
											'Inactivo')";
			return mysqli_query($conexion,$sql);	
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
			return $datos;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE usuarios set  clave='$datos[0]'			   
						         where idUsuario='$datos[1]'";
			
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatosRol($idUsuarioX){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT idUsuario,
			             rol,
                         estado	
					from usuarios 
					where idUsuario='$idUsuarioX'";
		
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'idUsuario' => $ver[0],
				'rol' => $ver[1],
				'estado' => $ver[2]
				);
			return $datos;
		}

		public function actualizarRol($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE usuarios set  rol='$datos[0]',
			                           estado='$datos[1]'			   
						         where idUsuario='$datos[2]'";
			
			return mysqli_query($conexion,$sql);
		}
        public function eliminar($idUsuario){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from usuarios where idUsuario='$idUsuario'";
			return mysqli_query($conexion,$sql);
		}



       

	}

 ?>