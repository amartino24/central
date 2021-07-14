<?php
/*
 * Template Name: Lista Expandible
 * description:
  Page template without sidebar
 */

get_header();
?>
<section class="deportes bg-grey">

    <div class="container">
        <div class="page-title azul-fg bold">
            <?php echo get_the_title() ?>
        </div>
    </div>
    <div class="lista bg-white">
        <div class="container">



                <div class="flex info j-between">
                    <?php $content =  get_the_content();       if ($content != '') { ?>
                    <div class="contenido-pagina azul-fg">
                        <?php echo $content; ?>
                    </div>
                        <img class="featured-img" src="<?php echo get_the_post_thumbnail_url(); ?>">
                      <?php } ?>
                </div>


            <?php $categorias = CFS()->get('categorias');

            if (isset($categorias)) {


                foreach ($categorias as $categoria) { ?>
                <div class="categoria">
                <div class="categoria-titulo flex a-center j-between amarillo-fg bg-dark-blue" onclick="expandCategoria(this)">
                <div><?php echo $categoria["titulo"] ?></div>
                <svg xmlns="http://www.w3.org/2000/svg" width="13.712" height="12.101" viewBox="0 0 13.712 12.101">
                    <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward" d="M20.986,11.514a.933.933,0,0,0-.007,1.314l4.342,4.349H17.254a.928.928,0,0,0,0,1.857h8.059l-4.342,4.349a.94.94,0,0,0,.007,1.314.925.925,0,0,0,1.307-.007l5.884-5.927h0a1.042,1.042,0,0,0,.193-.293.886.886,0,0,0,.071-.357.931.931,0,0,0-.264-.65l-5.884-5.927A.91.91,0,0,0,20.986,11.514Z" transform="translate(24.963 -16.332) rotate(90)" fill="#FFFFFF" />
                </svg>
            </div>
                <div class="categoria-contenido">
                    <?php 
                if (isset($categoria["items"])) {
                        foreach ($categoria["items"] as $item) { ?>

                            <article class="deporte">
                                <div class="title" onclick="expand(this)">
                                    <div class="text"><?php echo $item['titulo']; ?></div>
                                    <div class="icon" title="Mas Información"></div>
                                </div>
                                <div class="content">
                                    <?php if (isset(wp_get_attachment_image_src($item['imagen'], 'noticia-grande')[0]))
                                     { ?>
                                    <div class="imagen-container">

                                        <img src="<?php echo wp_get_attachment_image_src($item['imagen'], 'noticia-grande')[0] ?>">
                                    </div>
                                    <?php } ?>
                                    <div class="data">
                                        <div class="redes-sociales-item">
                                            <?php if (isset($item["whatsapp"]) && $item["whatsapp"] != '') { ?>
                                                <a class="whatsapp" target="_blank" title="Contactanos por whatsapp" href="https://wa.me/<?php echo $item["whatsapp"] ?>" target="_blank">
                                                    <img src='<?php echo get_template_directory_uri(); ?>/imagenes/social/whatsapp.png'>
                                                </a>

                                            <?php }
                                            if (isset($item["facebook"]) && $item["facebook"] != '') { ?>
                                                <a class="facebook" title="Seguinos en Facebook" href="<?php echo $item["facebook"] ?>" target="_blank">
                                                    <img src='<?php echo get_template_directory_uri(); ?>/imagenes/social/facebook.png'>
                                                </a>
                                            <?php }
                                            if (isset($item["twitter"]) && $item["twitter"] != '') { ?>
                                                <a class="twitter" title="Seguinos en Twiiter" href="<?php echo $item["twitter"] ?>" target="_blank">

                                                    <img src='<?php echo get_template_directory_uri(); ?>/imagenes/social/twitter.png'></a>
                                            <?php }
                                            if (isset($item["instagram"]) && $item["instagram"] != '') { ?>
                                                <a class="instagram" title="Seguinos en Instagram" href="<?php echo $item["instagram"] ?>" target="_blank">
                                                    <img src='<?php echo get_template_directory_uri(); ?>/imagenes/social/instagram.png'>
                                                </a>
                                            <?php } ?>
                                        </div>
                                        <div class="info azul-fg">
                                            <?php echo $item['contenido']; ?>
                                        </div>
                                    </div>
                                </div>

                            </article>
            <?php } ?>
                </div>
                </div>
                
                    <?php
               
                    }
                }
            } ?>





            <?php
            $items = CFS()->get('items');
            if (isset($items)) {


                foreach ($items as $item) { ?>
                    <article class="deporte">
                        <div class="title" onclick="expand(this)">
                            <div class="text"><?php echo $item['titulo']; ?></div>
                            <div class="icon" title="Mas Información"></div>
                        </div>
                        <div class="content">
                        <?php if (isset(wp_get_attachment_image_src($item['imagen'], 'noticia-grande')[0]))
                                     { ?>
                            <div class="imagen-container">

                                <img src="<?php echo wp_get_attachment_image_src($item['imagen'], 'noticia-grande')[0] ?>">
                            </div>
                            <?php } ?>
                            <div class="data">
                                <div class="redes-sociales-item">
                                    <?php if (isset($item["whatsapp"]) && $item["whatsapp"] != '') { ?>
                                        <a class="whatsapp" target="_blank" title="Contactanos por whatsapp" href="https://wa.me/<?php echo $item["whatsapp"] ?>" target="_blank">
                                            <img src='<?php echo get_template_directory_uri(); ?>/imagenes/social/whatsapp.png'>
                                        </a>

                                    <?php }
                                    if (isset($item["facebook"])  && $item["facebook"] != '') { ?>
                                        <a class="facebook" title="Seguinos en Facebook" href="<?php echo $item["facebook"] ?>" target="_blank">
                                            <img src='<?php echo get_template_directory_uri(); ?>/imagenes/social/facebook.png'>
                                        </a>
                                    <?php }
                                    if (isset($item["twitter"]) && $item["twitter"] != '') { ?>

                                        <a class="twitter" title="Seguinos en Twiiter" href="<?php echo $item["twitter"] ?>" target="_blank">

                                            <img src='<?php echo get_template_directory_uri(); ?>/imagenes/social/twitter.png'></a>
                                    <?php }
                                    if (isset($item["instagram"])  && $item["instagram"] != '') { ?>
                                        <a class="instagram" title="Seguinos en Instagram" href="<?php echo $item["instagram"] ?>" target="_blank">
                                            <img src='<?php echo get_template_directory_uri(); ?>/imagenes/social/instagram.png'>
                                        </a>
                                    <?php } ?>
                                </div>
                                <div class="info azul-fg">
                                    <?php echo $item['contenido']; ?>
                                </div>
                            </div>
                        </div>

                    </article>
            <?php }
            } ?>

        </div>

    </div>


    </div>
</section>

<script>
    function expand(y) {
        var deporte = y.parentElement;
        deporte.classList.toggle("expanded");
    }
    function expandCategoria(y) {
        var categoria = y.parentElement;
        categoria.classList.toggle("expanded");
    }
    window.addEventListener('scroll', function(e) {
        last_known_scroll_position = window.scrollY;
        var x = document.getElementById("main-escudo");
        if (last_known_scroll_position >= 80) {

            x.classList.add('fixed');
        } else {
            x.classList.remove('fixed');
        }
    });
</script>


<?php get_footer(); ?>