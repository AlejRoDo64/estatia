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
                    Crea tu nuevo articulo
                </div>
                <div class="card-body">
                    <form action="<?php echo CONTROLLER_PATH; ?>ArticulosController.php" method="POST">
                        <div class="mb-3">
                            <label for="user" class="form-label">Usuario</label>
                            <input id="user" class="form-control" type="text" disabled placeholder="<?php echo $_SESSION["usuario"]; ?>">
                            <input type="hidden" name="usuario" value="<?php echo $_SESSION["usuario"]; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Titulo</label>
                            <input id="title" class="form-control" type="title" name="titulo" placeholder="Escriba titulo">
                        </div>
                        <div class="mb-3">
                            <label for="Article" class="form-label">Articulo</label>
                            <textarea id="Article" required class="form-control" type="text" rows="17" name="articulo" placeholder="Escriba Articulo"></textarea>
                        </div>
                        <input type="hidden" name="nuevoArticulo">
                        <!-- <input type="submit" value="Enviar"> -->
                        <button type="submit" class="btn btn-primary">Enviar</button>
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