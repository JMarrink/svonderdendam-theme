<?php
/**
 * Admin functions
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

/**
 * Credit in admin footer
 */
function gulp_wp_admin_footer() {
	echo 'Developed by <a href="https://muchomedia.nl" target="_blank" rel="noreferrer noopener">Mucho Media</a>. ';
}
add_filter( 'admin_footer_text', 'gulp_wp_admin_footer' );

/**
 * Change default greeting
 */
function gulp_wp_greeting( $wp_admin_bar ) {
	$user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$profile_url = get_edit_profile_url( $user_id );

	if ( 0 !== $user_id ) {
		$avatar = get_avatar( $user_id, 28 );
		$howdy = sprintf( __( 'Hi, %1$s' ), $current_user->display_name );
		$class = empty( $avatar ) ? '' : 'with-avatar';

		$wp_admin_bar->add_menu(array(
			'id' => 'my-account',
			'parent' => 'top-secondary',
			'title' => $howdy . $avatar,
			'href' => $profile_url,
			'meta' => array(
				'class' => $class,
			),
		));
	}
}
add_action( 'admin_bar_menu', 'gulp_wp_greeting', 11 );

// Voeg een custom style 'Button' toe aan de ACF WYSIWYG
function my_acf_mce_toolbars($toolbars) {
    if (isset($toolbars['Full'])) {
        $toolbars['Full'][2][] = 'styleselect';
    }
    return $toolbars;
}
add_filter('acf/fields/wysiwyg/toolbars', 'my_acf_mce_toolbars');

// Voeg de custom styles toe
function my_acf_tinymce_styles($init) {
    $style_formats = array(
        array(
            'title'    => 'Knop (Primary)',
            'selector' => 'a',
            'classes'  => 'button button__primary button__rounded',
        ),
        array(
            'title'    => 'Knop (Secondary)',
            'selector' => 'a',
            'classes'  => 'button button__secondary',
        ),
        array(
            'title'    => 'Knop (Rounded)',
            'selector' => 'a',
            'classes'  => 'button button__rounded',
        ),
    );

    $init['style_formats'] = json_encode($style_formats);

    return $init;
}
add_filter('tiny_mce_before_init', 'my_acf_tinymce_styles');