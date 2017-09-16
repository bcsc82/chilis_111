<?php 

/**
 * Template Name: Homepage
 */

get_header();	?>

    <?php 
        $default_array = array(
            "slider","news", "portfolio", "widgets",
        );

        $home_sections = get_theme_mod( 'home_page_content' , $default_array );
        
        foreach ($home_sections as $section) {            
            if($section == 'portfolio') {
                get_template_part('home-page/portfolio');
            }
            if($section == 'slider') {
                get_template_part('home-page/slider');
            }
            if($section == 'news') {
                get_template_part('home-page/news');
            }
            if($section == 'widgets') {
                get_template_part('home-page/widgets');
            }     
            if($section == 'widgets-2') {
                get_template_part('home-page/widgets-2');
            }        
        }
    ?>

<div id="mainwrap" class="container clearfix">
  <div class="row">
    <div class="col-sm-12">

    </div>
  </div>
</div>

<?php get_footer(); ?>