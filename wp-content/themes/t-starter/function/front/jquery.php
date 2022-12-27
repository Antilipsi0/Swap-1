<?php
function replace_jquery() {
    if (!is_admin()) {
        wp_dequeue_script('jquery');
        wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', false, '1.11.3');
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'replace_jquery');