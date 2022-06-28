<?php 

    add_theme_support( 'title-tag' );

    add_theme_support('post-thumbnails' );

    function wp_softsolutions_enque_scripts() {
        wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . './css/style.css' );
    }
    
    add_action('wp_enqueue_scripts', 'wp_softsolutions_enque_scripts');

    // register menu

    register_nav_menus([
        'main-menu' => esc_html__('Main menu', 'softsolutions')
    ]);

    // fetch latest news from NewsData.IO API
    function get_latest_tech_news(){
        $apikey = 'pub_87485fa60ff5121589b987b17a454be79e34';
        $language = 'en';
        $category = 'technology';
        $res = wp_remote_retrieve_body(wp_remote_get("https://newsdata.io/api/1/news?apikey={$apikey}&language={$language}&category={$category}"));
        $res = json_decode($res, true);
        return $res;
    }
?>