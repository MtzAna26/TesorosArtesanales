document.addEventListener('DOMContentLoaded', () => {
    var app = new Vue({
      el: '#vue-content-checkout',
      data: {
        subtotal: 0.00,
        envio: 0.00,
        costoEnvio: {},
        total: 0.00,
        productos: [],
        datosOrden: {
          NOMBRE: '',
          APELLIDOS: '',
          EMAIL: '',
          TELEFONO: '',
          PAIS: '',
          ESTADO: '',
          MUNICIPIO: '',
          CALLE: '',
          NUM_INTERIOR: '',
          NUM_EXTERIOR: '',
          CODIGO_POSTAL: '',
          NOTAS_CLIENTE: '',
          PAGO_CON: 'MercadoPago',
          PRODUCTOS: [],
        },
        descuento: {},
        cuponActivo: false,
        descuentoes: '',
        total_descuento: 0.00,
      },
      mounted: function () {
        this.obtenerCostoEnvio();
        this.verificarProductos();
        this.verificarCupon();
      },
      methods: {
        obtenerCostoEnvio() {
          this.costoEnvio = JSON.parse(localStorage.getItem('costo_envio_tago'));
          this.envio = this.costoEnvio.COSTO_ENVIO;
        },
        verificarProductos() {
          this.productos = JSON.parse(localStorage.getItem('productos'));
  
          this.total = this.subtotal = this.productos.reduce(
            (ac, producto) => ac + producto.CANTIDAD * producto.PRECIO,
            0
          );
  
          if (localStorage.getItem('descuento')) {
            this.descuento = JSON.parse(localStorage.getItem('descuento'));
            this.cuponActivo = true;
            this.descuentoes =
              this.descuento.tipo === 'porcentaje'
                ? `%${this.descuento.valor}`
                : `$${this.descuento.valor}`;
            this.total_descuento = this.descuento.total.toFixed(2);
            this.total = parseFloat(this.total_descuento) + parseFloat(this.envio);
          } else {
            this.total = parseFloat(this.subtotal) + parseFloat(this.envio);
          }
        },
        verificarCupon() {
          if (!this.descuento) {
            this.cuponActivo = false;
            return;
          }
          let cupones = localStorage.getItem('cupon_tago');
          if (cupones) {
            this.cupon = JSON.parse(cupones);
          }
        },
        realizarOrden: async function () {
          try {
            const response = await axios.post(
              `${global_apiserver}/public/ecommerce/ordenar/`,
              this.datosOrden
            );
  
            localStorage.removeItem('productos');
            localStorage.removeItem('cupon_tago');
            localStorage.removeItem('costo_envio_tago');
            localStorage.removeItem('descuento');
  
            Swal.fire({
              icon: 'success',
              title: '¡Excelente!',
              text: 'Redirigiendo al pago...',
              showConfirmButton: false,
              timer: 2000,
            });
  
            setTimeout(() => {
              window.location.replace(`./pago?orden=${response.data.id}`);
            }, 2000);
          } catch (error) {
            Swal.fire({
              icon: 'error',
              title: '¡Algo salió mal!',
              text: error.response.data.message,
            });
          }
        },
      },
    });
  });
  