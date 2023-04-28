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
                <h1 class="display-4">Términos y Condiciones</h1>
                <p class="lead">.</p>
                <hr class="my-4">
                <ul>
                    <li>El uso de este sitio solo está permitido para personas mayores
                        de 14 años. En caso de ser menor se requiere supervición de un adulto responsable.
                    </li>
                    <li>Estatia es un sitio con libertad de expresión, sin embargo, se recomienda evitar el uso de lenguaje soez
                        o expresiones que sean ofensivas o atenten a algo o alguien.
                    </li>
                    <li>En este sitio todo es de caracter gratuito, Estatia se libra de cualquier responsabilidad en caso de cobros en sitios ágenos
                        al nuestro pues se trata de falsificación.
                    </li>
                    <li>Todos los artículos publicados están previamente calificados y aprovados por nuestros moderadores.
                    </li>
                    <li>Al registrarse en nuestro sitio, el usuario acepta y acata los términos y condiciones propuestos.
                    </li>
                    <li>Disfruta de Estatia.
                    </li>
                </ul>
            </div> <!-- cierra Jumbotron-->
        </div> <!-- cierra col-->
    </div> <!-- cierra row-->


</div> <!-- cierra container-fluid-->
</div> <!-- cierra float-left--->

<?php
include 'footer.php';
?>