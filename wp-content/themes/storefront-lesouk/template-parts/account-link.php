<?php
if (!defined('ABSPATH')) {
    exit;
}
?>

<ul class="user-menu menu">
    <li class="my-account"><?php if (is_user_logged_in()) { ?>
        <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>"
            title="<?= __('Mon compte', 'storefront-lesouk'); ?>"><span><?= __('Mon compte', 'storefront-lesouk'); ?></span></a>
        <?php } else { ?>
        <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>"
            title="<?= __('Mon compte', 'storefront-lesouk'); ?>"><span><?= __('Mon compte', 'storefront-lesouk'); ?></span></a>
        <?php } ?>
    </li>
</ul>