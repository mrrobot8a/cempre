$(document).ready(function() {
    $('#sampleTable').load('Reportes/ReporteEstudiantes.php');
});


function AddNuevo() {
    $.ajax({
        method: "POST",
        data: $('#FormularioHojaDeVida').serialize(),
        url: "../procesos/AddHojaDeVida.php",
        success: function(r) {
            r = r.trim();
            if (r == 1) {
                $('#FormularioHojaDeVida')[0].reset();
                swal(":D", "Su Registro Fue exitoso", "success");
            } else {
                swal(":(", "La persona con esta cedula ya esta registrado en el sistema.", "error");
            }
        }
    });
    return false;
}
$("#btnLimpiar").click(function(event) {
    $("#FormularioHojaDeVida")[0].reset();
});


$(document).ready(function() {
    $('#btnActualizar').click(function() {
        datos = $('#FrmHojaDeVidaU').serialize();
        $.ajax({
            type: "POST",
            data: datos,
            url: "../procesos/UptadeHojadeVida.php",
            success: function(r) {
                r = r.trim();
                if (r == 1) {
                    $('#sampleTable').load('Reportes/ReporteEstudiantes.php');
                    alertify.success("Se Actualizo correctamente");
                } else {
                    alertify.error("Error, Fallo el Servidor");
              
                }
            }
        });
    });
});

function agregaFrmActualizar(cedulaU) {
    $.ajax({
        type: "POST",
        data: "cedulaU=" + cedulaU,
        url: "../procesos/GetHojaDeVida.php",
        success: function(r) {
            datos = jQuery.parseJSON(r);
            $('#fechaU').val(datos['fecha']);
            $('#programaU').val(datos['programa']);
            $('#primerapellidoU').val(datos['primerapellido']);
            $('#segundoapellidoU').val(datos['segundoapellido']);
            $('#nombresU').val(datos['nombres']);
            $('#cedulaU').val(datos['cedula']);
            $('#fechaNaciminetoU').val(datos['fechaNacimineto']);
            $('#estadoCivilU').val(datos['estadoCivil']);
            $('#direccionU').val(datos['direccion']);
            $('#telefonoU').val(datos['telefono']);
            $('#epsU').val(datos['eps']);
            $('#correoElectronicoU').val(datos['correoElectronico']);
            $('#ciudadU').val(datos['ciudad']);
            $('#instituto_01U').val(datos['instituto_01']);
            $('#titulo_01U').val(datos['titulo_01']);
            $('#fecha_01U').val(datos['fecha_01']);
            $('#instituto_02U').val(datos['instituto_02']);
            $('#titulo_02U').val(datos['titulo_02']);
            $('#fecha_02U').val(datos['fecha_02']);
            $('#ingles_01U').val(datos['ingles_01']);
            $('#ingles_02U').val(datos['ingles_02']);
            $('#ingles_03U').val(datos['ingles_03']);
            $('#ingles_04U').val(datos['ingles_04']);
            $('#aleman_01U').val(datos['aleman_01']);
            $('#aleman_02U').val(datos['aleman_02']);
            $('#aleman_03U').val(datos['aleman_03']);
            $('#aleman_04U').val(datos['aleman_04']);
            $('#frances_01U').val(datos['frances_01']);
            $('#frances_02U').val(datos['frances_02']);
            $('#frances_03U').val(datos['frances_03']);
            $('#frances_04U').val(datos['frances_04']);
            $('#otros_01U').val(datos['otros_01']);
            $('#otros_02U').val(datos['otros_02']);
            $('#otros_03U').val(datos['otros_03']);
            $('#otros_04U').val(datos['otros_04']);
            $('#apartado_03U').val(datos['apartado_03']);
            $('#apartado_04U').val(datos['apartado_04']);
            $('#apartado_05U').val(datos['apartado_05']);
            $('#apartado_06U').val(datos['apartado_06']);
            $('#entidad_01U').val(datos['entidad_01']);
            $('#cargo_01U').val(datos['cargo_01']);
            $('#funcion_01U').val(datos['funcion_01']);
            $('#duracion_01U').val(datos['duracion_01']);
            $('#entidad_02U').val(datos['entidad_02']);
            $('#cargo_02U').val(datos['cargo_02']);
            $('#funcion_02U').val(datos['funcion_02']);
            $('#duracion_02U').val(datos['duracion_02']);
            $('#apartado_08U').val(datos['apartado_08']);
        }
    });
}

