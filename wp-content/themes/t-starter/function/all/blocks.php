<?php
function my_acf_init_block_types(){

    if (function_exists('acf_register_block_type')) {

        acf_register_block_type(
            array(
                'name'              => 'devis',
                'title'             => 'Devis',
                'description'       => 'Bloc pour CTA devis + Liste avantages',
                'render_template'   => 'partials/blocs/devis.php',
                'category'          => 'formatting',
                'icon'              => 'megaphone',
                'keywords'          => array('devis', 'cta'),
            )
        );

    }
}
// add_action('acf/init', 'my_acf_init_block_types');
