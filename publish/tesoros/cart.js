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
});
