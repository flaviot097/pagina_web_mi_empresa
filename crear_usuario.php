<?php
session_start();
if ($_POST) {
    if ($_POST["usuario"] && $_POST["contraseña"] && $_POST["contraseña"] && $_POST["contraseña-reingrese"] && $_POST["mail"]) {
        if ($_POST["contraseña"] === $_POST["contraseña-reingrese"]) {


            $ci = curl_init();

            $url = "http://localhost:4000/creacion";

            $usuario = $_POST["usuario"];
            $contrasenia = $_POST["contraseña"];
            $mail = $_POST["mail"];
            $dni = $_POST["dni"];

            $array = array(
                'dni' => $dni,
                'usuario' => $usuario,
                'contrasenia' => $contrasenia,
                'email' => $mail
            );

            $datosUsuario = http_build_query($array);

            $coneccion = array(
                CURLOPT_URL => 'http://localhost:4000/creacion',
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
            ;
        } else {
            echo "<script> alert('la contraseña ingresada campo 'contraseña' debe ser igul que el campo 'reingrese contraseña');</script>";
        }
        ;
    } else {
        echo "<script> alert('debe completar los todos los campos');</script>";
    }
    ;
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

    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="section-login-crear">
        <img src="./img/fondo-login.png" alt="deposito de cajas" id="foto-login" />
        <div class="card-login-create" id="crear-usuario">
            <form class="d-flex-col" method="post" role="search" id="session">
                <input class="form-control me-2" id="input-login-usuario" type="search" placeholder="Usuario"
                    name="usuario" aria-label="Search" />
                <input class="form-control me-2" id="input-login-contrasenia" type="search" placeholder="Contraseña"
                    name="contraseña" aria-label="Search" />
                <input class="form-control me-2 contrasenia" id="input-login-contrasenia" type="search"
                    placeholder="Reingrese Contraseña" aria-label="Search" name="contraseña-reingrese" />
                <input class="form-control me-2" id="input-login-email" type="search" placeholder="email"
                    aria-label="Search" name="mail" />
                <input class="form-control me-2 dni" id="input-login-usuario" type="search" placeholder="DNI"
                    aria-label="Search" name="dni" />
                <button class="btn btn-outline-success" type="submit" id="btn-login-crear-usuario">
                    Crear Usuario
                </button>
            </form>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer py-5" id="footer-crear">
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
<script src="./src/scrips/prevenir_envio.js"></script>

</html>