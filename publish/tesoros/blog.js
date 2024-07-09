   axios.defaults.headers.common['token'] = global_token;

    var app = new Vue({
      el: '#vue-app-blog',
      data: {
        pagina_actual: 1,
        categoria: "",
        articulos: [],
        total_de_resultados: 0
      },
      mounted: function() {
        console.log("Vue cargó correctamente");
        this.get_all_articulos();
      },
      methods: {
        get_all_articulos: async function() {
          try {
            let response = await axios.get(global_apiserver + '/public/blog/articulos/paginacion/?p=' + this.pagina_actual + '&c=' + this.categoria);
            console.log(response);
            this.articulos = response.data.data;
            this.total_de_resultados = response.data.total;
            console.log(this.articulos);
          } catch (error) {
            console.error("Error al obtener los artículos: ", error);
          }
        }
      }
    });