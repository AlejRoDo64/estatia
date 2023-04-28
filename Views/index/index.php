<?php

define('VIEWS_PATH', '../');
define('CSS_PATH', '../../css/');
define('JS_PATH', '../../js/');
define('IMG_PATH', '../../img/');

include 'header.php';
?>

<!-- Outer Row -->
<div class="row justify-content-center">
    <div class="col-xl-8 col-lg-10 col-md-7">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block">
                        <img src="<?php echo IMG_PATH; ?>logoposible3.jpg" alt="Imagen de inicio" width="400px" height="300px">
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="d-flex justify-content-center">
                                <p>Bienvenidos a Estatia</p>
                            </div>

                            <div></div>
                            <form action="valida_Usuario.php" method="POST">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Usuario</label>
                                    <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Clave</label>
                                    <input type="password" name="clave" class="form-control" id="exampleInputPassword1">
                                </div>
                                <button type="submit" class="btn btn-primary">Entrar</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include 'footer.php';
?>