<?php
function codex_custom_init() {
    
    // FAQ
    $labels = array(
        'name'                  => 'FAQ',
        'singular_name'         => 'Question',
        'add_new'               => 'Ajouter une question',
        'add_new_item'          => 'Ajouter une nouvelle question',
        'edit_item'             => 'Editer une question',
        'new_item'              => 'Nouvelle question',
        'all_items'             => 'Tous les questions',
        'view_item'             => 'Voir question',
        'search_items'          => 'Chercher question',
        'not_found'             =>  'Aucune question trouvée',
        'not_found_in_trash'    => 'Aucune question trouvée dans la corbeille',
        'parent_item_colon'     => '',
        'menu_name'             => 'FAQ',
    );
    $args = array(
        'labels'                => $labels,
        'public'                => false,
        'publicly_queryable'    => false,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'question'),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'show_in_rest'          => true,
        'menu_position'         => null,
        'menu_icon'             => 'dashicons-lightbulb',
        'supports'              => array('title', 'editor', 'revisions')
    );
    register_post_type( 'question', $args );

}
// add_action('init', 'codex_custom_init');
