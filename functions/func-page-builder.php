<?php
/**
 * Function for retrieving page content (content builder).
 *
 * @return void
 */
function  content_builder()
{
    if (have_rows('content_builder')) {
        while (have_rows('content_builder')) {
            the_row();

            get_template_part('rows/row_'.get_row_layout().'');
        }
    }
}

function reset_editor()
{
     global $_wp_post_type_features;

     $post_type="page";
     $feature = "editor";
     if ( !isset($_wp_post_type_features[$post_type]) )
     {

     }
     elseif ( isset($_wp_post_type_features[$post_type][$feature]) )
     unset($_wp_post_type_features[$post_type][$feature]);
}

add_action("init","reset_editor");