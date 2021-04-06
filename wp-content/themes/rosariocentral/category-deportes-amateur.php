<?php get_header(); ?>
    <section class="deportes bg-grey">

        <div class="container">
            <div class="page-title azul-fg bold">
                Deportes Amateur
            </div>
        </div>
        <div class="lista bg-white">
            <div class="container">
                <?php
$args_noticias = array(
    'post_type' => 'deportes-amateur',
    'post_status' => 'publish',
    'posts_per_page' => 150,
);
$deportes = new WP_Query( $args_noticias );
if ( $deportes->have_posts() ) : while ( $deportes->have_posts() ) : $deportes->the_post();
    $atributos = get_fields( $post->ID);
    {  ?>
        <article class="deporte">
            <div class="title">
                <div class="text"><?php echo get_the_title($post->ID); ?></div>
                <div class="icon" title="Mas Información" onclick="expand(this)"></div>
            </div>
            <div class="content">
                <div class="imagen-container">
                    <img  src="imagenes/amateur/voley.jpg">
                </div>
                <div class="data">
                    <div class="redes-sociales">

                    </div>
                    <div class="info">
                        <div class="info-titulo azul-fg bold">
                            LUGAR DE PRÁCTICA
                        </div>
                        <div class="info-valor azul-secundario-fg">
                            Gigante de Arryotio -  Cordiviola 1100, Rosario
                        </div>

                        <div class="info-titulo azul-fg bold">
                            DÍAS DE PRÁCTICA
                        </div>
                        <div class="info-valor azul-secundario-fg">
                            Lun, Mier y Vier | 20h
                        </div>

                        <div class="info-titulo azul-fg bold">
                            DESCRIPCIÓN
                        </div>
                        <div class="info-valor azul-secundario-fg">
                            El estadio Gigante de Arroyito es un recinto de fútbol que se encuentra en la ciudad de Rosario, Argentina. Su propietario es el Club Atlético Rosario Central.
                        </div>
                    </div>
                </div>
            </div>

        </article>
        <?php } ?>

<?php
endwhile;
endif;
                ?>

            </div>

        </div>


        </div>
    </section>


<?php get_footer(); ?>