<?php
add_action( 'init', 'svo' );
function svo() {
	$args = [
		'label'  => esc_html__( 'Teams', 'svo' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Teams', 'svo' ),
			'name_admin_bar'     => esc_html__( 'Team', 'svo' ),
			'add_new'            => esc_html__( 'Team toevoegen', 'svo' ),
			'add_new_item'       => esc_html__( 'Nieuw team toevoegen', 'svo' ),
			'new_item'           => esc_html__( 'Nieuw team', 'svo' ),
			'edit_item'          => esc_html__( 'Team aanpassen', 'svo' ),
			'view_item'          => esc_html__( 'Bekijk team', 'svo' ),
			'update_item'        => esc_html__( 'Update team', 'svo' ),
			'all_items'          => esc_html__( 'Alle teams', 'svo' ),
			'search_items'       => esc_html__( 'Zoek team', 'svo' ),
			'parent_item_colon'  => esc_html__( 'Hoofd team', 'svo' ),
			'not_found'          => esc_html__( 'Geen team gevonden', 'svo' ),
			'not_found_in_trash' => esc_html__( 'Geen team gevonden in de prullenbak', 'svo' ),
			'name'               => esc_html__( 'Teams', 'svo' ),
			'singular_name'      => esc_html__( 'Team', 'svo' ),
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
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-groups',
		'supports' => [
			'title',
			'editor',
			'thumbnail',
		],
		
		'rewrite' => true
	];

	register_post_type( 'team', $args );
}