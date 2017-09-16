<?php
  $layout = get_theme_mod('blog_layout' , 'post-list');
?>

<?php get_header();	?>

<?php get_template_part( 'content/content-archive-title' ); ?>  

<div id="mainwrap" class="container clearfix">
  <div class="row">
    <div class="col-sm-8">  
      <?php if( $layout == 'post-grid') { echo '<div class="row">'; } ?>  
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'content/content-' . $layout ); ?>
        <?php endwhile; ?>
      <?php else : ?>
        <?php get_template_part( 'loop-error' ); ?>
      <?php endif; ?>
      <?php if( $layout == 'post-grid') { echo '</div>'; } ?>
      <?php get_template_part( 'loop-nav' ); ?>
    </div>
    <?php get_sidebar(); ?>
  </div> 
</div> 

<?php get_footer(); ?>