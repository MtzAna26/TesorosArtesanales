axios.defaults.headers.common['token'] = global_token;

var app = new Vue({
    el: '#vue-app-blog',
    data: {
        pagina_actual: 1,
        categoria: "",
        articulos: [],
        total_de_resultados: 0
    },
    mounted: function () {
        console.log("Vue cargó correctamente");
        this.get_all_articulo();
    },
    methods: {
        get_articulo: async function() {
            let url = window.location.href;
            let wawa = url.split('/');
            this.permalink = wawa.slice(-1);
            let response = await axios.get(global_apiserver + '/public/blog/articulo/?articulo=' + this.permalink);
            this.datos_generales = response.data.data;
            ID = response.data.data.ID;
            this.ID = ID;
            this.get_secciones();
            this.get_featured(this.ID);
        },
        get_secciones: async function () {
            let response = await axios.get(global_apiserver + '/public/blog/articulo/secciones/?articulo=' + this.permalink);
            this.secciones = response.data.data;
            console.log(this.secciones);
            for (const key in this.secciones) {
                let seccion = this.secciones[key];
                if (seccion.TIPO === 'youtube') {
                    this.secciones[key].VALUE = seccion.VALUE.replace("/watch?v=", "/embed/");
                };
                if (seccion.TIPO === 'imagen') {
                    this.secciones[key].VALUE = JSON.parse(seccion.VALUE);
                };
            }
        }
    }
});
