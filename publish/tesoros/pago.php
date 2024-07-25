<?php
session_start();

if (!isset($_SESSION['cart']) || !isset($_SESSION['cartTotal'])) {
    // Redirigir a la página de checkout si no hay datos del carrito
    header('Location: checkout.php');
    exit();
}

$cart = $_SESSION['cart'];
$cartTotal = $_SESSION['cartTotal'];

// Incluir el SDK de Mercado Pago
require '/mnt/volume_sfo3_clever_dev/anamart/clevercloud/sitio/functions/vendor/autoload.php';

// Inicializar el SDK de Mercado Pago con tus credenciales de prueba
MercadoPago\SDK::setAccessToken('TEST-7431252399385959-071915-b9943ce6400d3aed248d5c5003c052c3-761591827');

// Crear un objeto de preferencia
$preference = new MercadoPago\Preference();
$array_productos_mercadopago = array();

// Agregar productos al objeto de preferencia
foreach ($cart as $item) {
    $producto = new MercadoPago\Item();
    $producto->title = $item['name'];
    $producto->quantity = $item['quantity'];
    $producto->unit_price = $item['price'];
    array_push($array_productos_mercadopago, $producto);
}

// Asignar los productos a la preferencia
$preference->items = $array_productos_mercadopago;
$preference->back_urls = [
    "success" => "https://dev.clevertechnology.com.mx/dev/anamart/clevercloud/publish/tesoros/pago-exitoso",
    "failure" => "https://dev.clevertechnology.com.mx/dev/anamart/clevercloud/publish/tesoros/pago-fallido",
    "pending" => "https://dev.clevertechnology.com.mx/dev/anamart/clevercloud/publish/tesoros/pago-pendiente"
];

$preference->auto_return = "approved";

// Configurar el pagador de prueba (comprador)
$payer = new MercadoPago\Payer();
$payer->email = ""; // Reemplaza con el correo electrónico de la cuenta de prueba del comprador
$preference->payer = $payer;

$preference->save();
?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tesoros Artesanales - Confirmación de Pago</title>
   <!-- Favicon -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/media/tesoroslogo.jpg">
   <!-- All CSS files -->
   <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
   <link rel="stylesheet" href="assets/css/vendor/slick.css">
   <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
   <link rel="stylesheet" href="assets/css/app.css">
   <style>
       .page-start-banner {
           background-color: #f8f8f8;
           padding: 20px 0;
           text-align: center;
       }

       .order-details-section {
           padding: 60px 0;
       }

       .order-details-wrapper {
           max-width: 800px;
           margin: 0 auto;
           padding: 20px;
           border: 1px solid #ddd;
           border-radius: 8px;
           background-color: #fff;
       }

       .order-info p {
           margin: 0 0 10px;
       }

       .order-items table {
           width: 100%;
           margin-top: 20px;
           border-collapse: collapse;
       }

       .order-items th, .order-items td {
           padding: 10px;
           border: 1px solid #ddd;
           text-align: left;
       }

       .btn-place-order {
           display: inline-block;
           padding: 10px 20px;
           background-color: #5cb85c;
           color: #fff;
           text-align: center;
           text-decoration: none;
           border-radius: 5px;
       }
   </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <section class="page-start-banner">
        <div class="container">
            <h2 class="title">Confirmación de Pago</h2>
        </div>
    </section>
    <section class="order-details-section">
        <div class="container">
            <div class="order-details-wrapper">
                <div class="order-info">
                
                    <p><strong>Fecha:</strong> <?= date("d/m/Y"); ?></p>
                    <p><strong>Total a pagar:</strong> $<?= htmlspecialchars($cartTotal); ?></p>
                </div>
                <div class="order-items">
                    <h3 class="text-center mb-4">Detalles del Pedido</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cart as $item) : ?>
                                <tr>
                                    <td><?= htmlspecialchars($item['name']); ?></td>
                                    <td><?= htmlspecialchars($item['quantity']); ?></td>
                                    <td>$<?= htmlspecialchars($item['price']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="text-right mt-4">
                    <a href="<?= $preference->init_point; ?>" target="_blank" class="btn-place-order">Pagar con Mercado Pago</a>
                </div>
            </div>
        </div>
    </section>
    <?php include 'cart.php'; ?>
    <?php include 'footer.php'; ?>
    
  <script src="assets/js/vendor/jquery.min.js"></script>
  <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
  <script src="assets/js/vendor/slick.min.js"></script>
  <script src="assets/js/app.js"></script>
</body>
</html>
