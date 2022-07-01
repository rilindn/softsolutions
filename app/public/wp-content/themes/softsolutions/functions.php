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

    class wp_softsolutions_headquarters extends WP_Widget {
 
        function __construct() {
            parent::__construct(
                'wp_softsolutions_headquarters', 

                __('Headquarters', 'softsolutions'), 

                array( 'description' => __( 'Widget that provides user inf such: adress, phone and email ', 'softsolutions' ), )
            );
        }
         
        public function widget( $args, $instance ) {
            echo $args['before_widget'];
            
            echo __( '
                <div class="sub-container">
                    <h2>Headquarters</h2>
                    <div class="info-container">
                        <div class="item-container">
                            <h4>Address: </h4>
                            <span>Pristina, Kosovo</span>
                        </div>
                        <div class="item-container">
                            <h4>Phone: </h4>
                            <span>+383 44 123 875</span>
                        </div>
                        <div class="item-container">
                            <h4>Email:</h4>
                            <span>contact@softsolutions.wts2022.com</span>
                        </div>
                    </div>
                 </div>
            ', 'softsolutions' );

            echo $args['after_widget'];
        }
    } 
    
    class wp_softsolutions_follow_us extends WP_Widget {
 
        function __construct() {
            parent::__construct(
                'wp_softsolutions_follow_us', 

                __('Follow us', 'softsolutions'), 

                array( 'description' => __( 'Widget that provides user accounts to follow', 'softsolutions' ), )
            );
        }
         
        public function widget( $args, $instance ) {
            echo $args['before_widget'];
            
            echo __( '
                <div class="sub-container">
                    <h2>Follow us</h2>
                    <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                            <path id="linkedin" d="M20,0A20,20,0,1,0,40,20,20,20,0,0,0,20,0ZM14.188,30.234H9.317V15.58h4.871ZM11.753,13.579h-.032a2.539,2.539,0,1,1,.064-5.063,2.54,2.54,0,1,1-.032,5.063Zm20,16.655h-4.87v-7.84c0-1.97-.705-3.314-2.468-3.314a2.666,2.666,0,0,0-2.5,1.781,3.336,3.336,0,0,0-.16,1.189v8.184H16.884s.064-13.279,0-14.654h4.871v2.075a4.836,4.836,0,0,1,4.39-2.419c3.2,0,5.608,2.094,5.608,6.6Zm0,0" fill="#eaeaea"/>
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="41.739" height="40" viewBox="0 0 41.739 40">
                            <path id="logo" d="M20.869.5A20.688,20.688,0,0,0,0,21.008,20.542,20.542,0,0,0,14.269,40.465c1.043.193,1.426-.442,1.426-.986,0-.487-.017-1.777-.026-3.487C9.864,37.228,8.64,33.24,8.64,33.24a5.467,5.467,0,0,0-2.322-3C4.428,28.969,6.464,29,6.464,29a4.366,4.366,0,0,1,3.2,2.113c1.861,3.136,4.885,2.23,6.078,1.706a4.342,4.342,0,0,1,1.322-2.743c-4.635-.513-9.506-2.276-9.506-10.134a7.835,7.835,0,0,1,2.148-5.5,7.175,7.175,0,0,1,.183-5.428s1.748-.55,5.739,2.1a20.009,20.009,0,0,1,10.435,0c3.965-2.652,5.713-2.1,5.713-2.1a7.373,7.373,0,0,1,.209,5.428,7.867,7.867,0,0,1,2.139,5.5c0,7.878-4.878,9.612-9.522,10.116a4.866,4.866,0,0,1,1.409,3.795c0,2.744-.026,4.949-.026,5.616,0,.537.365,1.179,1.435.974A20.479,20.479,0,0,0,41.739,21.008,20.692,20.692,0,0,0,20.869.5Z" transform="translate(0 -0.5)" fill="#eaeaea"/>
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                            <path id="twitter" d="M20,0A20,20,0,1,0,40,20,20,20,0,0,0,20,0Zm9.132,15.594q.013.3.013.593A12.972,12.972,0,0,1,16.084,29.248h0a12.994,12.994,0,0,1-7.036-2.062,9.337,9.337,0,0,0,1.095.063,9.211,9.211,0,0,0,5.7-1.965A4.6,4.6,0,0,1,11.555,22.1a4.575,4.575,0,0,0,2.073-.079,4.592,4.592,0,0,1-3.683-4.5c0-.021,0-.039,0-.059a4.559,4.559,0,0,0,2.079.574A4.594,4.594,0,0,1,10.6,11.9a13.033,13.033,0,0,0,9.462,4.8,4.593,4.593,0,0,1,7.823-4.186A9.207,9.207,0,0,0,30.8,11.4a4.608,4.608,0,0,1-2.019,2.539,9.155,9.155,0,0,0,2.636-.723A9.329,9.329,0,0,1,29.132,15.594Zm0,0" fill="#eaeaea"/>
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                            <path id="facebook" d="M40,20A20,20,0,1,0,20,40c.117,0,.234,0,.352-.008V24.43h-4.3V19.422h4.3V15.734c0-4.273,2.609-6.6,6.422-6.6a34.9,34.9,0,0,1,3.852.2V13.8H28c-2.07,0-2.477.984-2.477,2.43v3.188h4.961l-.648,5.008H25.523v14.8A20.006,20.006,0,0,0,40,20Z" fill="#eaeaea"/>
                        </svg>
                    </div>
                 </div>
            ', 'softsolutions' );

            echo $args['after_widget'];
        }
    } 
    
    function wp_softsolutions_init_widgets() {
        register_widget( 'wp_softsolutions_get_in_touch' );
        register_widget( 'wp_softsolutions_headquarters' );
        register_widget( 'wp_softsolutions_follow_us' );
        register_sidebar( [
            'id' => 'footer',
            'name' => esc_html__( 'Footer widget area', 'softsolutions' ),
            'description' => esc_html__( 'Widget area made for footer', 'softsolutions' ),
        ] );
        register_sidebar( [
            'id' => 'headquarter-footer',
            'name' => esc_html__( 'Footer widget headquarter', 'softsolutions' ),
            'description' => esc_html__( 'Widget area made for footer', 'softsolutions' ),
        ] );
        register_sidebar( [
            'id' => 'follow-footer',
            'name' => esc_html__( 'Footer widget follow', 'softsolutions' ),
            'description' => esc_html__( 'Widget area made for footer', 'softsolutions' ),
        ] );
    }

    add_action( 'widgets_init', 'wp_softsolutions_init_widgets' );
?>