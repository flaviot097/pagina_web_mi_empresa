<?php
session_start(); ?>
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
<!-- header -->
<?php
require_once("./header.php"); ?>

<section class="about full-screen d-lg-flex justify-content-center align-items-center" id="palabras-contactos">
    <h2>Podes contactarnos en:</h2>
    <div class="d-flex justify-content-center">
        <div>
            <a href="https://www.instagram.com/"><img src="./img/instagram.png" alt="contacto de instagram"
                    class="contenedor-de-logos-contacto" /></a>
        </div>
        <div>
            <a href="https://www.instagram.com/"><img src="./img/facebook.png" alt="contacto de facebook"
                    class="contenedor-de-logos-contacto" /></a>
        </div>
        <div>
            <a href="https://www.instagram.com/"><img src="./img/twitter-x-logo-png-9.png" alt="contacto de x"
                    class="contenedor-de-logos-contacto" id="imagen-x" /></a>
        </div>
        <div>
            <a href="https://www.instagram.com/"><img src="./img/wts.png" alt="contacto de whatsapp"
                    class="contenedor-de-logos-contacto" /></a>
        </div>
        <div>
            <a href="https://www.instagram.com/"><img src="./img/correo.png" alt="contacto de correo"
                    class="contenedor-de-logos-contacto" /></a>
        </div>
    </div>
</section>

<!-- CONTACTo -->
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
                                <input type="text" class="form-control" name="name" placeholder="tu nombre" id="name" />
                            </div>

                            <div class="col-lg-6 col-12">
                                <input type="email" class="form-control" name="email" placeholder="Email" id="email" />
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

</html>