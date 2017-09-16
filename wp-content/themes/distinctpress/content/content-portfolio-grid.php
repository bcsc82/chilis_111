<?php
$terms = get_the_terms( $post->ID, 'jetpack-portfolio-type' );
$taxonomy = 'jetpack-portfolio-type';
$tax_terms = get_terms( $taxonomy );
                        
if ( $terms && ! is_wp_error( $terms ) ) : 
 
    $filtering_links = array(); 
    foreach ( $terms as $term ) {
        $filtering_links[] = $term->slug;
    }
                        
    $filtering = join( ", ", $filtering_links );

    $filter = 'col-sm-4 ' . $filtering;

?>

  <div id="post-<?php the_ID(); ?>" <?php post_class($filter); ?> data-filter="<?php foreach ( $tax_terms as $tax_term ) { echo ''.$tax_term->slug.' '; } ?>">
    <div class="item-padder">

        <?php distinctpress_full_featured_tall_image(); ?>
        <?php $entry_title = ( 'page' == get_post_type() && distinctpress_post_edit_link() == "" )? 'entry-title entry-title-page' : 'entry-title'; ?>

        <h2 class="<?php echo $entry_title; ?>"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr( 'Permalink to %s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>    

      </div>
  </div>

<?php endif;