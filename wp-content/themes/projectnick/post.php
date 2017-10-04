<?php 
function get_post( $post = null, $output = OBJECT, $filter = 'raw' ) {
    if ( empty( $post ) && isset( $GLOBALS['post'] ) )
        $post = $GLOBALS['post'];
 
    if ( $post instanceof WP_Post ) {
        $_post = $post;
    } elseif ( is_object( $post ) ) {
        if ( empty( $post->filter ) ) {
            $_post = sanitize_post( $post, 'raw' );
            $_post = new WP_Post( $_post );
        } elseif ( 'raw' == $post->filter ) {
            $_post = new WP_Post( $post );
        } else {
            $_post = WP_Post::get_instance( $post->ID );
        }
    } else {
        $_post = WP_Post::get_instance( $post );
    }
 
    if ( ! $_post )
        return null;
 
    $_post = $_post->filter( $filter );
 
    if ( $output == ARRAY_A )
        return $_post->to_array();
    elseif ( $output == ARRAY_N )
        return array_values( $_post->to_array() );
 
    return $_post;
}
?>