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

define( 'THEME_NAME', get_option('stylesheet') );

function my_scripts_method() {
    wp_enqueue_script(
        'custom-script',
        get_stylesheet_directory_uri() . '/js/main.js',
        array( 'jquery' ),
        '1.2'
    );

    if ( !is_admin() ) {
        /** */
		wp_localize_script( 'custom-script', 'ajax', array(
            'url' =>            admin_url( 'admin-ajax.php' ),
            'ajax_nonce' =>     wp_create_nonce( 'noncy_nonce' ),
            'assets_url' =>     get_stylesheet_directory_uri(),
		) );
    }	
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
function realhero_ajax_subscribe() {
    check_ajax_referer( 'noncy_nonce', 'nonce' );
    $data = urldecode( $_POST['data'] );

    if ( !empty( $data ) ) :
        $data_array = explode( "&", $data );
        $fields = [];
        foreach ( $data_array as $array ) :
            $array = explode( "=", $array );
            $fields[ $array[0] ] = $array[1];
        endforeach;
    endif;

    if ( !empty( $fields ) ) :
        global $wpdb;
		
		// check if already exists
		
		/** @var int $count **/
		$count = $wpdb->get_var( $wpdb->prepare("SELECT COUNT(*) FROM {$wpdb->prefix}newsletter WHERE email = %s", $fields['ne'] ) );
		
		if( $count > 0 ) {
	        $output = array(
	            'status'    => 'error',
	            'msg'       => __( 'Este email ya se encuentra suscrito.', THEME_NAME )
	        );
        } elseif( !defined( 'NEWSLETTER_VERSION' ) ) {
            $output = array(
	            'status'    => 'error',
	            'msg'       => __( 'Please install & activate newsletter plugin.', THEME_NAME )
	        );           
        } else {
            /**
             * Generate token
             */
            
            /** @var string $token */
            $token =  wp_generate_password( rand( 10, 50 ), false );


	        $wpdb->insert( $wpdb->prefix . 'newsletter', array(
	                'email'         => $fields['ne'],
	                'status'        => $fields['na'],
                    'http_referer'  => $fields['nhr'],
                    'token'         => $token,
	            )
            );

            $opts = get_option('newsletter');

            $opt_in = (int) $opts['noconfirmation'];

            // This means that double opt in is enabled
            // so we need to send activation e-mail
            if ($opt_in == 0) {
                $newsletter = Newsletter::instance();
                $user = NewsletterUsers::instance()->get_user( $wpdb->insert_id );

                NewsletterSubscription::instance()->mail($user->email, $newsletter->replace($opts['confirmation_subject'], $user), $newsletter->replace($opts['confirmation_message'], $user));
            }

	        $output = array(
	            'status'    => 'success',
	            'msg'       => __( 'Thank you!', THEME_NAME )
	        );	
		}
		
    else :
        $output = array(
            'status'    => 'error',
            'msg'       => __( 'Ocurrió un error. Por favor intente mas tarde.', THEME_NAME  )
        );
    endif;
	
    wp_send_json( $output );
}
add_action( 'wp_ajax_realhero_subscribe', 'realhero_ajax_subscribe' );
add_action( 'wp_ajax_nopriv_realhero_subscribe', 'realhero_ajax_subscribe' );

add_filter( 'posts_where', 'title_like_posts_where', 10, 2 );
function title_like_posts_where( $where, $wp_query ) {
    global $wpdb;
    if ( $post_title_like = $wp_query->get( 'post_title_like' ) ) {
        $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( $wpdb->esc_like( $post_title_like ) ) . '%\'';
    }
    return $where;
}