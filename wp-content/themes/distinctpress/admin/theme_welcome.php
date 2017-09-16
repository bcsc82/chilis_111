<?php

register_activation_hook( __FILE__, 'welcome_screen_activate' );
function welcome_screen_activate() {
  set_transient( '_welcome_screen_activation_redirect', true, 30 );
}

add_action( 'admin_init', 'welcome_screen_do_activation_redirect' );
function welcome_screen_do_activation_redirect() {
  // Bail if no activation redirect
    if ( ! get_transient( '_welcome_screen_activation_redirect' ) ) {
    return;
  }

  // Delete the redirect transient
  delete_transient( '_welcome_screen_activation_redirect' );

  // Bail if activating from network, or bulk
  if ( is_network_admin() || isset( $_GET['activate-multi'] ) ) {
    return;
  }

  // Redirect to bbPress about page
  wp_safe_redirect( add_query_arg( array( 'page' => 'getting-started' ), admin_url( 'index.php' ) ) );

}

add_action('admin_menu', 'welcome_screen_pages');

function welcome_screen_pages() {
  add_theme_page(
    'Getting Started',
    'Getting Started',
    'read',
    'getting-started',
    'welcome_screen_content'
  );
}

add_action('admin_menu', 'wpautop_control_menu');

function wpautop_control_menu() {
  add_theme_page('themes.php', 'getting-started', 'Getting Started', 'read', 'getting-started', 'welcome_screen_content');
}

function welcome_screen_content() {
  ?>
	<div class="welcome-panel" id="welcome-panel">
		<div class="welcome-panel-content">
			<h2>Getting Started with DistinctPress</h2>
			<p class="about-description">Everything you need to get going.</p>
			<div class="welcome-panel-column-container">

				<div class="welcome-panel-column">
					<img class="welcome-img" src="<?php echo get_template_directory_uri(). '/admin/images/welcome-1.jpg'; ?>">
					<h3>Install Plugins</h3>
					<ul>
						<li>
							<strong>Looking to create an awesome portfolio?</strong> your going to need Jetpack's portfolio module, <a href="#">click here to install the plugin in seconds.</a>
						</li>
						<li>
							<strong>Want and sleek and lightweight light box?</strong> we recommend WP Featherlight, <a href="#">click here to install this plugin.</a>
						</li>
						<li>
							Why do you need these plugins? This theme only provides whats you need, avoiding bloat - so we allow you to add the features you need by being fully compatible with a range of external plugins.</a>
						</li>
					</ul>
				</div>

				<div class="welcome-panel-column">
					<img class="welcome-img" src="<?php echo get_template_directory_uri(). '/admin/images/welcome-2.jpg'; ?>">
					<h3>Get Started</h3>
					<a class="button button-primary button-hero load-customize" href="<?php echo admin_url( 'customize.php' ); ?>">Customize Your Site</a>
					<a class="button button-primary button-hero load-customize" href="<?php echo get_template_directory_uri(). '/admin/demo-data-xml'; ?>">Download Demo Data</a>
				</div>
				
				<div class="welcome-panel-column welcome-panel-last">
					<img class="welcome-img" src="<?php echo get_template_directory_uri(). '/admin/images/welcome-3.jpg'; ?>">
					<h3>Sign Up</h3>
					<ul>
						<li>
							Want to keep up to date on the latest released, free downloads and news from the Distinctive Themes team? sign up to our newsletter to be added to our newsletter. 
							<br><br>
							<a class="button button-primary button-hero load-customize" href="http://www.distinctivethemes.com/subscribe/">Subscribe to Newsletter</a><br><br>
							<strong>We never spam, your email is safe with us.</strong>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
  <?php
}



?>