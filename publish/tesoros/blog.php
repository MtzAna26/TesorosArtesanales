<?php
// Definir el token
$token = 'af9365d40a03c94852cb8241818b7ab4c16';
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tesoros Artesanales - Blog</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/media/tesoroslogo.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- All CSS files -->
  <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
  <link rel="stylesheet" href="assets/css/vendor/slick.css">
  <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="modules/blog.js" defer></script>
</head>

<body>
  <?php include 'header.php'; ?>
  <?php
  require_once '/mnt/volume_sfo3_clever_dev/anamart/clevercloud/sitio/functions/apiserver.php';
  require_once '/mnt/volume_sfo3_clever_dev/anamart/clevercloud/sitio/functions/apicalls.php';
  ?>

  <!-- Banner de inicio de la página -->
  <section class="page-start-banner">
    <div class="container">
      <h2 class="title">Blog</h2>
    </div>
  </section>

  <!-- Introducción del blog -->
  <section class="blog-introduction py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="welcome-message mt-4 p-4 rounded shadow-sm" style="background-color: #f8f9fa;">
            <h4 class="text-center font-weight-bold" style="color: #6c757d;">¡Bienvenidos a Nuestro Blog: Descubriendo el Mundo de los Tesoros Artesanales!</h4>
            <p class="text-justify mt-3" style="color: #495057; font-size: 1.1em;">
              Nos alegra tenerte aquí. En este espacio encontrarás artículos y noticias sobre la riqueza y diversidad de los juguetes artesanales mexicanos. Explora, aprende y disfruta de cada historia que tenemos para ti.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Posts del blog -->
  <section class="blog-posts py-5" id="vue-app-blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 mb-4" v-for="a in articulos" :key="a.ID">
          <div class="post-card h-100 p-4 bg-white shadow-sm">
            <a :href="'post.php?id=' + a.ID">
              <img class="img-fluid post-image" :src="global_public_repo + '/' + a.IMAGEN" alt="Blog Image">
            </a>
            <div class="post-content mt-3">
              <a :href="'https://dev.clevertechnology.com.mx/dev/anamart/clevercloud/publish/tesoros/articulo/un_viaje_a_traves_del_tiempo_la_historia_de_los_juguetes_artesanales_en_mexico'">
                <h5 class="post-title">{{ a.TITULO_ARTICULO }}</h5>
              </a>
              <p>{{ a.RESUMEN }}</p>
              <p class="post-meta"><strong><i class="fas fa-user"></i> Autor:</strong> {{ a.AUTOR_ARTICULO }}</p>
              <p class="post-meta"><strong><i class="fas fa-tags"></i> Categoría:</strong> {{ a.CATEGORIA }}</p>
              <p class="post-meta"><strong><i class="fas fa-calendar-alt"></i> Fecha de Publicación:</strong> {{ a.FECHA_PUBLICACION }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php require('cart.php'); ?>
  <?php include 'footer.php'; ?>

  <!-- JavaScript adicional -->
  <script src="assets/js/vendor/jquery.min.js"></script>
  <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
  <script src="assets/js/vendor/slick.min.js"></script>
  <script src="assets/js/app.js"></script>

  <script>
    var global_token = "<?php echo $token; ?>";
    var global_apiserver = "<?php echo $global_apiserver; ?>";
    var global_public_repo = "<?php echo $global_public_repo; ?>";
  </script>


  <style>
    .blog-introduction .welcome-message {
      background-color: #f8f9fa;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      border-left: 5px solid #6f42c1;
    }

    .blog-introduction .welcome-message h4 {
      color: #6f42c1;
      font-weight: bold;
      text-align: center;
    }

    .blog-introduction .welcome-message p {
      color: #28a745;
      font-size: 1.1em;
      text-align: justify;
      margin-top: 15px;
    }

    .blog-posts .post-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-radius: 10px;
      overflow: hidden;
    }

    .blog-posts .post-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .blog-posts .post-image {
      width: 100%;
      height: auto;
      border-bottom: 1px solid #eee;
    }

    .blog-posts .post-content {
      padding: 15px;
    }

    .blog-posts .post-title {
      font-size: 1.25rem;
      font-weight: 700;
      color: #333;
      margin: 10px 0;
    }

    .blog-posts .post-meta {
      font-size: 0.9rem;
      color: #777;
    }

    .blog-posts .post-meta strong {
      color: #333;
    }

    .blog-posts .post-card a {
      text-decoration: none;
    }

    .blog-posts .post-card a:hover .post-title {
      color: #007bff;
    }
  </style>
</body>

</html>