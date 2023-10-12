<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../images/logoCempre.png" width="60"
            height="50" alt="User Image">
        <div>
            <p class="app-sidebar__user-name"><?php echo $_SESSION['rol'] ;?></p>
            <p class="app-sidebar__user-designation"><?php echo $_SESSION['usuario'] ;?></p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item" href=""><i class="app-menu__icon fa fa-home fa-lg"></i><span
                    class="app-menu__label">Inicio</span></a></li>
        <?php 
				if($_SESSION['rol'] == "Docente" || $_SESSION['rol'] == "Estudiante" ){
			    ?>
        <li><a class="app-menu__item" href="ReporteUsuarios.php"><i class="app-menu__icon fa fa-cog fa-lg"></i><span
                    class="app-menu__label">Actualizar Usuario</span></a></li>
        <?php } ?>
        <?php 
        if($_SESSION['rol'] == "Administrador"){
			    ?>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                    class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Gestionar Usuario
                </span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item active" href="FrmUsuario.php"><i class="icon fa fa-circle-o"></i>Registrar
                        Usuario</a></li>
                <li><a class="treeview-item" href="ReporteUsuarios.php"><i class="icon fa fa-circle-o"></i>
                        Reporte de Usuario</a></li>
            </ul>
        </li>
        <?php } ?>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                    class="app-menu__icon fa fa-file-text-o"></i><span class="app-menu__label">Gestionar Hoja de
                    vida</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
            <?php 
        if($_SESSION['rol'] == "Administrador" || $_SESSION['rol'] == "Estudiante"){
			    ?>
                <li><a class="treeview-item active" href="FrmHojaDeVida.php"><i
                            class="icon fa fa-circle-o"></i>Registrar
                        Hoja de vida</a></li>
                        <?php } ?>
                <li><a class="treeview-item" href="ReporteHojaDeVida.php"><i class="icon fa fa-circle-o"></i>
                        Reporte hoja de vida</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                    class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Gestionar Solicitud
                </span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
            <?php 
        if($_SESSION['rol'] == "Administrador" || $_SESSION['rol'] == "Estudiante"){
			    ?>
                <li><a class="treeview-item active" href="FrmRegistrarSolicitud.php"><i
                            class="icon fa fa-circle-o"></i>Registrar
                        Solicitud</a></li>
                        <?php } ?>
                <li><a class="treeview-item" href="ReporteSolicitudes.php"><i class="icon fa fa-circle-o"></i>
                        Reporte de Solicitud</a></li>
            </ul>
        </li>
        <?php 
        if($_SESSION['rol'] == "Administrador" || $_SESSION['rol'] == "Docente"){
			    ?>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                    class="app-menu__icon fa fa-bar-chart"></i><span class="app-menu__label">Gestionar Notas
                </span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">

                <li><a class="treeview-item" href="LiatasNotas.php"><i class="icon fa fa-circle-o"></i>
                        Reporte de notas</a></li>
                        <
            </ul>
        </li>
        <?php } ?>
    </ul>
</aside>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ayuda en línea</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Preguntas Frecuentes</h5>
     
        <p>Como gestionar el usuario ? <a class="alert-link" href="https://www.youtube.com/watch?v=sqO0WOTqZ-E" target="_blank"> Ver video. </a></p>
        <p>Como diligenciar formulario de la Hoja de vida ? <a class="alert-link" href="https://www.youtube.com/watch?v=88ssA40nzDA&feature=youtu.be" target="_blank"> Ver video. </a></p>
        <p>Como diligenciar formulario de la solicitud de practicas ? <a class="alert-link" href="https://www.youtube.com/watch?v=Ok6xkJO0s-Y" target="_blank"> Ver video. </a></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>