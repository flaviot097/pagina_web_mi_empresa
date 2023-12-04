<?php

require_once __DIR__ . "/vendor/autoload.php";

use MercadoPago\Client\MercadoPagoClient;
use MercadoPago\Client\Payment\PaymentClient;
use MercadoPago\Exceptions\MPApiException;
use MercadoPago\MercadoPagoConfig;

$acces_token = "TEST-8976941195160076-042717-97cf6c6a8346971cf607925f5c5004c8-104993";
$otrotoken = "APP_URS-7751344019252626-071513-898c1e8f0fc1d830847e7458aa6b6c75-1161337255";
MercadoPagoConfig::setAccessToken($acces_token);

$cliente = new PaymentClient();

$preference = new \MercadoPago\Resources\Preference();

$preference->back_urls = array(
    "succes" => "http://localhost/la_verdadera/compra-exitosa.php",
    "failure" => "http://localhost/la_verdadera/compra-rechazada.php",
    "pending" => "http://localhost/la_verdadera/compra-fallida.php",
);


///crear servicio a pagar

$servicios = [];
$servicio = new \MercadoPago\Resources\Preference\Item();

$servicio->title = "plomeria";
$servicio->quantity = 1;
$servicio->description = "sadas";
$servicio->unit_price = 34000;

array_push($servicios, $servicio);

$preference->items = $servicios;


/// info del pagador
$client = new PaymentClient();


///metodos de pago

$payment_methods = array(
    "excluded_payment_methods" => [],
    "excluded_payment_types" => [],
    "installments" => 12
);

$preference->payment_methods = $payment_methods;

$preference->payment_methods = $payment_methods;

$preference->notification_url = 'https://www.your-site.com/ipn';
$preference->statement_descriptor = 'MEUNEGOCIO';
$preference->external_reference = 'Reference_1234';
$preference->expires = true;
$preference->expiration_date_from = '2016-02-01T12:00:00.000-04:00';
$preference->expiration_date_to = '2016-02-28T12:00:00.000-04:00';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar</title>
</head>

<body>
    <div class="btn-comprar"></div>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script>
    const public_key = "TEST-9947ef24-67a9-41bb-acaa-58e9acc208f7"
    const mp = new MercadoPago(public_key, {
        locale: "es-AR"
    });
    const checkout = mp.checkout({
        preference: {
            id: 'YOUR_PREFERENCE_ID'
        },
        render: {
            container: ".btn-comprar",
            label: "Pagar",
        }
    })
    </script>
</body>

<?php

?>