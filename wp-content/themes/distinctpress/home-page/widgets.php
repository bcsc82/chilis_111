<?php
    $widget_laytout = get_theme_mod( 'home_widgets_columns', '3' );
?>
<div class="container section-inner pb0">

    <div class="row">

    <?php 
        if ( is_active_sidebar( 'distinctpress-home-1' ) && $widget_laytout == '1' || 
             is_active_sidebar( 'distinctpress-home-1' ) && $widget_laytout == '2' || 
             is_active_sidebar( 'distinctpress-home-1' ) && $widget_laytout == '3' || 
             is_active_sidebar( 'distinctpress-home-1' ) && $widget_laytout == '2-alt' ) { ?>

        <div class="<?php if($widget_laytout == '1') { echo 'col-sm-12'; } if($widget_laytout == '2') {  echo 'col-sm-6'; } if($widget_laytout == '2-alt') { echo 'col-sm-8'; } if($widget_laytout == '3') { echo 'col-sm-4'; } ?> widget-area">

            <?php dynamic_sidebar( 'distinctpress-home-1' ); ?>
            
        </div>

    <?php } ?>

    <?php 
        if ( is_active_sidebar( 'distinctpress-home-2' ) && $widget_laytout == '2' || 
             is_active_sidebar( 'distinctpress-home-2' ) && $widget_laytout == '2-alt' || 
             is_active_sidebar( 'distinctpress-home-2' ) && $widget_laytout == '3' ) { ?>

        <div class="<?php if($widget_laytout == '2') { echo 'col-sm-6'; } if($widget_laytout == '3') { echo 'col-sm-4'; } if($widget_laytout == '2-alt') { echo 'col-sm-4'; } ?> widget-area">

            <?php dynamic_sidebar( 'distinctpress-home-2' ); ?>
            
        </div>

    <?php } ?>

    <?php if ( is_active_sidebar( 'distinctpress-home-3' ) && $widget_laytout == '3' ) { ?>

        <div class="col-md-4 widget-area">

            <?php dynamic_sidebar( 'distinctpress-home-3' ); ?>
            
        </div>

    <?php } ?>

    </div>

</div>