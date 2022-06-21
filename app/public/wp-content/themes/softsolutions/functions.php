<?php 
    function wp_softsolutions_enque_scripts() {
        wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . './css/style.css' );
    }
    
    add_action('wp_enqueue_scripts', 'wp_softsolutions_enque_scripts');

    // register menu

    register_nav_menus([
        'main-menu' => esc_html__('Main menu', 'softsolutions')
    ]);
?>