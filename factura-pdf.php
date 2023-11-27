<?php

ob_start();


?>
<img id="factura-imagen" src="http://localhost/la_verdadera/img/factura-1.jpg" alt=""
        style="width: 90%; margin-left: 5%; z-index: 0;  position: absolute;">
<div id="logo-empresa" style=" position: absolute; margin-left: 310px; margin-top: 130px; width:360px;
        height:170px; background-color: white; z-index: 1;  "><b
                style="text-align: center; font-size: 60px; margin-left: 15px; ">Mi Empresa</b></div>

<div id="categoria-afip" style=" position: absolute; margin-left: 47%; margin-top: 105px; width:115px;
        height:115px; background-color: white; z-index: 1;  "><b
                style="text-align: center; font-size: 105px; margin-left: 15px; "><?php echo $_POST['categoria-afip']; ?></b>
</div>
<div id="fecha-emision" style=" position: absolute; margin-left: 77%; margin-top: 219px; width:160px;
        height:30px; background-color: white; z-index: 1; text-align: center; font-size: 25px">
        <?php echo $_POST['razon-social']; ?></div>
<div id="punto-de-venta" style="position: absolute; margin-left: 77%; margin-top: 263px; width:230px;
        height:30px; background-color: white; z-index: 1;text-align: center;font-size: 25px">
        <?php echo $_POST['numero-de-venta']; ?></div>
<div id="cuit" style="position: absolute; margin-left: 77%; margin-top: 330px; width:270px;
        height:30px; background-color: white; z-index: 1;text-align: center;font-size: 25px">
        <?php echo $_POST['cuit']; ?></div>
<div id="insc-ingresos-brutos" style="position: absolute; margin-left: 77%; margin-top: 375px; width:270px;
        height:30px; background-color: white; z-index: 1;text-align: center;font-size: 25px">
        <?php echo $_POST['inscripto-ingreso-bruto']; ?></div>
<div id="inicio-de-actividades" style="position: absolute; margin-left: 77%; margin-top: 420px; width:270px;
        height:30px; background-color: white; z-index: 1;text-align: center;font-size: 25px">
        <?php echo $_POST['inicio-de-actividades']; ?></div>
<div id="razon-social" style=" position: absolute; margin-left: 375px; margin-top: 300px; width: 270px;
        height:40px; background-color: white; z-index: 1;text-align: center; font-size: 25px ">
        <?php echo $_POST['cuit']; ?></div>
<div id="condicion-iva" style=" position: absolute; margin-left: 395px; margin-top: 345px; width: 305px;
        height:40px; background-color: white; z-index: 1; text-align: center; font-size: 25px">
        <?php echo $_POST['condiciones-iva']; ?></div>
<div id="domicilio" style=" position: absolute; margin-left: 310px; margin-top: 390px; width: 550px;
        height:40px; background-color: white; z-index: 1; text-align: center; font-size: 25px">
        <?php echo $_POST['domicilio']; ?></div>
<div id="fecha-vencimiento" style=" position: absolute; margin-left: 1010px; margin-top: 485px; width: 550px;
        height:40px; background-color: white; z-index: 1; text-align: center; font-size: 25px">
        <?php echo $_POST['fecha-de-vencimiento-de-pago']; ?></div>
<div id="cbu-emisor" style=" position: absolute; margin-left: 850px; margin-top: 555px; width: 550px;
        height:40px; background-color: white; z-index: 1; text-align: center;font-size: 25px ">
        <?php echo $_POST['cbu-emisor']; ?>
</div>
<div id="nombre-comprador" style=" position: absolute; margin-left: 310px; margin-top: 640px; width: 270px;
        height:40px; background-color: white; z-index: 1; text-align: center; font-size: 25px">
        <?php echo $_POST['nombre-de-cliente']; ?></div>
<div id="domicilio-comprador" style=" position: absolute; margin-left: 310px; margin-top: 690px; width: 340px;
        height:40px; background-color: white; z-index: 1; text-align: center; font-size: 25px">
        <?php echo $_POST['domicilio-cliente']; ?></div>
