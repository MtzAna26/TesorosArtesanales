<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tesoros Artesanales - Pago Pendiente</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/media/tesoroslogo.jpg">
    <!-- All CSS files -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        body {
            background: #f3f4f6;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            width: 100%;
        }
        .container h1 {
            color: #e74c3c;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .container p {
            font-size: 1.1rem;
            color: #333;
            margin-bottom: 15px;
        }
        .logo-container img {
            max-width: 150px;
            margin: 20px 0;
        }
        .btn-return {
            display: inline-block;
            background: linear-gradient(90deg, #a81076, #ca1f94);
            color: #fff;
            padding: 12px 30px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .btn-return:hover {
            background: linear-gradient(90deg, #ca1f94, #a81076);
            transform: scale(1.05);
        }
        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }
            .container h1 {
                font-size: 2rem;
            }
            .container p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>¡Pago Pendiente!</h1>
<p>Tu compra está en proceso y estamos a la espera de la confirmación del pago.</p>
<p>Por favor, revisa tu correo electrónico para obtener más detalles sobre el estado de tu pago.</p>
<p><strong>Tesoros Artesanales</strong> apreciará tu paciencia mientras se completa el proceso.</p>
<p>No te preocupes, si necesitas asistencia, puedes comunicarte con nuestro equipo de soporte y estaremos encantados de ayudarte.</p>
<p>Si deseas, puedes intentar realizar el pago nuevamente o elegir otro método de pago.</p>

        <div class="logo-container">
            <img src="assets/media/tesoroslogo.jpg" alt="Tesoros Artesanales Logo">
        </div>
        <a href="inicio" class="btn-return">Volver al Inicio</a>
    </div>
    <!-- All JS Plugins -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/detalle-producto.js"></script>
</body>
</html>
