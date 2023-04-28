<?php
define('VIEWS_PATH', '../');
define('MODEL_PATH', '../../Model/'); //path agregado
define('CONTROLLER_PATH', '../../Controller/');
define('CSS_PATH', '../../css/');
define('JS_PATH', '../../js/');

include VIEWS_PATH . 'index/header.php';

include VIEWS_PATH . 'index/menu.php';
require MODEL_PATH . 'Conexion.php'; //require añadido

$db = new Conexion();
$con = $db->getCon();
$resultAriculo = $con->query('SELECT * FROM articulos WHERE id_articulo=' . $_GET['id']);
$datos_articulo = mysqli_fetch_assoc($resultAriculo);

?>
<div class="container-fluid mt-5 ">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    <h2><?php echo $datos_articulo['titulo']; ?></h2>
                </div>
                <div class="card-body">
                    <p><?php echo $datos_articulo['articulo']; ?></p>
                </div> <!-- cierra card-body-->
            </div> <!-- cierra card-->
        </div> <!-- cierra col-->
    </div> <!-- cierra row-->
</div> <!-- cierra container-fluid-->

</div> <!-- cierra float-left--->

<?php
include VIEWS_PATH . 'index/footer.php';
?>