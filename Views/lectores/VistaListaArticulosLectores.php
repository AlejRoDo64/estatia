<?php
include VIEWS_PATH . 'index/header.php';

include VIEWS_PATH . 'index/menu.php';
?>
<div class="container-fluid mt-5 ">
    <?php
    if (isset($_GET["info"])) { // Aquí se pregunta si por la URL (por medio de GET) viene la variable info
        if ($_GET["info"] == 1) { // Si info es igual a 1: usuario creado
    ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Articulo <strong>creado</strong> exitosamente.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        if ($_GET["info"] == 2) { // Si info es igual a 2: usuario eliminado
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Articulo <strong>eliminado</strong> exitosamente.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        if ($_GET["info"] == 3) { // Si info es igual a 3: usuario actualizado
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Articulo <strong>actualizado</strong> exitosamente.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
    <?php
        }
    }
    ?>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Articulos Escritos
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>

                                <th scope="col">Autor</th>
                                <th scope="col">Titulo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listaArticulos as $articulo) {

                                echo "<tr>";
                                echo "<td> <a href='" . VIEWS_PATH . "lectores/VistaLecturaArticulo.php?id=" . $articulo['id_articulo'] . "'> <span class='fa fa-eye'></span></a> </td>";
                                if ($_SESSION["usuario"] == $articulo['usuario']) {
                                    echo "<td></td>";
                                } else {
                                    echo "<td> <a href='" . CONTROLLER_PATH . "ArticulosController.php?usuario=" . $_SESSION['usuario'] . "&autor=" . $articulo['usuario'] . "'> <span class='fa fa-user-plus'></span></a> </td>"; //agregado seguir usuario
                                }
                                echo "<td>" . $articulo['usuario'] . "</td>";
                                echo "<td>" . $articulo['titulo'] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div> <!-- cierra card-body-->
            </div> <!-- cierra card-->
        </div> <!-- cierra col-->
    </div> <!-- cierra row-->
</div> <!-- cierra container-fluid-->

</div> <!-- cierra float-left--->
<?php
include VIEWS_PATH . 'index/footer.php';
?>