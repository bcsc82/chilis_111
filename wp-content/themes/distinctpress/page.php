<?php get_header();	?>

<?php get_template_part( 'loop-meta' ); ?>  

<div id="mainwrap" class="container clearfix">
  <div class="row">
    <div class="col-sm-8">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'content', 'page' ); ?>
        <?php endwhile; ?>
      <?php else : ?>
        <?php get_template_part( 'loop-error' ); ?>
      <?php endif; ?>
      <?php get_template_part( 'loop-nav' ); ?>
      </div>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>