axios.defaults.headers.common['token'] = global_token;
var app = new Vue({
    el: '#vue-container',
    data: {
        numProductos: 0,
        total: 0.00,
        productosEnCarrito: [],
        productoExiste: null,
        nProdDiferenciaExis: 0,

        idLocalProducto: 0,
        maxProducto: 1,
        productosCargar: 1,
        productoEnVista: null,
    },
    mounted: async function()
    {
        let th = this;
        this.idLocalProducto = idGlobalProducto;
        this.productoEnVista = productoEnVista;
        console.log(this.productoEnVista);

        this.numProductos = parseInt(localStorage.getItem("numProductos"));
        this.total = parseFloat(localStorage.getItem("total"));
        this.productosEnCarrito = JSON.parse(localStorage.getItem("productos"));
        this.revisarExistencia(1);
    },
    methods:
    {
        actualizarProductoCarrito: async function()
        {
            this.revisarExistencia(2);
            if(this.productoExiste)
            {
                let cantidadAumentoReal = parseInt(this.productosCargar) - parseInt(this.productoExiste.CANTIDAD);
                this.numProductos += parseInt(cantidadAumentoReal);
                this.total += parseInt(cantidadAumentoReal) * parseFloat(this.productoExiste.PRECIO_FLOAT);
                this.productoExiste.CANTIDAD = this.productosCargar;
                
                for (var i = 0; i < this.productosEnCarrito.length; i++)
                {
                    if (this.productosEnCarrito[i].ID == this.productoExiste.ID)
                    {
                        this.productosEnCarrito[i] = this.productoExiste;
                        break;
                    }
                }
            }
            else
            {
                this.productoEnVista.CANTIDAD = parseInt(this.productosCargar);
                this.numProductos +=  parseInt(this.productosCargar);
                this.total += parseInt(this.productosCargar) * parseFloat(this.productoEnVista.PRECIO_FLOAT);
                this.productosEnCarrito.push(this.productoEnVista);
            }

            await this.actualizarCarrito();
        },

        validarEntrada: function()
        {
            this.productosCargar = parseInt(this.productosCargar.toString().replace('-',''));
            if(isNaN(this.productosCargar) || parseInt(this.productosCargar) < 1)
                this.productosCargar = 1;
            if(this.productoExiste && this.productosCargar > this.productoExiste.EXISTENCIAS)
                this.productosCargar = this.productoExiste.EXISTENCIAS

        },

        revisarExistencia: function(opcion)
        {
            let th = this;
            let productoExiste = this.productosEnCarrito.find(function(item) {
                return item.ID == th.idLocalProducto;
            });
    
            console.log(productoExiste);
            if(productoExiste)
            {
                this.maxProducto = productoExiste.EXISTENCIAS;
                if(opcion == 1)
                    this.productosCargar = parseInt(productoExiste.CANTIDAD);
                
            }
            else 
            {
                this.maxProducto = this.productoEnVista.EXISTENCIAS;
            }
    
            this.productoExiste = productoExiste;
        },

        actualizarCarrito: async function(){
            appCarrito.$root.$data.numProductos = this.numProductos;
            appCarrito.$root.$data.total = parseFloat(this.total).toFixed(2);
            appCarrito.$root.$data.productos = this.productosEnCarrito;
    
            console.log(this.productosEnCarrito);
            localStorage.setItem("numProductos", this.numProductos);
            localStorage.setItem("total", parseFloat(this.total).toFixed(2));
            localStorage.setItem("productos", JSON.stringify(this.productosEnCarrito)); 
        },
    }
});