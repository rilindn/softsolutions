<article class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="content">
        <?php the_title('<h1>', '</h1>'); ?>
        <div class="content-description">
            <?php the_content(); ?>
        </div>
    </div>
</article>