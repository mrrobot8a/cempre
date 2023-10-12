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
                <h1><i class="fa fa-user"></i> Registrar Usuario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="post" id="FrmUsuario" onsubmit="return agregarNuevo()">
                                <div class="form-group row">
                                    <label class="control-label col-md-2">USUARIO:</label>
                                    <div class="col-md-10">
                                        <input class="form-control" id="usuario" name="usuario"
                                            type="text" placeholder="*Ingrese primer nombre de usuario"  
                                            pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,20}"  required="required" 
                                            minlength="5" maxlength="20" title="Solamente se admiten caracteres">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">E-MAIL:</label>
                                    <div class="col-md-10">
                                        <input class="form-control" id="correo" name="correo"
                                            type="email" placeholder="*Ingrese correo electrónico" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">CONSTRASEÑA:</label>
                                    <div class="col-md-10">
                                            <input type="password" class="form-control" id="clave" name="clave"
                                                placeholder="*Ingrese constraseña"  minlength="5" maxlength="12"
                                                required="required" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-2">ROL:</label>
                                    <div class="col-md-10">
                                            <select class="form-control" id="rol" name="rol" required="required">
                                                <option value="">--Seleccione un Rol--</option>
                                                <option value="Administrador">Administrador</option>
                                                <option value="Docente">Docente</option>
                                                <option value="Estudiante">Estudiante</option>
                             
                                            </select>
                                    </div>
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
    <script src="../js/FuncionesUsuarios.js"></script>


   
</body>

</html>