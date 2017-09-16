
<section class="section-padding">
  	<div class="container clearfix">
    	<div id="loop-meta" class="home-section-title">
      		<h1 class="loop-meta-title"><?php echo get_theme_mod( 'home_portfolio_title', 'Our Works' ); ?></h1>
      		<div class="loop-meta-description"><?php echo get_theme_mod( 'home_portfolio_sub_title', 'We hope you enjoy browsing our work. Powered by Jetpack Portfolio post type.' ); ?></div>
    	</div>
  	</div>
	<div class="container clearfix">
	  	<div class="row">
	    	<div class="col-sm-12">

		        <div class="portfolio row">
		            <?php
		                if ( get_query_var( 'paged' ) ) :
		                    $paged = get_query_var( 'paged' );
		                elseif ( get_query_var( 'page' ) ) :
		                    $paged = get_query_var( 'page' );
		                else :
		                    $paged = -1;
		                endif;
		 
		                $posts_per_page = get_option( 'jetpack_portfolio_posts_per_page', '-1' );
		 
		                $args = array(
		                    'post_type'      => 'jetpack-portfolio',
		                    'paged'          => $paged,
		                    'posts_per_page' => 6,
		                );
		 
		                $project_query = new WP_Query ( $args );
		 
		                if ( post_type_exists( 'jetpack-portfolio' ) && $project_query -> have_posts() ) :
		 
		                    while ( $project_query -> have_posts() ) : $project_query -> the_post();
		 
		                        get_template_part( 'content/content-portfolio-grid' );
		 
		                    endwhile;
		 
		                    wp_reset_postdata();
		 
		                else :
		            ?>
		 
		                <section class="col-sm-12 no-results not-found">
		                    <header class="page-header">
		                        <h1 class="page-title"><?php _e( 'No Project Found', 'distinctpress' ); ?></h1>
		                    </header><!-- .page-header -->
		 
		                    <div class="page-content">
		                        <?php if ( current_user_can( 'publish_posts' ) ) : ?>
		 
		                            <p><?php printf( __( 'Ready to publish your first project? <a href="%1$s">Get started here</a>.', 'distinctpress' ), esc_url( admin_url( 'post-new.php?post_type=jetpack-portfolio' ) ) ); ?></p>
		 
		                        <?php else : ?>
		 
		                            <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'distinctpress' ); ?></p>
		 
		                        <?php endif; ?>
		                    </div>
		                </section>
		                
		            <?php endif; ?>
		        
		        </div>

	    	</div>
		</div>
	</div>
</section>