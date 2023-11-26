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
                <h3>Mi Empresa</h3>
                <form>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Introduzca logo</label>
                        <input class="form-control" type="file" id="logo-empresa">
                    </div>
                    <div class="mb-3">
                        <label for="categoria-afip" class="form-label">Categoria Afip</label>
                        <input type="text" class="form-control" id="subtotal" placeholder="ejemplo: C">
                    </div>
                    <div class="mb-3">
                        <label for="razon-social" class="form-label">Razon Social</label>
                        <input type="text" class="form-control" id="razon-social" placeholder="ejemplo: mi empresa.sa">
                    </div>
                    <div class="mb-3">
                        <label for="consicion-iva" class="form-label">Condicion Iva</label>
                        <input type="text" class="form-control" id="consicion-iva"
                            placeholder="ejemplo: responsable inscripto">
                    </div>
                    <div class="mb-3">
                        <label for="domicilio" class="form-label">Domicilio</label>
                        <input type="text" class="form-control" id="domicilio-empresa"
                            placeholder="ejemplo: av.Roca 2342">
                    </div>
                    <div class="mb-3">
                        <label for="fecha-de-emision" class="form-label">Fecha de Emision</label>
                        <input type="text" class="form-control" id="fecha-de-emision"
                            placeholder="ejemplo: responsable inscripto">
                    </div>
                    <div class="mb-3">
                        <label for="Numero-de-venta" class="form-label">Numero de venta</label>
                        <input type="text" class="form-control" id="numero-de-venta"
                            placeholder="ejemplo: 0024-000002120">
                    </div>
                    <div class="mb-3">
                        <label for="cuit" class="form-label">C.U.I.T</label>
                        <input type="text" class="form-control" id="cuit" placeholder="23-3232332-9">
                    </div>
                    <div class="mb-3">
                        <label for="inscripto-ingreso-bruto" class="form-label">Insc. Ingresos Brutos</label>
                        <input type="text" class="form-control" id="inscripto-ingreso-bruto" placeholder="23-3232332-9">
                    </div>
                    <div class="mb-3">
                        <label for="inicio-de-actividades" class="form-label">Inicio de Actividades</label>
                        <input type="date" class="form-control" id="inicio-de-actividades" placeholder="09/12/2018">
                    </div>
                    <div class="mb-3">
                        <label for="fecha-de-vencimiento-de-pago" class="form-label">Fecha de Vencimiento de
                            Pago</label>
                        <input type="date" class="form-control" id="fecha-de-vencimiento-de-pago"
                            placeholder="09/12/2018">
                    </div>
                    <div class="mb-3">
                        <label for="cbu-emisor" class="form-label">CBU</label>
                        <input type="number" class="form-control" id="cbu" placeholder="343049304993049095664">
                    </div>
                    <div class="mb-3">
                        <label for="nombre-de-cliente" class="form-label">Cliente</label>
                        <input type="text" class="form-control" id="nombre-de-cliente" placeholder="ejemplo:juan perez">
                    </div>
                    <div class="mb-3">
                        <label for="domicilio-cliente" class="form-label">Domicilio Cliente</label>
                        <input type="text" class="form-control" id="domicilio-cliente"
                            placeholder="ejemplo: av.Roca 2342">
                    </div>
                    <div class="mb-3">
                        <label for="condicion-de-venta" class="form-label">Condicion de Venta</label>
                        <input type="text" class="form-control" id="condicion-de-venta"
                            placeholder="ejemplo: a cuenta corriente">
                    </div>
                    <div class="mb-3">
                        <label for="cuit" class="form-label">C.U.I.T</label>
                        <input type="text" class="form-control" id="cuit" placeholder="ejemplo: 30-3232323-9">
                    </div>
                    <div class="mb-3">
                        <label for="condicion-de-iva-cliente" class="form-label">Condicion IVA Cliente</label>
                        <input type="text" class="form-control" id="condicion-de-iva-cliente"
                            placeholder="ejemplo: responsable inscripto">
                    </div>
                    <div class="mb-3">
                        <label for="remito" class="form-label">Remito</label>
                        <input type="text" class="form-control" id="remito">
                    </div>
                    <div class="mb-3">
                        <label for="codigo" class="form-label">Codigo de Servicio</label>
                        <input type="number" class="form-control" id="codigo-de-servicio"
                            placeholder="ejemplo: 43546547234">
                    </div>
                    <div class="mb-3">
                        <label for="nombre-de-servicio" class="form-label">Nombre de Servicio Prestado</label>
                        <input type="text" class="form-control" id="nombre-de-servicio" placeholder="ejemplo: plomeria">
                    </div>
                    <div class="mb-3">
                        <label for="cantidad-servicios" class="form-label">Cantidad de Servicios</label>
                        <input type="number" class="form-control" id="cantidad-servicios" placeholder="ejemplo: 13">
                    </div>
                    <div class="mb-3">
                        <label for="unidad-de-medida" class="form-label">Unidad de Medida</label>
                        <input type="text" class="form-control" id="unidad-de-medida" placeholder="ejemplo: unidades">
                    </div>
                    <div class="mb-3">
                        <label for="precio-unitario" class="form-label">Precio Unitario</label>
                        <input type="number" class="form-control" id="presio-unitario" placeholder="ejemplo: 100.00">
                    </div>
                    <div class="mb-3">
                        <label for="bonificacion" class="form-label">Bonificacion</label>
                        <input type="number" class="form-control" id="bonificacion" placeholder="ejemplo: 0">
                    </div>
                    <div class="mb-3">
                        <label for="importe" class="form-label">Importe</label>
                        <input type="number" class="form-control" id="importe" placeholder="ejemplo: 100.00">
                    </div>
                    <div class="mb-3">
                        <label for="iva-total" class="form-label">IVA(%)</label>
                        <input type="text" class="form-control" id="iva-total" placeholder="ejemplo: 21" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="subtotal" class="form-label">Subtotal</label>
                        <input type="number" class="form-control" id="subtotal" placeholder="ejemplo: 121.00">
                    </div>
                    <a class="btn btn-primary card-carrito" name="" id="crar-factura-pdf" href="factura-pdf.php">Crear
                        Factura Pdf</a>
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


</html>


<?php
}
;
?>