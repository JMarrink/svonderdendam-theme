<?php
/**
 * Menu functions
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

/**
 * Register nav menus
 */
function gulp_wp_register_menus() {
	register_nav_menus(
		array(
			'header' => __( 'Header' ),
			'footer-teams' => __( 'Footer teams' ),
			'footer-about' => __( 'Footer over' ),
		)
	);
}
add_action( 'init', 'gulp_wp_register_menus' );

// Voeg een CSS-klasse toe aan de <a> in nav menu
function add_menu_link_class($atts, $item, $args) {
    if (isset($args->link_class)) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 10, 3);