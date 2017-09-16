<?php get_header();

get_template_part( 'loop-meta' ); ?>  

<div id="mainwrap" class="container clearfix">  
  <div class="col-sm-10 col-sm-offset-1">
    <div id="content">
	  <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'single-portfolio' ); ?>
      <?php endwhile; ?>
    <?php else : ?>
      <?php get_template_part( 'loop-error' ); ?>
    <?php endif; ?>
    </div>
  </div>
</div>  

<?php get_footer(); ?>