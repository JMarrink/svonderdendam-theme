<?php
add_action( 'init', 'svo' );
function svo() {
	$args = [
		'label'  => esc_html__( 'Wedstrijden', 'svo' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Wedstrijden', 'svo' ),
			'name_admin_bar'     => esc_html__( 'Wedstrijd', 'svo' ),
			'add_new'            => esc_html__( 'Wedstrijd toevoegen', 'svo' ),
			'add_new_item'       => esc_html__( 'Nieuwe Wedstrijd toevoegen', 'svo' ),
			'new_item'           => esc_html__( 'Nieuwe Wedstrijd', 'svo' ),
			'edit_item'          => esc_html__( 'Wedstrijd aanpassen', 'svo' ),
			'view_item'          => esc_html__( 'Bekijk Wedstrijd', 'svo' ),
			'update_item'        => esc_html__( 'Update Wedstrijd', 'svo' ),
			'all_items'          => esc_html__( 'Alle Wedstrijden', 'svo' ),
			'search_items'       => esc_html__( 'Zoek Wedstrijd', 'svo' ),
			'parent_item_colon'  => esc_html__( 'Hoofd Wedstrijd', 'svo' ),
			'not_found'          => esc_html__( 'Geen Wedstrijd gevonden', 'svo' ),
			'not_found_in_trash' => esc_html__( 'Geen Wedstrijd gevonden in de prullenbak', 'svo' ),
			'name'               => esc_html__( 'Wedstrijden', 'svo' ),
			'singular_name'      => esc_html__( 'Wedstrijd', 'svo' ),
		],
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => false,
		'capability_type'     => 'page',
		'hierarchical'        => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite_no_front'    => false,
		'show_in_menu'        => true,
		'menu_position'       => 6,
		'menu_icon'           => 'dashicons-flag',
		'supports' => [
			'title',
			'editor',
			'thumbnail',
		],
		
		'rewrite' => true
	];

	register_post_type( 'Wedstrijd', $args );
}