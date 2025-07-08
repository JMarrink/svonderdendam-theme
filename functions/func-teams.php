<?php
// add_action( 'init', 'svo' );
// function svo() {
// 	// Post type: Teams
// 	$team_args = [
// 		'label'  => esc_html__( 'Teams', 'svo' ),
// 		'labels' => [
// 			'menu_name'          => esc_html__( 'Teams', 'svo' ),
// 			'name_admin_bar'     => esc_html__( 'Team', 'svo' ),
// 			'add_new'            => esc_html__( 'Team toevoegen', 'svo' ),
// 			'add_new_item'       => esc_html__( 'Nieuw team toevoegen', 'svo' ),
// 			'new_item'           => esc_html__( 'Nieuw team', 'svo' ),
// 			'edit_item'          => esc_html__( 'Team aanpassen', 'svo' ),
// 			'view_item'          => esc_html__( 'Bekijk team', 'svo' ),
// 			'update_item'        => esc_html__( 'Update team', 'svo' ),
// 			'all_items'          => esc_html__( 'Alle teams', 'svo' ),
// 			'search_items'       => esc_html__( 'Zoek team', 'svo' ),
// 			'parent_item_colon'  => esc_html__( 'Hoofd team', 'svo' ),
// 			'not_found'          => esc_html__( 'Geen team gevonden', 'svo' ),
// 			'not_found_in_trash' => esc_html__( 'Geen team gevonden in de prullenbak', 'svo' ),
// 			'name'               => esc_html__( 'Teams', 'svo' ),
// 			'singular_name'      => esc_html__( 'Team', 'svo' ),
// 		],
// 		'public'              => true,
// 		'exclude_from_search' => false,
// 		'publicly_queryable'  => true,
// 		'show_ui'             => true,
// 		'show_in_nav_menus'   => true,
// 		'show_in_admin_bar'   => true,
// 		'show_in_rest'        => false,
// 		'capability_type'     => 'page',
// 		'hierarchical'        => false,
// 		'has_archive'         => true,
// 		'query_var'           => true,
// 		'can_export'          => true,
// 		'rewrite_no_front'    => false,
// 		'show_in_menu'        => true,
// 		'menu_position'       => 5,
// 		'menu_icon'           => 'dashicons-groups',
// 		'supports'            => [ 'title', 'editor', 'thumbnail' ],
// 		'rewrite'             => true,
// 	];
// 	register_post_type( 'team', $team_args );

// 	// Post type: Wedstrijden
// 	$game_args = [
// 		'label'  => esc_html__( 'game', 'svo' ),
// 		'labels' => [
// 			'menu_name'          => esc_html__( 'Wedstrijden', 'svo' ),
// 			'name_admin_bar'     => esc_html__( 'Wedstrijd', 'svo' ),
// 			'add_new'            => esc_html__( 'Wedstrijd toevoegen', 'svo' ),
// 			'add_new_item'       => esc_html__( 'Nieuwe Wedstrijd toevoegen', 'svo' ),
// 			'new_item'           => esc_html__( 'Nieuwe Wedstrijd', 'svo' ),
// 			'edit_item'          => esc_html__( 'Wedstrijd aanpassen', 'svo' ),
// 			'view_item'          => esc_html__( 'Bekijk Wedstrijd', 'svo' ),
// 			'update_item'        => esc_html__( 'Update Wedstrijd', 'svo' ),
// 			'all_items'          => esc_html__( 'Alle Wedstrijden', 'svo' ),
// 			'search_items'       => esc_html__( 'Zoek Wedstrijd', 'svo' ),
// 			'parent_item_colon'  => esc_html__( 'Hoofd Wedstrijd', 'svo' ),
// 			'not_found'          => esc_html__( 'Geen Wedstrijd gevonden', 'svo' ),
// 			'not_found_in_trash' => esc_html__( 'Geen Wedstrijd gevonden in de prullenbak', 'svo' ),
// 			'name'               => esc_html__( 'Wedstrijden', 'svo' ),
// 			'singular_name'      => esc_html__( 'Wedstrijd', 'svo' ),
// 		],
// 		'public'              => true,
// 		'exclude_from_search' => false,
// 		'publicly_queryable'  => true,
// 		'show_ui'             => true,
// 		'show_in_nav_menus'   => true,
// 		'show_in_admin_bar'   => true,
// 		'show_in_rest'        => false,
// 		'capability_type'     => 'post',
// 		'hierarchical'        => false,
// 		'has_archive'         => true,
// 		'query_var'           => true,
// 		'can_export'          => true,
// 		'rewrite_no_front'    => false,
// 		'show_in_menu'        => true,
// 		'menu_position'       => 6,
// 		'menu_icon'           => 'dashicons-flag',
// 		'supports'            => [ 'title' ],
// 		'rewrite'             => [
// 			'slug' => 'wedstrijd',
// 			'with_front' => false,
// 		],
// 	];
// 	register_post_type( 'game', $game_args );
// }

// Change post type slug to /nieuws
function change_post_type_slug_to_nieuws($args, $post_type) {
    if ($post_type === 'post') {
        if (empty($args['rewrite']) || !is_array($args['rewrite'])) {
            $args['rewrite'] = [];
        }
        $args['rewrite']['slug'] = 'nieuws';
    }
    return $args;
}
add_filter('register_post_type_args', 'change_post_type_slug_to_nieuws', 10, 2);

// Rename menu labels to "Nieuws"
function rename_post_menu_labels() {
    global $menu, $submenu;
    $menu[5][0] = 'Nieuws';
    $submenu['edit.php'][5][0]  = 'Alle nieuwsberichten';
    $submenu['edit.php'][10][0] = 'Nieuw nieuwsbericht';
    $submenu['edit.php'][16][0] = 'Categorieën';
}
add_action('admin_menu', 'rename_post_menu_labels');

// Rename post type labels to "Nieuws"
function rename_post_type_labels_to_nieuws() {
    global $wp_post_types;

    $labels = &$wp_post_types['post']->labels;
    $labels->name               = 'Nieuws';
    $labels->singular_name      = 'Nieuwsbericht';
    $labels->add_new            = 'Nieuw nieuwsbericht';
    $labels->add_new_item       = 'Voeg nieuwsbericht toe';
    $labels->edit_item          = 'Bewerk nieuwsbericht';
    $labels->new_item           = 'Nieuw nieuwsbericht';
    $labels->view_item          = 'Bekijk nieuwsbericht';
    $labels->search_items       = 'Zoek in nieuws';
    $labels->not_found          = 'Geen nieuws gevonden';
    $labels->not_found_in_trash = 'Geen nieuws in prullenbak';
    $labels->all_items          = 'Alle nieuwsberichten';
    $labels->menu_name          = 'Nieuws';
    $labels->name_admin_bar     = 'Nieuwsbericht';
}
add_action('init', 'rename_post_type_labels_to_nieuws');