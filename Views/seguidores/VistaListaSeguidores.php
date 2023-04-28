<?php
include VIEWS_PATH . 'index/header.php';

include VIEWS_PATH . 'index/menu.php';
?>
<div class="container-fluid mt-5 ">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <div class="card col-5">
                <div class="card-header text-center">
                    Seguidores
                </div>
                <div class="card-body">
                    <?php if (count($listaSeguidores) > 0) { ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listaSeguidores as $seguidor) {
                                    echo "<tr>";
                                    echo "<td><a href='" . VIEWS_PATH . "seguidores/VistaEliminarSeguidor.php?usuario=" . $seguidor['usuario'] . "'> <span class='fa fa-trash'></span></a>   </td>";
                                    echo "<td>" . $seguidor['usuario'] . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    <?php } ?>
                </div> <!-- cierra card-body-->
            </div> <!-- cierra card-->
        </div> <!-- cierra col-->
    </div> <!-- cierra row-->
</div> <!-- cierra container-fluid-->

</div> <!-- cierra float-left--->
<?php
include VIEWS_PATH . 'index/footer.php';
?>