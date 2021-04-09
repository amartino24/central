<?php
/*
 * Template Name: El Club
 * description:
  Page template without sidebar
 */

get_header();
 ?>
<p><?php echo get_the_title() ?></p>
<p><?php echo get_post_meta(get_the_ID(), 'texto_principal', TRUE); ?></p>
<?php
/* Start the Loop */
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/content/content-page' );

    // If comments are open or there is at least one comment, load up the comment template.

endwhile; // End of the loop.

get_footer();
