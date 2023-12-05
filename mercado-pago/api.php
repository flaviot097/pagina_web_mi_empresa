<?php

require_once "./vendor/autoload.php";

$access_token = "TEST-4856937283312614-120322-898191d6c6f3d59abac40992148cab9e-185957367";

MercadoPago\SDK::setAccessToken($access_token);

$preference = new MercadoPago\Preference();
$preference->back_urls = array(
    "succes" => "http://localhost/mercado-pago/compra-exitosa.php",
    "failure" => "http://localhost/mercado-pago/compra-rechazada.php",
    "pending" => "http://localhost/mercado-pago/compra-fallida.php",
);

$servicios = [];
$servicio = new MercadoPago\Item();


$servicio->title = "plomeria";
$servicio->quantity = 2;
$servicio->unit_price = 23755;

array_push($servicios, $servicio);

$preference->items = $servicios;

$preference->save();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/style/pasarela.css">
</head>

<body>
    <input type="checkbox" class="form-check-input" id="check">
    <div class="btn-comprar"></div>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script>
        const public_key = "TEST-611e6ff4-a634-4917-9e1d-25ad68d91bf5"
        const mp = new MercadoPago(public_key, {
            locale: "es-AR"
        });
        const checkout = mp.checkout({
            preference: {
                id: '<?php echo $preference->id; ?>'
            },
            render: {
                container: ".btn-comprar",
                label: "Pagar",
            }
        })
    </script>
</body>
$data = json_decode($_POST['arr'], true);
print_r($data[0]);

</html>