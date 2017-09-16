<?php

/* STYLING OPTIONS */
Kirki::add_panel( 'styling_panel', array(
    'priority'    => 200,
    'title'       => __( 'Style Settings', 'distinctpress' ),
) );

Kirki::add_section( 'styling_settings', array(
    'title'          => __( 'Colors' , 'distinctpress' ),
    'panel'          => 'styling_panel', 
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'button_background_color', array(
	'type'        => 'color',
	'settings'    => 'button_background_color',	
    'label'          => __( 'Button/Link Background Color', 'distinctpress' ),
	'section'     => 'styling_settings',
	'default'     => '#43c5c2',
	'priority'    => 10,
	'alpha'       => true,
) );

Kirki::add_field( 'button_hover_background_color', array(
	'type'        => 'color',
	'settings'    => 'button_hover_background_color',	
    'label'          => __( 'Button/Link Hover Background Color' , 'distinctpress'),
	'section'     => 'styling_settings',
	'default'     => '#222',
	'priority'    => 10,
	'alpha'       => true,
) );

Kirki::add_section( 'custom_styling_settings', array(
    'title'          => __( 'Custom CSS' , 'distinctpress'),
    'panel'          => 'styling_panel', 
    'priority'       => 180,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'custom_css', array(
	'type'        => 'code',
	'settings'    => 'custom_css',
	'label'       => __( 'Custom CSS', 'distinctpress' ),
	'section'     => 'custom_styling_settings',
	'default'     => '',
	'priority'    => 10,
	'choices'     => array(
		'language' => 'css',
		'theme'    => 'monokai',
		'height'   => 250,
	),
) );

/* HOME PAGE OPTIONS */
Kirki::add_panel( 'home_panel', array(
    'priority'    => 200,
    'title'       => __( 'Home Options', 'distinctpress' ),
    'description' => __( 'Controls the home page within your theme.', 'distinctpress' ),
) );

Kirki::add_section( 'home_page_sections', array(
    'title'          => __( 'Home Page Sections' , 'distinctpress'),
    'description'    => __( 'Shuffle and hide home page content sections.' , 'distinctpress'),
    'panel'          => 'home_panel', 
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'home_blocks', array(
    'title'          => __( 'Sort/Disable Sections', 'distinctpress' ),
	'type'        => 'sortable',
	'settings'    => 'home_page_content',
	'section'     => 'home_page_sections',
	'default'     => array(
		'slider',
		'news',
		'widgets',
		'portfolio',
		'widgets-2',
	),
	'choices'     => array(
		'slider' => esc_attr__( 'Slider', 'distinctpress' ),
		'news' => esc_attr__( 'News Feed', 'distinctpress' ),
		'portfolio' => esc_attr__( 'Portfolio Feed (Needs Jetpack)', 'distinctpress' ),
		'widgets' => esc_attr__( 'Widgets', 'distinctpress' ),
		'widgets-2' => esc_attr__( 'Widgets (2nd Row)', 'distinctpress' ),
	),
	'priority'    => 10,
) );

Kirki::add_section( 'home_page_slider', array(
    'title'          => __( 'Home Page Slider', 'distinctpress' ),
    'panel'          => 'home_panel', 
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'home_slider_shortcode', array(
	'type'     => 'text',
	'settings' => 'home_slider_shortcode',
	'label'    => __( 'Slider Shortcode (Overrides Theme Slider)', 'distinctpress' ),
	'section'  => 'home_page_slider',
	'default'  => '',
	'priority' => 10,
	'sanitize_callback' => 'wp_kses_post'
) );

Kirki::add_section( 'home_page_widgets', array(
    'title'          => __( 'Home Widgets', 'distinctpress' ),
    'panel'          => 'home_panel', 
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'home_widgets_columns', array(
	'type'        => 'number',
	'settings'    => 'home_widgets_columns',
	'label'       => esc_attr__( 'Widget Block One Columns', 'distinctpress' ),
	'section'     => 'home_page_widgets',
	'default'     => 3,
	'choices'     => array(
		'min'  => 1,
		'max'  => 3,
		'step' => 1,
	),
) );

Kirki::add_field( 'home_widgets_2_columns', array(
	'type'        => 'number',
	'settings'    => 'home_widgets_2_columns',
	'label'       => esc_attr__( 'Widget Block Two Columns', 'distinctpress' ),
	'section'     => 'home_page_widgets',
	'default'     => 3,
	'choices'     => array(
		'min'  => 1,
		'max'  => 3,
		'step' => 1,
	),
) );

Kirki::add_section( 'home_page_news', array(
    'title'          => __( 'Home News', 'distinctpress' ),
    'panel'          => 'home_panel', 
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'home_blog_title', array(
	'type'     => 'text',
	'settings' => 'home_blog_title',
	'label'    => __( 'News Title', 'distinctpress' ),
	'section'  => 'home_page_news',
	'default'  => esc_attr__( 'Recent Articles', 'distinctpress' ),
	'priority' => 12,
) );

Kirki::add_field( 'home_blog_sub_title', array(
	'type'     => 'text',
	'settings' => 'home_blog_sub_title',
	'label'    => __( 'News Sub Title', 'distinctpress' ),
	'section'  => 'home_page_news',
	'default'  => esc_attr__( 'Catch up on the latest from our blog.', 'distinctpress' ),
	'priority' => 14,
) );

Kirki::add_section( 'home_page_portfolio', array(
    'title'          => __( 'Home Portfolio', 'distinctpress' ),
    'panel'          => 'home_panel', 
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'home_portfolio_title', array(
	'type'     => 'text',
	'settings' => 'home_portfolio_title',
	'label'    => __( 'Portfolio Title', 'distinctpress' ),
	'section'  => 'home_page_portfolio',
	'default'  => esc_attr__( 'Our Works', 'distinctpress' ),
	'priority' => 12,
) );

Kirki::add_field( 'home_portfolio_sub_title', array(
	'type'     => 'text',
	'settings' => 'home_portfolio_sub_title',
	'label'    => __( 'Portfolio Sub Title', 'distinctpress' ),
	'section'  => 'home_page_portfolio',
	'default'  => esc_attr__( 'We hope you enjoy browsing our work. Powered by Jetpack Portfolio post type.', 'distinctpress' ),
	'priority' => 14,
) );


/* HEADER OPTIONS */
Kirki::add_panel( 'header_panel', array(
    'priority'    => 200,
    'title'       => __( 'Header Settings', 'distinctpress' ),
    'description' => __( 'Controls the home page within your theme.', 'distinctpress' ),
) );

Kirki::add_section( 'header_styling', array(
    'title'          => __( 'Header Styling' , 'distinctpress'),
    'panel'          => 'header_panel', 
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'header_background_color', array(
	'type'        => 'color',
	'settings'    => 'header_background_color',	
    'title'          => __( 'Header Background Color' , 'distinctpress'),
	'section'     => 'header_styling',
	'default'     => '#43c5c2',
	'priority'    => 10,
	'alpha'       => true,
) );

Kirki::add_field( 'header_background_image', array(
	'type'        => 'image',
	'settings'    => 'header_background_image',	
    'title'          => __( 'Header Background Image', 'distinctpress' ),
	'description' => __( 'Replaces the background color', 'distinctpress' ),
	'section'     => 'header_styling',
	'default'     => '',
	'priority'    => 12,
) );

Kirki::add_section( 'header_social', array(
    'title'          => __( 'Header Social Settings' , 'distinctpress'),
    'panel'          => 'header_panel', 
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'facebook_url', array(
	'type'     => 'text',
	'settings' => 'facebook_url',
	'label'    => __( 'Facebook Profile URL', 'distinctpress' ),
	'section'  => 'header_social',
	'default'  => '',
	'priority' => 10,
) );

Kirki::add_field( 'twitter_url', array(
	'type'     => 'text',
	'settings' => 'twitter_url',
	'label'    => __( 'Twitter Profile URL', 'distinctpress' ),
	'section'  => 'header_social',
	'default'  => '',
	'priority' => 10,
) );

Kirki::add_field( 'gplus_url', array(
	'type'     => 'text',
	'settings' => 'gplus_url',
	'label'    => __( 'Google+ Profile URL', 'distinctpress' ),
	'section'  => 'header_social',
	'default'  => '',
	'priority' => 10,
) );

Kirki::add_field( 'linkedin_url', array(
	'type'     => 'text',
	'settings' => 'linkedin_url',
	'label'    => __( 'LinkedIn Profile URL', 'distinctpress' ),
	'section'  => 'header_social',
	'default'  => '',
	'priority' => 10,
) );

Kirki::add_field( 'pinterest_url', array(
	'type'     => 'text',
	'settings' => 'pinterest_url',
	'label'    => __( 'Pinterest Profile URL', 'distinctpress' ),
	'section'  => 'header_social',
	'default'  => '',
	'priority' => 10,
) );

Kirki::add_field( 'youtube_url', array(
	'type'     => 'text',
	'settings' => 'youtube_url',
	'label'    => __( 'YouTube Profile URL', 'distinctpress' ),
	'section'  => 'header_social',
	'default'  => '',
	'priority' => 10,
) );

Kirki::add_field( 'rss_url', array(
	'type'     => 'text',
	'settings' => 'rss_url',
	'label'    => __( 'RSS Profile URL', 'distinctpress' ),
	'section'  => 'header_social',
	'default'  => '',
	'priority' => 10,
) );


/* BLOG OPTIONS */
Kirki::add_panel( 'blog_panel', array(
    'priority'    => 220,
    'title'       => __( 'Blog Settings', 'distinctpress' ),
    'description' => __( 'Controls the blog page within your theme.', 'distinctpress' ),
) );

Kirki::add_section( 'blog_layout_settings', array(
    'title'          => __( 'Blog Layout' , 'distinctpress' ),
    'panel'          => 'blog_panel', 
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'blog_layout_option', array(	
    'label'       => __( 'Blog Layout Settings', 'distinctpress' ),
	'type'        => 'select',
	'settings'    => 'blog_layout',	
	'section'     => 'blog_layout_settings',
	'default'     => 'post-list',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'post-list' => esc_attr__( 'List', 'distinctpress' ),
		'post-grid' => esc_attr__( 'Grid', 'distinctpress' ),
	),
) );

Kirki::add_field( 'blog_title', array(
	'type'     => 'text',
	'settings' => 'blog_title',
	'label'    => __( 'Blog Title', 'distinctpress' ),
	'section'  => 'blog_layout_settings',
	'default'  => esc_attr__( 'Recent Articles', 'distinctpress' ),
	'priority' => 12,
) );

Kirki::add_field( 'blog_sub_title', array(
	'type'     => 'text',
	'settings' => 'blog_sub_title',
	'label'    => __( 'Blog Sub Title', 'distinctpress' ),
	'section'  => 'blog_layout_settings',
	'default'  => esc_attr__( 'Catch up on the latest from our blog.', 'distinctpress' ),
	'priority' => 14,
) );

Kirki::add_section( 'blog_single_post_settings', array(
    'title'          => __( 'Single Post Settings' , 'distinctpress'),
    'panel'          => 'blog_panel', 
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'blog_single_post_option', array(	
    'label'       => __( 'Show Author Details?', 'distinctpress' ),
	'type'        => 'select',
	'settings'    => 'blog_author',	
	'section'     => 'blog_single_post_settings',
	'default'     => 'list',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'show' => esc_attr__( 'Show Author Details', 'distinctpress' ),
		'hide' => esc_attr__( 'Hide Author Details', 'distinctpress' ),
	),
) );


/* FOOTER OPTIONS */
Kirki::add_panel( 'footer_panel', array(
    'priority'    => 300,
    'title'       => __( 'Footer Settings', 'distinctpress' ),
    'description' => __( 'Controls the gooter area within your theme.', 'distinctpress' ),
) );

Kirki::add_section( 'footer_styling', array(
    'title'          => __( 'Footer Styling', 'distinctpress' ),
    'description'    => __( 'Shuffle and hide home page content sections.' ),
    'panel'          => 'footer_panel', 
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'footer_background_color', array(
	'type'        => 'color',
	'settings'    => 'footer_background_color',	
    'label'          => __( 'Footer Background Color', 'distinctpress' ),
	'section'     => 'footer_styling',
	'default'     => '#222',
	'priority'    => 10,
	'alpha'       => true,
) );

Kirki::add_field( 'footer_background_image', array(
	'type'        => 'image',
	'settings'    => 'footer_background_image',	
    'label'          => __( 'Footer Background Image' , 'distinctpress'),
	'description' => __( 'Replaces the background color', 'distinctpress' ),
	'section'     => 'footer_styling',
	'default'     => '',
	'priority'    => 12,
) );

Kirki::add_field( 'sub_footer_background_color', array(
	'type'        => 'color',
	'settings'    => 'sub_footer_background_color',	
    'label'          => __( 'Sub Footer Background Color' , 'distinctpress'),
	'section'     => 'footer_styling',
	'default'     => '#43c5c2',
	'priority'    => 14,
	'alpha'       => true,
) );


/* PORTFOLIO OPTIONS */
Kirki::add_panel( 'portfolio_panel', array(
    'priority'    => 220,
    'title'       => __( 'Blog Settings', 'distinctpress' ),
    'description' => __( 'Controls the blog page within your theme.', 'distinctpress' ),
) );

Kirki::add_section( 'portfolio_layout_settings', array(
    'title'          => __( 'Blog Layout' , 'distinctpress'),
    'panel'          => 'portfolio_panel', 
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'portfolio_title', array(
	'type'     => 'text',
	'settings' => 'portfolio_title',
	'label'    => __( 'Blog Title', 'distinctpress' ),
	'section'  => 'portfolio_layout_settings',
	'default'  => esc_attr__( 'Our Works', 'distinctpress' ),
	'priority' => 12,
) );

Kirki::add_field( 'portfolio_title', array(
	'type'     => 'text',
	'settings' => 'portfolio_sub_title',
	'label'    => __( 'Blog Sub Title', 'distinctpress' ),
	'section'  => 'portfolio_layout_settings',
	'default'  => esc_attr__( 'We hope you enjoy browsing our work. Powered by Jetpack Portfolio post type.', 'distinctpress' ),
	'priority' => 12,
) );

?>