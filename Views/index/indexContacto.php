<?php
define('CSS_PATH', '../../css/');
define('JS_PATH', '../../js/');
define('IMG_PATH', '../../img/');
define('CONTROLLER_PATH', '../../Controller/');
define('VIEWS_PATH', '../');

include 'header.php';

include 'menu.php';
?>
<div class="container-fluid mt-5 ">
    <div class="row">
        <div class="col-12">
            <div class="jumbotron jumbotron-fluid">
                <h1 class="display-4">Contacto</h1>
                <br>
                <h5 class="display-7">Contacta con nuestros desarrolladores:</h5>
                <br>
                <div class="row">
                    <div class="col-4">
                        <div class="card border-primary mb-3" style="max-width: 30rem;">
                            <div class="card-header">Alejandro Romero Doncel</div>
                            <div class="card-body">
                                <h4 class="card-title">Teléfono:</h4>
                                <p class="card-text">3223510432</p>
                                <h4 class="card-title">Correo:</h4>
                                <p class="card-text">alejandro.romerod@konradlorenz.edu.co</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card border-primary mb-3" style="max-width: 30rem;">
                            <div class="card-header">Juan Pablo Velandia Castellanos</div>
                            <div class="card-body">
                                <h4 class="card-title">Teléfono:</h4>
                                <p class="card-text">3124832360</p>
                                <h4 class="card-title">Correo:</h4>
                                <p class="card-text">juanp.velandiac@konradlorenz.edu.co</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- cierra Jumbotron-->
        </div> <!-- cierra col-->
    </div> <!-- cierra row-->





    <hr class="my-4">


</div> <!-- cierra container-fluid-->
</div> <!-- cierra float-left--->

<?php
include 'footer.php';
?>