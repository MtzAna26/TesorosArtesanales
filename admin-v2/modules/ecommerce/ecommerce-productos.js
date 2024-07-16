axios.defaults.headers.common['token'] = GLOBAL_TOKEN; // for all requests 
axios.defaults.headers.common['sesion'] = GLOBAL_SESION; // for all requests

var appSearch = new Vue({
    el: '#vue-search',
    data: {
        search: '',
    },
    
    methods: {
        filtrarProductos () {
            if (this.search.trim()) {
                app.productos_filtrados = app.cursos.filter(producto => {
                    return producto.NOMBRE.toLowerCase().includes(this.search.toLowerCase()) ||
                    producto.DESCRIPCION.toLowerCase().includes(this.search.toLowerCase()) ||
                    producto.CATEGORIA?.toLowerCase().includes(this.search.toLowerCase()) ||
                    producto.ETIQUETAS.toLowerCase().includes(this.search.toLowerCase()) 
                });
            } else {
                app.productos_filtrados = app.cursos;
            }
            app.table.destroy();
            app.llenar_tabla();
        }
    }
});

var app = new Vue({
    el: '#vue-content',
    data: {
        cursos: [],
        productos_filtrados: [],
        table:"",
        valor_id: "",
    },
    mounted: async function(){
        await this.busca_cursos();
        this.llenar_tabla();
        // boton_editar_producto
    },
    methods: {
        busca_cursos: async function() {
            let th = this;
            let response = await axios.get(GLOBAL_APISERVER + '/private/ecommerce/productos/')
            this.cursos = await response.data.data.map(curso => {
                return {
                    ...curso,
                    NOMBRE_PERMA: curso.NOMBRE + ',' + curso.PERMALINK,
                    CATE_ETIQUET: curso.CATEGORIA + ',' + curso.ETIQUETAS,
                }
            });

            th.productos_filtrados = th.cursos;
            let count_sku = this.cursos.filter(curso => curso.SKU).length;
            let count_id = this.cursos.filter(curso => curso.ID).length;
            let count_id_half = count_id / 2;
            if (count_sku >= count_id_half){
                this.valor_id = "SKU";
            }
            else{
                this.valor_id = "ID";
            }

        },
        llenar_tabla: function() {
            let th = this;
            this.table = $('#datatable-cursos').DataTable({
                        responsive: true,
                        pageLength: 50,
                        data: th.productos_filtrados,
                        searching:false,
                        lengthChange:false,
                        columns: [
                            {data: this.valor_id},

                            {data: 'IMAGEN', render : function(data) {
                                if(data === "" || data == " "){
                                    return '<div class="symbol symbol-60 symbol-sm flex-shrink-0"><img src="assets/media/clever/no-image.png" alt="Sin imágen"></div>';
                                }
                                else{
                                    return `<div class="symbol symbol-60 symbol-sm flex-shrink-0"><img src="${GLOBAL_PUBLIC_REPO}/${data}" alt="Sin imágen"></div>`;
                                }
                            }},
                            {data: 'NOMBRE_PERMA', render : function(data) {
                                var nombre_perma = data.split(',');
                                return `<span >
                                            <div class="font-weight-bolder font-size-lg mb-0">${nombre_perma[0]}</div>
                                            <div class="font-weight-bold text-muted">${nombre_perma[1]}</div>
                                        </span>`;
                            }},
                            {data: 'PRECIO'},
                            {data: 'EXISTENCIAS'},
                            {data: 'CATE_ETIQUET', render : function(data) {
                                var cate_etiquet = data.split(',');
                                return `<span>
                                            <div class="font-weight-bolder font-size-lg mb-0"> ${cate_etiquet[0]}</div>                                            
                                        </span>`;
                            }},
                            // tabla existe 
                            {data: 'ETIQUETAS', render : function(data) {
                                var etiquetas = data.split(',');
                                return `<span>
                                            <span style="width: 145px;">
                                                <span class="label label-lg font-weight-bold  label-light-primary label-inline">${etiquetas[0]}</span>
                                            </span>
                                        </span>`;
                            }},

                            {data: 'ACTIVO'},
                            {data: 'ID'}
                        ],
                        buttons: [
                            'print',
                            'copyHtml5',
                            'excelHtml5',
                            'csvHtml5',
                            'pdfHtml5',
                        ],
                        order: [[ 8, "DESC" ]],
                        language: {

                            processing:     "Procesando...",
                            search:         "Buscar",
                            lengthMenu:     "Mostar _MENU_ registros",
                            info:           "Mostrando _START_ a _END_ de _TOTAL_ registros",
                            infoEmpty:      "No se encontraron ventas",
                            infoFiltered:   "(Se encontraron _TOTAL_ registros en este periodo)",
                            infoPostFix:    "",
                            loadingRecords: "Cargando Registros",
                            zeroRecords:    "No se encontraron registros",
                            emptyTable:     "No hay datos disponibles",
                            aria: {
                                sortAscending:  ": activer pour trier la colonne par ordre croissant",
                                sortDescending: ": activer pour trier la colonne par ordre décroissant"
                            }
                        },
                        columnDefs: [
                            {
                                targets: 8,
                                orderable: false,
                                render: function(data, type, full, meta) { 
                                    return `<a href="./?view=ecommerce-editar-producto&menu=ecommerce-productos&id=${data}" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2" data-toggle="tooltip" data-placement="top" data-original-title="Editar webinar">
                                                <i class="fas fa-edit text-muted"></i>
                                            </a>`;
                                    // return `
                                    // <form method='POST' action="./?view=webinars-curso&menu=webinars-curso">
                                    //     <input name="id_curso" value="${data}" hidden>
                                    //     <button type="submit" attr-id="${data}" class="btn btn-sm btn-clean btn-ico boton_editar_curso" title="Editar">\
                                    //        <i class="la la-edit" ></i>
                                    //     </button>
                                    // </form>
                                    // `;
                                },
                            }
                        ],
                        footerCallback: function(row, data, start, end, display) {

                                var column = 2;
                                var api = this.api(), data;

                                // Remove the formatting to get integer data for summation
                                var intVal = function(i) {
                                    return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                };

                                // Total over all pages
                                var total = api.column(column).data().reduce(function(a, b) {
                                    return intVal(a) + intVal(b);
                                }, 0);

                                // Total over this page
                                var pageTotal = api.column(column, {page: 'current'}).data().reduce(function(a, b) {
                                    return intVal(a) + intVal(b);
                                }, 0);

                                // Update footer
                                $(api.column(column).footer()).html(
                                    '$' + KTUtil.numberString(pageTotal.toFixed(2)) + '<br/> (Total de Ventas)',
                                    );
                        },
                    });

 
                    $('#export_print').on('click', function(e) {
                        e.preventDefault();
                        th.table.button(0).trigger();
                    });

                    $('#export_copy').on('click', function(e) {
                        e.preventDefault();
                        th.table.button(1).trigger();
                    });

                    $('#export_excel').on('click', function(e) {
                        e.preventDefault();
                        th.table.button(2).trigger();
                    });

                    $('#export_csv').on('click', function(e) {
                        e.preventDefault();
                        this.table.button(3).trigger();
                    });

                    $('#export_pdf').on('click', function(e) {
                        e.preventDefault();
                        th.table.button(4).trigger();
                    });
        },
        actualiza_tabla:function() {
            this.table.destroy();
            this.busca_cursos();
        },
    },
});