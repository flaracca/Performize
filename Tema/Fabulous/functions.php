<?php

/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) )
    $content_width = 800; /* pixels */

if ( ! function_exists( 'fabt_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function fabt_setup() {

    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'fabtheme', get_template_directory() . '/languages' );

    /**
     * Add default posts and comments RSS feed links to &lt;head>.
     */
    add_theme_support( 'automatic-feed-links' );

    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 50, 50);
    add_image_size( 'single-post-thumbnail', 590, 180 );

    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'fabtheme' )
    ) );

    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

        
    

}
endif; // myfirsttheme_setup
add_action( 'after_setup_theme', 'fabt_setup' );


/*
** Aggiungi assets di Bootstrap 5
*/

add_action( 'wp_enqueue_scripts', 'enqueue_fabt_bootstrap' );
function enqueue_fabt_bootstrap() {
    
    wp_enqueue_script('fabt_bootstrap_js_01', get_template_directory_uri() . "/assets/bootstrap/js/bootstrap.bundle.min.js");
    wp_enqueue_style( 'fabt_bootstrap_css_01', get_template_directory_uri() . "/assets/bootstrap/css/bootstrap.min.css");

};

/*
** Funzioni per registrare ed accodare scripts e css
*/
add_action( 'wp_enqueue_scripts', 'fabt_archive_register' );	
function fabt_archive_register() {

	wp_enqueue_style('fabt_archive_css_01', get_template_directory_uri() . "/assets/css/archive.css");
		
}

function fabt_archive_enqueue(){
		
    wp_enqueue_style('fabt_archive_css_01');

}


/*
** Registrazione Sidebar
*/
add_action( 'widgets_init', 'fabt_sidebars' );

function fabt_sidebars(){

    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'fabtheme' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

}


