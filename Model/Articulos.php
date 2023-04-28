<?php
require("../Model/Conexion.php");
class Articulos
{
    private $con;

    function __construct()
    {
        $this->con = new Conexion();
    }

    public function addFollower($usuario, $autor)
    {
        $sql1 = "SELECT * FROM seguidores WHERE usuario='$usuario' AND autor='$autor'";
        $result = $this->con->getCon()->query($sql1);
        // echo "add fol " . $sql1;
        //Esta primer consulta es para validar que no se dupliquen
        // los seguidores para el mismo autor
        if ($result->num_rows == 0) {
            $sql2 = "INSERT INTO seguidores (usuario, autor)
        VALUES('$usuario','$autor')";
            if ($this->con->getCon()->query($sql2)) {
                //echo "Inserción exitosa.";
            } else {
                //  echo "Error ejecutando consulta de inserción.";
                // echo "SQL: " . $sql2;
            }
        }
    } //Funcion para seguidor agregada

    public function getArticulos()
    {
        $query = $this->con->getCon()->query("SELECT * FROM ARTICULOS");
        $articulos = [];

        $cont = 0;
        while ($fila = $query->fetch_assoc()) {
            $articulos[$cont] = $fila;
            $cont++;
        }
        return $articulos;
    }
    public function newArticulo($usuario, $titulo, $articulo)
    {
        //$sql = "INSERT INTO USUARIOS (usuario,clave,nombre)
        //VALUES($usuario,$nombre,$clave)";

        $sql = "INSERT INTO ARTICULOS (titulo, usuario, articulo)
        VALUES('$titulo','$usuario','$articulo')";

        if ($this->con->getCon()->query($sql)) {
            // echo "Inserción exitosa.";
        } else {
            echo "Error ejecutando consulta de inserción.";
            echo "SQL: " . $sql;
        }
    }
    public function deleteArticulo($titulo)
    {
        $sql = "DELETE FROM ARTICULOS WHERE titulo='$titulo'";
        if ($this->con->getCon()->query($sql)) {
            // echo "Eliminación exitosa.";
        } else {
            echo "Error ejecutando consulta de eliminación.";
            echo "SQL: " . $sql;
        }
    }
    public function updateArticulo($articulo, $titulo)
    {
        /*  $sql = "UPDATE ARTICULOS SET articulo='$articulo'
        WHERE titulo='$titulo'";  
        */
        $sql = "UPDATE `articulos` SET `articulo`='$articulo' WHERE `titulo`='$titulo'";
        if ($this->con->getCon()->query($sql)) {
            echo "Actualización exitosa.";
        } else {
            echo "Error ejecutando consulta de actualización.";
            echo "SQL: " . $sql;
        }
    }
}
