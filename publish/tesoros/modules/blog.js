axios.defaults.headers.common['token'] = global_token;

var app = new Vue({
    el: '#vue-app-blog',
    data: {
        pagina_actual: 1,
        categoria: "",
        articulos: [],
        total_de_resultados:0
    },
    mounted: function () {
        console.log("Vue cargó correctamente");
        this.get_all_articulos();
    },
    methods: {
        get_all_articulos: async function() {
            let th = this;
            if(th.busqueda === await axios.get(global_apiserver + '/public/blog/articulos/pagination/?p='+th.pagina_actual+'&c='+th.categoria))
            th.articulos = response.data.data;
            total_de_resultados = response.data.total;
            th.total_de_resultados = total_de_resultados;
            console.log(total_de_resultados);
        }
    }
});
