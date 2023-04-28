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
                Usuario <strong>creado</strong> exitosamente.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        if ($_GET["info"] == 2) { // Si info es igual a 2: usuario eliminado
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Usuario <strong>eliminado</strong> exitosamente.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        if ($_GET["info"] == 3) { // Si info es igual a 3: usuario actualizado
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Usuario <strong>actualizado</strong> exitosamente.
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
                    Usuarios registrados
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col">Id</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Contraseña</th>
                                <th scope="col">Nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $n = 0;
                            foreach ($listaUsuarios as $usuario) {
                               $n++;
                                echo "<tr>";
                                echo "<td> <a href='" . VIEWS_PATH . "usuarios/VistaActualizaUsuario.php?usuario=" . $usuario['usuario'] . "'> <span class='fa fa-edit'></span></a> </td>";
                                echo "<td> <a href='" . VIEWS_PATH . "usuarios/VistaEliminaUsuario.php?usuario=" . $usuario['usuario'] . "'> <span class='fa fa-trash'></span></a> </td>";
                                echo "<td>" . $n . "</td>";
                                echo "<td>" . $usuario['usuario'] . "</td>";
                                echo "<td>" . $usuario['clave'] . "</td>";
                                echo "<td>" . $usuario['nombre'] . "</td>";
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