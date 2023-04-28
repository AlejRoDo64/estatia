<?php
define('VIEWS_PATH', '../');
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
                    Elimina Articulo
                </div>
                <div class="card-body">
                    <form action="<?php echo CONTROLLER_PATH;?>ArticulosController.php" method="post">
                        <div class="mb-3">
                            <label for="title" class="form-label">Titulo</label>
                            <input disabled id="title" class="form-control" type="text" placeholder="Escriba titulo" value="<?php echo $_GET['titulo']; ?>">
                            <input type="hidden" name="titulo" value="<?php echo $_GET['titulo']; ?>">
                        </div>
                        <input type="hidden" name="eliminaArticulo">
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