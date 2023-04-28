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
                <h1 class="display-4">Conoce a Estatia</h1>
                <p class="lead">Ingresa a estatia date tu libertad de escribir y construir tu articulo aqui</p>
                <hr class="my-4">
                <!--Ejemplo Acordeon-->

                <div class="row">
                    <div class="col">
                        <h1>Estatia </h1>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Misión
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Estatia busca completarse por eso.</strong> En Estatia esperamos que el usuario puede esperar que este sitio tenga un formato similar a estas a la hora de lectura de un artículo. La diferencia será que Estatia será un sitio en el que los editores y autores de los artículos serán los usuarios, además de contar con un esquema similar al de una red social para conocer más artículos de un autor en particular. Finalmente, encontrarán un sitio en el que principalmente podrán leer textos informativos, de opinión o de culto.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Visión
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>En Estatia miramos a futuro y buscamos crecer.</strong>En Estatia nos proponemos a que el sitio web tenga un gran alcance a nivel Nacional a largo plazo con alrededor de 50000 visitantes diarios y 1000000 de usuarios registrados.
                                        Con la reputación del sitio se espera que la marca Estatia genere beneficio económico y se espera reinvertir en actualizaciones, mantenimiento e incluso un aplicativo móvil.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Valores
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>En Estatia buscamos un ambiente al gusto del usuario.</strong> En Estatia cree en la filosofia de que todos podemos ser un gran escritor o tenemos cosas que contar por eso contamos con que la principal funcion
                                        es crear articulos de interes los cuales ser de historias o recuentos de la vida, fantasia, deportes, ciencia, opinion en muchas mas el limite es la imaginacion
                                        sin embargo haytemas o situaciones que no pueden ser explicitamene compartidos por eso prometemos dar un ambiente favorable evitando ue se presente inconvenientes con los siguientes temas:<br>
                                        Propiedad intelectual<br>
                                        Violencia-Gore<br>
                                        Asuntos delicados acutalmente<br>
                                        Racismo <br>
                                        Contenidos +18 sin autorización<br>
                                        Mas informacion en Terminos y condiciones.<br> </p><br>
                                        <p class="lead">
                                            <a class="btn btn-primary btn-lg" href="indexTerminos.php" role="button">Terminos y condiciones</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- cierra col-->
                </div> <!-- cierra row-->

            </div> <!-- cierra Jumbotron-->
        </div> <!-- cierra col-->
    </div> <!-- cierra row-->

    <hr class="my-4">


</div> <!-- cierra container-fluid-->
</div> <!-- cierra float-left--->

<?php
include 'footer.php';
?>