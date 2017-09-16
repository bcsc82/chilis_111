<?php
	$args = array(
        'post_type'      => 'post',
        'paged'          => $paged,
        'posts_per_page' => 6,
    );

    $blog_query = new WP_Query ( $args );
?>

<section class="section-padding">
  	<div class="container clearfix">
    	<div id="loop-meta" class="home-section-title">
      		<h1 class="loop-meta-title"><?php echo esc_attr(get_theme_mod('home_blog_title' , 'Recent Articles')); ?></h1>
			<div class="loop-meta-description"><?php echo esc_attr(get_theme_mod('home_blog_sub_title' , 'Catch up on the latest from our blog.')); ?></div>
    	</div>
  	</div>
	<div class="container clearfix">
	  	<div class="row">   
	      	<?php if ( $blog_query -> have_posts() ) : ?>
		        <?php while ( $blog_query -> have_posts() ) : $blog_query -> the_post(); ?>
		        	<?php get_template_part( 'content/content-post-grid-3-col' ); ?>
		        <?php endwhile; ?>
	      	<?php else : ?>
	        	<?php get_template_part( 'loop-error' ); ?>
	      	<?php endif; ?>
	      	<?php get_template_part( 'loop-nav' ); ?>
	  	</div> 
	</div> 
</section>