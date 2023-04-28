<?php
define('VIEWS_PATH', '../Views/');
define('CONTROLLER_PATH', '../Controller/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');

require("../Model/Articulos.php");

$arti = new Articulos();

if (isset($_POST["nuevoArticulo"])) {
    echo $_POST["articulo"];
    $arti->newArticulo(
        $_POST["usuario"],
        $_POST["titulo"],
        $_POST["articulo"]
    );
    header("Location: " . CONTROLLER_PATH . "ArticulosController.php?info=1");
} else {
    if (isset($_POST["eliminaArticulo"])) {
        $arti->deleteArticulo(
            $_POST["titulo"]
        );
        header("Location: " . CONTROLLER_PATH . "ArticulosController.php?info=2");
    } else {
        if (isset($_POST["actualizaArticulo"])) {
            $arti->updateArticulo(                
                $_POST["articulo"],
                $_POST["titulo"]
            );
            header("Location: " . CONTROLLER_PATH . "ArticulosController.php?info=3");
        } else {
            $listaArticulos = $arti->getArticulos();
            if (isset($_GET["lectura"])) {
                if ($_GET["lectura"] == 1) {
                    require(VIEWS_PATH . "lectores/VistaListaArticulosLectores.php");
                }
            } else
            if (isset($_GET["autor"]) && isset($_GET["usuario"])) {
                $arti->addFollower($_GET['usuario'], $_GET['autor']);
                $listaArticulos = $arti->getArticulos();
                require(VIEWS_PATH . "lectores/VistaListaArticulosLectores.php");
            } else
                require(VIEWS_PATH . "articulos/VistaListaArticulos.php");
        }
    }
}
