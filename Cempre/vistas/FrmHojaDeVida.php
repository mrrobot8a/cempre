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
                <h1><i class="fa fa-edit"></i> Gestionar Hoja de vida</h1>
            </div>
        </div>
        <div class="row">
        
            <div class="col-md-12">
                <div class="tile">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="post" id="FormularioHojaDeVida" onsubmit="return AddNuevo()">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <img class="imglogo" src="../images/logoUpc.png">
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="tituloupc">UNIVERSIDAD POPULAR DEL CESAR</p>
                                        <p class="subtituloupc">FACULTAD DE CIENCIAS ADMINISTRATIVAS, CONTABLES Y
                                            ECONÓMICAS <br>CENTRO DE ESTUDIOS EMPRESARIALES</p>

                                        <p class="subtituloupc">ÁREA DE PRACTICAS EMPRESARIALES<br>HOJA DE VIDA
                                            PRÁCTICAS PROFESIONALES </p>
                                    </div>
                                    <div class="col-lg-2">
                                        <!--
                                        <img  class="imglogo" src="images/logoCempre.png" >
                                        -->
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label class="control-label col-md-2 ">Fecha</label>
                                    <div class="col-md-10">
                                        <input class="form-control" id="fecha" name="fecha" type="date" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">Programa</label>
                                    <div class="col-md-10">
                                        <select class="form-control" id="programa" name="programa" required="required">
                                            <option value="">--Seleccione un programa--</option>
                                            <option value="ADMINISTRACIÓN DE EMPRESAS">ADMINISTRACIÓN DE EMPRESAS</option>
                                            <option value="CONTADURÍA PÚBLICA">CONTADURÍA PÚBLICA</option>
                                            <option value="ECONOMÍA ">ECONOMÍA</option>
                                            <option value="COMERCIO INTERNACIONAL">COMERCIO INTERNACIONAL</option>
                                        </select>
                                    </div>
                                </div>
                                <label for="">1-DATOS PERSONALES</label>
                                <hr>
                               
                                <div class="form-group row">
                                    <label class="control-label col-md-2">PRIMER APELLIDO</label>
                                    <div class="col-md-10">
                                        <input class="form-control" id="primerapellido" name="primerapellido"
                                            type="text" placeholder="*Ingrese primer apellido"  
                                            pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,20}"  required="required" 
                                            minlength="5" maxlength="20" title="Solamente se admiten caracteres">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">SEGUNDO APELLIDO</label>
                                    <div class="col-md-10">
                                        <input class="form-control" id="segundoapellido" name="segundoapellido"
                                            type="text" placeholder="*Ingrese segundo apellido"  
                                            pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,20}"  required="required" 
                                            minlength="5" maxlength="20" title="Solamente se admiten caracteres"> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">NOMBRES</label>
                                    <div class="col-md-10">
                                        <input class="form-control" id="nombres" name="nombres"
                                            type="text" placeholder="*Ingrese nombres"  
                                            pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}"  required="required" 
                                            minlength="3" maxlength="30" title="Solamente se admiten caracteres"> 
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="control-label col-md-2">CÉDULA DE CIUDADANÍA</label>
                                    <div class="col-md-10">
                                            <input type="text" class="form-control" id="cedula" name="cedula"
                                                placeholder="*Ingrese cedula de ciudadanía " minlength="8" maxlength="11"
                                                pattern="[0-9]{1,11}" title="Solamente se admiten números"
                                                required="required">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="control-label col-md-2">FECHA Y LUGAR DE NACIMIENTO</label>
                                    <div class="col-md-10">
                                        <input class="form-control" id="fechaNacimineto" name="fechaNacimineto"
                                            type="text" placeholder="*Fecha y luegar de nacimineto"
                                            minlength="15" maxlength="30" required="required">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-2">ESTADO CIVIL</label>
                                    <div class="col-md-10">
                                            <select class="form-control" id="estadoCivil" name="estadoCivil" required="required">
                                                <option value="">--Seleccione un estado civil--</option>
                                                <option value="Soltero/a">Soltero/a</option>
                                                <option value="Casado/a">Casado/a</option>
                                                <option value="Unión libre">Unión libre</option>
                                                <option value="Separado/a">Separado/a</option>
                                                <option value="Divorciado/a">Divorciado/a</option>
                                                <option value="Viudo/a">Viudo/a</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">DIRECCIÓN ACTUAL</label>
                                    <div class="col-md-10">
                                            <input type="text" class="form-control" id="direccion" name="direccion"
                                                placeholder="*Ingrese direccion"  
                                                required="required" minlength="10" maxlength="60">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">TELÉFONO</label>
                                    <div class="col-md-10">
                                            <input type="text" class="form-control" id="telefono" name="telefono"
                                                placeholder="*Ingrese teléfono" minlength="10" maxlength="10"
                                                pattern="[0-9]{1,10}" title="Solamente se admiten números"
                                                required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">EPS ACTUAL - TRAER DOCUMENTO EN FISICO</label>
                                    <div class="col-md-10">
                                            <input type="text" class="form-control" id="eps" name="eps"
                                            placeholder="*Ingrese EPS actual" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" 
                                            required="required" minlength="6" maxlength="30" title="Solamente se admiten caracteres">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">CORREO ELECTRÓNICO</label>
                                    <div class="col-md-10">
                                        <input class="form-control" id="correoElectronico" name="correoElectronico"
                                            type="email" placeholder="*Ingrese correo electrónico" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">CIUDAD</label>
                                    <div class="col-md-10">
                                            <input type="text" class="form-control" id="ciudad" name="ciudad"
                                                placeholder="*Ingrese ciudad" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,20}" 
                                                required="required" minlength="4" maxlength="20" title="Solamente se admiten caracteres">
                                    </div>
                                </div>

                                <label for="">2.- ESTUDIOS REALIZADOS</label>
                                <label for="">NIVEL SECUNDARIO</label>
                                <hr>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">INSTITUCIÓN</label>
                                    <div class="col-md-10">
                                            <input type="text" class="form-control" id="instituto_01" name="instituto_01"
                                                placeholder="*Ingrese institución " pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,60}" 
                                                required="required" minlength="8" maxlength="60" title="Solamente se admiten caracteres">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="control-label col-md-2">TÍTULO</label>
                                    <div class="col-md-10">
                                            <input type="text" class="form-control" id="titulo_01" name="titulo_01"
                                                placeholder="*Ingrese titulo " pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,60}" 
                                                required="required" minlength="8" maxlength="60" title="Solamente se admiten caracteres">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">FECHA</label>
                                    <div class="col-md-10">
                                        <input class="form-control" id="fecha_01" name="fecha_01" type="date"
                                        required="required">
                                    </div>
                                </div>
                                <label for="">NIVEL UNIVERSITARIO</label>
                                <hr>
  
                                <div class="form-group row">
                                    <label class="control-label col-md-2">INSTITUCIÓN</label>
                                    <div class="col-md-10">
                                            <input type="text" class="form-control" id="instituto_02" name="instituto_02"
                                                placeholder="*Ingrese institución " pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,60}" 
                                                required="required" minlength="15" maxlength="60" title="Solamente se admiten caracteres">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">TÍTULO</label>
                                    <div class="col-md-10">
                                            <input type="text" class="form-control" id="titulo_02" name="titulo_02"
                                                placeholder="*Ingrese titulo " pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,60}" 
                                                required="required" minlength="15" maxlength="60" title="Solamente se admiten caracteres">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">FECHA</label>
                                    <div class="col-md-10">
                                        <input class="form-control" id="fecha_02" name="fecha_02" type="date"
                                        required="required">
                                    </div>
                                </div>
                               <!--
                                <label for="">OTROS ESTUDIOS </label>
                                <hr>
                        
                                <div class="form-group row">
                                    <label class="control-label col-md-2">INSTITUCIÓN</label>
                                    <div class="col-md-10">
                                            <input type="text" class="form-control" id="instituto_03" name="instituto_03">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">TÍTULO</label>
                                    <div class="col-md-10">
                                            <input type="text" class="form-control" id="titulo_03" name="titulo_03">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">FECHA</label>
                                    <div class="col-md-10">
                                        <input class="form-control" id="fecha_03" name="fecha_03" type="date">
                                    </div>
                                </div> 
                                -->
                                <br>
                               <hr>   
                                <br>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <br><br>
                                            <label class="control-label">INGLÉS </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label">Comprende al leer</label>
                                            <select class="form-control" id="ingles_01" name="ingles_01"
                                                required="required">
                                                <option value="">--Seleccione--</option>
                                                <option value="E">Excelente</option>
                                                <option value="B">Bueno</option>
                                                <option value="R">Regular</option>
                                                <option value="X">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label">Comprende al escuchar</label>
                                            <select class="form-control" id="ingles_02" name="ingles_02"
                                                required="required">
                                                <option value="">--Seleccione--</option>
                                                <option value="E">Excelente</option>
                                                <option value="B">Bueno</option>
                                                <option value="R">Regular</option>
                                                <option value="X">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label class="control-label">Habla</label>
                                            <select class="form-control" id="ingles_03" name="ingles_03"
                                                required="required">
                                                <option value="">--Seleccione--</option>
                                                <option value="E">Excelente</option>
                                                <option value="B">Bueno</option>
                                                <option value="R">Regular</option>
                                                <option value="X">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label class="control-label">Escribe </label>
                                            <select class="form-control" id="ingles_04" name="ingles_04"
                                                required="required">
                                                <option value="">--Seleccione--</option>
                                                <option value="E">Excelente</option>
                                                <option value="B">Bueno</option>
                                                <option value="R">Regular</option>
                                                <option value="X">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label class="control-label">ALEMÁN</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control" id="aleman_01" name="aleman_01"
                                                required="required">
                                                <option value="">--Seleccione--</option>
                                                <option value="E">Excelente</option>
                                                <option value="B">Bueno</option>
                                                <option value="R">Regular</option>
                                                <option value="X">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control" id="aleman_02" name="aleman_02"
                                                required="required">
                                                <option value="">--Seleccione--</option>
                                                <option value="E">Excelente</option>
                                                <option value="B">Bueno</option>
                                                <option value="R">Regular</option>
                                                <option value="X">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" id="aleman_03" name="aleman_03"
                                                required="required">
                                                <option value="">--Seleccione--</option>
                                                <option value="E">Excelente</option>
                                                <option value="B">Bueno</option>
                                                <option value="R">Regular</option>
                                                <option value="X">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" id="aleman_04" name="aleman_04"
                                                required="required">
                                                <option value="">--Seleccione--</option>
                                                <option value="E">Excelente</option>
                                                <option value="B">Bueno</option>
                                                <option value="R">Regular</option>
                                                <option value="X">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label class="control-label">FRANCÉS</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control" id="frances_01" name="frances_01"
                                                required="required">
                                                <option value="">--Seleccione--</option>
                                                <option value="E">Excelente</option>
                                                <option value="B">Bueno</option>
                                                <option value="R">Regular</option>
                                                <option value="X">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control" id="frances_02" name="frances_02"
                                                required="required">
                                                <option value="">--Seleccione--</option>
                                                <option value="E">Excelente</option>
                                                <option value="B">Bueno</option>
                                                <option value="R">Regular</option>
                                                <option value="X">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" id="frances_03" name="frances_03"
                                                required="required">
                                                <option value="">--Seleccione--</option>
                                                <option value="E">Excelente</option>
                                                <option value="B">Bueno</option>
                                                <option value="R">Regular</option>
                                                <option value="X">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" id="frances_04" name="frances_04"
                                                required="required">
                                                <option value="">--Seleccione--</option>
                                                <option value="E">Excelente</option>
                                                <option value="B">Bueno</option>
                                                <option value="R">Regular</option>
                                                <option value="X">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label class="control-label">OTROS</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control" id="otros_01" name="otros_01"
                                                required="required">
                                                <option value="">--Seleccione--</option>
                                                <option value="E">Excelente</option>
                                                <option value="B">Bueno</option>
                                                <option value="R">Regular</option>
                                                <option value="X">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control" id="otros_02" name="otros_02"
                                                required="required">
                                                <option value="">--Seleccione--</option>
                                                <option value="E">Excelente</option>
                                                <option value="B">Bueno</option>
                                                <option value="R">Regular</option>
                                                <option value="X">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" id="otros_03" name="otros_03"
                                                required="required">
                                                <option value="">--Seleccione--</option>
                                                <option value="E">Excelente</option>
                                                <option value="B">Bueno</option>
                                                <option value="R">Regular</option>
                                                <option value="X">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" id="otros_04" name="otros_04"
                                                required="required">
                                                <option value="">--Seleccione--</option>
                                                <option value="E">Excelente</option>
                                                <option value="B">Bueno</option>
                                                <option value="R">Regular</option>
                                                <option value="X">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <p class="textoIdioma">(E)Excelente &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                    (B)Bueno &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                    (R)Regular &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                    (X)No</p>


                                <label for="">3.- INVESTIGACIÓN Y/O PROYECTOS REALIZADOS </label>
                                <hr>
                                <div class="col-md-12">
                                        <textarea id="apartado_03" name="apartado_03" class="form-control" rows="4"
                                        placeholder="Ingrese una descripción, máxima de 1000 caracteres"
                                        pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,1000}" 
                                        minlength="500" maxlength="1000" ></textarea>
                                </div>
                                <br>
                                <label for="">4.- CONOCIMIENTO Y/O PRÁCTICA DE INFORMÁTICA QUE POSEE</label>
                                <hr>
                                <div class="col-md-12"> 
                                        <textarea id="apartado_04" name="apartado_04" class="form-control" rows="6"
                                        placeholder="Ingrese una descripción, máxima de 1000 caracteres"
                                        pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,1000}" 
                                        minlength="500" maxlength="1000" ></textarea>
                                </div>
                                <br>
                                <label for="">5.- SEMINARIOS Y CURSOS ASISTIDOS (TEMA - INSTITUCIÓN - FECHA)</label>
                                <hr>
                                <div class="col-md-12">
                                        <textarea id="apartado_05" name="apartado_05" class="form-control" rows="6"
                                        placeholder="Ingrese una descripción, máxima de 1000 caracteres"
                                        pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,1000}" 
                                        minlength="500" maxlength="1000" ></textarea>
                                    
                                </div>
                                
                                <br>
                                <label for="">6.- DISTINCIONES Y HONORES RECIBIDOS (DISTINCIÓN - INSTITUCIÓN -
                                    FECHA)</label>
                                <hr>
                                <div class="col-md-12">
                                        <textarea id="apartado_06" name="apartado_06" class="form-control" rows="4"
                                        placeholder="Ingrese una descripción,máxima de 1000 caracteres"
                                        pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,1000}" 
                                        minlength="500" maxlength="1000" ></textarea>
                                </div>
                                
                                <br>
                                <label for="">7.- EXPERIENCIA LABORAL</label>
                                <hr>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">ENTIDAD </label>
                                    <div class="col-md-10">
                                            <input type="text" class="form-control" id="entidad_01" name="entidad_01"
                                                placeholder="Ingrese entidad" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ]{1,30}" 
                                                minlength="10" maxlength="30" title="Solamente se admiten caracteres">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">CARGO</label>
                                    <div class="col-md-10">
                                            <input type="text" class="form-control" id="cargo_01" name="cargo_01"
                                                placeholder="Ingrese cargo" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ]{1,30}" 
                                                minlength="10" maxlength="30" title="Solamente se admiten caracteres">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">FUNCIONES DESEMPEÑADAS</label>
                                    <div class="col-md-10">
                                            <input type="text" class="form-control" id="funcion_01" name="funcion_01"
                                                placeholder="Ingrese funciones desempeñadas" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ]{1,50}" 
                                                minlength="10" maxlength="50" title="Solamente se admiten caracteres">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">DURACIÓN - FECHA</label>
                                    <div class="col-md-10">
                                            <input type="text" class="form-control" id="duracion_01" name="duracion_01"
                                                placeholder="Ingrese duración y fecha"  minlength="15" maxlength="30" >
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">ENTIDAD </label>
                                    <div class="col-md-10">
                                            <input type="text" class="form-control" id="entidad_02" name="entidad_02"
                                                placeholder="Ingrese entidad" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ]{1,30}" 
                                                minlength="10" maxlength="30" title="Solamente se admiten caracteres">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">CARGO</label>
                                    <div class="col-md-10">
                                            <input type="text" class="form-control" id="cargo_02" name="cargo_02"
                                                placeholder="Ingrese cargo" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ]{1,30}" 
                                                minlength="10" maxlength="30" title="Solamente se admiten caracteres">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">FUNCIONES DESEMPEÑADAS</label>
                                    <div class="col-md-10">
                                            <input type="text" class="form-control" id="funcion_02" name="funcion_02"
                                                placeholder="Ingrese funciones desempeñadas" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ]{1,50}" 
                                                minlength="10" maxlength="50" title="Solamente se admiten caracteres">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">DURACIÓN - FECHA</label>
                                    <div class="col-md-10">
                                            <input type="text" class="form-control" id="duracion_02" name="duracion_02"
                                                placeholder="Ingrese duración y fecha"  minlength="15" maxlength="30" >
                                    </div>
                                </div>
                                
                                <br>
                               
                                <label for="">8.- ÁREAS DE INTERÉS PARA EL DESARROLLO DE LA PRÁCTICA EN ORDEN DE
                                    PREFERENCIAS</label>
                                <hr>
                                <div class="col-md-12">
                                        <textarea id="apartado_08" name="apartado_08" class="form-control" rows="4"
                                        placeholder="Ingrese una descripción,máxima de 1000 caracteres"
                                        pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,1000}" 
                                        minlength="500" maxlength="1000" ></textarea>
                                </div>
                                <br>
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
            </div>
        </div>
    </main>
    <?php include "../librerias/script.php";?>
    <script src="../js/funcionesHojadevida.js"></script>
</body>
</html>