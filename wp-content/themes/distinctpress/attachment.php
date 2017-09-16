 
  <?php get_header();	?>

  <?php get_template_part( 'loop-meta' ); ?>

  <div id="mainwrap" class="container clearfix">

    <div class="col-sm-8">

      <div id="content">	  

  	  <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', 'attachment' ); ?>
          <?php endwhile; ?>
        <?php else : ?>          
          <?php get_template_part( 'loop-error' ); ?>
        <?php endif; ?>
      <?php get_template_part( 'loop-nav' ); ?>    

      </div>

    </div>

    <?php get_sidebar(); ?>

  </div>

  <?php get_footer(); ?>