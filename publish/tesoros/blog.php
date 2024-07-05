<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tesoros Artesanales - Blog</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/media/tesoroslogo.jpg">
  <!-- All CSS files -->
  <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
  <link rel="stylesheet" href="assets/css/vendor/slick.css">
  <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <script src="/publish/tesoros/modules/blog.js"></script>

  <!-- Vue.js CDN -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>

  <?php include 'header.php'; ?>

  <section class="page-start-banner">
    <div class="container">
      <h2 class="title">Blog</h2>
    </div>
  </section>

  <section class="blog-introduction py-5" id="vue-app-blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h3 class="section-title">La Importancia de los Juguetes Artesanales en México en la Actualidad</h3>
          <p>En un mundo cada vez más dominado por la tecnología y la producción en masa, los juguetes artesanales emergen como una alternativa valiosa y significativa. Estos juguetes no solo ofrecen entretenimiento, sino que también desempeñan un papel crucial en el desarrollo infantil al fomentar la creatividad, la imaginación y las habilidades motoras. En México, la tradición de los juguetes artesanales es rica y variada, reflejando la diversidad cultural y la maestría de sus artesanos. Este blog explora la importancia de los juguetes artesanales en México en la actualidad, destacando su valor cultural, impacto económico y beneficios educativos.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="blog-categories py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-4">
          <div class="category-card p-4 h-100 bg-white shadow-sm">
            <h4 class="category-title">Historia de los Juguetes Artesanales en México</h4>
            <p>La historia de los juguetes artesanales en México es un reflejo de la rica herencia cultural del país. Desde tiempos prehispánicos, los juguetes han sido una parte integral de la vida cotidiana, utilizados no solo para el entretenimiento de los niños, sino también como herramientas educativas y simbólicas. Regiones como Oaxaca, Michoacán y Guanajuato se destacan por su producción de juguetes tradicionales, cada una con sus propias técnicas y materiales únicos.</p>
          </div>
        </div>
        <div class="col-lg-6 mb-4">
          <div class="category-card p-4 h-100 bg-white shadow-sm">
            <h4 class="category-title">Valor Cultural y Patrimonial</h4>
            <p>Los juguetes artesanales mexicanos son mucho más que simples objetos de entretenimiento; son portadores de una rica herencia cultural y patrimonial. Cada juguete cuenta una historia y refleja las tradiciones y creencias de la comunidad que lo creó. Por ejemplo, los alebrijes, originarios de Oaxaca, son coloridas figuras que representan seres fantásticos y combinan elementos de diferentes animales.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="blog-posts py-5">
    <div class="container">
      <div class="row">
        <!-- Ejemplo de post -->
        <div class="col-lg-4 mb-4">
          <div class="post-card h-100 p-4 bg-white shadow-sm">
            <h5 class="post-title">Impacto Económico y Social</h5>
            <p>La producción de juguetes artesanales tiene un impacto económico significativo en muchas comunidades rurales de México...</p>
            <a href="post1.html" class="btn btn-primary">Leer más</a>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="post-card h-100 p-4 bg-white shadow-sm">
            <h5 class="post-title">Beneficios Educativos y Desarrollo Infantil</h5>
            <p>Los juguetes artesanales fomentan la creatividad y la imaginación, y ayudan en el desarrollo de habilidades motoras y cognitivas...</p>
            <a href="post2.html" class="btn btn-primary">Leer más</a>
          </div>
        </div>
        <!-- Añadir más posts según sea necesario -->
      </div>
    </div>
  </section>

  <script src="<?php echo $ref_rel;?>modules/blog.js"></script>
  <?php require('cart.php'); ?>
  <?php include 'footer.php'; ?>

  <!-- JavaScript  -->
  <script src="assets/js/vendor/jquery.min.js"></script>
  <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
  <script src="assets/js/vendor/slick.min.js"></script>
  <script src="assets/js/app.js"></script>
  <script>
    var app = new Vue({
      el: '#vue-app-blog',
      mounted: function () {
        console.log("Vue cargó correctamente");
      }
    });
  </script>
  
</body>
</html>
