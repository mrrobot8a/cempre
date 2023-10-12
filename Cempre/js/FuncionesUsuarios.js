$(document).ready(function() {
    $('#sampleTable').load('Reportes/ReporteUsuarios.php');
});

function agregarNuevo() {
    $.ajax({
        method: "POST",
        data: $('#FrmUsuario').serialize(),
        url: "../procesos/AddUsuario.php",
        success: function(r) {
            r = r.trim();
            if (r == 1) {
                $('#FrmUsuario')[0].reset();
                swal(":D", "Su Registro Fue exitoso", "success");
            } else {
                swal(":(", "Error usuario y/o correo no estan disponible", "error");
            }
        }
    });
    return false;
}
$("#btnLimpiar").click(function(event) {
    $("#FrmUsuario")[0].reset();
});

$(document).ready(function() {
    $('#btnActualizar').click(function() {
        datos = $('#FrmHojaDeVidaU').serialize();
        $.ajax({
            type: "POST",
            data: datos,
            url: "../procesos/UptadeUsuario.php",
            success: function(r) {
                r = r.trim();
                if (r == 1) {
                    $('#sampleTable').load('Reportes/ReporteUsuarios.php');
                    alertify.success("Se Actualizo correctamente");
                } else {
                    alertify.error("Error, Fallo el ServidUsuarioor");
              
                }
            }
        });
    });
});


function agregaFrmActualizarU(idUsuarioU) {
    
    $.ajax({
        type: "POST",
        data: "idUsuarioU=" + idUsuarioU,
        url: "../procesos/GetUsuario.php",
        success: function(r) {
            datos = jQuery.parseJSON(r);
            $('#usuarioU').val(datos['usuario']);
            $('#correoU').val(datos['correo']);
            $('#idUsuarioU').val(datos['idUsuario']);
        }
    });
}


$(document).ready(function() {
    $('#btnActualizarX').click(function() {
        datos = $('#FrmHojaDeVidaX').serialize();
        $.ajax({
            type: "POST",
            data: datos,
            url: "../procesos/UptadeRol.php",
            success: function(r) {
                r = r.trim();
                if (r == 1) {
                    $('#sampleTable').load('Reportes/ReporteUsuarios.php');
                    alertify.success("Se Actualizo correctamente");
                } else {
                    alertify.error("Error, Fallo el ServidUsuarioor");
              
                }
            }
        });
    });
});

function agregaFrmActualizarX(idUsuarioX) {
    
    $.ajax({
        type: "POST",
        data: "idUsuarioX=" + idUsuarioX,
        url: "../procesos/GetRol.php",
        success: function(r) {
            datos = jQuery.parseJSON(r);
            $('#rolX').val(datos['rol']);
            $('#estadoX').val(datos['estado']);
            $('#idUsuarioX').val(datos['idUsuario']);
        }
    });
}

function eliminarDatos(idUsuario) {
    alertify.confirm('Eliminar Registro', '¿Esta Seguro de eliminar este Registro ?', function() {
        $.ajax({
            type: "POST",
            data: "idUsuario=" + idUsuario,
            url: "../procesos/DeleteUsuario.php",
            success: function(r) {
                if (r == 1) {
                    $('#sampleTable').load('Reportes/ReporteUsuarios.php');
                    alertify.success("Eliminado con exito !");
                } else {
                    alertify.error("Error, Fallo el ServidUsuarioor");
                }
            }
        });
    }, function() {});
}

$(".modal-header").css("background-color", "#007b00");
$(".modal-header").css("color", "white");


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