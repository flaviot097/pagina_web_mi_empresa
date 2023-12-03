<?php
session_start();
if (isset($_SESSION["usuario"])) { ?>

<?php
    if ($_POST) {
        if ($_POST["nombre_y_apellido"] && $_POST["dni"] && $_POST["nombre_servicio"] && $_POST["precio"] && $_POST["fecha"] && $_POST["descripcion"]) {


            $ci = curl_init();

            if ($_SESSION["usuario"] == $_POST["nombre_y_apellido"]) {
                $usuario = $_POST["nombre_y_apellido"];
            }
            ;
            $dni = $_POST["dni"];
            $nombre_servicio = $_POST["nombre_servicio"];
            $precio = $_POST["precio"];
            $fecha = $_POST["fecha"];
            $descripcion = $_POST["descripcion"];



            $array = array(
                'nombre_y_apellido' => $usuario,
                'dni' => $dni,
                'descripcion' => $descripcion,
                'nombre_servicio' => $nombre_servicio,
                'precio' => $precio,
                'fecha' => $fecha
            );


            $datosUsuario = http_build_query($array);

            $coneccion = array(
                CURLOPT_URL => 'http://localhost:4000/inicio',
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $array,

                CURLOPT_RETURNTRANSFER => true
            );

            curl_setopt_array($ci, $coneccion);


            curl_exec($ci);
            if (curl_errno($ci)) {
                echo 'Error:' . curl_error($ci);
            } else {
                echo "<script> alert('usuario creado con exito');</script>";
            }
        }

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

    <link rel="stylesheet" href=".//src/style/crear-servicio.css" />
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
                <form class="row g-3" method="POST" id="crear-servicio">
                    <div class="col-md-4">
                        <label for="validationDefault01" class="form-label">Id</label>
                        <input type="text" class="form-control" name="id" value="" placeholder="---" disabled>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Nombre y Apellido del publicante</label>
                        <input type="text" class="form-control" id="nombre_apellido" name="nombre_y_apellido"
                            placeholder="Juan Perez" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault03" class="form-label">Dni</label>
                        <input type="text" class="form-control" id="dni" name="dni" placeholder="30123090" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault03" class="form-label">Nombre de Servicio</label>
                        <input type="text" class="form-control" id="servicio" placeholder="Plomeria"
                            name="nombre_servicio" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefaultUsername" class="form-label">Precio</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">$</span>
                            <input type="text" class="form-control" id="precio" aria-describedby="precio" name="precio"
                                placeholder="2300" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault03" class="form-label">Fecha de creacion de servicio</label>
                        <input type="date" class="form-control" id="fecha" name="fecha">
                    </div>
                    <div class="col-md-9">
                        <label for="validationDefaultUsername" class="form-label">Descripcion del servicio</label>
                        <textarea class="form-control" id="descripcion" rows="6" aria-describedby="inputGroupPrepend2"
                            name="descripcion"></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit" id="btncrear">Crear Servicio</button>
                    </div>
                </form>

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
<script src="./src/scrips/crear-servicio-val.js"></script>


</html>


<?php
}
;
?>