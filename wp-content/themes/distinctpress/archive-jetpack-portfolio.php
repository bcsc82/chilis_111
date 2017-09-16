<?php get_header();	?>

<?php get_template_part( 'content/content-portfolio-archive-title' ); ?>  

<div id="mainwrap" class="container clearfix jetpackfolio">
  <div class="row">   
    <div class="row">    
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'content/content-portfolio-grid' ); ?>
        <?php endwhile; ?>
      <?php else : ?>
        <?php get_template_part( 'loop-error' ); ?>
      <?php endif; ?>
      <?php get_template_part( 'loop-nav' ); ?>
    </div>
  </div>
</div> 

<?php get_footer(); ?>