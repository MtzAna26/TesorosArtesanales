axios.defaults.headers.common['token'] = global_token;

var app = new Vue({
    el: '#vue-app-articulo',
    data: {
        pagina_actual: 1,
        categoria: "",
        articulos: [],
        total_de_resultados: 0,
        datos_generales: "",
        ID: "",
        secciones: []
    },
    mounted: function () {
        console.log("Vue cargó correctamente");
        this.get_articulo();
    },
    methods: {
        get_articulo: async function () {
            try {
                let url = window.location.href;
                let wawa = url.split('/');
                this.permalink = wawa.slice(-1)[0];
                let response = await axios.get(global_apiserver + '/public/blog/articulo/?articulo=' + this.permalink);
                this.datos_generales = response.data.data;
                this.ID = response.data.data.ID;
                console.log(this.datos_generales);
                await this.get_secciones();
                await this.get_featured(this.ID);
            } catch (error) {
                console.error('Error fetching article:', error);
            }
        },
        get_secciones: async function () {
            try {
                let response = await axios.get(global_apiserver + '/public/blog/articulo/secciones/?articulo=' + this.permalink);
                this.secciones = response.data.data;
                console.log(this.secciones);
                for (const key in this.secciones) {
                    let seccion = this.secciones[key];
                    if (seccion.TIPO === 'youtube') {
                        this.secciones[key].VALUE = seccion.VALUE.replace("/watch?v=", "/embed/");
                    }
                    if (seccion.TIPO === 'imagen') {
                        this.secciones[key].VALUE = JSON.parse(seccion.VALUE);
                    }
                }
            } catch (error) {
                console.error('Error fetching sections:', error);
            }
        },
        get_featured: async function (ID) {
            try {
                console.log('get_featured called with ID:', ID);
            } catch (error) {
                console.error('Error in get_featured:', error);
            }
        }
    }
});

