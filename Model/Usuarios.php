<?php
require(MODEL_PATH . "Conexion.php");

class Usuarios
{
    private $con;

    function __construct()
    {
        $this->con = new Conexion();
    }

    public function getRol($usuario)
    {
        $query = $this->con->getCon()->query("SELECT * FROM usuarios WHERE usuario ='$usuario'");
        $resultado = mysqli_fetch_assoc($query);
        if ($resultado['rol_autor'] == 0 && $resultado['rol_lector'] == 0)
            return "administrador";
        if ($resultado['rol_autor'] == 1 && $resultado['rol_lector'] == 0)
            return "autor";
        if ($resultado['rol_autor'] == 0 && $resultado['rol_lector'] == 1)
            return "lector";
        if ($resultado['rol_autor'] == 1 && $resultado['rol_lector'] == 1)
            return "autor_lector";
    }

    public function login($usuario, $clave)
    {
        $sql = "SELECT * FROM usuarios WHERE usuario ='$usuario' AND clave='$clave'";
        $result = $this->con->getCon()->query($sql);
        if ($result->num_rows != null) {
            if ($result->num_rows == 0) {
                return false;
            } else {
                return true;
            }
        } else {
            return false;
        }
    }//cambio login

    public function getUsuarios()
    {
        $query = $this->con->getCon()->query("SELECT * FROM usuarios");
        $usuarios = [];

        $cont = 0;
        while ($fila = $query->fetch_assoc()) {
            $usuarios[$cont] = $fila;
            $cont++;
        }
        return $usuarios;
    }
    public function newUsuario($usuario, $clave, $nombre)
    {
        $sql = "INSERT INTO USUARIOS (usuario,clave,nombre) VALUES('$usuario','$clave','$nombre')";

        // $sql = "INSERT INTO USUARIOS         VALUES('$usuario','$clave','$nombre')";

        if ($this->con->getCon()->query($sql)) {
            // echo "Inserción exitosa.";
        } else {
            echo "Error ejecutando consulta de inserción.";
            echo "SQL: " . $sql;
        }
    }
    public function deleteUsuario($usuario)
    {
        $sql = "DELETE FROM USUARIOS WHERE usuario='$usuario'";
        if ($this->con->getCon()->query($sql)) {
            // echo "Eliminación exitosa.";
        } else {
            echo "Error ejecutando consulta de eliminación.";
            echo "SQL: " . $sql;
        }
    }
    public function updateUsuario($usuario, $clave, $nombre)
    {
        $sql = "UPDATE USUARIOS SET nombre='$nombre', clave='$clave'
        WHERE usuario='$usuario'";
        if ($this->con->getCon()->query($sql)) {
            echo "Actualización exitosa.";
        } else {
            echo "Error ejecutando consulta de actualización.";
            echo "SQL: " . $sql;
        }
    }
}
