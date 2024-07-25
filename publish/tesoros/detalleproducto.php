<?php
if (!isset($_GET["p"]) || $_GET["p"] == "") {
    echo '<script type="text/javascript">window.history.back();</script>';
    exit;
}
$data = array(
    "p" => $_GET['p'],
);

$PRODUCTO = get_ecommerce_producto($token, $data['p']);
$PRODUCTO_GENERAL = $PRODUCTO["DATOS_GENERALES_PRODUCTO"];
$PRODUCTO_ADICIONAL = $PRODUCTO["DATOS_ADICIONALES_PRODUCTO"];
$PRODUCTO_FOTOS = $PRODUCTO["FOTOS_PRODUCTO"];
$imagenPrincipal = $global_public_repo . '/' . $PRODUCTO_GENERAL["IMAGEN"];
$imagen2 = $global_public_repo."/foto_producto/".$PRODUCTO_FOTOS[0]["IMAGEN"];

echo "<script type='text/javascript'> var idGlobalProducto = ".$PRODUCTO_GENERAL["ID"]."; var existenciasProducto = ".$PRODUCTO_GENERAL["EXISTENCIAS"]."; var productoEnVista = ".json_encode($PRODUCTO_GENERAL)."; </script>";
?> 

<!-- Agregar Vue.js desde un CDN -->
<link rel="shortcut icon" type="image/x-icon" href="assets/media/tesoroslogo.jpg">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/app.css">
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<!-- shop-details Area Start-->
<div class="shop-details-area pd-top-100" id="vue-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="sticy-product">
                    <div class="product-thumbnail-wrapper">
                        <div class="single-thumbnail-slider">
                            <div class="slider-item">
                                <img class="img__producto" src="<?php echo $imagenPrincipal; ?>" alt="item">
                            </div>
                            <?php
                            foreach ($PRODUCTO_FOTOS as $key => $value) {
                                echo '
                                <div class="slider-item">
                                    <img class="img__producto" src="' . $global_public_repo . '/foto_producto/' . $value["IMAGEN"] . '" alt="item">
                                </div>
                                ';
                            }
                            ?>
                        </div>
                        <div class="product-thumbnail-carousel">
                            <div class="single-thumbnail-item">
                                <img class="img__producto" src="<?php echo $imagenPrincipal; ?>" alt="item">
                            </div>
                            <?php
                            foreach ($PRODUCTO_FOTOS as $key => $value) {
                                echo '
                                <div class="single-thumbnail-item">
                                    <img class="img__producto" src="' . $global_public_repo . '/foto_producto/' . $value["IMAGEN"] . '" alt="item">
                                </div>
                                ';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="shop-item-details">
                    <nav>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="inicio.php" class="fw-bold">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="#" class="fw-bold">Tienda</a></li>
                            <li class="breadcrumb-item active" aria-current="page" class="fw-bold">Detalles del Producto</li>
                        </ul>
                    </nav>
                    <h2 class="entry-title"><?php echo $PRODUCTO_GENERAL["NOMBRE"]; ?></h2>
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <h4 class="price">$<?php echo $PRODUCTO_GENERAL["PRECIO"]; ?></h4>
                        </div>
                    </div>
                    <p class="mt-4">
                        <?php echo $PRODUCTO_GENERAL["DESCRIPCION"]; ?>
                    </p>
                    <form class="d-flex justify-content-between">                        
                        <div class="quantity buttons_added col-xl-3">
                            <input type="button" value="-" @click="decreaseQuantity">
                            <input type="number" step="1" min="1" :max="maxProducto" v-model="productosCargar" @keyup="validateInput" @blur="validateInput">
                            <input type="button" value="+" @click="increaseQuantity">
                        </div>
                        <div>
                            <button type="button" class="btn btn-secondary mt-4 mb-2 w-75" @click="addToCart">AGREGAR AL CARRITO</button>
                            <a class="btn btn-secondary w-75" href="../carrito">COMPRAR YA</a>
                        </div>                        
                    </form>                
                    <div class="shop-tabs">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Description</button>
                            </li>                            
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <p class="mb-1">Cocina Práctica:</p>
                                <?php
                                $i = 1;
                                foreach ($PRODUCTO_ADICIONAL as $key => $val) {
                                    ${"Valor" . $i} = $val['VALOR'];
                                    $i++;
                                }
                                ?>
                                <p class="mb-1">Contenido neto <?php echo $Valor1; ?> gramos</p>
                                <p class="mb-4">Listo en <?php echo $Valor2; ?> minutos</p>
                                <div class="row">
                                    <div class="col-6">
                                        <img class="w-100" src="<?php echo $imagenPrincipal; ?>" alt="img">
                                    </div>
                                    <?php
                                    if (count($PRODUCTO_FOTOS) >= 1){
                                        echo '
                                        <div class="col-6">
                                            <img class="w-100" src="'.$imagen2.'" alt="img">
                                        </div>';
                                    }
                                    ?>
                                </div>
                                <p class="mt-4"><?php echo $Valor3; ?></p>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop-details Area End -->

<?php 
$producto_relacionado_1 = get_ecommerce_producto($token, $SECCIONES["PRODUCTO"]["producto-relacionado-1"][0]);
$producto_relacionado_2 = get_ecommerce_producto($token, $SECCIONES["PRODUCTO"]["producto-relacionado-2"][0]);
$producto_relacionado_3 = get_ecommerce_producto($token, $SECCIONES["PRODUCTO"]["producto-relacionado-3"][0]);
?>

<!-- related-product Area Start-->
<section class="related-product-area pd-top-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title mb-0">
                    <h2 class="title">Productos Relacionados</h2>
                </div>
                <div class="related-product-slider owl-carousel style-2">
                    <div class="item">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="<?php echo $global_public_repo . '/' . $producto_relacionado_1["DATOS_GENERALES_PRODUCTO"]["IMAGEN"]; ?>" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="<?php echo $ref_rel . 'producto/' . $producto_relacionado_1["DATOS_GENERALES_PRODUCTO"]["PERMALINK"]; ?>"><?php echo $producto_relacionado_1["DATOS_GENERALES_PRODUCTO"]["NOMBRE"]; ?></a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>                                            
                                    </div>
                                    <h6 class="price">$<?php echo $producto_relacionado_1["DATOS_GENERALES_PRODUCTO"]["PRECIO"]; ?></h6>
                                </div>                            
                            </div>                                
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="<?php echo $global_public_repo . '/' . $producto_relacionado_2["DATOS_GENERALES_PRODUCTO"]["IMAGEN"]; ?>" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="<?php echo $ref_rel . 'producto/' . $producto_relacionado_2["DATOS_GENERALES_PRODUCTO"]["PERMALINK"]; ?>"><?php echo $producto_relacionado_2["DATOS_GENERALES_PRODUCTO"]["NOMBRE"]; ?></a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>                                            
                                    </div>
                                    <h6 class="price">$<?php echo $producto_relacionado_2["DATOS_GENERALES_PRODUCTO"]["PRECIO"]; ?></h6>
                                </div>                            
                            </div>                                
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-item-wrap">
                            <div class="thumb">
                                <img src="<?php echo $global_public_repo . '/' . $producto_relacionado_3["DATOS_GENERALES_PRODUCTO"]["IMAGEN"]; ?>" alt="img">
                                <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="wrap-details">
                                <h5><a href="<?php echo $ref_rel . 'producto/' . $producto_relacionado_3["DATOS_GENERALES_PRODUCTO"]["PERMALINK"]; ?>"><?php echo $producto_relacionado_3["DATOS_GENERALES_PRODUCTO"]["NOMBRE"]; ?></a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>                                            
                                    </div>
                                    <h6 class="price">$<?php echo $producto_relacionado_3["DATOS_GENERALES_PRODUCTO"]["PRECIO"]; ?></h6>
                                </div>                            
                            </div>                                
                        </div>
                    </div>
                </div>                    
            </div>
        </div>
    </div>
</section>
<!-- related-product Area End-->

<script>
new Vue({
    el: '#vue-container',
    data: {
        productosCargar: 1,
        maxProducto: existenciasProducto
    },
    methods: {
        addToCart() {
            if(this.productosCargar > 0) {
                let formData = new FormData();
                formData.append('id', idGlobalProducto);
                formData.append('cantidad', this.productosCargar);
                axios.post('../php/addToCart.php', formData)
                .then(response => {
                    alert('Producto añadido al carrito');
                })
                .catch(error => {
                    console.log(error);
                });
            }
        },
        increaseQuantity() {
            if (this.productosCargar < this.maxProducto) {
                this.productosCargar++;
            }
        },
        decreaseQuantity() {
            if (this.productosCargar > 1) {
                this.productosCargar--;
            }
        },
        validateInput() {
            if (this.productosCargar < 1) {
                this.productosCargar = 1;
            } else if (this.productosCargar > this.maxProducto) {
                this.productosCargar = this.maxProducto;
            }
        }
    }
});
</script>
