<?php
require(MODEL_PATH . "Conexion.php");
error_reporting(E_ALL ^ E_NOTICE);
class Seguidores
{
    private $con;

    function __construct()
    {
        $this->con = new Conexion();
    }

    public function getSeguidores()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $usuario = $_SESSION["usuario"];
        $query = $this->con->getCon()->query("SELECT * FROM SEGUIDORES 
        WHERE usuario != '$usuario'AND autor = '$usuario'");
        $seguidores = [];

        $cont = 0;
        while ($fila = $query->fetch_assoc()) {
            $seguidores[$cont] = $fila;
            $cont++;
        }
        return $seguidores;
    }

    public function deleteSeguidor($usuario)
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $autor = $_SESSION["usuario"];
        $sql = "DELETE FROM SEGUIDORES WHERE usuario='$usuario'AND autor = '$autor'";
        if ($this->con->getCon()->query($sql)) {
            // echo "Eliminación exitosa.";
        } else {
            echo "Error ejecutando consulta de eliminación.";
            echo "SQL: " . $sql;
        }
    }
}
