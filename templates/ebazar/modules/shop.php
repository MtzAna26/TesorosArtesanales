<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tesoros Artesanales - Tienda</title>
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

  <?php include 'header.php'; ?>

  <section class="page-start-banner">
    <div class="container">
      <h2 class="title">Shop</h2>
    </div>
  </section>
  <!-- Page Banner End -->

  <!-- Products Area start -->
  <section class="arrivals pt-96 pb-48">
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-lg-4">
          <div class="sidebar">
            <div class="content-block">
              <div class="category-filter">
              <div class="search-form">
  <form id="searchForm" method="get" action="./shop.php">
    <div class="input-group">
      <input type="text" class="form-control" id="searchInput" placeholder="Search">
      <button type="submit" class="input-group-text"><i class="fal fa-search"></i></button>
    </div>
  </form>
</div>


                <h5 class="title">Categorias</h5>
                <ul class="list-unstyled">
                  <li><a href="#" data-category="all">Todos los productos</a></li>
                  <li><a href="#" data-category="madera">Juguetes de Madera</a></li>
                  <li><a href="#" data-category="munecos">Muñecos & Figuras</a></li>
                  <li><a href="#" data-category="didacticos">Didácticos</a></li>
                </ul>
              </div>
            </div>
            <div class="content-block">
              <div class="popular-products">
                <h5 class="title">Productos Populares</h5>
                <a href="product-detail.html" class="product">
                  <img src="assets/media/products/jenga-artesanal.jpg" alt="">
                  <div class="detail">
                    <h6>Jenga</h6>
                    <span>$200</span>
                  </div>
                </a>
                <a href="product-detail.html" class="product">
                  <img src="assets/media/products/artesanias-tablasm.jpg" alt="">
                  <div class="detail">
                    <h6>Tablita Mágica</h6>
                    <span>$100</span>
                  </div>
                </a>
                <a href="product-detail.html" class="product">
                  <img src="assets/media/products/artesania-alebrije1.jpg" alt="">
                  <div class="detail">
                    <h6>Alebrijes</h6>
                    <span>$200</span>
                  </div>
                </a>
                <a href="product-detail.html" class="product">
                  <img src="assets/media/products/artesania-tazabarro.jpg" alt="">
                  <div class="detail">
                    <h6>Tazas de Barro</h6>
                    <span>$35</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-9 col-lg-8">
          <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 product-card" data-category="madera">
              <div class="product-card">
                <div class="showcase-box">
                  <img src="assets/media/products/artesania-trompo.jpg" alt="">
                  <span class="price">$66</span>
                  <div class="overlay">
                    <div class="d-flex align-items-center justify-content-center">
                      <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="fal fa-eye"></i></a>
                      <a href=""><i class="fal fa-box-heart"></i></a>
                    </div>
                  </div>
                </div>
                <a href="product-detail.html" class="title">Trompo</a>
                <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 product-card" data-category="munecos">
              <div class="product-card">
                <div class="showcase-box">
                  <img src="assets/media/products/artesania-muneca.jpg" alt="">
                  <span class="price">$99</span>
                  <div class="overlay">
                    <div class="d-flex align-items-center justify-content-center">
                      <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="fal fa-eye"></i></a>
                      <a href=""><i class="fal fa-box-heart"></i></a>
                    </div>
                  </div>
                </div>
                <a href="product-detail.html" class="title">Muñeca</a>
                <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 product-card" data-category="didacticos">
              <div class="product-card">
                <div class="showcase-box">
                  <img src="assets/media/products/artesanias-canicas.jpg" alt="">
                  <span class="price">$66</span>
                  <div class="overlay">
                    <div class="d-flex align-items-center justify-content-center">
                      <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="fal fa-eye"></i></a>
                      <a href=""><i class="fal fa-box-heart"></i></a>
                    </div>
                  </div>
                </div>
                <a href="product-detail.html" class="title">Canicas</a>
                <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
              </div>
            </div>
            <!-- Categoría: Madera -->
<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 product-card" data-category="madera">
  <div class="product-card">
    <div class="showcase-box">
      <img src="assets/media/products/artesania-giratorios.jpg" alt="">
      <span class="price">$77</span>
      <div class="overlay">
        <div class="d-flex align-items-center justify-content-center">
          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="fal fa-eye"></i></a>
          <a href=""><i class="fal fa-box-heart"></i></a>
        </div>
      </div>
    </div>
    <a href="product-detail.html" class="title">Giratorios</a>
    <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
  </div>
