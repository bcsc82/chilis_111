<?php
    $widget_laytout = get_theme_mod( 'home_widgets_2_columns', '3' );
?>
<div class="container section-inner pb0">

    <div class="row">

    <?php 
        if ( is_active_sidebar( 'distinctpress-home-4' ) && $widget_laytout == '1' || 
             is_active_sidebar( 'distinctpress-home-4' ) && $widget_laytout == '2' || 
             is_active_sidebar( 'distinctpress-home-4' ) && $widget_laytout == '3' || 
             is_active_sidebar( 'distinctpress-home-4' ) && $widget_laytout == '2-alt' ) { ?>

        <div class="<?php if($widget_laytout == '1') { echo 'col-sm-12'; } if($widget_laytout == '2') {  echo 'col-sm-6'; } if($widget_laytout == '2-alt') { echo 'col-sm-8'; } if($widget_laytout == '3') { echo 'col-sm-4'; } ?> widget-area">

            <?php dynamic_sidebar( 'distinctpress-home-4' ); ?>
            
        </div>

    <?php } ?>

    <?php 
        if ( is_active_sidebar( 'distinctpress-home-5' ) && $widget_laytout == '2' || 
             is_active_sidebar( 'distinctpress-home-5' ) && $widget_laytout == '2-alt' || 
             is_active_sidebar( 'distinctpress-home-5' ) && $widget_laytout == '3' ) { ?>

        <div class="<?php if($widget_laytout == '2') { echo 'col-sm-6'; } if($widget_laytout == '3') { echo 'col-sm-4'; } if($widget_laytout == '2-alt') { echo 'col-sm-4'; } ?> widget-area">

            <?php dynamic_sidebar( 'distinctpress-home-5' ); ?>
            
        </div>

    <?php } ?>

    <?php if ( is_active_sidebar( 'distinctpress-home-6' ) && $widget_laytout == '3' ) { ?>

        <div class="col-md-4 widget-area">

            <?php dynamic_sidebar( 'distinctpress-home-6' ); ?>
            
        </div>

    <?php } ?>

    </div>

</div>