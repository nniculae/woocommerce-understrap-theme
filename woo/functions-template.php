<?php 
/**
 * Remove breadcumb
 */
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb',20);

/**
 * Remove page title
 */
// add_filter('woocommerce_show_page_title', '__return_false');
/**
 * Remove Result Count
 */
remove_action('woocommerce_before_shop_loop','woocommerce_result_count',20);


// add_filter( 'wp_nav_menu_items', 'your_custom_menu_item', 10, 2 );
// function your_custom_menu_item ( $items, $args ) {
//     if ($args->theme_location == 'primary') {
//         $items .= '<li>Show whatever</li>';
//     }
//     return $items;
// }
//https://sridharkatakam.com/adding-cart-icon-number-items-total-cost-nav-menu-using-woocommerce/