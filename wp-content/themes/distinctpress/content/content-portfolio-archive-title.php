  <?php if ( is_category() ) : ?>      

  <div class="container clearfix">

    <div id="loop-meta" class="grid_16">

      <h1 class="loop-meta-title"><?php printf( __( 'Category Archives: %s', 'distinctpress' ), '<span>' . ucwords( strtolower ( single_cat_title( '', false ) ) ) . '</span>' ); ?></h1>

      <div class="loop-meta-description"><?php echo category_description(); ?></div>

    </div> <!-- end #loop-meta -->

  </div> <!-- end .container -->


  <?php elseif ( is_archive() ) : ?>

  <div class="container clearfix">
    <div id="loop-meta">
      <h1 class="loop-meta-title"><?php echo get_theme_mod( 'portfolio_title', 'Our Works' ); ?></h1>
      <div class="loop-meta-description"><?php echo get_theme_mod( 'portfolio_sub_title', 'We hope you enjoy browsing our work. Powered by Jetpack Portfolio post type.' ); ?></div>
    </div>
  </div>

  <?php endif; ?>