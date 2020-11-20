<?php 

function load_codingTutorial_stylesheet() {

wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), false, 'all');
wp_enqueue_style('bootstrap');
wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
wp_enqueue_style('style');
wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), false, 'all');
wp_enqueue_style('font-awesome');
wp_register_style('themify-icons', get_template_directory_uri() . '/css/themify-icons.css', array(), false, 'all');
wp_enqueue_style('themify-icons');


}

add_action('wp_enqueue_scripts', 'load_codingTutorial_stylesheet');


?>