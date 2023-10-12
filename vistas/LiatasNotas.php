<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<?php include "../librerias/head.php";?>

<body class="app sidebar-mini">

    <?php include "../librerias/header.php";?>
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include "../librerias/menuaside.php";?>

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i> Reporte de Notas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div id="sampleTable"></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="modal fade" id="modalCRUDU">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Actializar Solicitud de Practicas</h4>
                            <button type="button" class="close" data-dismiss="modal">X</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" id="FrmSolicutud" onsubmit="return agregarNuevo()">


                                        <input type="text" hidden="" id="idnitU" name="idnitU">
                                        <?php 
				if($_SESSION['rol'] == "Administrador"){
			    ?>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2">ESTADO</label>
                                            <div class="col-md-10">
                                                <select class="form-control" id="estadoU" name="estadoU"
                                                    required="required">
                                                    <option value="">--Seleccione un tipo Estado--</option>
                                                    <option value="PENDIENTE">PENDIENTE</option>
                                                    <option value="APROBADO">APROBADO</option>
                                                    <option value="RECHAZADO">RECHAZADO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2">NIT *</label>
                                            <div class="col-md-10">
                                                <input disabled class="form-control" id="nitU" name="nitU" type="text"
                                                    pattern="[0-9]{1,12}" placeholder="Ingrese NIT" minlength="9"
                                                    maxlength="12" title="Solamente se admiten números" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2">NOMBRE DE LA EMPRESA *</label>
                                            <div class="col-md-10">
                                                <input class="form-control" id="nombreU" name="nombreU" type="text"
                                                    placeholder="Ingrese Nombre de la empresa" minlength="5"
                                                    pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" maxlength="40"
                                                    title="Solamente se admiten caracteres" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2">CIUDAD *</label>
                                            <div class="col-md-10">
                                                <input class="form-control" id="ciudadU" name="ciudadU" type="text"
                                                    placeholder="Ingrese Ciudad" minlength="4"
                                                    pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,25}" maxlength="25"
                                                    title="Solamente se admiten caracteres" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2">DIRECCION *</label>
                                            <div class="col-md-10">
                                                <input class="form-control" id="DireccionU" name="DireccionU"
                                                    type="text" placeholder="Ingrese Direccion" minlength="15"
                                                    maxlength="40" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2">TELÉFONO</label>
                                            <div class="col-md-10">
                                                <input class="form-control" id="telefonoU" name="telefonoU" type="text"
                                                    pattern="[0-9]{1,10}" placeholder="Ingrese Telefono" minlength="7"
                                                    maxlength="10" title="Solamente se admiten números">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2">SITIO WEB DE LA EMPRESA O EMAIL
                                                *</label>
                                            <div class="col-md-10">
                                                <input class="form-control" id="sitiowebU" name="sitiowebU" type="text"
                                                    placeholder="Ingrese Siteo weo y/o Email" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2">ACTIVIDAD DE LA EMPRESA *</label>
                                            <div class="col-md-10">
                                                <input class="form-control" id="actividadesU" name="actividadesU"
                                                    type="text" placeholder="Ingrese Actividades de la empresa"
                                                    required="">
                                            </div>
                                        </div>


                                        <label for="">DATOS DE CONTACTO DE LA EMPRESA</label>

                                        <hr>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2">Nombre de la persona contacto
                                                *</label>
                                            <div class="col-md-10">
                                                <input class="form-control" id="nombrecontactoU" name="nombrecontactoU"
                                                    type="text" placeholder="Ingrese Nombre del contacto" minlength="6"
                                                    pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" maxlength="30"
                                                    title="Solamente se admiten caracteres" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2">Cargo *</label>
                                            <div class="col-md-10">
                                                <input class="form-control" id="cargoU" name="cargoU" type="text"
                                                    placeholder="Ingrese Cargo" minlength="6"
                                                    pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" maxlength="30"
                                                    title="Solamente se admiten caracteres" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2">Teléfono *</label>
                                            <div class="col-md-10">
                                                <input class="form-control" id="celularU" name="celularU" type="text"
                                                    pattern="[0-9]{1,10}" placeholder="Ingrese Celular" minlength="10"
                                                    maxlength="10" title="Solamente se admiten números" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2">Correo electrónico *</label>
                                            <div class="col-md-10">
                                                <input class="form-control" id="correoU" name="correoU" type="email"
                                                    placeholder="Ingrese Correo electrónico" required="">
                                            </div>
                                        </div>


                                        <label for="">PROFESIONAL SOLICITADO</label>
                                        <hr>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2">PROGRAMA *</label>

                                            <div class="col-md-10">
                                                <select class="form-control" id="programaU" name="programaU"
                                                    required="required">
                                                    <option value="">--Seleccione un programa--</option>
                                                    <option value="ADMINISTRACIÓN DE EMPRESAS">ADMINISTRACIÓN DE
                                                        EMPRESAS </option>
                                                    <option value="CONTADURÍA PÚBLICA">CONTADURÍA PÚBLICA</option>
                                                    <option value="ECONOMÍA ">ECONOMÍA</option>
                                                    <option value="COMERCIO INTERNACIONAL">COMERCIO INTERNACIONAL
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2">TIPO DE PRACTICANTE *</label>
                                            <div class="col-md-10">
                                                <select class="form-control" id="tipopracticaU" name="tipopracticaU"
                                                    required="required">
                                                    <option value="">--Seleccione un tipo--</option>
                                                    <option value="ECONOMÍA ">EMPRESARIAL, EGRESADO CON OPCION DE GRADO
                                                    </option>
                                                    <option value="COMERCIO INTERNACIONAL">CURRICULAR, ESTUDIANTE ACTIVO
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <label for="">FUNCION A REALIZAR POR EL PRACTICANTE*</label>
                                        <p>Describa en una forma resumida las funciones que va a ejecutar el practicante
                                            solicitando por la empresa.</p>
                                        <hr>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <textarea id="funcionesU" name="funcionesU" class="form-control"
                                                    rows="4" placeholder="Ingrese Funciones a realizar" minlength="50"
                                                    maxlength="300" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,300}"
                                                    title="Solamente se admiten caracteres" required=""></textarea>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2">REMUNERACION *</label>
                                            <div class="col-md-10">
                                                <select class="form-control" id="remuneracionU" name="remuneracionU"
                                                    required="required">
                                                    <option value="">--Seleccione un tipo--</option>
                                                    <option value="SI ">SI</option>
                                                    <option value="NO">NO</option>
                                                    <option value="NO">AUXILIO DE TRANSPORTE $200.000</option>
                                                </select>
                                            </div>
                                        </div>
                                        <label class="control-label ">EN CASO DE REMUNERACION ESCRIBA EL VALOR A
                                            CANCELAR</label>

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <input class="form-control" id="valorU" name="valorU" type="text"
                                                    pattern="[0-9]{1,7}" placeholder="Ingrese Remuneracion"
                                                    minlength="6" maxlength="7" title="Solamente se admiten números">
                                            </div>
                                        </div>
                                        <label class="control-label ">OBSERVACIONES ADICIONALES</label>

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <textarea id="observacionesU" name="observacionesU" class="form-control"
                                                    rows="4" placeholder="Ingrese Observaciones" minlength="50"
                                                    maxlength="300" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,300}"
                                                    title="Solamente se admiten caracteres"></textarea>
                                            </div>
                                        </div>


                                </div>
                            </div>
                        </div>
                        </form>
                        <div class="modal-footer">
                        <?php 
				if($_SESSION['rol'] == "Administrador" || $_SESSION['rol'] == "Estudiante"){
			    ?>
                            <button type="button" id="btnActualizar" class="btn btn-success"><i
                                    class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>
                                    <?php } ?>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                    class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>


    </main>
    <?php include "../librerias/script.php";?>
    <script src="../js/FuncionNotas.js"></script>



</body>

</html>