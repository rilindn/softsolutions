<?php get_header('default') ?>
<div>
    <div class="page-content">
        <?php
            $page = get_page_by_title( 'team' );
            $content = apply_filters( 'the_content', $page -> post_content ); 
            echo $content;
        ?>
        <div class="wp-block-group">
            <div class="team wp-block-group__inner-container">
                <?php
                    $the_query = new WP_Query( array(
                        'category_name' => 'team',
                    )); 
                        
                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                            get_template_part('template-parts/teaser-team'); 
                        }
                    }
                    else {
                        get_template_part('template-parts/content', 'none');
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>