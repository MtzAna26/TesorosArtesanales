<?php
$PRODUCTOS = file_get_contents($global_apiserver . '/public/ecommerce/buscar/', false, $context_post);
$PRODUCTOS = json_decode($PRODUCTOS, true)["data"];
echo "<script>
		let products = JSON.parse('" . json_encode($PRODUCTOS) . "');
	</script>";
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Tesoros Artesanales">
  <title>TESOROS ARTESANALES</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/media/tesoroslogo.jpg">
  <!-- All CSS files -->
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

  <?php
  if (!empty($_REQUEST["view"]) && file_exists("modules/" . $_REQUEST["view"] . ".php")) {
    include_once "modules/" . $_REQUEST["view"] . ".php";
  } else {
    echo "";
    //include_once "modules/inicio.php";
  }
  ?>

  <!-- JavaScript -->
  <script src="assets/js/vendor/jquery.min.js"></script>
  <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
  <script src="assets/js/vendor/slick.min.js"></script>
  <script src="assets/js/app.js"></script>


</body>

</html>
