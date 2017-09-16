<?php

/** Register Distinctive Alpha Core scripts. */
add_action( 'wp_enqueue_scripts', 'distinctpress_register_scripts', 1 );

/** Load Distinctive Alpha Core scripts. */
add_action( 'wp_enqueue_scripts', 'distinctpress_enqueue_scripts' );

/** Register JavaScript and Stylesheet files for the framework. */
function distinctpress_register_scripts() {

	/** Register the 'common' scripts. */
	wp_enqueue_script( 'distinctpress-js-common', esc_url( get_template_directory_uri(). '/assets/js/plugins.js' ), array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'distinctpress-js-init', esc_url( get_template_directory_uri(). '/assets/js/init.js' ), array( 'jquery' ), '1.0', true );	
	/** Register Google Fonts. */
	wp_enqueue_style( 'distinctpress-google-fonts', esc_url( 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Poppins:400,500,70' ) );

	/** Register '960.css' for grid. And Font */
	wp_enqueue_style( 'distinctpress-css-960', esc_url( get_template_directory_uri(). '/assets/css/base.css' ) );
	wp_enqueue_style( 'distinctpress-css-elusive', esc_url(get_template_directory_uri(). '/assets/css/elusive-webfont.css' ) );
	wp_enqueue_style( 'distinctpress-style', get_stylesheet_uri() );

	/**
	 * Add color styling from theme
	 */
	function wpdocs_styles_method() {
        $header_bg_color = get_theme_mod( 'header_background_color', '#43c5c2' );
        $header_bg_image = get_theme_mod( 'header_background_image', '' );
        $footer_bg_color = get_theme_mod( 'footer_background_color', '#222' );
        $footer_bg_image = get_theme_mod( 'footer_background_image', '' );
        $sub_footer_bg_color = get_theme_mod( 'sub_footer_background_color', '#43c5c2' );
        $sub_footer_bg_image = get_theme_mod( 'sub_footer_background_image', '' );
        $button_bg_color = get_theme_mod( 'button_background_color', '#43c5c2' );
        $button_hover_bg_color = get_theme_mod( 'button_hover_background_color', '#222' );
        $user_custom_css = get_theme_mod( 'custom_css', '' );
        $custom_css = "
                #header {
                        background-color: {$header_bg_color};
                        background-image: url({$header_bg_image});
                }
                .header-menu ul ul.sub-menu li, .header-menu ul ul.children li, .dropdown-menu {
                		background-color: {$header_bg_color};
                }
             	#footer-widgets {
                        background-color: {$footer_bg_color};
                        background-image: url({$footer_bg_image});
                }
                #footer {
                		background-color: {$sub_footer_bg_color};
	            }
	            #loop-nav-next-prev a, #loop-nav-singlular-post a, #respond input[type=submit], a.comment-reply-link, a.more-link:link, a.more-link:visited,.portfolio-filter ul li {
	            	background: {$button_bg_color};
	        	}
	        	#loop-nav-next-prev a:hover, #loop-nav-singlular-post a:hover, #respond input[type=submit]:hover, a.comment-reply-link:hover, a.more-link:hover,.portfolio-filter ul li:hover {
	            	background: {$button_hover_bg_color};
	        	}
	        	.widget a:hover {
				    color: {$button_bg_color};
				}
                ";
            $custom_css .= $user_custom_css;
        wp_add_inline_style( 'distinctpress-style', $custom_css );
	}
	add_action( 'wp_enqueue_scripts', 'wpdocs_styles_method' );
}

/** Tells WordPress to load the scripts needed for the framework using the wp_enqueue_script() function. */
function distinctpress_enqueue_scripts() {

	/** Load the comment reply script on singular posts with open comments if threaded comments are supported. */
	if ( is_singular() && get_option( 'thread_comments' ) && comments_open() ) {
		wp_enqueue_script( 'comment-reply' );
	}

}

if(!( function_exists('distinctpress_admin_load_scripts') )){
	function distinctpress_admin_load_scripts(){
		wp_enqueue_style( 'distinctpress-theme-admin-css', get_template_directory_uri(). '/admin/theme-admin.css' );	
		wp_enqueue_script( 'distinctpress-theme-admin-js', get_template_directory_uri(). '/admin/theme-admin.js', array('jquery'), false, true  );
	}
	add_action('admin_enqueue_scripts', 'distinctpress_admin_load_scripts', 200);
}

?>