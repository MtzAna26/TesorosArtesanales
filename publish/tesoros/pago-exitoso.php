<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tesoros Artesanales - Pago Exitoso</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/media/tesoroslogo.jpg">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: #f3f4f6;
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 0;
            overflow: hidden;
        }

        .container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 1;
        }

        h1 {
            color: #a81076;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        p {
            color: #333;
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo-container img {
            max-width: 200px; /* Tamaño aumentado */
            height: auto;
        }

        .btn-return {
            display: inline-block;
            padding: 12px 25px;
            font-size: 1.1rem;
            color: #fff;
            background: linear-gradient(90deg, #a81076, #ca1f94);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
            margin-top: 20px;
        }

        .btn-return:hover {
            background: linear-gradient(90deg, #ca1f94, #a81076);
            transform: scale(1.05);
        }

        .confetti {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>¡Pago Exitoso!</h1>
        <p>Gracias por tu compra. Tu orden ha sido procesada exitosamente.</p>
    <p>Tu apoyo marca la diferencia. Con cada compra, estás ayudando a los artesanos locales a mantener viva su tradición.</p>
    <p><strong>Tesoros Artesanales</strong> te agradece por ser parte de esta causa.</p>
        <div class="logo-container">
            <img src="assets/media/tesoroslogo.jpg" alt="Tesoros Artesanales Logo">
        </div>
        <a href="inicio.php" class="btn-return">Volver al Inicio</a>
    </div>
    <canvas id="confetti" class="confetti"></canvas>

    <script src="assets/js/confetti.js"></script>
</body>
</html>
