<?php
function tax_init() {

    // FAQ
    register_taxonomy(
        'categorie-faq',
        'question',
        array(
            'show_in_rest'              => true,
            'label'                     => 'Catégorie',
            'rewrite' => array('slug'   => 'categorie-faq'),
            'hierarchical'              => true
        )
    );

}
// add_action('init', 'tax_init');