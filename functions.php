<?php
/*===========================
Adding stylesheets & JS files
============================*/
function custom_theme_scripts(){
//Bootstrap CSS
wp_enqueue_style('bootsrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
//Main CSS
wp_enqueue_style('main-styles', get_stylesheet_uri());
wp_enqueue_script('jquery');
//JS Files
wp_enqueue_style('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
wp_enqueue_style('custom-js', get_stylesheet_directory_uri() . '/js/scripts.js');
}

add_action('wp_enqueue_scripts', 'custom_theme_scripts');

add_theme_support('post-thumbnails');

$custom_image_header = array(
    'width' => 150,
    'height' => 150,
    'uploads' => true
);
add_theme_support('custom-header', $custom_image_header);

add_theme_support('post-thumnails');


function register_my_menus(){
    register_nav_menus(array(
        'main-menu'     =>   __('Main Menu'),
        'footer-left'   =>   __('Left Footer Menu'),
        'footer-middle' =>   __('Middle Footer Menu'),
        'footer-right'  =>   __('Right Footer Menu')
    ));
}

add_action('init','register_my_menus');
?>