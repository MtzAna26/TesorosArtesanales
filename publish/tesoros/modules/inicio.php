<?php
// Incluir archivos de configuración, funciones PHP necesarias, etc.
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
  <meta name="description" content="Tesoros Artesanales">
  <title>TESOROS ARTESANALES</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/media/tesoroslogo.jpg">
  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
  <link rel="stylesheet" href="assets/css/vendor/slick.css">
  <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
  <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>

  <?php require('header.php'); ?>
  <?php require('banner.php'); ?>
  <?php require('categories.php'); ?>
  <?php require('cart.php'); ?>
  <?php require('products.php'); ?>
  <?php require('existent.php'); ?>
  <?php require('footer.php'); ?>

  <!-- Contenido específico de inicio.php -->
  <!--<section id="contenido-inicio">
    <div class="container">
      <h1>Bienvenido a Tesoros Artesanales</h1>
      <p>Este es el contenido específico de la página de inicio. Puedes colocar aquí cualquier cosa que desees mostrar.</p>
    </div>
  </section>-->

  <!-- JavaScript -->
  <script src="assets/js/vendor/jquery.min.js"></script>
  <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
  <script src="assets/js/vendor/slick.min.js"></script>
  <script src="assets/js/app.js"></script>

</body>

</html>
