<?php

function my_portfolio_setup() {
    register_nav_menus( array(
        'main-menu' => 'Main Navigation Menu',
    ) );
}
add_action( 'after_setup_theme', 'my_portfolio_setup' );

function my_portfolio_enqueue_assets() {
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;700&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'portfolio-style',
        get_stylesheet_uri(),
        array('google-fonts'),
        '1.0.0'
    );

    wp_enqueue_script(
        'portfolio-script',
        get_template_directory_uri() . '/main.js',
        array('jquery'), 
        '1.0.0',
        true 
    );
}
add_action('wp_enqueue_scripts', 'my_portfolio_enqueue_assets');

function register_custom_post_works() {
    $labels = [
        'name'               => '制作実績',
        'singular_name'      => '制作実績',
        'menu_name'          => '制作実績',
        'add_new_item'       => '新規実績を追加',
        'edit_item'          => '実績を編集',
        'all_items'          => '実績一覧',
    ];
    $args = [
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => ['title', 'editor', 'thumbnail', 'custom-fields'], 
        'show_in_rest'       => true, 
    ];
    register_post_type('works', $args);
}
add_action('init', 'register_custom_post_works');