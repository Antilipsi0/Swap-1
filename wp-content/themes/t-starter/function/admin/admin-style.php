<?php
function admin_style(){
    wp_enqueue_style('admin-bootstrap', get_template_directory_uri() . '/assets/css/admin/bootstrap-grid.rtl.css');
    wp_enqueue_style('admin-styles', get_template_directory_uri() . '/assets/css/admin/panel.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

add_theme_support(
    'editor-color-palette',
    array(
        array(
            'name'  => 'Cyan',
            'slug'  => 'cyan',
            'color' => '#4fa9b3',
        ),
        array(
            'name'  => 'Orange',
            'slug'  => 'orange',
            'color' => '#ed6c38',
        ),
        array(
            'name'  => 'Gris',
            'slug'  => 'gris',
            'color' => '#32304c',
        ),
        array(
            'name'  => 'Blanc',
            'slug'  => 'blanc',
            'color' => '#fff',
        ),
        array(
            'name'  => 'Noir',
            'slug'  => 'noir',
            'color' => '#000',
        ),
    )
);