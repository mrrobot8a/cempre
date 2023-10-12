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
                <h1><i class="fa fa-edit"></i> Reporte de Usuarios</h1>
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
    </main>
    
    <div class="container">
        <div class="modal fade" id="modalCRUDU">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <h4>Actualizar Contraseña</h4>
                        <button type="button" class="close" data-dismiss="modal">X</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="post" id="FrmHojaDeVidaU">
                                    <div class="form-group row">
                                    <input type="text" hidden="" id="idUsuarioU" name="idUsuarioU">
                                
                                    <label class="control-label col-md-2">CONSTRASEÑA:</label>
                                        <div class="col-md-12">
                                        <input type="password" name="claveU" id="claveU" class="form-control"
                                            placeholder="*********" minlength="6" maxlength="15" required="required">
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" id="btnActualizar" class="btn btn-success"><i
                                class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="modal fade" id="modalCRUDX">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <h4>Actualizar Rol y/o Priviligios</h4>
                        <button type="button" class="close" data-dismiss="modal">X</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="post" id="FrmHojaDeVidaX">
                                <input type="text" hidden="" id="idUsuarioX" name="idUsuarioX">
                                    <div class="form-group row">
                                        <label class="control-label col-md-2">ROL:</label>
                                        <div class="col-md-10">
                                            <select class="form-control" id="rolX" name="rolX" required="required">
                                                <option value="">--Seleccione un Rol--</option>
                                                <option value="Administrador">Administrador</option>
                                                <option value="Docente">Docente</option>
                                                <option value="Estudiante">Estudiante</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-2">PERMISO:</label>
                                        <div class="col-md-10">
                                            <select class="form-control" id="estadoX" name="estadoX" required="required">
                                                <option value="">--Seleccione un Estado--</option>
                                                <option value="Activo">Activo</option>
                                                <option value="Inactivo">Inactivo</option>
                                                <option value="Bloqueado">Bloqueado</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" id="btnActualizarX" class="btn btn-success"><i
                                class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "../librerias/script.php";?>
    <script src="../js/FuncionesUsuarios.js"></script>
</body>

</html>