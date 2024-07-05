<!--Requeridos para clever cloud-->
<?php
  require '.../../functions/apicalls.php';
  require '.../../functions/apiserver.php';
  $token = 'af9365d40a03c94852cb8241818b7ab4c16';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
  <meta name="description" content="Tesoroso Artesanales">
  <title>TESOROS ARTESANALES</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/media/tesoroslogo.jpg">
  <!-- All CSS files -->
  <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
  <link rel="stylesheet" href="assets/css/vendor/slick.css">
  <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
  <link rel="stylesheet" href="assets/css/app.css">

<!--Requeridos para clever cloud-->
  <script src="<?php echo $global_sitio_server;?>/functions/axios.min.js"></script>
  <script src="<?php echo $global_sitio_server;?>/functions/vue.min.js"></script>
  <script src="<?php echo $global_sitio_server;?>/functions/sweetalert2.all.min.js"></script>


  <script>
    <?php echo 'const global_token = "'. $token . '";'; ?>
    <?php echo 'const global_public_repo = "'. $global_public_repo . '";'; ?>
    <?php echo 'var global_apiserver = "'. $global_apiserver . '";'; ?>
    </script>

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
    include_once "modules/inicio.php";
  }
  ?>

  <!-- JavaScript  -->
  <script src="assets/js/vendor/jquery.min.js"></script>
  <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
  <script src="assets/js/vendor/slick.min.js"></script>
  <script src="assets/js/app.js"></script>

</body>

</html>
