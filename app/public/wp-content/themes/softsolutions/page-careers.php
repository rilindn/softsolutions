<?php get_header('default') ?>
<div>
    <div class="page-content">
        <?php
            $page = get_page_by_title( 'careers' );
            $content = apply_filters( 'the_content', $page -> post_content ); 
            echo $content;
        ?>
        <div class="wp-block-group">
            <div class="careers wp-block-group__inner-container">
                <?php
                    $the_query = new WP_Query( array(
                        'post_type' => 'open-position',
                    )); 
                        
                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                            get_template_part('template-parts/teaser-career'); 
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