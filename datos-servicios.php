<?php
session_start();
if (isset($_SESSION["usuario"])) { ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>mi empresa</title>

    <link rel="stylesheet" href="./src/style/bootstrap.min.css" />


    <link rel="stylesheet" href=".//src/style/tooplate-style.css" />
</head>

<body class="cuerpo">
    <!-- MENU -->
    <?php
        require_once("./header.php"); ?>


    <section class="section_servicios">
        <?php require_once("./esqueleto-menu.php");
            ?>
        <div id="contenedor_tarjetas_interfaz">
            <div id="card-menu" style="width: 50rem">
                <div class="card mb-3" style="width: 90%;">
                    <div class="card-body" style="background-color: #cecdcd;">
                        <img src="./img/car-wash-1619823_1280.jpg" alt="" style="width: 50%;">
                        <h5 class="card-title">nombre de servicio </h5>
                        <p class="card-text">contenico o texto/descripcion de el servicio</p>
                        <a href="#" class="btn btn-primary">modificar servicio</a>
                        <a class="btn btn-primary card-carrito" name="" id="">❌</a>
                    </div>
                </div>
                <div class="card mb-3" style="width: 90%;">
                    <div class="card-body" style="background-color: #cecdcd;">
                        <img src="./img/car-wash-1619823_1280.jpg" alt="" style="width: 15.5rem;">
                        <h5 class="card-title">nombre de servicio </h5>
                        <p class="card-text">contenico o texto/descripcion de el servicio</p>
                        <a href="#" class="btn btn-primary">modificar servicio</a>
                        <a class="btn btn-primary card-carrito" name="" id="">❌</a>
                    </div>
                </div>
                <div class="card mb-3" style="width: 90%;">
                    <div class="card-body" style="background-color: #cecdcd;">
                        <img src="./img/car-wash-1619823_1280.jpg" alt="" style="width: 15.5rem;">
                        <h5 class="card-title">nombre de servicio </h5>
                        <p class="card-text">contenico o texto/descripcion de el servicio</p>
                        <a href="#" class="btn btn-primary">modificar servicio</a>
                        <a class="btn btn-primary card-carrito" name="" id="">❌</a>
                    </div>
                </div>

            </div>
        </div>


    </section>

    <!-- CONTACTO -->
    <section class="contact py-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mr-lg-5 col-12">
                    <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                        <div class="contact-info-item">
                            <h3 class="mb-3 text-white">mi empresa</h3>
                            <p class="footer-text mb-0">Av. Siempre Viva 324</p>
                            <p><a href="mailto:miempresa@gmail.com">miempresa@gmail.com</a></p>
                        </div>

                        <ul class="social-links">
                            <li>
                                <a href="https://www.instagram.com/" class="uil uil-instagram" data-toggle="tooltip"
                                    data-placement="left" title="instagram"></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/?lang=es" class="uil uil-x" data-toggle="tooltip"
                                    data-placement="left" title="x"></a>
                            </li>
                            <li>
                                <a href="https://web.whatsapp.com/" class="uil uil-whatapp" data-toggle="tooltip"
                                    data-placement="left" title="whatsapp"></a>
                            </li>
                        </ul>
                    </div>
                </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <p class="copyright-text text-center">
                        Copyright &copy; 2023 mi empresa . Todos los derechos reservados
                    </p>
                    <p class="copyright-text text-center">
                        Diseñado por
                        <a rel="nofollow" href="https://www.facebook.com">Flavio Trocello
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="./src/scrips/modo_oscuro.js"></script>


</html>


<?php
}
;
?>