<?php
function my_child_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_child_theme_enqueue_styles' );


function dequeue_jquery_and_add_cdn() {
    if ( ! is_admin() ) {
        wp_deregister_script('jquery');
        wp_dequeue_script('jquery');
    }
    wp_enqueue_script( 'jquery-cdn', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true );
}
add_action( 'wp_enqueue_scripts', 'dequeue_jquery_and_add_cdn', 11 );


function my_child_theme_enqueue_scripts() {
    wp_enqueue_script( 'my-custom-script', get_stylesheet_directory_uri() . '/js/kadai4-3.js', array('jquery-cdn'), microtime(), true );
}
add_action( 'wp_enqueue_scripts', 'my_child_theme_enqueue_scripts' );

?>
