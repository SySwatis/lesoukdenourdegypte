<?php
/* Add script css and js*/

// 11 after parent
add_action( 'wp_enqueue_scripts', 'storefront_lesouk_script',11 );
function storefront_lesouk_script() {
    
    wp_enqueue_style( 'storefront-lesouk', get_stylesheet_uri() );

	// register stylesheet
	wp_register_style( 'storefront-lesouk-css', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), '', 'all' );
    // register script
    wp_register_script( 'storefront-lesouk-js', get_stylesheet_directory_uri() . '/js/theme.min.js', array( 'jquery' ), '', true );

    // enqueue styles and scripts
	wp_enqueue_style( 'storefront-lesouk-css' );
	wp_enqueue_script( 'storefront-lesouk-js' );
}

/* Add google font to storefront theme */

add_filter( 'storefront_google_font_families', 'add_google_font_to_storefront' );
function add_google_font_to_storefront( $family ) {
    //unset($family['source-sans-pro']);
$family['barlow'] = 'Barlow+Condensed:100,300,400,500,600,700,800,900';
return $family;
}