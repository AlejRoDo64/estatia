<?php
define('VIEWS_PATH', '../Views/');
define('MODEL_PATH', '../Model/');
define('CONTROLLER_PATH', '../Controller/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');

require("../Model/Usuarios.php");

$usu = new Usuarios();

if (isset($_POST["nuevoUsuario"])) {
    $usu->newUsuario(
        $_POST["usuario"],
        $_POST["clave"],
        $_POST["nombre"]
    );
    header("Location: " . CONTROLLER_PATH . "UsuariosController.php?info=1");
} else {
    if (isset($_POST["eliminaUsuario"])) {
        $usu->deleteUsuario(
            $_POST["usuario"]
        );
        header("Location: " . CONTROLLER_PATH . "UsuariosController.php?info=2");
    } else {
        if (isset($_POST["actualizaUsuario"])) {
            $usu->updateUsuario(
                $_POST["usuario"],
                $_POST["clave"],
                $_POST["nombre"]
            );
            header("Location: " . CONTROLLER_PATH . "UsuariosController.php?info=3");
        } else {
            $listaUsuarios = $usu->getUsuarios();
            require(VIEWS_PATH . "usuarios/VistaListaUsuarios.php");
        }
    }
}
