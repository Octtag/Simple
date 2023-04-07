<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
// Agrega credenciales
MercadoPago\SDK::setAccessToken('TEST-477088402162354-040600-92045429b3a0c2c4d95b699d22f4aa4e-12880923');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Evento';
$item->quantity = 1;
$item->unit_price = 3500;
$item->currency_id = "ARS";

$preference->items = array($item);
$preference->save();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    // SDK MercadoPago.js
    <script src="https://sdk.mercadopago.com/js/v2"></script>
</head>
<body>
    <h3>Mercado Pago</h3>
    <div class="checkout-btn"></div>

    <script>
        const mp = new MercadoPago('TEST-9915d806-a09d-4ed7-b2cd-a36663f4f5fa', {
            locale: "es-AR"
        });

        mp.checkout({
            preference: {
                id:'<?php echo $preference->id; ?>'
            },
            render: {
                container: '.checkout-btn',
                label:'Pagar con MP'
            }
        });
    </script>
    
</body>
</html>