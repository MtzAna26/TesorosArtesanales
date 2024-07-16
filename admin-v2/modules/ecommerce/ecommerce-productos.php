<!--begin::Page Vendors Styles(used by this page)-->
<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
	<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
		<!--begin::Info-->
		<div class="d-flex align-items-center flex-wrap mr-2">
			<a onclick="window.history.back();" class="btn btn-transparent-primary btn-hover-primary btn-sm btn-icon mr-2" data-toggle="tooltip" data-placement="top" data-original-title="Regresar">
				<i class="far fa-caret-square-left"></i>
			</a>
			<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Productos VERSION 2</h5>
			<div class="d-flex align-items-center" id="vue-search">
				<div class="ml-5">
					<div class="input-group input-group-sm input-group-solid" style="max-width: 175px">
						<input type="text" class="form-control" id="kt_subheader_search_form" placeholder="Buscar..." @keyup="filtrarProductos()" v-model="search">
						<div class="input-group-append">
							<span class="input-group-text">
								<span class="svg-icon">
									<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24"></rect>
											<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
											<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
										</g>
									</svg>
									<!--end::Svg Icon-->
								</span>
								<!--<i class="flaticon2-search-1 icon-sm"></i>-->
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end::Info-->
		<!--begin::Toolbar-->
		<div class="d-flex align-items-center">
			<!--begin::Actions-->
			<!-- <a href="#" id="export_excel" class="btn btn-transparent-primary btn-hover-primary btn-sm btn-icon mr-2" data-toggle="tooltip" data-placement="top" data-original-title="Descargar a excel">
					<i class="fas fa-download"></i>
				</a> -->

			<a href="./?view=ecommerce-editar-producto&menu=ecommerce-productos" class="btn btn-light-primary font-weight-bold btn-sm px-4 font-size-base ml-2" data-toggle="tooltip" data-placement="top" data-original-title="Nuevo producto"> Agregar producto
				<!-- <i class="far fa-plus-square"></i> -->
			</a>
			<!--end::Actions-->
		</div>
		<!--end::Toolbar-->
	</div>
</div>

<div class="content d-flex flex-column flex-column-fluid" id="vue-content" style="padding: 0px; position: relative; top: 15px;">
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container" v-cloak>
			<!--begin::Card-->
			<div class="card card-custom">
				<div class="card-header flex-wrap border-0 pt-6 pb-0">
					<div class="card-body">
						<!--begin: Datatable-->
						<table class="table table-separate table-hover table-head-custom table-checkable" id="datatable-cursos">
							<thead>
								<tr>
									<th>{{valor_id}}</th>
									<th>Imágen</th>
									<th>Nombre</th>
									<th>Precio</th>
									<th>Existencias</th>
									<th>Categoria</th>
									<th>Etiquetas</th>
									<th>Activo</th>
									<th>Acciones</th>
								</tr>
							</thead>
						</table>
						<!--end: Datatable-->
					</div>
				</div>
				<!--end::Card-->
			</div>
			<!--end::Container-->
		</div>
		<!--end::Entry-->
	</div>
</div>
