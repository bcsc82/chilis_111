<?php

function distinctpress_primary_menu_cb() { wp_page_menu(); } ?>

<div class="col-sm-9">
  <?php 
      if ( has_nav_menu('distinctpress-primary-menu') ) {
          wp_nav_menu(
                  array(
                      'theme_location' => 'distinctpress-primary-menu',
                      'container_class' => 'collapse navbar-collapse',
                      'container_id' => 'main-navigation-menu',
                      'menu_class' => 'nav navbar-nav pull-right',
                      'fallback_cb' => '',
                      'menu_id' => 'nav',
                      'walker' => new wp_bootstrap_navwalker()
                  )
          );
      } else { ?>
          <ul class="nav navbar-nav pull-sm-right"><li><a href="#" class="nav-link"><?php _e( 'Assign a Menu via Appearance > Menus', 'distinctpress' ); ?></a></li></ul>
      <?php 
  } ?>
 
</div>