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
      <h2 class="title">Verificar</h2>
    </div>
  </section>
  <section class="checkout pt-96 pb-48">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 mb-48 mb-xl-0">
                            <div class="heading">
                                <h4>Shipping Detail</h4>
                            </div>
                            <div class="design-block shipping">
                                <form action="index.html">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group mb-32">
                                                <input type="text" class="form-control" id="_firstname" name="first_name" required="" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-32">
                                                <input type="text" class="form-control" id="_lastname" name="last_name" required="" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-32">
                                                <input type="email" class="form-control" id="_email" name="email" required="" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-32">
                                                <input type="text" class="form-control" id="_phone" name="phone" required="" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-32">
                                                <input type="text" class="form-control" id="_country" name="country" required="" placeholder="Country">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-32">
                                                <input type="text" class="form-control" id="_state" name="state" required="" placeholder="State / County">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-32">
                                                <input type="text" class="form-control" id="_houseadress" name="house_address" required="" placeholder="House no and street name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-32">
                                                <input type="text" class="form-control" id="_appartmentadress" name="apartment_address" placeholder="Apartment, suite, (optional)">
                                            </div>
                                        </div>
                                        <div class="formGroup2">
                                            <input type="checkbox" id="keepcheck">
                                            <label for="keepcheck"> Billing Address Same As Shipping Address</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="heading">
                                <h4>Billing Detail</h4>
                            </div>
                            <div class="design-block billing">
                                <form action="index.html">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group mb-32">
                                                <input type="text" class="form-control" id="firstname" name="first_name" required="" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-32">
                                                <input type="text" class="form-control" id="lastname" name="last_name" required="" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-32">
                                                <input type="email" class="form-control" id="email" name="email" required="" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-32">
                                                <input type="text" class="form-control" id="phone" name="phone" required="" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-32">
                                                <input type="text" class="form-control" id="country" name="country" required="" placeholder="Country">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-32">
                                                <input type="text" class="form-control" id="state" name="state" required="" placeholder="State / County">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-32">
                                                <input type="text" class="form-control" id="houseadress" name="house_address" required="" placeholder="House no and street name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-32">
                                                <input type="text" class="form-control" id="appartmentadress" name="apartment_address" placeholder="Apartment, suite, (optional)">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Cart Area end -->

            <!-- Cart Area start -->
           
            <section class="cart pt-48 pb-48">
  <div class="container">
    <div class="row">
      <div class="heading">
        <h4>Cart Items</h4>
      </div>
      <div class="col-xl-8 col-lg-12 d-lg-block d-none">
        <table id="checkout-cart-table" class="cart-table-lg">
          <thead>
            <tr class="upper-row">
              <th>Producto</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
            <!-- Aquí se insertarán las filas del carrito dinámicamente -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

    <script src="assets/js/vendor/jquery-3.6.3.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
   
<script>
document.addEventListener("DOMContentLoaded", function() {
  const cart = JSON.parse(localStorage.getItem('cart')) || [];

  console.log('Cart Items:', cart); 

  function updateCheckoutCartView() {
    const checkoutCartTableBody = document.getElementById('checkout-cart-table').querySelector('tbody');
    checkoutCartTableBody.innerHTML = '';

    let totalPrice = 0;

    cart.forEach((item) => {
      const row = document.createElement('tr');
      row.innerHTML = `
        <td class="img-block"><img src="${item.image}" alt="${item.name}" style="max-width: 50px;"></td>
        <td class="price-number">$${item.price.toFixed(2)}</td>
        <td>${item.quantity}</td>
        <td class="price-number">$${(item.price * item.quantity).toFixed(2)}</td>
      `;
      checkoutCartTableBody.appendChild(row);

      totalPrice += item.price * item.quantity;
    });

    console.log('Total Price:', totalPrice);


    document.getElementById('checkout-total').textContent = '$' + totalPrice.toFixed(2);
  }

  updateCheckoutCartView();
});

</script>
</body>

</html>
