<?php
function add_theme_scripts() {

    $template_data       = wp_get_theme();
    $template_version    = $template_data['Version'];

    //wp_enqueue_style('vertical-menu', get_template_directory_uri().'/assets/css/bundle.css', array(), null);

    //wp_enqueue_script('jquery', get_template_directory_uri().'/assets/vendor/jquery-3.6.0.min.js', array(), null, false);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );