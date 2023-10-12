
<?php 

	class conectar{
		public function conexion(){
		
			$servidor="localhost";
			$usuario="root";
			$password="";
			$bd="cempre"; 
			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}
	}

 ?>
