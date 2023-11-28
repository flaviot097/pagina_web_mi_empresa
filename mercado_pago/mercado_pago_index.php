<?php

require_once __DIR__ . "/vendor/autoload.php";

use MercadoPago\Client\MercadoPagoClient;
use MercadoPago\Client\Payment\PaymentClient;
use MercadoPago\Exceptions\MPApiException;
use MercadoPago\MercadoPagoConfig;

$acces_token = "";

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

try {

    // Step 4: Create the request array
    $request = [
        "transaction_amount" => 100,
        "token" => "YOUR_CARD_TOKEN",
        "description" => "description",
        "installments" => 1,
        "payment_method_id" => "visa",
        "payer" => [
            "email" => "user@test.com",
        ]
    ];

    // Step 5: Make the request
    $payment = $client->create($request);
    echo $payment->id;

    // Step 6: Handle exceptions
} catch (MPApiException $e) {
    echo "Status code: " . $e->getApiResponse()->getStatusCode() . "\n";
    echo "Content: " . $e->getApiResponse()->getContent() . "\n";
} catch (\Exception $e) {
    echo $e->getMessage();
}

/*
try {


$request = [
"transaction_amount" => 100,
"token" => "YOUR_CARD_TOKEN",
"description" => "description",
"installments" => 1,
"payment_method_id" => "visa",
"payer" => [
"email" => "user@test.com",
]
];


$payment = $client->create($request);
echo $payment->id;


} catch (MPApiException $e) {
echo "Status code: " . $e->getApiResponse()->getStatusCode() . "\n";
echo "Content: " . $e->getApiResponse()->getContent() . "\n";
} catch (\Exception $e) {
echo $e->getMessage();
}*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar</title>
</head>

<body>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <div class="btn-comprar"></div>
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

</html>