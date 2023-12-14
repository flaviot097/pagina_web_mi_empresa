<?php

session_start();

/*if (!isset($_SESSION["usuario"])) {
    header("location:login.php");

}*/
$ci = curl_init();

$url = "http://localhost:4000/inicio";
curl_setopt($ci, CURLOPT_URL, $url);

curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);

$respuesta = curl_exec($ci);

if (curl_errno($ci)) {
    $mensaje_error = curl_error($ci);
} else {

    $datosUsuario = json_decode($respuesta, true);
    //echo var_dump($datosUsuario);
    curl_close($ci);
}
;








?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>mi empresa</title>

    <link rel="stylesheet" href="./src/style/bootstrap.min.css" />

    <link rel="stylesheet" href="./src/style/tooplate-style.css" />
</head>

<body class="cuerpo">
    <!-- MENU -->

    <?php
    require_once("./header.php"); ?>

    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
        <div class="container" id="contenedor_de_inicio">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <small class="small-text">¡Biendenido a la web
                            <span class="mobile-block">de mi empresa!</span></small>
                        <h1 class="animated animated-text">
                            <span class="mr-2">¡Bienvenido!,aca encontraras</span>
                            <div class="animated-info">
                                <span class="animated-item">Servicios de calidad</span>
                                <span class="animated-item">Bajos costos</span>
                                <span class="animated-item">Buena atencion</span>
                            </div>
                        </h1>

                        <p>
                            Busca servicios a los mejores precios.¡Tan solo por una
                            subcripcion por mes accede a muchos Beneficios de estos!.Somos
                            la appicacion lider y mas confiable en el mercado.
                        </p>

                        <div class="custom-btn-group mt-4">
                            <a href="#" class="btn mr-lg-2 custom-btn"><i class="uil uil-file-alt"></i>Terminos y
                                condiciones</a>
                            <a href="#contact" class="btn custom-btn custom-btn-bg custom-btn-link">¿Donde nos
                                encontramos?</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12">
                    <div class="about-image">
                        <img src="./img/box-15287_1280.jpg" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_servicios">
        <div id="contenedor_tarjetas_inicio">
            <?php foreach ($datosUsuario as $dato) {
                //error_reporting(0);
                $i;
                $i++;

                if ($i < 6) {

                    ?>

            <div class="card" id="<?php echo $dato['id']; ?>" style="width: 18rem">
                <img src="./img/car-wash-1619823_1280.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title"><?php echo $dato['nombre_servicio']; ?></h5>
                    <p class="card-text"><?php echo $dato['descripcion']; ?></p>
                    <a href="#" class="btn btn-primary" id="boton-tar-inicio" name="<?php echo $dato['id']; ?>">🛒</a>
                </div>
            </div><?php }
                ; ?>
            <?php } ?>
        </div>
    </section>

    <!-- CONTACTO -->
    <section class="contact py-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mr-lg-5 col-12">
                    <div class="google-map w-100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2947.492928607375!2d-71.12081722346046!3d42.37464463417941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e377427d7f0199%3A0x5937c65cee2427f0!2sUniversidad%20de%20Harvard!5e0!3m2!1ses!2sar!4v1699558159190!5m2!1ses!2sar"
                            width="400" height="300" frameborder="0" style="border: 0" allowfullscreen></iframe>
                    </div>

                    <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                        <div class="contact-info-item">
                            <h3 class="mb-3 text-white">mi empresa</h3>
                            <p class="footer-text mb-0">Av. Siempre Viva 324</p>
                            <p>
                                <a href="mailto:miempresa@gmail.com">miempresa@gmail.com</a>
                            </p>
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

                <div class="col-lg-6 col-12">
                    <div class="contact-form">
                        <h2 class="mb-4">¿Tienes alguna consulta?,Envianosla por aqui</h2>

                        <form action="" method="get">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <input type="text" class="form-control" name="name" placeholder="tu nombre"
                                        id="name" />
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="email" class="form-control" name="email" placeholder="Email"
                                        id="email" />
                                </div>

                                <div class="col-12">
                                    <textarea name="message" rows="6" class="form-control" id="message"
                                        placeholder="Mensaje"></textarea>
                                </div>

                                <div class="ml-lg-auto col-lg-5 col-12">
                                    <input type="submit" class="form-control submit-btn" value="Enviar" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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
<script>
if (localStorage.getItem("articulo")) {
    localStorage.removeItem("articulo")
}
</script>

</html>