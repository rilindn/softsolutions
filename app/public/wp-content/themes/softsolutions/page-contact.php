<?php get_header('default') ?>
<div>
    <div class="page-content">
        <?php
            $page = get_page_by_title( 'contact' );
            $content = apply_filters( 'the_content', $page -> post_content ); 
            echo $content;
        ?>
    </div>
</div>
<?php get_footer() ?>