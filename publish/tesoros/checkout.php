<?php
session_start();

// Guardar el carrito y el total en la sesión al llegar desde cart.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['cart']) && isset($_POST['cartTotal'])) {
        $_SESSION['cart'] = json_decode($_POST['cart'], true);
        $_SESSION['cartTotal'] = $_POST['cartTotal'];
    }
}

function calculateSubtotal()
{
    $subtotal = 0;
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $product) {
            $subtotal += $product['price'] * $product['quantity'];
        }
    }
    return $subtotal;
}

function calculateShipping()
{
    $shipping = 0;
    return $shipping;
}

function calculateTotal()
{
    return calculateSubtotal() + calculateShipping();
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tesoros Artesanales - Verificar</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/media/tesoroslogo.jpg">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        /* Estilos existentes */
    </style>
    <script src="modules/checkout.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <?php include 'header.php'; ?>

    <section class="page-start-banner">
        <div class="container">
            <h2 class="title">Checkout</h2>
        </div>
    </section>

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Detalles de la Compra</h3>
                        <div class="cart-items">
                            <?php
                            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $product) {
                                    echo '
                                        <div class="cart-item mb-3 pb-3 border-bottom">
                                            <div class="row align-items-center">
                                                <div class="col-md-3">
                                                    <img src="' . $product['image'] . '" class="img-fluid rounded" alt="' . $product['name'] . '">
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="mb-2">' . $product['name'] . '</h5>
                                                    <p class="mb-1">Precio: $' . $product['price'] . '</p>
                                                    <p class="mb-0">Cantidad: ' . $product['quantity'] . '</p>
                                                </div>
                                                <div class="col-md-3 text-end">
                                                    <p class="font-weight-bold mb-0">Total: $' . ($product['price'] * $product['quantity']) . '</p>
                                                </div>
                                            </div>
                                        </div>';
                                }
                            } else {
                                echo '<p class="text-muted">No hay productos en el carrito.</p>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div id="vue-content-checkout" class="col-lg-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Resumen de la Compra</h3>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal:</span>
                            <span>${{ subtotal }}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Envío:</span>
                            <span>${{ shipping }}</span>
                        </div>
                        <div class="d-flex justify-content-between font-weight-bold mt-3">
                            <span>Total:</span>
                            <span>${{ total }}</span>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm shipping-card">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Información de Envío</h3>
                        <form id="shipping-form" @submit.prevent="mostrarMetodoPago">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" v-model="datosOrden.NOMBRE" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="apellidos" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control" id="apellidos" v-model="datosOrden.APELLIDOS" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" v-model="datosOrden.EMAIL" required>
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" id="telefono" v-model="datosOrden.TELEFONO" required>
                            </div>
                            <div class="mb-3">
                                <label for="pais" class="form-label">País/Región</label>
                                <input type="text" class="form-control" id="pais" v-model="datosOrden.PAIS" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="estado" class="form-label">Estado</label>
                                    <input type="text" class="form-control" id="estado" v-model="datosOrden.ESTADO" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="municipio" class="form-label">Ciudad</label>
                                    <input type="text" class="form-control" id="municipio" v-model="datosOrden.MUNICIPIO" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="calle" class="form-label">Calle</label>
                                <input type="text" class="form-control" id="calle" v-model="datosOrden.CALLE" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="num_exterior" class="form-label">Num. Exterior</label>
                                    <input type="text" class="form-control" id="num_exterior" v-model="datosOrden.NUM_EXTERIOR" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="codigo_postal" class="form-label">Código Postal</label>
                                    <input type="text" class="form-control" id="codigo_postal" v-model="datosOrden.CODIGO_POSTAL" required>
                                </div>
                                <div class="mb-3">
                                    <label for="notas_cliente">Notas para el vendedor</label>
                                    <textarea class="form-control" id="notas_cliente" v-model="datosOrden.NOTAS_CLIENTE"></textarea>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Seleccionar Método de Pago</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card shadow-sm payment-methods" v-if="mostrarPago">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Método de Pago</h3>
                        <form @submit.prevent="enviarOrden">
                            <div class="radio-panel">
                                <label>
                                    <input type="radio" name="payment-method" value="credit-card" v-model="datosOrden.METODO_PAGO" required>
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Visa.svg" alt="Visa">
                                    Tarjeta de Crédito/Débito
                                </label>
                                <div class="radio-panel-content" v-if="datosOrden.METODO_PAGO === 'credit-card'">
                                    <div class="mb-3">
                                        <label for="card-number" class="form-label">Número de Tarjeta</label>
                                        <input type="text" class="form-control" id="card-number" v-model="datosOrden.NUM_TARJETA" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="expiry-date" class="form-label">Fecha de Expiración</label>
                                            <input type="text" class="form-control" id="expiry-date" v-model="datosOrden.FECHA_EXPIRACION" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="cvv" class="form-label">CVV</label>
                                            <input type="text" class="form-control" id="cvv" v-model="datosOrden.CVV" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="radio-panel">
                                <label>
                                    <input type="radio" name="payment-method" value="paypal" v-model="datosOrden.METODO_PAGO" required>
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal">
                                    PayPal
                                </label>
                                <div class="radio-panel-content" v-if="datosOrden.METODO_PAGO === 'paypal'">
                                    <p>Será redirigido a PayPal para completar su compra de forma segura.</p>
                                </div>
                            </div>

                            <div class="radio-panel">
                                <label>
                                    <input type="radio" name="payment-method" value="mercado-pago" v-model="datosOrden.METODO_PAGO" required>
                                    <img src="https://img.icons8.com/color/48/000000/mercado-pago.png" alt="Mercado Pago">
                                    Mercado Pago
                                </label>
                                <div class="radio-panel-content" v-if="datosOrden.METODO_PAGO === 'mercado-pago'">
                                    <p>Será redirigido a Mercado Pago para completar su compra de forma segura.</p>
                                </div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Confirmar y Pagar</button>
                            </div>
                        </form>
                    </div>
                </div>



                </form>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) : ?>
                // Imprimir el carrito en la consola
                console.log("Carrito de compras:", <?php echo json_encode($_SESSION['cart']); ?>);
            <?php endif; ?>
        });

        // Pasar los valores calculados desde PHP a JavaScript
        const subtotal = <?php echo json_encode(calculateSubtotal()); ?>;
        const shipping = <?php echo json_encode(calculateShipping()); ?>;
        const total = <?php echo json_encode(calculateTotal()); ?>;

        new Vue({
            el: '#vue-content-checkout',
            data: {
                subtotal: subtotal,
                shipping: shipping,
                total: total,
                mostrarPago: false,
                datosOrden: {
                    NOMBRE: '',
                    APELLIDOS: '',
                    EMAIL: '',
                    TELEFONO: '',
                    PAIS: '',
                    ESTADO: '',
                    MUNICIPIO: '',
                    CALLE: '',
                    NUM_EXTERIOR: '',
                    CODIGO_POSTAL: '',
                    METODO_PAGO: '',
                    NUM_TARJETA: '',
                    FECHA_EXPIRACION: '',
                    CVV: '',
                    NOTAS_CLIENTE: ''
                }
            },
            methods: {
                mostrarMetodoPago() {
                    this.mostrarPago = true;
                },
                enviarOrden() {
                    // Enviar la orden al servidor
                }
            }
        });
    </script>

    <?php include 'cart.php'; ?>
    <?php include 'footer.php'; ?>

    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>