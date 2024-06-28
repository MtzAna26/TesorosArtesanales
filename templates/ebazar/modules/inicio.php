<a href="#main-wrapper" id="backto-top" class="back-to-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- Main Wrapper Start -->
    <div id="main-wrapper" class="main-wrapper overflow-hidden">
      <!-- Header Area Start -->
      <header class="header">
        <div class="container">
          <nav class="navbar navbar-expand-xl">
            <a class="navbar-brand" href="index.html">
              <img alt="" src="assets/media/tesoroslogo.jpg">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse text-start" id="mynavbar">
              <ul class="navbar-nav mainmenu m-0">
                <li class="menu-item">
                  <a href="index.html" class="active">Home</a>
                </li>
                <li class="menu-item">
                  <a href="shop.html">Shop</a>
                </li>
                <li class="menu-item">
                  <a href="about.html">About</a>
                </li>
                <li class="menu-item-has-children">
                  <a href="javascript:void(0);">Pages</a>
                  <ul class="submenu">
                    <li class="menu-item">
                      <a href="product-detail.html">Product Detail</a>
                    </li>
                    <li class="menu-item">
                      <a href="cart.html">Cart</a>
                    </li>
                    <li class="menu-item">
                      <a href="checkout.html">Checkout</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="right-content d-xl-block d-none">
              <ul class="list list-unstyled d-flex">
                <li id="search-form">
                  <form method="get" action="./shop.html">
                    <div class="input-group">
                      <button type="submit" class="input-group-text">
                        <i class="fal fa-search"></i>
                      </button>
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                  </form>
                </li>
                <li>
                  <a href="javascript:;" class="search-btn">
                    <i class="fal fa-search"></i>
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="fal fa-box-heart"></i>
                  </a>
                </li>
                <li>
                  <a href="javascript:;" class="cart-button">
                    <i class="fal fa-shopping-cart"></i>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </header>
      <!-- Header Area end -->
      <!-- banner Area start -->
      <section class="banner">
        <div class="content">
          <div class="container">
            <h5>TESOROS</h5>
            <h2 class="title">ARTESANALES</h2>
            <p class="description">Nos dedicamos a crear juguetes único y hechos a mano. Que inspiran las imaginación,<br> de los más pequeños.</p>
            <div class="main-btn text-end">
              <a href="shop.html" class="cus-btn dark">Explore Products</a>
            </div>
          </div>
        </div>
        <!-- <img src="assets/media/banner/object-1.png" alt="" class="object">-->
      </section>
      <!-- banner Area end -->
      <!-- Category Area start -->
      <section class="category pt-96 pb-48">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="category-box">
                <div class="img-block">
                  <img src="assets/media/products/ARTESANIA-YOYO.jpg" alt="">
                </div>
                <div class="content-box">
                  <div class="discount">
                    <h2>20%</h2>
                    <span>OFF</span>
                  </div>
                  <h4>YOYO</h4>
                  <a href="shop.html" class="cus-btn dark">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="category-box">
                <div class="img-block">
                  <img src="assets/media/products/ARTESANIA-JENGA.jpg" alt="">
                </div>
                <div class="content-box">
                  <div class="discount">
                    <h2>10%</h2>
                    <span>OFF</span>
                  </div>
                  <h4>JENGA</h4>
                  <a href="product-detail.html" class="cus-btn dark">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Category Area end -->
      <!-- Products Area start -->
      <section class="Products pt-48 pb-96">
        <div class="container">
          <div class="heading text-center">
            <h2>Todos los productos</h2>
          </div>
          <div class="row">
            <div class="col-xl-8 offset-xl-2">
              <ul class="nav nav-tabs title-btn justify-content-around" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#all-products" type="button" role="tab">Todos los productos</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#dairy" type="button" role="tab">Juguetes de Madera</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#food_drink" type="button" role="tab">Muñecos & Figuras</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#fruits" type="button" role="tab">Didácticos</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#vegetables" type="button" role="tab">Aire Libre</button>
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-content">
            <div id="all-products" class="tab-pane active">
              <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <a href="product-detail.html">
                        <img src="assets/media/products/SONAJA.jpg" alt="">
                      </a>
                      <span class="price">$58</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Sonaja</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
                  </div>
                  
                  
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/artesania-trompo.jpg" alt="">
                      <span class="price">$35</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Trompo</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/artesaniabalero.jpg" alt="">
                      <span class="price">$55</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Balero</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/artesania-marioneta.jpg" alt="">
                      <span class="price">$69</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Marionetas</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/artesania-muneca.jpg" alt="">
                      <span class="price">$99</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Muñecas</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/artesanias-canicas.jpg" alt="">
                      <span class="price">$66</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Canicas</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/artesania-giratorios.jpg" alt="">
                      <span class="price">$77</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Giratorios</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/artesania-loteria.jpg" alt="">
                      <span class="price">$33</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Lotería</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
                  </div>
                </div>
              </div>
            </div>
            <div id="dairy" class="tab-pane">
              <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/p-14.png" alt="">
                      <span class="price">$58</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Strawberry Milk</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/p-12.png" alt="">
                      <span class="price">$35</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Eggs</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/p-11.png" alt="">
                      <span class="price">$55</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Red Paprika</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/p-4.png" alt="">
                      <span class="price">$69</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Honey Jar</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/p-10.png" alt="">
                      <span class="price">$99</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Banana</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                  </div>
                </div>
              </div>
            </div>
            <div id="food_drink" class="tab-pane">
              <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/p-8.png" alt="">
                      <span class="price">$58</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Fresh Apples</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/p-6.png" alt="">
                      <span class="price">$35</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Tomato Sauce</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/p-4.png" alt="">
                      <span class="price">$55</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Red Paprika</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/p-15.png" alt="">
                      <span class="price">$69</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Honey Jar</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/p-13.png" alt="">
                      <span class="price">$99</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Strawberries</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/p-8.png" alt="">
                      <span class="price">$66</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Mangoes</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/p-7.png" alt="">
                      <span class="price">$77</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Pomegranate</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                  </div>
                </div>
              </div>
            </div>
            <div id="fruits" class="tab-pane">
              <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/p-5.png" alt="">
                      <span class="price">$58</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Fresh Apples</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/p-14.png" alt="">
                      <span class="price">$35</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Tomato Sauce</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/p-12.png" alt="">
                      <span class="price">$55</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Red Paprika</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/p-1.png" alt="">
                      <span class="price">$69</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Honey Jar</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                  </div>
                </div>
              </div>
            </div>
            <div id="vegetables" class="tab-pane">
              <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/p-10.png" alt="">
                      <span class="price">$58</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Fresh Apples</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/p-9.png" alt="">
                      <span class="price">$35</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Tomato Sauce</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/p-7.png" alt="">
                      <span class="price">$55</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Red Paprika</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/p-5.png" alt="">
                      <span class="price">$69</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Honey Jar</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product-card">
                    <div class="showcase-box">
                      <img src="assets/media/products/p-8.png" alt="">
                      <span class="price">$99</span>
                      <div class="overlay">
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                            <i class="fal fa-eye"></i>
                          </a>
                          <a href="">
                            <i class="fal fa-box-heart"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <a href="product-detail.html" class="title">Strawberries</a>
                    <a href="javascript:;" class="cus-btn dark cart-button">Add to Cart</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <a href="shop.html" class="cus-btn bordered">Descubrir más</a>
          </div>
        </div>
      </section>
      <!-- Products Area end -->
      <!-- Inner Banner Area start -->
      <section class="inner-banner">
        <div class="container">
          <div class="content pt-48">
            <h5>Productos Artesanales</h5>
            <h2>DE NUEVO EN EXISTENCIA</h2>
            <ul class="timer countdown list-unstyled">
              <li>29 <small>d</small>
              </li>
              <li>23 <small>h</small>
              </li>
              <li>50 <small>m</small>
              </li>
              <li>34 <small>s</small>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Inner Banner Area end -->
      <!-- Featured Products Area start -->
      <section class="Featured-Products pt-96 pb-48">
        <div class="container">
          <div class="heading text-center">
            <h2>Productos Destacados</h2>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product-card">
                <div class="showcase-box">
                  <img src="assets/media/products/procto-bolsa.jpg" alt="">
                  <span class="price">$58</span>
                  <div class="overlay">
                    <div class="d-flex align-items-center justify-content-center">
                      <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                        <i class="fal fa-eye"></i>
                      </a>
                      <a href="">
                        <i class="fal fa-box-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <a href="product-detail.html" class="title">Bolsas</a>
                <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product-card">
                <div class="showcase-box">
                  <img src="assets/media/products/producto-taza.jpg" alt="">
                  <span class="price">$35</span>
                  <div class="overlay">
                    <div class="d-flex align-items-center justify-content-center">
                      <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                        <i class="fal fa-eye"></i>
                      </a>
                      <a href="">
                        <i class="fal fa-box-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <a href="product-detail.html" class="title">Tazas de Barro</a>
                <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product-card">
                <div class="showcase-box">
                  <img src="assets/media/products/producto-alebrije.jpg" alt="">
                  <span class="price">$55</span>
                  <div class="overlay">
                    <div class="d-flex align-items-center justify-content-center">
                      <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                        <i class="fal fa-eye"></i>
                      </a>
                      <a href="">
                        <i class="fal fa-box-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <a href="product-detail.html" class="title">Alebrijes</a>
                <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product-card">
                <div class="showcase-box">
                  <img src="assets/media/products/producto-llaveros.jpg" alt="">
                  <span class="price">$69</span>
                  <div class="overlay">
                    <div class="d-flex align-items-center justify-content-center">
                      <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                        <i class="fal fa-eye"></i>
                      </a>
                      <a href="">
                        <i class="fal fa-box-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <a href="product-detail.html" class="title">LLaveros</a>
                <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product-card">
                <div class="showcase-box">
                  <img src="assets/media/products/producto-blusa.jpg" alt="">
                  <span class="price">$99</span>
                  <div class="overlay">
                    <div class="d-flex align-items-center justify-content-center">
                      <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                        <i class="fal fa-eye"></i>
                      </a>
                      <a href="">
                        <i class="fal fa-box-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <a href="product-detail.html" class="title">Blusas Bordada</a>
                <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product-card">
                <div class="showcase-box">
                  <img src="assets/media/products/producto-sombrero.jpg" alt="">
                  <span class="price">$66</span>
                  <div class="overlay">
                    <div class="d-flex align-items-center justify-content-center">
                      <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                        <i class="fal fa-eye"></i>
                      </a>
                      <a href="">
                        <i class="fal fa-box-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <a href="product-detail.html" class="title">Sombreros</a>
                <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product-card">
                <div class="showcase-box">
                  <img src="assets/media/products/producto-sarape.jpg" alt="">
                  <span class="price">$77</span>
                  <div class="overlay">
                    <div class="d-flex align-items-center justify-content-center">
                      <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                        <i class="fal fa-eye"></i>
                      </a>
                      <a href="">
                        <i class="fal fa-box-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <a href="product-detail.html" class="title">Sarape</a>
                <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product-card">
                <div class="showcase-box">
                  <img src="assets/media/products/producto-arbolvida.jpg" alt="">
                  <span class="price">$33</span>
                  <div class="overlay">
                    <div class="d-flex align-items-center justify-content-center">
                      <a href="product-detail.html" data-bs-toggle="modal" data-bs-target="#productQuickView">
                        <i class="fal fa-eye"></i>
                      </a>
                      <a href="">
                        <i class="fal fa-box-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <a href="product-detail.html" class="title">Árbol de la vida</a>
                <a href="javascript:;" class="cus-btn dark cart-button">Agregar</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Featured Products Area End -->
      <!-- testimonials Area start -->
      <section class="testimonials pt-48 pb-48">
        <div class="container">
          <div class="heading text-center">
            <h2>Reseñas de Clientes</h2>
          </div>
          <div class="testimonial-slider">
            <div class="testimonial-box">
              <div class="upper-row">
                <img src="assets/media/user/yaz.jpg" alt="">
                <h6 class="name">Yazmin Salas</h6>
              </div>
              <p class="review"> 
                Me encanta que los juguetes de Tesoros Artesanales sean ecológicos y 
                hechos con tanto cariño. Los sonajeros y 
                mordedores para bebés son perfectos para mi pequeño. ¡Totalmente recomendados!
              </p>
            </div>
            <div class="testimonial-box">
              <div class="upper-row">
                <img src="assets/media/user/Image-1.png" alt="">
                <h6 class="name">Gonzalo Hernandez</h6>
              </div>
              <p class="review">Compré un rompecabezas de madera y es perfecto para mantener a mis hijos 
                entretenidos y al mismo tiempo desarrollar sus habilidades cognitivas. 
                Además, los colores y el diseño son preciosos.</p>
            </div>
            <div class="testimonial-box">
              <div class="upper-row">
                <img src="assets/media/user/Image-2.png" alt="">
                <h6 class="name">Richard Johnson</h6>
              </div>
              <p class="review">
                Los juguetes al aire libre han sido un éxito en casa. Mis hijos disfrutan muchísimo jugando en el jardín con los juegos que compramos. 
                Son resistentes y perfectos para todas las edades.
              </p>
            </div>
            <div class="testimonial-box">
              <div class="upper-row">
                <img src="assets/media/user/danielaguevara.jpg" alt="">
                <h6 class="name">Daniela Guevara</h6>
              </div>
              <p class="review"> 
                ¡Estoy encantada con los juguetes de Tesoros Artesanales! 
                Compré una muñeca de trapo para mi hija y no puede dejar de jugar con ella. La calidad es excepcional y 
                los detalles hechos a mano son simplemente hermosos.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- testimonials Area end -->
      <!-- footer Area start -->
      <footer class="footer">
        <div class="container">
          <div class="main">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-9 col-11">
                <a class="logo" href="index.html">
                  <img alt="" src="assets/media/tesoroslogo.jpg">
                </a>
                <p class="detail">
                  ¡Bienvenidos a Tesoros Artesanales!
                  Sumérgete en un mundo de juguetes artesanales donde cada pieza cuenta una historia. 
                  Nos enorgullece ofrecerte productos elaborados con materiales ecológicos y técnicas tradicionales. 
                  Ven y descubre la magia de lo hecho a mano, y encuentra ese tesoro especial para tus seres queridos.
                </p>
              </div>
              <div class="col-lg-2 offset-lg-1">
                <h5 class="title">Categorías</h5>
                <ul class="list-unstyled links">
                  <li>
                    <a href="shop.html">Juguetes de Madera</a>
                  </li>
                  <li>
                    <a href="shop.html">Muñecos & Figuras</a>
                  </li>
                  <li>
                    <a href="shop.html">Didácticos</a>
                  </li>
                  <li>
                    <a href="shop.html">Aire Libre</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-3">
                <h5 class="title">Essential Links</h5>
                <ul class="list-unstyled links">
                  <li>
                    <a href="index.html">Home</a>
                  </li>
                  <li>
                    <a href="cart.html">Cart</a>
                  </li>
                  <li>
                    <a href="shop.html">Shop</a>
                  </li>
                  <li>
                    <a href="product-detail.html">Product Detail</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-9 col-10">
                <h5 class="title">Suscríbete a nuestro boletín</h5>
                <form action="index.html">
                  <div class="input-group mb-16">
                    <input type="email" class="form-control" id="email" name="email" required="" placeholder="Your Email">
                  </div>
                  <button type="submit" class="cus-btn dark">Subscribete</button>
                </form>
              </div>
            </div>
          </div>
          <div class="bottom-content">
            <h5 class="title">Contact Info</h5>
            <div class="contact-row">
              <ul class="contact-list list-unstyled">
                <li>
                  <a href="tel:123456789">
                    <i class="fal fa-phone-alt"></i>+1 333 759 0753 </a>
                </li>
                <li>
                  <a href="mailto:info@gmail.com">
                    <i class="fal fa-envelope"></i>tesorosArtesanales@gmail.com </a>
                </li>
                <li>
                  <span>
                    <i class="fal fa-map-marker-alt"></i>Zacatecas, Sombrerete </span>
                </li>
              </ul>
              <ul class="footer-social-icon list-unstyled">
                <li>
                  <a href="">
                    <img src="assets/media/icon/icon.png" alt="">
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="assets/media/icon/Vector.png" alt="">
                  </a>
                </li>

              </ul>
            </div>
          </div>
          <div class="text-center">
            <p class="copyright">©2024 All rights are reserved by Tesoros Artesanales</p>
          </div>
        </div>
      </footer>
      <!-- footer Area end -->
    </div>
    <!-- Cart Popup Start -->



    <aside id="sidebar-cart">
      <a href="javascript:;" class="close-button close-popup">
          <span class="close-icon">X</span>
      </a>
      <div class="mb-32">
          <div class="vr-line"></div>
      </div>
      <div class="vr-line mb-24"></div>
  
      <!-- Contenedor del carrito -->
      <section id="cart-container">
          <h3 class="h-39 color-dark-2 fw-400 font-sec mb-32">ARTÍCULOS DE LA LISTA DE DESEOS<span class="h-27"></span></h3>
          <ul id="cart-items"></ul>
          <p>Total: $<span id="cart-total">0.00</span></p>
      </section>
  
      <div class="action-buttons">
          <a href="cart.html" class="cus-btn">VIEW CART</a>
          <a href="checkout.html" class="cus-btn active-btn">CHECKOUT</a>
      </div>
  </aside>
  
  
  

  
  
  





    <div id="sidebar-cart-curtain" class="close-popup"></div>
    <!-- Cart Popup End -->
    <!-- Modal -->
    <div class="modal fade" id="productQuickView" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title fs-5 h1 light-black fw-500" id="staticBackdropLabel">Mangoes</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <!--imagenes dar clic al ojo-->
          <div class="modal-body">
            <div class="product-list-3">
              <div class="shop-block mb-24 text-center">
                <div class="img-box">
                  <a href="shop-detail.html">
                    <img src="assets/media/products/SONAJA.jpg" alt="" class="mb-md-0 mb-16">
                  </a>
                </div>
                <div class="">
                  <div class="price v-2">
                    <h5 class="light-black mt-4 mb-2">
                      <a href="shop-detail.html">SONAJA</a>
                    </h5>
                    <h5 class="color-primary">$22.00</h5>
                  </div>
                  <div class="rating-star mb-16">
                    <i class="fas fa-star color-primary"></i>
                    <i class="fas fa-star color-primary"></i>
                    <i class="fas fa-star color-primary"></i>
                    <i class="fas fa-star color-primary"></i>
                    <i class="fas fa-star color-primary"></i>
                  </div>
                  <hr class="bg-sec-gray mb-16 d-md-flex d-none">
                  <a href="cart.html" class="cus-btn">Add to Cart</a>
                  <a href="checkout.html" class="cus-btn">Buy Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jquery Js -->
    <script src="assets/js/vendor/jquery-3.6.3.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/jquery-appear.js"></script>
    <script src="assets/js/vendor/jquery-validator.js"></script>
    <script src="assets/js/vendor/jquery.countdown.min.js"></script>
    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>

    <script>
      document.addEventListener("DOMContentLoaded", function() {
    let cart = [];
    let cartTotal = 0;

    function updateCart() {
        const cartItemsContainer = document.getElementById('cart-items');
        cartItemsContainer.innerHTML = '';

        cart.forEach((item, index) => {
            const li = document.createElement('li');

            li.innerHTML = `
                <img src="${item.image}" alt="${item.name}">
                <div class="item-details">
                    <h5>${item.name}</h5>
                    <p class="price">$${(item.price * item.quantity).toFixed(2)}</p>
                </div>
                <div class="quantity-controls">
                    <button class="decrement" data-index="${index}">-</button>
                    <input type="text" value="${item.quantity}" readonly>
                    <button class="increment" data-index="${index}">+</button>
                </div>
                <button class="remove-btn" data-index="${index}">X</button>
            `;

            cartItemsContainer.appendChild(li);
        });

        document.getElementById('cart-total').textContent = cartTotal.toFixed(2);
    }

    const addToCartButtons = document.querySelectorAll('.cart-button');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            const productCard = event.target.closest('.product-card');
            const name = productCard.querySelector('.title').textContent;
            const price = parseFloat(productCard.querySelector('.price').textContent.replace('$', ''));
            const image = productCard.querySelector('img').src;

            const existingItemIndex = cart.findIndex(item => item.name === name);

            if (existingItemIndex >= 0) {
                cart[existingItemIndex].quantity += 1;
            } else {
                cart.push({ name, price, image, quantity: 1 });
            }

            cartTotal += price;

            updateCart();
        });
    });

    document.getElementById('cart-items').addEventListener('click', function(event) {
        if (event.target.classList.contains('decrement')) {
            const index = event.target.getAttribute('data-index');
            if (cart[index].quantity > 1) {
                cart[index].quantity -= 1;
                cartTotal -= cart[index].price;
            }
        } else if (event.target.classList.contains('increment')) {
            const index = event.target.getAttribute('data-index');
            cart[index].quantity += 1;
            cartTotal += cart[index].price;
        } else if (event.target.classList.contains('remove-btn')) {
            const index = event.target.getAttribute('data-index');
            cartTotal -= cart[index].price * cart[index].quantity;
            cart.splice(index, 1);
        }

        updateCart();
    });
});
  </script>