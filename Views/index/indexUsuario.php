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
            <center>
                <div class="jumbotron jumbotron-fluid">

                    <h1 class="display-4">Hola <?php echo " " . $_SESSION["usuario"]; ?> </h1>

                </div> <!-- cierra Jumbotron-->
            </center>
        </div> <!-- cierra col-->
    </div> <!-- cierra row-->
    <br>
    <!--Ejemplo Carrusel-->
    <div class="row">
        <div class="col">
            <!-- con data-bs-interval="10000" se está indicando que cada transición dura 10000 milisegundos-->
            <div id="carouselExampleCaptions" class="carousel slide bg-dark" data-bs-ride="carousel" data-bs-interval="10000">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="height: 350px;">
                    <!--Se añadió este estilo en línea-->
                    <div class="carousel-item active">
                        <img src="<?php echo IMG_PATH; ?>principio.png" height="350" class="d-block w-100" alt="Imagen llamativa">
                        <div class="carousel-caption d-none d-md-block">                            
                            <p hidden >Expresa tus ideas, crea y da temas a conocer.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo IMG_PATH; ?>temas.jpg" height="350" class="d-block w-100" alt="Imagen 2">
                        <div class="carousel-caption d-none d-md-block">                            
                            <p hidden>Existen varios lenguajes en los cuales puedes aprender di tus articulos como quieras en el idioma que desees escribir</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo IMG_PATH; ?>imagen.jpg" height="350" class="d-block w-100" alt="Imagen 3">
                        <div class="carousel-caption d-none d-md-block">                            
                            <p hidden>Si no sabes que escribir inspirate cualquier idea que desees solo escribelo.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div> <!-- cierra col-->
    </div> <!-- cierra row-->
    <br><br>
    <hr class="my-4">
    <!--Ejemplo ratios-->
    <div class="ratio" style="--bs-aspect-ratio: 60%;">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/srWT0R6TXQE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <hr class="my-4">

</div> <!-- cierra container-fluid-->
</div> <!-- cierra float-left--->

<?php
include 'footer.php';
?>