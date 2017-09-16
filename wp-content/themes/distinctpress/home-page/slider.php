
<div class="container section-inner">

    <?php 
        $slider_shortcode = get_theme_mod( 'home_slider_shortcode', '' ); 

        $shortcode = sprintf(
            '%1$s',
            $slider_shortcode
        );

        if(!empty($slider_shortcode)) {
            echo do_shortcode(' '.$slider_shortcode.' ');
        } 
        ?>
</div>