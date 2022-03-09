<?php
// https://quadlayers.com/change-footer-in-storefront/

function custom_storefront_credit() {
    ?>
    <div class="site-info">
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
?>