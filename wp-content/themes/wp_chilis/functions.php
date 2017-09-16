<?php

add_theme_support('post-thumbnails');
register_nav_menu('header','Menú principal');
add_action('pre_get_posts', 'change_sort_order');

function change_sort_order($query)
{
    if (is_archive()):
        $query->set('order', 'DESC');
        $query->set('orderby', 'menu_order');
    endif;
}