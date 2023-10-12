
<?php 

	class conectar{
	
		public function conexion(){

			$host = 'localhost';
			$user = 'root';
			$password = '';
			$db = 'cempre'; 
			$conection = @mysqli_connect($host,$user,$password,$db);
			   
			return $conexion;
		}
		}

 ?>
