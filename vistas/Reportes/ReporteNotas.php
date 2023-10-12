<?php 
session_start();
require_once "../../bd/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();
$idUsuario  =  $_SESSION['idUsuario'];
$rol  =  $_SESSION['rol'];
    
if($_SESSION['rol'] == "Administrador" || $_SESSION['rol'] == "Docente")
{
    
    $sql="SELECT hojadevida.cedula,
    CONCAT(hojadevida.nombres,' ',hojadevida.primerapellido),
    solicitud.estado,
    solicitud.programa,
    notas.n1,
    notas.n2,
    notas.n3
    FROM `solicitud` INNER JOIN `hojadevida` 

    INNER JOIN `notas` on (solicitud.idnit  = notas.idSolicitud) 
    where estado = 'APROBADO' ";
}else{
    $sql="SELECT hojadevida.cedula,
    CONCAT(hojadevida.nombres,' ',hojadevida.primerapellido),
    solicitud.programa,
    solicitud.estado,
    notas.n1,
    notas.n2,
    notas.n3
    FROM `solicitud` INNER JOIN `hojadevida` 
    on (hojadevida.idUsuario =      solicitud.idUsuario)
    INNER JOIN `notas` on (solicitud.idUsuario = notas.idUsuario) 
    where estado = 'APROBADO' and  solicitud.idUsuario =  '$idUsuario'";
}

$result=mysqli_query($conexion,$sql);
?>
<div class="table-responsive">
    <table id="iddatatable" class="table table-striped table-bordered table-condensed" style="width:100%">
        <thead class='text-center'>
            <tr>
                <th>CEDULA</th>
                <th>ESTUDIANTE</th>
                <th>PROGRAMA</th>
                <th>ESTADO</th>
                <th>NOTA 1</th>
                <th>NOTA 2</th>
                <th>NOTA 3</th>
    
        </thead>
        <tbody>
            <?php while ($mostrar=mysqli_fetch_row($result)) { 
             $rutaDescarga = "../ArchivosSolicitud/".$mostrar[3]."/".$mostrar[4];
            ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php } ?>

        </tbody>
    </table>
    <div>
        <script type="text/javascript">
        $(document).ready(function() {
            $('#iddatatable').DataTable({
                language: {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }

            });
        });
        </script>