<?php

/* ------------------------------------------------------------------*/
/* Functions                                                         */
/* ------------------------------------------------------------------*/
// require(get_template_directory() . '-lesouk/inc/function-options.php');
require(get_template_directory() . '-lesouk/inc/function-theme-store-lesouk.php');


// https://quadlayers.com/change-footer-in-storefront/

function custom_storefront_credit() {
    ?>
    <div class=”site-info”>
  <?php echo '©' . get_the_date( 'Y' ).' '.get_bloginfo( 'name' ) ; ?>
    </div><!-- .site-info -->
    <?php
    }

add_action( 'init', 'custom_remove_footer_credit', 10 );
function custom_remove_footer_credit () {
    remove_action( 'storefront_footer', 'storefront_credit', 20 );
    add_action( 'storefront_footer', 'custom_storefront_credit', 20 );
}
add_action( 'init', 'custom_move_to_footer_secondary_navigation',10);
function custom_move_to_footer_secondary_navigation() {
    remove_action('storefront_header','storefront_secondary_navigation',30);
    add_action( 'storefront_footer', 'storefront_secondary_navigation',10);
}
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
?>
