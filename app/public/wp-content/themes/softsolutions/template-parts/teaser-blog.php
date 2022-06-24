<article class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php the_permalink() ?>">
        <picture class="thumbnail">
            <?php the_post_thumbnail('medium') ?>
        </picture>
        <div class="content">
            <?php the_title('<h1>', '</h1>'); ?>
            <div class="content-description">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </a>
</article>