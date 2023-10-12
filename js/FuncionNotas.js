$(document).ready(function() {
    $('#sampleTable').load('Reportes/ReporteNotas.php');
});

 function agregarSolicitud() {
    $.ajax({
        method: "POST",
        data: $('#FrmSolicitud').serialize(),
        url: "../procesos/AddSolicitud.php",
        success: function(r) {
            r = r.trim();
            if (r == 1) {
                $('#FrmSolicitud')[0].reset();
                swal(":D", "Su Registro Fue exitoso", "success");
            } else {
                swal(":(", "La persona con esta cedula ya esta registrado en el sistema.", "error");
            }
        }
    });
    return false;
}
$("#btnLimpiar").click(function(event) {
    $("#FrmSolicitud")[0].reset();
});

if (document.location.hostname == 'pratikborsadiya.in') {
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-72504830-1', 'auto');
    ga('send', 'pageview');
}



$(document).ready(function(){
    $('#btnGuardar').click(function() {
        upload_file();
    });
});

function upload_file(){
    var nit = $("#nit").val();
    var file = $("#file").prop('files')[0];
     
    console.log(file);   
    console.log(nit); 
    var formData = new FormData();
    formData.append('nit',nit);
    formData.append('file',file);
    $.ajax({
        url: "subirArchivo.php",
        type: "POST",
        dataType: "text",
        cache:false,
         contentType: false,
         processData: false,
         data: formData,
    })
    .done(function(data){
      console.log("seccess");
    })
    .fail(function(){
        console.log("error");
    })
      .always(function(){
        console.log("complete");
      });
}



function obtenerArchivoPorId(idfile){
    $.ajax({
        
        type: "POST",
        data: "idfile=" + idfile,
        url: "obtenerArchivos.php",
        success:function(respuesta){
             alert(respuesta);
        }
         
    });
}

function eliminarDatos(idnit) {
    alertify.confirm('Eliminar Registro', '¿Esta Seguro de eliminar este Registro ?', function() {
        $.ajax({
            type: "POST",
            data: "idnit=" + idnit,
            url: "../procesos/DeleteSolicitud.php",
            success: function(r) {
                if (r == 1) {
                    $('#sampleTable').load('Reportes/ReporteSolicitud.php');
                    alertify.success("Eliminado con exito !");
                } else {
                    alertify.error("Error, Fallo el Servidor");
                }
            }
        });
    }, function() {});
}

$(".modal-header").css("background-color", "#007b00");
$(".modal-header").css("color", "white");

$(document).ready(function() {
    $('#btnActualizar').click(function() {
        datos = $('#FrmSolicutud').serialize();
        $.ajax({
            type: "POST",
            data: datos,
            url: "../procesos/UpdateSolicitud.php",
            success: function(r) {
                r = r.trim();
                if (r == 1) {
                    $('#sampleTable').load('Reportes/ReporteSolicitud.php');
                    alertify.success("Se Actualizo correctamente");
                } else {
                    alertify.error("Error, Fallo el ServidUsuarioor");
              
                }
            }
        });
    });
});

function agregaFrmActualizar(idnitU) {
    
    $.ajax({
        type: "POST",
        data: "idnitU=" + idnitU,
        url: "../procesos/GetSolicitud.php",
        success: function(r) {
            datos = jQuery.parseJSON(r);
            $('#nitU').val(datos['nit']);
            $('#nombreU').val(datos['nombre']);
            $('#ciudadU').val(datos['ciudad']);
            $('#DireccionU').val(datos['Direccion']);
            $('#telefonoU').val(datos['telefono']);
            $('#sitiowebU').val(datos['sitioweb']);
            $('#actividadesU').val(datos['actividades']);
            $('#DireccionU').val(datos['Direccion']);
            $('#nombrecontactoU').val(datos['nombrecontacto']);
            $('#cargoU').val(datos['cargo']);
            $('#celularU').val(datos['celular']);
            $('#correoU').val(datos['correo']);
            $('#DireccionU').val(datos['Direccion']);
            $('#programaU').val(datos['programa']);
            $('#tipopracticaU').val(datos['tipopractica']);
            $('#funcionesU').val(datos['funciones']);
            $('#remuneracionU').val(datos['remuneracion']);
            $('#valorU').val(datos['valor']);
            $('#observacionesU').val(datos['observaciones']);
            $('#estadoU').val(datos['estado']);
            $('#idnitU').val(datos['idnit']);
        }
    });
}