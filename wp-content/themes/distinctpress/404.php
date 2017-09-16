<?php get_header();	?>



<?php get_template_part( 'loop-meta' ); ?>

  

<div id="mainwrap" class="container clearfix">

  

  <div class="col-sm-9">

    <div id="content">	  

	  

	  <div id="post-0" class="post-0 post type-post error404 not-found">

      

        <div class="entry-content">

    

          <p><?php printf( __( "Just kidding! You tried going to %s, which doesn't exist, so that means I probably broke something.", 'distinctpress' ), '<code>' . home_url( esc_url( $_SERVER['REQUEST_URI'] ) ) . '</code>' ); ?></p>

          

          <p><?php _e( "The following is a list of the latest posts from the blog. Maybe it will help you find what you're looking for.", 'distinctpress' ); ?></p>

    

          <ul>

            <?php wp_get_archives( array( 'limit' => 20, 'type' => 'postbypost' ) ); ?>

          </ul>                   

    

        </div><!-- end .entry-content -->

    

      </div><!-- end #post-0 -->

    

    </div> <!-- end #content -->

  </div> <!-- end .col-sm-9 -->

  

  <?php get_sidebar(); ?>



</div> <!-- end .container -->

  

<?php get_footer(); ?>