function agregaFrmActualizarU(cedulaX) {
    $.ajax({
        type: "POST",
        data: "cedulaX=" + cedulaX,
        url: "../procesos/xxx.php",
        success: function(r) {
            datos = jQuery.parseJSON(r);
            $('#fechaX').val(datos['fecha']);
            $('#programaX').val(datos['programa']);
            $('#primerapellidoX').val(datos['primerapellido']);
            $('#segundoapellidoX').val(datos['segundoapellido']);
            $('#nombresX').val(datos['nombres']);
            $('#fechaNaciminetoX').val(datos['fechaNacimineto']);
            $('#estadoCivilX').val(datos['estadoCivil']);
            $('#direccionX').val(datos['direccion']);
            $('#telefonoX').val(datos['telefono']);
            $('#epsX').val(datos['eps']);
            $('#correoElectronicoX').val(datos['correoElectronico']);
            $('#ciudadX').val(datos['ciudad']);
            $('#instituto_01X').val(datos['instituto_01']);
            $('#titulo_01X').val(datos['titulo_01']);
            $('#fecha_01X').val(datos['fecha_01']);
            $('#instituto_02X').val(datos['instituto_02']);
            $('#titulo_02X').val(datos['titulo_02']);
            $('#fecha_02X').val(datos['fecha_02']);
            $('#ingles_01X').val(datos['ingles_01']);
            $('#ingles_02X').val(datos['ingles_02']);
            $('#ingles_03X').val(datos['ingles_03']);
            $('#ingles_04X').val(datos['ingles_04']);
            $('#aleman_01X').val(datos['aleman_01']);
            $('#aleman_02X').val(datos['aleman_02']);
            $('#aleman_03X').val(datos['aleman_03']);
            $('#aleman_04X').val(datos['aleman_04']);
            $('#frances_01X').val(datos['frances_01']);
            $('#frances_02X').val(datos['frances_02']);
            $('#frances_03X').val(datos['frances_03']);
            $('#frances_04X').val(datos['frances_04']);
            $('#otros_01X').val(datos['otros_01']);
            $('#otros_02X').val(datos['otros_02']);
            $('#otros_03X').val(datos['otros_03']);
            $('#otros_04X').val(datos['otros_04']);
            $('#apartado_03X').val(datos['apartado_03']);
            $('#apartado_04X').val(datos['apartado_04']);
            $('#apartado_05X').val(datos['apartado_05']);
            $('#apartado_06X').val(datos['apartado_06']);
            $('#entidad_01X').val(datos['entidad_01']);
            $('#cargo_01X').val(datos['cargo_01']);
            $('#funcion_01X').val(datos['funcion_01']);
            $('#duracion_01X').val(datos['duracion_01']);
            $('#entidad_02X').val(datos['entidad_02']);
            $('#cargo_02X').val(datos['cargo_02']);
            $('#funcion_02X').val(datos['funcion_02']);
            $('#duracion_02X').val(datos['duracion_02']);
            $('#apartado_08X').val(datos['apartado_08']);
            $('#cedulaX').val(datos['cedula']);
        }
    });
}

function eliminarDatos(cedula) {
    alertify.confirm('Eliminar Registro', '¿Esta Seguro de eliminar este Registro ?', function() {
        $.ajax({
            type: "POST",
            data: "cedula=" + cedula,
            url: "../procesos/DeleteHojaDeVida.php",
            success: function(r) {
                if (r == 1) {
                    $('#sampleTable').load('Reportes/ReporteEstudiantes.php');
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
$(".modal-title").text("Datos de la hoja de vida");

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