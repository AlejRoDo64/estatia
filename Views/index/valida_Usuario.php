<?php
define('MODEL_PATH', '../../Model/');

require(MODEL_PATH."Usuarios.php");


$db = new Usuarios();

if ($db->login($_POST['usuario'], $_POST['clave'])) {
    session_start();
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['rol']=$db->getRol($_POST['usuario']);
    header("Location: indexUsuario.php");
}else{

    header("Location: index.php");

}
