  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php distinctpress_full_featured_image(); ?>  

    <h1 class="entry-title entry-title-single"><?php the_title(); ?></h1>  

    <div class="entry-meta">
      <?php if ( 'post' == get_post_type() ) : ?>
        <?php echo distinctpress_post_date() . distinctpress_post_comments() . distinctpress_post_author(); ?>
        <?php if ( is_sticky() ) : printf( '<span class="entry-meta-sep"> &sdot; </span> <span class="entry-meta-featured"><i class="el-icon-star meta-icon"></i>%1$s</span>', __( 'distinctpress-featured', 'distinctpress' ) ); endif; ?>
      <?php endif; ?>      
      <?php echo distinctpress_post_edit_link(); ?> 
    </div>

    <div class="entry-content">
    	<?php the_content(); ?>
      <div class="clear"></div>	
    </div>   

    <?php echo distinctpress_link_pages(); ?>  

    <?php if ( 'post' == get_post_type() ) : ?>
     <div class="entry-meta-bottom">

    </div><!-- .entry-meta -->

    <?php endif; ?>     

  </div>

  <?php get_template_part( 'loop-nav' ); ?>