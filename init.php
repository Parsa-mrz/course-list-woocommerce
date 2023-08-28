<?php
require_once('metabox-product.php');

function add_style()
{
    wp_register_style('accordion_style', get_stylesheet_directory_uri() . '/accordion/inc/assets/css/style.css');
    wp_enqueue_style('accordion_style');
}
add_action('wp_enqueue_scripts', 'add_style');
function add_script(){
    wp_register_script('accordion_script', get_stylesheet_directory_uri() . '/accordion/inc/assets/js/script.css');
    wp_enqueue_script('accordion_script');
}
add_action('wp_enqueue_scripts', 'add_script');

function register_accordion_course_widget($widgets_manager)
{

    require_once('widgets/accordion.php');

    $widgets_manager->register(new \accordion_course());
}
add_action('elementor/widgets/register', 'register_accordion_course_widget');
