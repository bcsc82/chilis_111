<?php

/** Load the Core Files */
require_once( trailingslashit( get_template_directory() ) . 'includes/init.php' );
require_once( trailingslashit( get_template_directory() ) . 'includes/widgets.php' );
require_once( trailingslashit( get_template_directory() ) . 'admin/theme_plugins.php' );
require_once( trailingslashit( get_template_directory() ) . 'admin/theme_welcome.php' );

define('DISTINCTIVETHEMES_THEME', 'DistinctPress');
define('DISTINCTIVETHEMES_THEME_DIR', get_stylesheet_directory_uri());
define('DISTINCTIVETHEMES_THEME_LOGO', DISTINCTIVETHEMES_THEME_DIR.'/assets/images/headers/header-default.png');

new DistinctPress();

/** Do theme setup on the 'after_setup_theme' hook. */
add_action( 'after_setup_theme', 'distinctpress_theme_setup' );

/** Theme setup function. */
function distinctpress_theme_setup() {	

	/** Add theme support for Feed Links. */
	add_theme_support( 'automatic-feed-links' );		

	/** Set content width. */
	distinctpress_set_content_width( 750 );	

	/** Add custom image sizes. */
	add_action( 'init', 'distinctpress_add_image_sizes' );

	$custom_header_support = array( 	

	'default-image' => '%s/assets/images/headers/header-default.png',
	'default-text-color' => '',
	'width' => apply_filters( 'distinctpress_header_image_width', 280 ),
	'height' => apply_filters( 'distinctpress_header_image_height', 80 ),
	'flex-height' => true,
	'header-text' => false,
	'wp-head-callback' => 'distinctpress_header_style',
	'admin-head-callback' => 'distinctpress_admin_header_style',
	'admin-preview-callback' => 'distinctpress_admin_header_image'
	);

	add_theme_support( 'custom-header', $custom_header_support );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( "title-tag" );

}

/** Adds custom image sizes */
function distinctpress_add_image_sizes() {

	add_image_size( 'distinctpress-full-featured', 640, 300, true );
	add_image_size( 'distinctpress-full-featured-tall', 640, 460, true );
	add_image_size( 'distinctpress-featured', 200, 200, true );
	add_image_size( 'distinctpress-featured-widget', 60, 60, true );

}

/**
* Add theme support for Portfolio Custom Post Type.
*/
add_action( 'after_setup_theme', 'slug_jetpack_portfolio_cpt' );
function slug_jetpack_portfolio_cpt() {
	add_theme_support( 'jetpack-portfolio' );
}


?>