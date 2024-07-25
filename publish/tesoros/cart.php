<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" type="image/x-icon" href="assets/media/tesoroslogo.jpg">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>
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
        <a href="#" class="cus-btn active-btn">VERIFICAR</a> <!-- Botón modificado -->
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
                if (!productCard) return;  // Verificar que el producto está presente
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
            const index = event.target.getAttribute('data-index');
            if (event.target.classList.contains('decrement')) {
                if (cart[index].quantity > 1) {
                    cart[index].quantity -= 1;
                    cartTotal -= cart[index].price;
                }
            } else if (event.target.classList.contains('increment')) {
                cart[index].quantity += 1;
                cartTotal += cart[index].price;
            } else if (event.target.classList.contains('remove-btn')) {
                cartTotal -= cart[index].price * cart[index].quantity;
                cart.splice(index, 1);
            }

            updateCart();
        });

        // Manejo del botón "VERIFICAR"
        document.querySelector('.active-btn').addEventListener('click', function() {
            const cartData = JSON.stringify(cart);
            const cartTotalValue = cartTotal.toFixed(2);

            const form = document.createElement('form');
            form.setAttribute('method', 'post');
            form.setAttribute('action', 'checkout.php'); // Cambio a checkout.php
            form.style.display = 'none';

            const cartInput = document.createElement('input');
            cartInput.setAttribute('type', 'hidden');
            cartInput.setAttribute('name', 'cart');
            cartInput.setAttribute('value', cartData);
            form.appendChild(cartInput);

            const cartTotalInput = document.createElement('input');
            cartTotalInput.setAttribute('type', 'hidden');
            cartTotalInput.setAttribute('name', 'cartTotal');
            cartTotalInput.setAttribute('value', cartTotalValue);
            form.appendChild(cartTotalInput);

            document.body.appendChild(form);
            form.submit();
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
