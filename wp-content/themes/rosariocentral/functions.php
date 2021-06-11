<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

register_nav_menus( array( 
	'header' => 'Header menu', 
	'footer' => 'Footer menu' 
  ) );
/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );

/**
 * Theme Options
 */
require( trailingslashit( get_template_directory() ) . 'inc/theme-options.php' );

add_filter( 'show_admin_bar', '__return_false' );
add_theme_support( 'post-thumbnails' );


add_image_size( 'noticia-chica', 405, 295, true );
add_image_size( 'noticia-dentro', 1050, 680, true );
add_image_size( 'noticia-grande', 1920, 790, true );

function register_custom_widget_area() {
	register_sidebar(
		array(
		'id' => 'newsletter-widget-area',
		'name' => esc_html__( 'Newsletter', 'theme-domain' ),
		'description' => esc_html__( '', 'theme-domain' ),
		'before_widget' => '',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => ''
		)
	);
}
add_action( 'widgets_init', 'register_custom_widget_area' );