    
                <div class='sidebar-banner'>
                <?php $option = ot_get_option( 'banner_noticias' ); if (isset($option) && $option != '') { ?>
                    <a href="<?php echo ot_get_option( 'banner_noticias_enlace' ) ?>">
                    <img class="banner" src="<?php echo ot_get_option( 'banner_noticias' ); ?>">
                    </a>
    <?php } ?>
              
                    <div class='banner-newsletter  w-100-p'>
                    <div class="newsletter  flex-column j-center a-center azul-fg">
      
                <div class="flex-column texto" id="newsletterSection">
                    <h3>Newsletter</h3>
                    <p>Déjanos tu mail y suscribirte a nuestro newsletter para recibir todas las novedades del club.</p>
                </div>
                <?php include 'newsletter.php' ?>
        </div>
                </div>
                </div>
           

