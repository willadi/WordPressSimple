<?php

function simple_theme_setup(){
    // Featured Image Support
    add_theme_support('post-thumbnails');

    // register a navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}
add_action('after_setup_theme', 'simple_theme_setup');

function set_excerpt_length($length){
    return 4;
}

add_filter('excerpt_length', 'set_excerpt_length');

//Widget Locations
function init_widgets(){
    register_sidebar(array(
        'name' => 'Sidebar created',
        'id' => 'sidebar',
        'before_widget' => '<div class="side-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init', 'init_widgets');