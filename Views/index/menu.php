<?php session_start();?>
<div class="wrapper">
    <!-- Sidebar - Menu -->
    <?php if ($_SESSION['rol'] == "administrador") { ?>
        <nav id="sidebar" class="bg-primary">
            <div class="sidebar-header">
                <h3 style="font-style: oblique;">Estatia</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Articles for life.</p>
                <li>
                    <a href="<?php echo VIEWS_PATH; ?>index/indexUsuario.php">Inicio</a>
                </li>
                <li class="active dropend">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="true">
                        Usuarios
                    </a>
                    <ul class="dropdown-menu" id="homeSubmenu">
                        <li>
                            <a class="dropdown-item" href="<?php echo CONTROLLER_PATH; ?>UsuariosController.php">Lista usuarios</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php echo VIEWS_PATH; ?>usuarios/VistaNuevoUsuario.php">Nuevo usuario</a>
                        </li>
                </li>
            </ul>
            <li class="active dropend">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="true">
                    Articulos
                </a>
                <ul class="dropdown-menu" id="homeSubmenu">
                    <li>
                        <a class="dropdown-item" href="<?php echo CONTROLLER_PATH; ?>ArticulosController.php">Lista Articulos</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="<?php echo VIEWS_PATH; ?>articulos/VistaNuevoArticulo.php">Nuevo Articulo</a>
                    </li>
                </ul>
            </li>            
            <li>
                <a href="<?php echo VIEWS_PATH; ?>index/indexTerminos.php">Terminos y Condiciones</a>
            </li>
            <li>
                <a href="<?php echo VIEWS_PATH; ?>index/indexConocenos.php">Conocenos</a>
            </li>
            <li>
                <a href="<?php echo VIEWS_PATH; ?>index/indexContacto.php">Contacto</a>
            </li>
            <li>
                <a href="<?php echo VIEWS_PATH; ?>index/">Salir</a>
            </li>
            </ul>
        </nav>
    <?php } else { //entra a usuario autor
    ?>


        <nav id="sidebar" class="bg-primary">
            <div class="sidebar-header">
                <h3 style="font-style: oblique;">Estatia</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Articles for life.</p>
                <li>
                    <a href="<?php echo VIEWS_PATH; ?>index/indexUsuario.php">Inicio</a>
                </li>
                <li class="active dropend">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="true">
                        Articulos
                    </a>
                    <ul class="dropdown-menu" id="homeSubmenu">
                        <li>
                            <a class="dropdown-item" href="<?php echo CONTROLLER_PATH; ?>ArticulosController.php">Lista Articulos</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php echo VIEWS_PATH; ?>articulos/VistaNuevoArticulo.php">Nuevo Articulo</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php echo CONTROLLER_PATH; ?>ArticulosController.php?lectura=1">lectura articulos</a>
                        </li>
                </li>
            </ul>
            <li>
                <a href="<?php echo CONTROLLER_PATH; ?>SeguidoresController.php">Seguidores</a>
            </li>
            <li>
                <a href="<?php echo VIEWS_PATH; ?>index/indexTerminos.php">Terminos y Condiciones</a>
            </li>
            <li>
                <a href="<?php echo VIEWS_PATH; ?>index/indexConocenos.php">Conocenos</a>
            </li>
            <li>
                <a href="<?php echo VIEWS_PATH; ?>index/indexContacto.php">Contacto</a>
            </li>
            <li>
                <a href="<?php echo VIEWS_PATH; ?>index/">Salir</a>
            </li>
            </ul>
        </nav>
    <?php } ?>
    <!-- Hide/Show menu button-->
    <div id="content">
        <div class="row">
            <div class="col-3">
                <nav class="">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-chevron-left" id="arrow1"></i>
                    </button>
                </nav>
            </div>
        </div>
    </div>