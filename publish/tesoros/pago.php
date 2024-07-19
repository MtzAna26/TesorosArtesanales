<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar Orden</title>
</head>
<body>
    <?php
    // Aquí incluirías el código para interactuar con la API de MercadoPago y procesar el pago
    $orden_id = $_GET['orden'];
    
    // Aquí llamas a la API de MercadoPago y obtienes la respuesta sobre el estado del pago
    // Dependiendo de la respuesta, rediriges a las páginas correspondientes
    $estado_pago = "exitoso"; // Esto es solo un ejemplo. Debería obtenerse de la respuesta de MercadoPago
    
    if ($estado_pago == "exitoso") {
        header("Location: pago-exitoso.php");
    } elseif ($estado_pago == "fallido") {
        header("Location: pago-fallido.php");
    } else {
        header("Location: pago-pendiente.php");
    }
    ?>
</body>
</html>
