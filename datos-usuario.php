<?php

use FontLib\Table\Type\post;

session_start();
if (isset($_SESSION["usuario"])) { ?>

    <?php

    if ($_POST) {

        if ($_POST["contraseniaA"] && $_POST["contrasenia"] && $_POST["contraseniaN"] && $_POST["dni"] && $_POST["email"]) {

            if ($_POST["contrasenia"] === $_POST["contraseniaN"]) {
                $user = $_SESSION["usuario"];


                $url = "http://localhost:4000/creacion";
                $contrasenia = $_POST["contraseniaN"];
                $mail = $_POST["email"];
                $dni = $_POST["dni"];

                $array =
                    array(
                        'dni' => $dni,
                        'usuario' => urlencode($user),
                        'contrasenia' => $contrasenia,
                        'email' => $mail
                    )
                ;
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

                echo $result;
                echo "realizando post";

            } else {
                echo "<script>alert('Las contraseñas no coinciden');</script>";
            }
            ;
        }
        ;
    }
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

        <link rel="stylesheet" href="./src/style/usuario.css" />

        <link rel="stylesheet" href="./src/style/tooplate-style.css" />
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
                    <form id="actualizar-usuario" method="POST">
                        <h5 id="texto-dato-usuario">Actualizar usuario</h5>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="<?php echo $_SESSION["usuario"]
                                    ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contraseña Actual</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="contraseniaA">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contraseña Nueva</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="contrasenia">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Reingrese Contraseña Nueva</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="contraseniaN">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">DNI</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="dni">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Ingrese Mail</label>
                            <input type="mail" class="form-control" id="exampleInputPassword1" name="email">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="">
                            <label class="form-check-label" for="exampleCheck1">Acepto termino y condiciones</label>
                        </div>
                        <button type="submit" class="btn btn-primary">actualizar</button>
                    </form>

                    <form style="margin-top: 20px" id="datos-usuario-eliminar">
                        <h5 id="texto-dato-usuario">Eliminar usuario</h5>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="<?php echo $_SESSION["usuario"]
                                    ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Ingrese Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Reingrese Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Acepto termino y condiciones</label>
                        </div>

                        <button type="submit" class="btn btn-primary">Eliminar Cuenta</button>
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
    <script src="./src/scrips/consulta.js"></script>





    </html>


    <?php
}
;
?>