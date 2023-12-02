<?php

$ci = curl_init();


$id = $dato['id'];

$url = "http://localhost:4000//inicio/" . $id;
curl_setopt($ci, CURLOPT_URL, $url);

curl_setopt($ci, CURLOPT_CUSTOMREQUEST, "DELETE");

curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);

$respuesta = curl_exec($ci);

if (curl_errno($ci)) {
    $mensaje_error = curl_error($ci);
} else {

    $datosUsuario = json_decode($respuesta, true);
    curl_close($ci);
}
;

?>