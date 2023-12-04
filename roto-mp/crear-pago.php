<?php

require_once './vendor/autoload.php';

use MercadoPago\Client\Payment\PaymentClient;
use MercadoPago\Exceptions\MPApiException;
use MercadoPago\MercadoPagoConfig;

// Step 2: Set production or sandbox access token
MercadoPagoConfig::setAccessToken("");

// Step 3: Initialize the API client
$client = new PaymentClient();

try {

    // Step 4: Create the request array
    $request = [
        "transaction_amount" => 100,
        "token" => "APP_USR-7751344019252626-071513-898c1e8f0fc1d830847e7458aa6b6c75-1161337255",
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
    <div id="wallet_container"></div>

    <script>
    const mp = new MercadoPago("TEST-9947ef24-67a9-41bb-acaa-58e9acc208f7", {
        locale: 'es-AR'
    });

    mp.bricks().create("wallet", "wallet_container", {
        initialization: {
            preferenceId: "id",
        },
    });
    </script>

</body>
php echo $preference->id;



</html>