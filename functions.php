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

?>
