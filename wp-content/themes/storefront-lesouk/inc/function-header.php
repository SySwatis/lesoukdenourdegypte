<?php
add_action( 'init', 'custom_remove_storefront_header_search' );
function custom_remove_storefront_header_search() {
remove_action( 'storefront_header', 'storefront_product_search', 	40 );
add_action( 'storefront_header', 'storefront_product_search', 	70 );
}
add_action('storefront_header' , 'storefront_lesouk_add_account_link',59);
function storefront_lesouk_add_account_link() {
    get_template_part('template-parts/account-link');
}
/* @hooked storefront_header_cart                      - 60
 * @hooked storefront_primary_navigation_wrapper_close - 68 */
add_action('storefront_header' , 'storefront_lesouk_user_menu_wrapper',51);
function storefront_lesouk_user_menu_wrapper() { 
    echo '<div class="user-menu-wrapper">';
}
add_action('storefront_header' , 'storefront_lesouk_user_menu_wrapper_close',61);
function storefront_lesouk_user_menu_wrapper_close() { 
    echo '</div>';
}

/* Add pattern html */

add_action('woocommerce_archive_description' , 'storefront_lesouk_insert_before_description',0);
function storefront_lesouk_insert_before_description() { 
    get_template_part('template-parts/pattern');
}

add_filter( 'the_content', 'storefront_lesouk_insert_before_first_paragraph' );

function storefront_lesouk_insert_before_first_paragraph( $content ) {
    if( !is_front_page() && is_page() )
    get_template_part('template-parts/pattern');
    return $content;
}

?>