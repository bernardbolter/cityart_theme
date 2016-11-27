<?php

function posts_orderby_lastname ($orderby_statement)
{
  $orderby_statement = "RIGHT(post_title, LOCATE(' ', REVERSE(post_title)) - 1) ASC";
    return $orderby_statement;
}

function posts_orderby_lastname_desc ($orderby_statement_desc)
{
  $orderby_statement_desc = "RIGHT(post_title, LOCATE(' ', REVERSE(post_title)) - 1) DESC";
    return $orderby_statement_desc;
}

function acf_set_featured_image( $value, $post_id, $field  ){

    if($value != ''){
	    //Add the value which is the image ID to the _thumbnail_id meta data for the current post
	    add_post_meta($post_id, '_thumbnail_id', $value);
    }

    return $value;
}

// acf/update_value/name={$field_name} - filter for a specific field based on it's name
add_filter('acf/update_value/name=exhibition_artwork', 'acf_set_featured_image', 10, 3);


?>
