<?php 

/**
 * Template Name: Portfolio
 */

get_header(); ?>
 
<div id="mainwrap" class="container clearfix">
  	<div class="row">
 	 
	        <div class="portfolio-filter">
	            <ul>
	                <li id="filter--all" class="filter active" data-filter="*"><?php _e( 'View All', 'distinctpress' ) ?></li>
	                <?php 
	                    // list terms in a given taxonomy
	                    $taxonomy = 'jetpack-portfolio-type';
	                    $tax_terms = get_terms( $taxonomy );
	 
	                    foreach ( $tax_terms as $tax_term ) {
	                    echo '<li class="filter" data-filter=".'. $tax_term->slug.'">' . $tax_term->slug .'</li>';
	                    }
	                ?>
	            </ul>
	        </div>
	 
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
	                    'posts_per_page' => $posts_per_page,
	                );
	 
	                $project_query = new WP_Query ( $args );
	 
	                if ( post_type_exists( 'jetpack-portfolio' ) && $project_query -> have_posts() ) :
	 
	                    while ( $project_query -> have_posts() ) : $project_query -> the_post();
	 
	                        get_template_part( 'content/content-portfolio-grid' );
	 
	                    endwhile;
	 
	                    wp_reset_postdata();
	 
	                else :
	            ?>
	 
	                <section class="no-results not-found">
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
 
<?php get_footer(); ?>