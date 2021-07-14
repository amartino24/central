<?php get_header(); ?>

<section class="noticias single-noticia bg-grey">

    <div class="search-bar  ">
        <div class="container flex a-center">
            <div class="search-input flex a-center br-20">
                <svg xmlns="http://www.w3.org/2000/svg" width="18.872" height="18.877" viewBox="0 0 18.872 18.877">
                    <path id="Icon_ionic-ios-search" data-name="Icon ionic-ios-search" d="M23.151,22l-5.249-5.3a7.48,7.48,0,1,0-1.135,1.15l5.214,5.264a.808.808,0,0,0,1.14.029A.813.813,0,0,0,23.151,22ZM12.024,17.92A5.906,5.906,0,1,1,16.2,16.19,5.87,5.87,0,0,1,12.024,17.92Z" transform="translate(-4.5 -4.493)" fill="#b4b4b4" />
                </svg>
                <input placeholder="Buscar novedades">
            </div>
            <div class="categorias flex a-center br-20">
                <ul>
                    <?php $args = array(
                        'taxonomy' => 'category',
                        'post_type' => 'noticia',
                        'orderby' => 'name',
                        'order'   => 'ASC',
                        'hide_empty'      => false,
                    );
                    $categorias = get_categories($args);
                    foreach ($categorias as $categoria) { ?>
                        <li class="uppercase">
                            <a href="<?php echo get_category_link($categoria->term_id) ?>">
                                <?php echo $categoria->name; ?>
                            </a>
                        </li>
                    <?php } ?>
                    <li class="bold todas azul-fg flex a-center">
                        <a href='<?php echo get_home_url(); ?>/noticias'>
                        VER TODAS LAS NOTICIAS <svg xmlns="http://www.w3.org/2000/svg" width="20.559" height="13.711" viewBox="0 0 20.559 13.711">
                            <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward" d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H8.8a.928.928,0,0,0,0,1.857H25.313l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z" transform="translate(-7.875 -11.252)" fill="#173b6a" />
                        </svg>
                        </a>
                       

                    </li>
                </ul>
            </div>
            <a href="javascript:void(0);" class="mobile-navigation" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </a>
        </div>
    </div>
    <?php $atributos = get_fields($post->ID); ?>
    <div class="gradient-container">
        <div class=" posts-fixture-container ">
            <div class="container flex wrap j-between">
                <div class="post-principal azul-fg  br-20">

                    <div class="flex a-center header-info">
                        <a class="pointer amarillo-fg bold category uppercase"><?php echo get_the_category($post->ID)[0]->name; ?></a>
                        <span class="gris-fg fecha"><?php the_time('j \d\e F \d\e Y - G\h'); ?></span>
                        <div class="share flex a-center">
                        <a class="whatsapp" title="Compartir en Whatsapp"  href="https://api.whatsapp.com/send?text=<?php echo  get_the_title($post->ID) ?>%0a<?php echo get_permalink($post->ID); ?>" data-action="share/whatsapp/share" target="_blank">
                                <img src='<?php echo get_template_directory_uri(); ?>/imagenes/social/whatsapp.png'>
                            </a>
                            <a class="facebook" title="Compartir en Facebook" onclick="shareFacebook()" target="_blank">
                                <img src='<?php echo get_template_directory_uri(); ?>/imagenes/social/facebook.png'>
                            </a>
                            <a class="twitter" title="Seguinos en Twiiter" href="https://twitter.com/intent/tweet?text=<?php echo  get_the_title($post->ID) ?>%20<?php echo get_permalink($post->ID); ?>%20a%20través%20de%20@carcoficial" target="_blank">

                                <img src='<?php echo get_template_directory_uri(); ?>/imagenes/social/twitter.png'></a>
                        </div>
                    </div>
                    <div class="content flex-column">
                        <a class="pointer post-title bold"><?php echo get_the_title($post->ID); ?></a>
                        <?php $subtitle = get_the_excerpt($post->ID); 
                        if (isset($subtitle) && $subtitle != '') {?>
                        <p class="pointer post-subtitle"><?php echo  $subtitle?></p>
                        <?php } ?>
                        <?php if ($atributos["mostrar_imagen_contenido"]) { ?>
                        <img src="<?php echo $atributos["image"]["url"] ?>" class="br-20">
                        <?php } ?>
                        <div class="text azul-secundario-fg"><?php echo get_the_content($post->ID); ?></div>
                    </div>
                </div>
                <?php include "inc/banner-newsletter.php"; ?>

                <?php include "inc/posts-carousel.php"; ?>
            </div>

        </div>

    </div>
    <?php include "inc/videos.php"; ?>

</section>
<script>
    function shareFacebook() {
        window.open(
            'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(location.href),
            'facebook-share-dialog',
            'width=626,height=436');
    }

    function shareTwitter() {
        window.open(
            '',
            'twitter-share-dialog',
            'width=626,height=436');
    }
</script>
<?php get_footer(); ?>