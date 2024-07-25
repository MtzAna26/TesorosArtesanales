document.addEventListener('DOMContentLoaded', function() {
    new Vue({
        el: '#vue-container',
        data: {
            global_public_repo: '>',
            products: [
                {
                    "IMAGEN": "artesania-trompo.jpg",
                    "NOMBRE": "Trompo",
                    "PRECIO_FLOAT": "66.00",
                    "PRECIO_ORIGINAL": "66.00",
                    "PERMALINK": "TRJDM97760"
                },
                {
                    "IMAGEN": "producto-alebrije.jpg",
                    "NOMBRE": "Alebrijes",
                    "PRECIO_FLOAT": "200.00",
                    "PRECIO_ORIGINAL": "200.00",
                    "PERMALINK": "AOP2445GHJG"
                }
            ],
        },
        mounted() {
            console.log('Productos:', this.products);
        },
        methods: {
            addProductoCarrito(producto) {
                // Implementar lógica de agregar producto al carrito
            },
            formatCurrency(value) {
                return new Intl.NumberFormat('es-ES', { style: 'currency', currency: 'USD' }).format(value);
            }
        },
    });
});
