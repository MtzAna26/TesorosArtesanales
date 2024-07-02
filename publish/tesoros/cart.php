
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
      <a href="cart.php" class="cus-btn">VER CARRITO</a>

          <a href="checkout.php" class="cus-btn active-btn">VERIFICAR</a>
      </div>
  </aside>
    <div id="sidebar-cart-curtain" class="close-popup"></div>
    <!-- Cart Popup End -->

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

<script src="assets/js/vendor/jquery-3.6.3.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/jquery-appear.js"></script>
    <script src="assets/js/vendor/jquery-validator.js"></script>
    <script src="assets/js/vendor/jquery.countdown.min.js"></script>
    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>