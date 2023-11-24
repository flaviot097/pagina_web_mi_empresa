<?php
session_start();

if ($_POST) {
    if ($_POST["usuario"] == "flavio" && $_POST["contraseña"] == "1234") {
        echo "biembenido, estas logeado";
        $_SESSION["usuario"] = $_POST["usuario"];

        header("location:index.php");

    } else {
        echo "<script> alert('no te crees que me voy a dar cuenta de tu truco, este usuario o contraseña es invalido');</script>";
    }
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

    <link rel="stylesheet" href="./src/style/tooplate-style.css" />
</head>

<body class="cuerpo">
    <!-- MENU -->
    <?php
    require_once("./header.php"); ?>

    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="section-login">
        <img src="./img/fondo-login.png" alt="deposito de cajas" id="foto-login" />
        <div id="card-login">
            <div class="card-login-login" style="width: 18rem" id="logear-usuario">
                <form class="d-flex-col" method="Post" action="login.php" role="search" id="session">
                    <input class="form-control me-2" id="input-login-usuario" type="search" placeholder="Usuario"
                        aria-label="Search" name="usuario" />
                    <input class="form-control me-2" id="input-login-contrasenia" type="search" placeholder="Contraseña"
                        aria-label="Search" name="contraseña" />
                    <button class="btn btn-outline-success" type="submit" id="btn-login-iniciar-sesion">
                        Iniciar Sesion
                    </button>
                    <div id="btn-crear-usuario">Crear Usuario</div>
                </form>
            </div>
            <div class="card-login-create" id="crear-usuario">
                <form class="d-flex-col" method="post" action="login.php" role="search" id="session">
                    <input class="form-control me-2" id="input-login-usuario" type="search" placeholder="Usuario"
                        name="usuario" aria-label="Search" />
                    <input class="form-control me-2" id="input-login-contrasenia" type="search" placeholder="Contraseña"
                        name="contraseña" aria-label="Search" />
                    <input class="form-control me-2" id="input-login-contrasenia" type="search"
                        placeholder="Reingrese Contraseña" aria-label="Search" name="contraseña" />
                    <input class="form-control me-2" id="input-login-email" type="search" placeholder="email"
                        aria-label="Search" name="mail" />
                    <p>
                        <select id="tipo-de-usuario" name="tipo-de-usuario">
                            <option value="-">---</option>
                            <option value="proveedor">Proveedor de servicios</option>
                            <option value="usuario">Usuario</option>
                        </select>
                    </p>
                    <button class="btn btn-outline-success" type="submit" id="btn-login-crear-usuario">
                        Crear Usuario
                    </button>
                </form>
            </div>
        </div>
    </section>
    <?php echo "hola buen dia";
    ?>

    <!-- FOOTER -->
    <footer class="footer py-5" id="footer-login">
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

<script src="./src/scrips/abilitar_crear_usuario.js"></script>
<script src="./src/scrips/modo_oscuro.js"></script>

</html>