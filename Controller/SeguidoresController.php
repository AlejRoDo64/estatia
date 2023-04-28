<?php
define('VIEWS_PATH', '../Views/');
define('MODEL_PATH', '../Model/');
define('CONTROLLER_PATH', '../Controller/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');

require("../Model/Seguidores.php");

$seg = new Seguidores();

if (isset($_POST["eliminaSeguidor"])) {    
    $seg->deleteSeguidor(
        $_POST["usuario"]     
    );
}
$listaSeguidores = $seg->getSeguidores();
require(VIEWS_PATH . "seguidores/VistaListaSeguidores.php");
