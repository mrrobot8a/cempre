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
                <h1><i class="fa fa-edit"></i> Gestionar Solicitud del Praticante</h1>
            </div>
        </div>
        <div class="row">
            <div class="tile">
                <div class="row">
                    <div class="col-lg-12">
                        <form method="post" id="FrmSolicitud" onsubmit="return agregarSolicitud()">
                            <div class="col-md-12">
                                <div class="contCempre">
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <img class="imglogoUnicesar" src="../images/logounicesar.png">
                                        </div>
                                        <div class="col-lg-8">
                                            <h1 class="titulCempre">CENTRO DE ESTUDIOS <br>EMPRESARIALES</h1>
                                        </div>
                                        <div class="col-lg-2">
                                            <img class="imglogo" src="../images/logoCempre.png">
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <hr class="lineas">
                                <h1>SOLICITUD DE PRACTICANTE</h1>
                                <br>
                                <p>La Universidad Popular del Cesar a través de la Facultad de Ciencias Administrativas,
                                    Contables y Económicas, cuenta con los Programas de Contaduría Pública,
                                    Administración de Empresas, Economía y Administración de Comercio Internacional,
                                    cuyos Estudiantes y Egresados se encuentran vinculados al sector productivo de la
                                    región, realizando Prácticas Curriculares y Prácticas Empresariales con opción de
                                    grado. Las Prácticas Curriculares son desarrolladas por estudiantes de noveno
                                    semestre y las Prácticas Empresariales Profesionales por egresados no graduados,
                                    actividad aceptada por la universidad como modalidad de grado.
                                    Por lo anterior los empresarios cuentan con una mano de obra calificada durante seis
                                    (6) meses, ocho (8) horas diarias para estudiantes y los no graduados.
                                    La vinculación la hace la empresa a través del Contrato de Aprendizaje, de
                                    conformidad con la Ley 7810 del 27 de diciembre de 2002, artículo 20 y subsiguientes
                                    y, el Decreto No. 1022 del 11 de abril de 2002, la cual es validada en la plataforma
                                    del SENA.
                                    Como también mejorar los proceso de su empresa con la incorporación
                                    De antemano nuestros agradecimientos por la atención prestada y el apoyo a nuestro
                                    Egresado y Estudiante</p>


                                <hr>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">NIT *</label>
                                    <div class="col-md-10">
                                        <input class="form-control" id="nit" name="nit" type="text" pattern="[0-9]{1,12}"
                                            placeholder="Ingrese NIT" minlength="9" maxlength="12"
                                             title="Solamente se admiten números"  required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">NOMBRE DE LA EMPRESA *</label>
                                    <div class="col-md-10">
                                        <input class="form-control" id="nombre" name="nombre" type="text"
                                            placeholder="Ingrese Nombre de la empresa" minlength="5"
                                             pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" 
                                            maxlength="40" title="Solamente se admiten caracteres" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">CIUDAD *</label>
                                    <div class="col-md-10">
                                            <input class="form-control" id="ciudad" name="ciudad" type="text"
                                            placeholder="Ingrese Ciudad" minlength="4"
                                             pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,25}" 
                                            maxlength="25" title="Solamente se admiten caracteres" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">DIRECCION *</label>
                                    <div class="col-md-10">
                                        <input class="form-control" id="Direccion" name="Direccion" type="text"
                                            placeholder="Ingrese Direccion"  minlength="15" maxlength="40" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">TELÉFONO</label>
                                    <div class="col-md-10">
                                            <input class="form-control" id="telefono" name="telefono" type="text" pattern="[0-9]{1,10}"
                                            placeholder="Ingrese Telefono" minlength="7" maxlength="10"
                                             title="Solamente se admiten números" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">SITIO WEB DE LA EMPRESA O EMAIL *</label>
                                    <div class="col-md-10">
                                        <input class="form-control" id="sitioweb" name="sitioweb" type="text"
                                            placeholder="Ingrese Siteo weo y/o Email" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">ACTIVIDAD DE LA EMPRESA *</label>
                                    <div class="col-md-10">
                                        <input class="form-control" id="actividades" name="actividades" type="text"
                                            placeholder="Ingrese Actividades de la empresa" required="">
                                    </div>
                                </div>


                                <label for="">DATOS DE CONTACTO DE LA EMPRESA</label>

                                <hr>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">Nombre de la persona contacto *</label>
                                    <div class="col-md-10">
                                            <input class="form-control" id="nombrecontacto" name="nombrecontacto" type="text"
                                            placeholder="Ingrese Nombre del contacto" minlength="6"
                                            pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" 
                                            maxlength="30" title="Solamente se admiten caracteres" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">Cargo *</label>
                                    <div class="col-md-10">
                                            <input class="form-control" id="cargo" name="cargo" type="text"
                                            placeholder="Ingrese Cargo" minlength="6"
                                            pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" 
                                            maxlength="30" title="Solamente se admiten caracteres" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">Teléfono *</label>
                                    <div class="col-md-10">
                                            <input class="form-control" id="celular" name="celular" type="text" pattern="[0-9]{1,10}"
                                            placeholder="Ingrese Celular" minlength="10" maxlength="10"
                                             title="Solamente se admiten números"  required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">Correo electrónico *</label>
                                    <div class="col-md-10">
                                        <input class="form-control" id="correo" name="correo" type="email"
                                            placeholder="Ingrese Correo electrónico" required="">
                                    </div>
                                </div>


                                <label for="">PROFESIONAL SOLICITADO</label>
                                <hr>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">PROGRAMA *</label>

                                    <div class="col-md-10">
                                        <select class="form-control" id="programa" name="programa" required="required">
                                            <option value="">--Seleccione un programa--</option>
                                            <option value="ADMINISTRACIÓN DE EMPRESAS">ADMINISTRACIÓN DE EMPRESAS  </option>
                                            <option value="CONTADURÍA PÚBLICA">CONTADURÍA PÚBLICA</option>
                                            <option value="ECONOMÍA ">ECONOMÍA</option>
                                            <option value="COMERCIO INTERNACIONAL">COMERCIO INTERNACIONAL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">TIPO DE PRACTICANTE *</label>
                                    <div class="col-md-10">
                                        <select class="form-control" id="tipopractica" name="tipopractica"
                                            required="required">
                                            <option value="">--Seleccione un tipo--</option>
                                            <option value="ECONOMÍA ">EMPRESARIAL, EGRESADO CON OPCION DE GRADO</option>
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
                                            <textarea id="funciones" name="funciones" class="form-control" rows="4"
                                            placeholder="Ingrese Funciones a realizar" minlength="50" maxlength="300"
                                            pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,300}" title="Solamente se admiten caracteres" required=""></textarea> 
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">REMUNERACION *</label>
                                    <div class="col-md-10">
                                        <select class="form-control" id="remuneracion" name="remuneracion"
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
                                            <input class="form-control" id="valor" name="valor" type="text" pattern="[0-9]{1,7}"
                                            placeholder="Ingrese Remuneracion" minlength="6" maxlength="7"
                                             title="Solamente se admiten números" >
                                    </div>
                                </div>
                                <label class="control-label ">OBSERVACIONES ADICIONALES</label>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <textarea id="observaciones" name="observaciones" class="form-control" rows="4"
                                            placeholder="Ingrese Observaciones" minlength="50" maxlength="300"
                                            pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,300}" title="Solamente se admiten caracteres"></textarea>  
                                    </div>
                                </div>
                                <label class="control-label ">*ADJUNTAR ARCHIVO</label>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="file" class="form-control-file" name="file" id="file"
                                            accept="application/pdf" multiple="" required="required">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="" id="btnGuardar" class="btn btn-success"><i
                            class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>
                    <button type="button" id="btnLimpiar" class="btn btn-danger"><i
                            class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</button>
                </div>
                </form>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="contCempre">
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <img class="imglogo" src="../images/logoCempre.png">
                        </div>
                        <div class="col-lg-6">
                            <div class="contactos">
                                <p>Facebook (Cempre Unicesar) <br> Twitter (@cempreunicesar) <br> Blog
                                    (cempreupc.wordpress.com) <br> Teléfono 5844445 </p>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        </div>
        </div>
    </main>
    <?php include "../librerias/script.php";?>
    <script src="../js/funcionesSolicitud.js"></script>



</body>

</html>