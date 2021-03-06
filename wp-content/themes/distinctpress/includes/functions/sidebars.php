<?php

/** Register widget areas. */
add_action( 'widgets_init', 'distinctpress_register_sidebars' );

/** Registers the the core sidebars */
function distinctpress_register_sidebars() {

	/* Get the available core framework sidebars. */
	$sidebars = distinctpress_sidebars();	

	/* Loop through the supported sidebars. */
	foreach ( $sidebars as $key => $val ) {

		/* Set up some default sidebar arguments. */
		$defaults = array(
		  'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-%2$s clearfix"><div class="widget-wrap widget-inside">',
		  'after_widget'	=> '</div></div>',
		  'before_title'	=> '<h3 class="widget-title">',
		  'after_title'	=> '</h3>'
		);		

		/* Parse the sidebar arguments and defaults. */
		$args = wp_parse_args( $sidebars[$key], $defaults );		

		/* Register the sidebar. */
		register_sidebar( $args );	

	}

}

/** Returns an array of the core framework's available sidebars for use in theme */
function distinctpress_sidebars() {

	/* Set up an array of sidebars. */
	$sidebars = array(		

		'distinctpress-primary-sidebar' => array(
			'name' => __( 'DistinctPress Primary Sidebar', 'distinctpress' ),
			'id' => 'distinctpress-primary-sidebar',
			'description' => __( 'The main (primary) widget area, most often used as a sidebar.', 'distinctpress' )
		),
		'distinctpress-footer-sidebar' => array(
			'name' => __( 'DistinctPress Footer Widgets', 'distinctpress' ),
			'id' => 'distinctpress-footer-sidebar',
			'description' => __( 'The footer widget area.', 'distinctpress' )
		),
		'distinctpress-home-1' => array(
			'name' => __( 'DistinctPress Home Columns One', 'distinctpress' ),
			'id' => 'distinctpress-home-1',
			'description' => __( 'Used in the homepage template', 'distinctpress' )
		),
		'distinctpress-home-2' => array(
			'name' => __( 'DistinctPress Home Columns Two', 'distinctpress' ),
			'id' => 'distinctpress-home-2',
			'description' => __( 'Used in the homepage template', 'distinctpress' )
		),
		'distinctpress-home-3' => array(
			'name' => __( 'DistinctPress Home Columns Three', 'distinctpress' ),
			'id' => 'distinctpress-home-3',
			'description' => __( 'Used in the homepage template', 'distinctpress' )
		),
		'distinctpress-home-4' => array(
			'name' => __( 'DistinctPress Home Columns Four', 'distinctpress' ),
			'id' => 'distinctpress-home-4',
			'description' => __( 'Used in the homepage template', 'distinctpress' )
		),
		'distinctpress-home-5' => array(
			'name' => __( 'DistinctPress Home Columns Five', 'distinctpress' ),
			'id' => 'distinctpress-home-5',
			'description' => __( 'Used in the homepage template', 'distinctpress' )
		),
		'distinctpress-home-6' => array(
			'name' => __( 'DistinctPress Home Columns Six', 'distinctpress' ),
			'id' => 'distinctpress-home-6',
			'description' => __( 'Used in the homepage template', 'distinctpress' )
		)
	);
	return $sidebars;

}

?>