<div id="condicion-de-venta" style=" position: absolute; margin-left: 460px; margin-top: 745px; width: 340px;
        height:40px; background-color: white; z-index: 1; text-align: center;font-size: 25px ">
        <?php echo $_POST['condicion-de-venta']; ?></div>
<div id="cuit" style=" position: absolute; margin-left: 1255px; margin-top: 640px; width: 270px;
        height:40px; background-color: white; z-index: 1; text-align: center; font-size: 25px">
        <?php echo $_POST['cuit-cliente']; ?></div>
<div id="condicion-iva-comprador" style=" position: absolute; margin-left: 1400px; margin-top: 690px; width: 340px;
        height:40px; background-color: white; z-index: 1; text-align: center; font-size: 25px">
        <?php echo $_POST['condicion-de-iva-cliente']; ?></div>
<div id="remito" style=" position: absolute; margin-left: 1255px; margin-top: 745px; width: 270px;
        height:40px; background-color: white; z-index: 1; text-align: center; font-size: 25px">
        <?php echo $_POST['remito']; ?></div>
<div id="codigo" style=" position: absolute; margin-left: 120px; margin-top: 860px; width: 170px;
        height:40px; background-color: white; z-index: 1; text-align: center; font-size: 25px">
        <?php echo $_POST['remito']; ?></div>
<div id="servicios-prestados" style=" position: absolute; margin-left: 295px; margin-top: 860px; width: 430px;
        height:40px; background-color: white; z-index: 1; text-align: center; font-size: 25px">
        <?php echo $_POST['nombre-de-servicio']; ?></div>
<div id="unidad" style=" position: absolute; margin-left: 740px; margin-top: 860px; width: 120px;
        height:40px; background-color: white; z-index: 1; text-align: center;font-size: 25px ">
        <?php echo $_POST['cantidad-servicios']; ?></div>
<div id="unidad-medida" style=" position: absolute; margin-left: 890px; margin-top: 860px; width: 120px;
        height:40px; background-color: white; z-index: 1; text-align: center; font-size: 25px">
        <?php echo $_POST['unidad-de-medida']; ?></div>
<div id="precio-unitario" style=" position: absolute; margin-left: 1050px; margin-top: 860px; width: 165px;
        height:40px; background-color: white; z-index: 1; text-align: center; font-size: 25px">
        <?php echo $_POST['precio-unitario']; ?></div>
<div id="bonificacion" style=" position: absolute; margin-left: 1220px; margin-top: 860px; width: 120px;
        height:40px; background-color: white; z-index: 1; text-align: center;font-size: 25px ">
        <?php echo $_POST['bonificacion']; ?></div>
<div id="importe" style=" position: absolute; margin-left: 1350px; margin-top: 860px; width: 175px;
        height:40px; background-color: white; z-index: 1; text-align: center; font-size: 25px">
        <?php echo $_POST['importe']; ?></div>
<!-- <div id="iva" style=" position: absolute; margin-left: 1530px; margin-top: 860px; width: 95px;
        height:40px; background-color: gwhite; z-index: 1; text-align: center;font-size: 25px ">marcaedads.sa</div> -->
<div id="subtotal" style=" position: absolute; margin-left: 1630px; margin-top: 860px; width: 170px;
        height:40px; background-color: white; z-index: 1; text-align: center; font-size: 25px">
        <?php echo $_POST['subtotal']; ?></div>


<?php

$html_pdf = ob_get_clean();

//echo $html_pdf;

require_once "../la_verdadera/libreria-dompdf/dompdf/autoload.inc.php";



use Dompdf\Dompdf;

$nuevoDompdf = new Dompdf();

$abilitarImg = $nuevoDompdf->getOptions();
$abilitarImg->set(array("isRemoteEnabled" => true));
$nuevoDompdf->setOptions($abilitarImg);

$nuevoDompdf->setPaper(array(0, 0, 1510, 774));



$nuevoDompdf->loadHtml($html_pdf);

//$nuevoDompdf->setPaper("letter");
//$nuevoDompdf->setPaper("A4", "landscape");

$nuevoDompdf->render();
$nuevoDompdf->stream("factura.pdf", array("Attachment" => false));


?>