</div>
<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 product-card" data-category="madera">
  <div class="product-card">
    <div class="showcase-box">
      <img src="assets/media/products/artesania-yoyo1.jpg" alt="">
      <span class="price">$66</span>
      <div class="overlay">
        <div class="d-flex align-items-center justify-content-center">
          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="fal fa-eye"></i></a>
          <a href=""><i class="fal fa-box-heart"></i></a>
        </div>
      </div>
    </div>
    <a href="product-detail.html" class="title">Yoyo</a>
    <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
  </div>
</div>

<!-- Categoría: Muñecos -->
<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 product-card" data-category="munecos">
  <div class="product-card">
    <div class="showcase-box">
      <img src="assets/media/products/artesania-marioneta.jpg" alt="">
      <span class="price">$99</span>
      <div class="overlay">
        <div class="d-flex align-items-center justify-content-center">
          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="fal fa-eye"></i></a>
          <a href=""><i class="fal fa-box-heart"></i></a>
        </div>
      </div>
    </div>
    <a href="product-detail.html" class="title">Marioneta</a>
    <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
  </div>
</div>

<!-- Categoría: Didácticos -->
<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 product-card" data-category="didacticos">
  <div class="product-card">
    <div class="showcase-box">
      <img src="assets/media/products/artesania-rompecabezas1.jpg" alt="">
      <span class="price">$200</span>
      <div class="overlay">
        <div class="d-flex align-items-center justify-content-center">
          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="fal fa-eye"></i></a>
          <a href=""><i class="fal fa-box-heart"></i></a>
        </div>
      </div>
    </div>
    <a href="product-detail.html" class="title">Rompecabezas</a>
    <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
  </div>
</div>
<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 product-card" data-category="didacticos">
  <div class="product-card">
    <div class="showcase-box">
      <img src="assets/media/products/artesania-loteria.jpg" alt="">
      <span class="price">$33</span>
      <div class="overlay">
        <div class="d-flex align-items-center justify-content-center">
          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="fal fa-eye"></i></a>
          <a href=""><i class="fal fa-box-heart"></i></a>
        </div>
      </div>
    </div>
    <a href="product-detail.html" class="title">Lotería</a>
    <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
  </div>
</div>
<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 product-card" data-category="didacticos">
  <div class="product-card">
    <div class="showcase-box">
      <img src="assets/media/products/artesaniabalero.jpg" alt="">
      <span class="price">$55</span>
      <div class="overlay">
        <div class="d-flex align-items-center justify-content-center">
          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="fal fa-eye"></i></a>
          <a href=""><i class="fal fa-box-heart"></i></a>
        </div>
      </div>
    </div>
    <a href="product-detail.html" class="title">Balero</a>
    <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
  </div>
</div>

<!-- Categoría: Otros -->
<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 product-card" data-category="otros">
  <div class="product-card">
    <div class="showcase-box">
      <img src="assets/media/products/artesania-tambor.jpg" alt="">
      <span class="price">$99</span>
      <div class="overlay">
        <div class="d-flex align-items-center justify-content-center">
          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView"><i class="fal fa-eye"></i></a>
          <a href=""><i class="fal fa-box-heart"></i></a>
        </div>
      </div>
    </div>
    <a href="product-detail.html" class="title">Tambor</a>
    <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
  </div>
</div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <?php require('cart.php'); ?>
  <?php include 'footer.php'; ?>

  <!-- JavaScript  -->
  <script src="assets/js/vendor/jquery.min.js"></script>
  <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
  <script src="assets/js/vendor/slick.min.js"></script>
  <script src="assets/js/app.js"></script>
  
  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const searchForm = document.getElementById('searchForm');
    const searchInput = document.getElementById('searchInput');
    const productCards = document.querySelectorAll('.product-card[data-category]');

    searchForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const searchTerm = searchInput.value.toLowerCase();

      productCards.forEach(card => {
        const productName = card.querySelector('.title').textContent.toLowerCase();

        if (productName.includes(searchTerm)) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    });

    const categoryLinks = document.querySelectorAll('.category-filter a[data-category]');

    categoryLinks.forEach(link => {
      link.addEventListener('click', function (e) {
        e.preventDefault();
        const category = this.getAttribute('data-category');

        productCards.forEach(card => {
          if (category === 'all' || card.getAttribute('data-category') === category) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  });
</script>

</body>

</html>
