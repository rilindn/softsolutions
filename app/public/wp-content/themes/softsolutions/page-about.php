<?php get_header('default') ?>
<div>
    <div class="page-content page-about-wrapper">
        <?php
            $page = get_page_by_title( 'about' );
            $content = apply_filters( 'the_content', $page -> post_content ); 
            echo $content;
        ?>
    </div>
</div>
<?php get_footer() ?>