<?php
define('VIEWS_PATH', '../');
define('MODEL_PATH', '../Model/');
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
                    Elimina usuario
                </div>
                <div class="card-body">
                    <form action="<?php echo CONTROLLER_PATH;?>UsuariosController.php" method="post">
                        <div class="mb-3">
                            <label for="user" class="form-label">Usuario</label>
                            <input disabled id="user" class="form-control" type="text" placeholder="Escriba usuario" value="<?php echo $_GET['usuario']; ?>">
                            <input type="hidden" name="usuario" value="<?php echo $_GET['usuario']; ?>">
                        </div>
                        <input type="hidden" name="eliminaUsuario">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div> <!-- cierra card-body-->
            </div> <!-- cierra card-->
        </div> <!-- cierra col-->
    </div> <!-- cierra row-->
</div> <!-- cierra container-fluid-->


</div> <!-- cierra float-left--->

<?php
include VIEWS_PATH . 'index/footer.php';
?>