<?php
/**
 * unicase engine room
 *
 * @package unicase
 */

/**
 * Initialize all the things.
 */
require get_template_directory() . '/inc/init.php';

/**
 * Note: Do not add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * http://codex.wordpress.org/Child_Themes
 */
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 15 );
