<div class="blog-content-area" id="vue-app-articulo">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="blog-post-card">
                    <div class="blog-post-thumbnail">
                        <img :src="'<?php echo $global_public_repo;?>/' + datos_generales.IMAGEN" alt="" class="img-fluid">
                    </div>
                    <div class="blog-post-content">
                        <div class="blog-post-meta">
                            <span class="post-date"><i class="fa-solid fa-clock"></i> {{ datos_generales.FECHA_CREACION }}</span>
                            <span class="post-category"><i class="fa-solid fa-folder"></i> {{ datos_generales.CATEGORIA }}</span>
                        </div>
                        <h1 class="post-title">{{ datos_generales.TITULO_ARTICULO }}</h1>
                        <p class="post-summary">{{ datos_generales.RESUMEN }}</p>
                        
                        <div v-if="secciones.length" class="post-sections">
                            <div v-for="s in secciones" :key="s.ID">
                                <template v-if="s.TIPO === 'texto' && !s.esResumen">
                                    <div v-html="s.VALUE" class="post-section-text"></div>
                                </template>
                                <template v-else-if="s.TIPO === 'youtube'">
                                    <div class="post-section-video">
                                        <iframe width="100%" height="400" style="max-height: 50vw" :src="s.VALUE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </div>
                                </template>
                                <template v-else-if="s.TIPO === 'imagen'">
                                    <div class="post-section-image">
                                        <a :href="s.VALUE.link" target="_blank">
                                            <figure>
                                                <img :src="'<?php echo $global_public_repo;?>/' + s.VALUE.imagen" :alt="s.VALUE.alt" class="img-fluid" style="width: 20rem;">
                                            </figure>
                                        </a>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo $ref_rel;?>modules/articulo.js"></script>

<style>
    .blog-content-area {
        padding: 20px 0;
    }
    .blog-post-card {
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }
    .blog-post-thumbnail img {
        width: 100%;
        height: auto;
    }
    .blog-post-content {
        padding: 20px;
    }
    .blog-post-meta {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
        color: #777;
    }
    .post-title {
        font-size: 2rem;
        margin-bottom: 15px;
    }
    .post-summary {
        font-size: 1.2rem;
        margin-bottom: 20px;
    }
    .post-sections .post-section-text {
        margin-bottom: 20px;
        font-size: 1rem;
        line-height: 1.6;
    }
    .post-sections .post-section-video {
        margin-bottom: 20px;
    }
    .post-sections .post-section-image {
        margin-bottom: 20px;
        text-align: center;
    }
    .post-sections .post-section-image img {
        max-width: 100%;
        height: auto;
    }
</style>
