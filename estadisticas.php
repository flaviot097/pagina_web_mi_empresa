<?php
session_start();
if (isset($_SESSION["usuario"])) { ?>


<?php

    $ci = curl_init();

    $usuario = $_SESSION["usuario"];

    $url = "http://localhost:4000/ventasanual/" . $usuario;

    curl_setopt($ci, CURLOPT_URL, $url);
    curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);

    $respuestaventas = curl_exec($ci);

    if (curl_errno($ci)) {
        echo "<script> console.log('error en consulta');</script>";
    }
    ;

    $ruta = "http://localhost:4000/recaudacion/" . $usuario;

    curl_setopt($ci, CURLOPT_URL, $ruta);
    curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);

    $respuestarecaudacion = curl_exec($ci);
    if (curl_errno($ci)) {
        echo "<script> console.log('error en consulta');</script>";
    }
    ; ?>

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
        <div class="ineterfaz-menu" id="inetrfaz-menu">
            <h4 class="filter" id="filtros-palabra">Menu de usuario</h4>
            <div class="custom-btn-group" id="div-menu-interfaz">
                <a href="datos-servicios.php" class="btn mr-lg-2 custom-btn" id="btn-interfaz"><i
                        class="uil uil-file-alt"></i>Servicios</a>
                <a href="crear-servicio.php" class="btn mr-lg-2 custom-btn" id="btn-interfaz"><i
                        class="uil uil-file-alt"></i>Crear servicio</a>
                <a href="estadisticas.php" class="btn mr-lg-2 custom-btn" id="btn-interfaz"><i
                        class="uil uil-file-alt"></i>Estadisticas</a>
                <a href="datos-usuario.php" class="btn mr-lg-2 custom-btn" id="btn-interfaz"><i
                        class="uil uil-file-alt"></i>Datos de
                    usuario</a>
                <a href="facturacion.php" class="btn mr-lg-2 custom-btn" id="btn-interfaz"><i
                        class="uil uil-file-alt"></i>Facturacion</a>
            </div>
        </div>
        <div id="contenedor_tarjetas_interfaz" class="tarjeta-estadisticas">
            <div id="cartas-estadisticas" style="width: 50rem">
                <h4 id="contenedor-texto-estadistica" style="text-align: center;">Estadisticas de servicios prestados
                </h4>
                <div class="grafico-ventas-por-mes">
                    <canvas id="migrafica" width="300" height="100"></canvas>
                </div>
                <div class="monto-recaudado">
                    <canvas id="recaudacion" width="300" height="100"></canvas>
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
<script type="module" src="./src/scrips/graficas-estadisticas.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
ventas = <?php echo $respuestaventas; ?>
recaudacion = <?php echo $respuestarecaudacion; ?>;
</script>

</html>


<?php
}
; ?>