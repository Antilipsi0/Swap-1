<?php

$templatepath = get_template_directory();

if ( is_admin() ) {

    include( $templatepath.'/function/admin.php' );

} elseif ( !defined( 'XMLRPC_REQUEST' ) && !defined( 'DOING_CRON' ) ) {

    include( $templatepath.'/function/front.php' );

}

include( $templatepath.'/function/all.php' );

/*//////////////////////////// Baltazare //////////////////////////////*/

function custom_excerpt_length( $length ) {
	return 7;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

@ini_set( 'upload_max_size' , '120M' );
@ini_set( 'post_max_size', '120M');
@ini_set( 'max_execution_time', '300' );

function my_excerpt_length($length){
    return 200;
}
add_filter('excerpt_length', 'my_excerpt_length');