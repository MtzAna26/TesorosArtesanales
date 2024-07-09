<?php
require '/mnt/volume_sfo3_clever_dev/anamart/clevercloud/sitio/functions/apicalls.php';
require '/mnt/volume_sfo3_clever_dev/anamart/clevercloud/sitio/functions/apiserver.php';

$token = 'af9365d40a03c94852cb8241818b7ab4c16';
$dos_niveles = array("articulo");
$ref_rel = "./";
if (in_array($_REQUEST["view"], $dos_niveles)) {
  $ref_rel = "../";
}
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
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $dos_niveles ?>/assets/media/tesoroslogo.jpg">
  <!-- All CSS files -->
  <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
  <link rel="stylesheet" href="assets/css/vendor/slick.css">
  <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
  <link rel="stylesheet" href="assets/css/app.css">

  <!-- Requeridos para Clever Cloud -->
  <script src="<?php echo $global_sitio_server; ?>/functions/axios.min.js"></script>
  <script src="<?php echo $global_sitio_server; ?>/functions/vue.min.js"></script>
  <script src="<?php echo $global_sitio_server; ?>/functions/sweetalert2.all.min.js"></script>

  <script>
    const global_token = "<?php echo $token; ?>";
    const global_public_repo = "<?php echo $global_public_repo; ?>";
    var global_apiserver = "<?php echo $global_apiserver; ?>";
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
