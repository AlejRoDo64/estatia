<?php
define('VIEWS_PATH', '../');
define('MODEL_PATH', '../../Model/');
define('CONTROLLER_PATH', '../../Controller/');
define('CSS_PATH', '../../css/');
define('JS_PATH', '../../js/');

include VIEWS_PATH . 'index/header.php';

include VIEWS_PATH . 'index/menu.php';
?>
<div class="container-fluid mt-5 ">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                   Nuevo usuario
                </div>
                <div class="card-body">
                    <form action="<?php echo CONTROLLER_PATH;?>UsuariosController.php" method="POST">
                        <div class="mb-3">
                            <label for="user" class="form-label">Usuario</label>
                            <input id="user" class="form-control" type="text" name="usuario" placeholder="Escriba usuario">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Clave</label>
                            <input id="password" class="form-control" type="password" name="clave" placeholder="Escriba clave">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input id="name" class="form-control" type="text" name="nombre" placeholder="Escriba nombre">
                        </div>
                        <input type="hidden" name="nuevoUsuario">
                        <!-- <input type="submit" value="Enviar"> -->
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div> <!-- cierra card-body-->
            </div> <!-- cierra card-->
        </div> <!-- cierra col-->
    </div> <!-- cierra row-->
</div> <!-- cierra container-fluid-->


</div>  <!-- cierra float-left--->

<?php
include VIEWS_PATH . 'index/footer.php';
?>