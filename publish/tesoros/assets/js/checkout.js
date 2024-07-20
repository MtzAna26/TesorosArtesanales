// Define global_token
var global_token = 'TEST-b5118a54-c0a7-4874-8533-9d0cdc241374'; // Replace with the real token

// Set default headers for axios
axios.defaults.headers.common['Authorization'] = `Bearer ${global_token}`; // Use Authorization header

// Define the route for checkout.php
var checkoutUrl = 'https://dev.clevertechnology.com.mx/dev/anamart/clevercloud/publish/tesoros/checkout';

// Example usage of global_token
console.log(global_token); // Ensure the token prints

// Initialize Vue instance
var app = new Vue({
    el: '#vue-content-checkout',
    data: {
        subtotal: 0.00,
        shipping: 0.00,
        costoEnvio: {},
        total: 0.00,
        productos: [],
        datosOrden: {
            NOMBRE: "",
            APELLIDOS: "",
            EMAIL: "",
            TELEFONO: "",
            PAIS: "",
            ESTADO: "",
            MUNICIPIO: "",
            CALLE: "",
            NUM_INTERIOR: "",
            NUM_EXTERIOR: "",
            CODIGO_POSTAL: "",
            NOTAS_CLIENTE: "",
            PAGO_CON: "MercadoPago",
            PRODUCTOS: [],
        },
        descuento: {},
        cuponActivo: false,
        descuentoes: "",
        total_descuento: 0.00,
        cupon: {TIPO:"cantidad", VALOR: 0},
    },
    mounted: async function() {
        this.obtenerCostoEnvio();
        this.verificarProductos();
        this.verificarCupon();
    },
    methods: {
        verificarCupon() {
            if (this.cuponActivo) {
                this.total = parseFloat(this.total_descuento) + parseFloat(this.envio);
            } else {
                this.total = parseFloat(this.subtotal) + parseFloat(this.envio);
            }
            let cupones = localStorage.getItem("cupon_tago");
            this.cupon = JSON.parse(cupones);
        },
        verificarDescuento() {
            this.descuento = JSON.parse(localStorage.getItem("descuento"));
            if (parseInt(this.descuento.total) > 0) this.cuponActivo = true;
            if (this.descuento.tipo == "porcentaje") this.descuentoes = `%${this.descuento.valor}`;
            if (this.descuento.tipo == "cantidad") this.descuentoes = `$${this.descuento.valor}`;
            this.total_descuento = parseFloat(this.descuento.total).toFixed(2);
        },
        verificarProductos: function() {
            this.productos = JSON.parse(localStorage.getItem("productos"));
            if (localStorage.getItem("descuento") != null && localStorage.getItem("descuento") != "undefined") {
                this.verificarDescuento();
            }

            for (let i = 0; i < this.productos.length; i++) {
                this.subtotal += this.productos[i].CANTIDAD * this.productos[i].PRECIO;
            }
        },
        obtenerCostoEnvio () {
            this.costoEnvio = JSON.parse(localStorage.getItem("costo_envio_tago"));
            this.envio = this.costoEnvio.COSTO_ENVIO;
        },
        realizarOrden: async function() {
            let carritoString = {};

            this.productos.forEach(element => {
                carritoString['' + element.ID] = element.CANTIDAD;
            });

            this.datosOrden.PRODUCTOS = JSON.stringify(carritoString);
            this.datosOrden.COSTOS_ENVIO = JSON.stringify(this.costoEnvio);
            if (parseInt(this.descuento.total) > 0) this.datosOrden.CUPON = this.cupon;
            if (parseInt(this.descuento.total) > 0 && this.total == 0) {
                this.datosOrden.PAGO_CON = "Cupon";
            }

            await axios.post(`${global_apiserver}/public/ecommerce/ordenar/`, this.datosOrden)
            .then(response => {
                if (response.data.response == "success") {
                    localStorage.removeItem("productos");
                    localStorage.removeItem("cupon_tago");
                    localStorage.removeItem("costo_envio_tago");
                    localStorage.removeItem("descuento");
                    Swal.fire({
                        icon: 'success',
                        title: '¡Excelente!',
                        text: 'Redirigiendo al pago...'
                    })
                    .then(_result => {
                        window.location.replace(`./pago?orden=${response.data.id}`);
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: '¡Algo salió mal!',
                        html: response.data.message
                    });
                }
            })
            .catch(error => {
                console.log(error);
            });
        },
        pruebas: function() {
            let productosOrden = {};
            productosOrden = this.productos.map((elemento) => {
                return {
                    ID: elemento.ID,
                    NOMBRE: elemento.NOMBRE,
                    PRECIO: elemento.PRECIO,
                    CANTIDAD: elemento.CANTIDAD,
                };
            });

            this.datosOrden.PRODUCTOS = JSON.stringify(productosOrden);
            console.log(this.productos);
            console.log(this.datosOrden);
        }
    }
});
