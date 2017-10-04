<?php 
function query_posts($query) 
{
    $GLOBALS['wp_query'] = new WP_Query();
    return $GLOBALS['wp_query']->query($query);
}
?>