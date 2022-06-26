<?php get_header() ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <!-- show 3 latest services added -->
        <div>
            <h2><?php esc_html_e('Services', 'softsolutions') ?></h2>
            <div class="services">
                <?php
                    $the_query = new WP_Query( array(
                        'category_name' => 'service',
                        'posts_per_page' => 3,
                    )); 
                        
                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                            get_template_part('template-parts/teaser-service'); 
                        } 
                    }
                    else {
                        get_template_part('template-parts/content', 'none');
                    }
                ?>
            </div>
            <a href="/services" class="see-more">
                <div class="see-more__btn"> See more</div>
            </a>
        </div>
        <!-- show 3 latest blogs posted -->
        <div>
            <h2><?php esc_html_e('Blogs', 'softsolutions') ?></h2>
            <div class="blogs">
                <?php
                    $the_query = new WP_Query( array(
                        'category_name' => 'blog',
                        'posts_per_page' => 3,
                    )); 
                    
                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                            get_template_part('template-parts/teaser-blog'); 
                        }
                    }
                    else {
                        get_template_part('template-parts/content', 'none');
                    }
                ?>
            </div>
        </div>
    </main>
</div>
<?php get_footer() ?>