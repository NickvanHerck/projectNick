<?php

 
// ENQUEUE STYLES
     
function enqueue_styles() {
     
    /** REGISTER css/screen.css **/
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css'); 
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css');
  wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css');
	
         
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
     
// ENQUEUE SCRIPTS
     
function enqueue_scripts() {
     
    /** REGISTER HTML5 Shim **/
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'jquery-1.11.3.min', get_template_directory_uri() . '/js/jquery-1.11.3.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'fontawesome', "https://use.fontawesome.com/82305359f0.js", array ('jquery'), 1.1, true);
	wp_enqueue_script( 'ajax', "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js", array ('jquery'), 1.1, true);
         
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );


add_theme_support( 'post-thumbnails' ); 

function create_posttype() {
 
    register_post_type( 'portfolios',
  
        array(
            'labels' => array(
                'name' => __( 'Portfolio' ),
                'singular_name' => __( 'Portfolio' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'portfolios'),
			'supports' => array( 'title', 'editor', 'author', 'thumbnail' )
        )
    );
}

add_action( 'init', 'create_posttype' );

add_theme_support( 'portfolio-thumbnails' ); 

?>