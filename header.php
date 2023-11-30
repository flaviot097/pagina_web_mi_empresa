<?php

?><nav class="navbar navbar-expand-sm navbar-light">
    <div class="container">
        <a class="navbar-brand" href="index.php"><i class="uil uil-user" id="logo-mi-empresa">Mi empresa</i>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a href="servicios.php" class="nav-link"><span data-hover="todos los servicios" id="cambiar">Todos
                            los servicios</span></a>
                </li>
                <li class="nav-item">
                    <a href="contacto.php" class="nav-link"><span data-hover="Contacto"
                            id="cambiar2">Contacto</span></a>
                </li>
                <li class="nav-item" id="foto_carrito">
                    <a href="carrito.php" class="nav-link"><span data-hover="Carrito" id="cambiar3"><img
                                src="./img/carrito3.png" alt="carrito" /></span></a>
                </li>
                <li class="nav-item" id="busqueda">
                    <form class="d-flex" role="search" id="search-form">
                        <input class="form-control me-2" id="imput_search" type="search" placeholder="¿que buscas?"
                            aria-label="Search" />
                        <button class="btn btn-outline-success" type="button" id="btn_search">
                            buscar
                        </button>
                    </form>
                </li>
                <li class="nav-item">
                    <?php if (!isset($_SESSION["usuario"])) { ?>
                    <a href="login.php" class="nav-link"><span data-hover="Iniciar Sesion" id="cambiar5">
                            <?php echo "Iniciar Sesion";
                    } else {
                        ?>
                            <a href="cerrar_sesion.php" class="nav-link"><span data-hover="Salir" id="cambiar5"><?php
                                echo $_SESSION["usuario"]
                                    ?>
                                </span> <?php }
                    ;

                    ?></a>
                            <?php if (isset($_SESSION["usuario"])) { ?>
                </li>
                <li class="nav-item">
                    <a href="datos-servicios.php" class="nav-link"><span data-hover="<?php echo $_SESSION["usuario"] ?>"
                            id="cambiar5">menu
                        </span>
                    </a>
                </li><?php
                            } ?>
            </ul>

            <ul class="navbar-nav ml-lg-auto">
                <div class="ml-lg-4">
                    <div class="color-mode d-lg-flex justify-content-center align-items-center">
                        <button class="color" id="boton_para_tema_oscuro"></button>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>