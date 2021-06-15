<?php
/*
 * Template Name: Pagina General
 * Template Post Type: page

 * description:
  Page de contenido general
 */

get_header();
?>
<section class="predio page bg-grey">

   
    <div class="contenido bg-white">
        <div class="container">

            <div class='titulo azul-fg'>
                <?php echo get_the_title() ?>
            </div>
            <div class="ubicacion amarillo-fg">
        
            <div class='subtitulo azul-fg'>
                <?php echo CFS()->get('subtitulo', $post->ID); ?>
            </div>
            <?php $imagenes = CFS()->get('imagenes');
            if (isset($imagenes)) { ?>
                <div class="carousel-container">
                    <div class='carousel owl-carousel' id="contenido-carousel">

                        <?php
                        foreach ($imagenes as $imagen) {
                            foreach ($imagen as $result) {
                        ?>
                                <img class="post-image br-20" src="<?php echo
                                                                    wp_get_attachment_image_src($result,  'noticia-grande')[0]; ?>">
                            <?php } ?>



                        <?php } ?>
                    </div>
                    <?php if (count($imagenes) > 1)
                    { ?>
                    <div class="arrows">
                        <svg xmlns="http://www.w3.org/2000/svg" id="prevImgBtn" class="pointer" width="8.399" height="14.69" viewBox="0 0 8.399 14.69">
                            <path id="Icon_ionic-ios-arrow-forward" data-name="Icon ionic-ios-arrow-forward" d="M5.867,7.342.308,1.788a1.045,1.045,0,0,1,0-1.483A1.059,1.059,0,0,1,1.8.305L8.094,6.6a1.048,1.048,0,0,1,.031,1.448L1.8,14.384A1.05,1.05,0,0,1,.313,12.9Z" transform="translate(8.399 14.69) rotate(180)" fill="#2680eb" />
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" id="nextImgBtn" class="pointer right" width="8.399" height="14.692" viewBox="0 0 8.399 14.692">
                            <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M2.532,7.344,8.091,1.789A1.05,1.05,0,0,0,6.6.307L.306,6.6A1.048,1.048,0,0,0,.275,8.048L6.6,14.386A1.05,1.05,0,0,0,8.087,12.9Z" transform="translate(8.399 14.692) rotate(180)" fill="#2680eb" />
                        </svg>

                    </div>
                    <?php } ?>
                </div>
            <?php } ?>

            <div class='texto azul-secundario-fg'>
                <?php echo CFS()->get('contenido', $post->ID); ?>
            </div>
        </div>


    </div>
</section>

<script>
    $(document).ready(function() {
        const $imgCarousel = $("#contenido-carousel").owlCarousel({
            items: 1,
        });
        $('#nextImgBtn').click(function() {
            $imgCarousel.trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('#prevImgBtn').click(function() {
            $imgCarousel.trigger('prev.owl.carousel');
        })
    })
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