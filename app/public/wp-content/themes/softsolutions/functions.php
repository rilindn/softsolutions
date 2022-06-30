<?php 

    add_theme_support( 'title-tag' );

    add_theme_support('post-thumbnails' );

    add_theme_support('widgets');

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

    class wp_softsolutions_get_in_touch extends WP_Widget {
 
        function __construct() {
            parent::__construct(
                'wp_softsolutions_get_in_touch', 

                __('Get In Touch', 'softsolutions'), 

                array( 'description' => __( 'Widget that provides user some instructions to contacting', 'softsolutions' ), )
            );
        }
         
        public function widget( $args, $instance ) {
            echo $args['before_widget'];
            
            echo __( '
                <div class="container">
                    <div class="title-wrapper">
                        <h1> We would love to hear your <span>ideas</span></h1>
                    </div>
                    <p class="sub">Whether you wish to launch a new app or website, integrate something new into your system or plan to increase capacity and efficiency with external support - we are excited to hear from you!</p>
                    <div class="button-wrapper">
                        <a href="/contact" class="button">Get in touch</a>
                    </div>
                </div>
            ', 'softsolutions' );

            echo $args['after_widget'];
        }
    } 
    
    function wp_softsolutions_init_widgets() {
        register_widget( 'wp_softsolutions_get_in_touch' );
        register_sidebar( [
            'id' => 'footer',
            'name' => esc_html__( 'Footer widget area', 'softsolutions' ),
            'description' => esc_html__( 'Widget area made for footer', 'softsolutions' ),
        ] );
    }

    add_action( 'widgets_init', 'wp_softsolutions_init_widgets' );
?>