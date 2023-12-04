<?php
session_start();
if ($_POST) {
    if ($_POST["usuario"] && $_POST["contraseña"] && $_POST["contraseña"] && $_POST["contraseña-reingrese"] && $_POST["mail"]) {
        if ($_POST["contraseña"] === $_POST["contraseña-reingrese"]) {

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
            $data_string = json_encode($array);

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt(
                $ch,
                CURLOPT_HTTPHEADER,
                array(


                    'Content-Type: application/json',


                    'Content-Length: ' . strlen($data_string)
                )
            );

            $result = curl_exec($ch);

            curl_close($ch);
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            } else {
                echo "<script> alert('usuario creado con exito');</script>";
                header("http://localhost/la_verdadera/login.php");

            }
            ;
        }
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