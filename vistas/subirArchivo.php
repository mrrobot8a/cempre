<?php
session_start();
require_once "../bd/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();
$idUsuario  =  $_SESSION['idUsuario'];
$nit= $_POST['nit'];
if($_FILES['file']['size'] > 0){
    $carpeta = '../ArchivosSolicitud/'.$idUsuario; 
    if(!file_exists($carpeta)){
      mkdir($carpeta,0777,true);
    }
    $nombre = $_FILES['file']['name'];
    $ruta = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];
    $destino = $carpeta."/".$nombre;
    if(copy($ruta,$destino)){
        $sql = "INSERT INTO files (nombre,
                                   size,
                                   ruta,
                                   idUsuario,
                                   nit)values
                                   ('$nombre',
                                   '$size',
                                   '$destino',
                                   '$idUsuario',
                                   '$nit')";
        $resultado=mysqli_query($conexion,$sql);   
        if($resultado){
            echo "se guardo correctamente";
        }
    }
} 
?>