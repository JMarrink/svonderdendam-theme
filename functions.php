<?php
/**
 * Theme functions
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

require_once 'functions/func-admin.php';
require_once 'functions/func-debug.php';
require_once 'functions/func-menu.php';
require_once 'functions/func-script.php';
require_once 'functions/func-style.php';
require_once 'functions/func-teams.php';

function gulp_wp_content_builder(): void
{
    if (have_rows('content_builder')) {
        while (have_rows('content_builder')) {
            the_row();
            get_template_part('templates/parts/' . get_row_layout());
        }
    }
}

// Swiper toevoegen
function enqueue_swiper_assets() {
    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.5');

    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.5', true);

    wp_enqueue_script('custom-swiper-init', get_template_directory_uri() . '/assets/js/dist/swiper-init.min.js', array('swiper-js'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');


// add_filter('acf/load_field/key=field_content_builder', function ($field) {
//     if (!is_admin()) {
//         return $field;
//     }

//     $screen = get_current_screen();
//     if (!$screen) return $field;

//     $is_homepage = false;

//     if ($screen->post_type === 'page' && isset($_GET['post'])) {
//         $post_id = (int) $_GET['post'];
//         $is_homepage = (get_option('page_on_front') == $post_id);
//     }

//     if (!$is_homepage) {
//         $layouts_to_remove = ['hero'];

//         $field['layouts'] = array_filter($field['layouts'], function ($layout) use ($layouts_to_remove) {
//             return !in_array($layout['name'], $layouts_to_remove, true);
//         });
//     }

//     return $field;
// });