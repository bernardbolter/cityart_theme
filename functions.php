<?php

add_theme_support( 'post-thumbnails' );

// add javascript

function cityart_adding_scripts() {

wp_dequeue_script( 'jquery' );

}

add_action( 'wp_enqueue_scripts', 'cityart_adding_scripts' );

// Sorts artists by last name

function posts_orderby_lastname ($orderby_statement)
{
  $orderby_statement = "RIGHT(post_title, LOCATE(' ', REVERSE(post_title)) - 1) ASC";
    return $orderby_statement;
}

// Sorts artists by last name

function posts_orderby_lastname_desc ($orderby_statement_desc)
{
  $orderby_statement_desc = "RIGHT(post_title, LOCATE(' ', REVERSE(post_title)) - 1) DESC";
    return $orderby_statement_desc;
}

// Sets featured image for the Exhibitions image

function acf_set_featured_image( $value, $post_id, $field  ){

    if($value != ''){
	    //Add the value which is the image ID to the _thumbnail_id meta data for the current post
	    add_post_meta($post_id, '_thumbnail_id', $value);
    }

    return $value;
}

// acf/update_value/name={$field_name} - filter for a specific field based on it's name
add_filter('acf/update_value/name=exhibition_artwork', 'acf_set_featured_image', 10, 3);

add_action('acf/input/admin_head', 'my_acf_modify_exhibition_names_input_height');

function my_acf_modify_exhibition_names_input_height() {

    ?>
    <style type="text/css">
        #acf-field-artist_names_list {
            height: 1500px !important;
        }
    </style>
    <?php
}

add_filter('show_admin_bar', '__return_false');

// // add jQuery
//
// function include_jQuery() {
//     if (!is_admin()) {
//         // comment out the next two lines to load the local copy of jQuery
//         wp_deregister_script('jquery');
//         wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', false, '1.8.3');
//         wp_enqueue_script('jquery');
//     }
// }
// add_action('init', 'include_jQuery')
