<article class="service-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <a href="<?php the_permalink() ?>">
            <?php the_title('<h1>', '</h1>'); ?>
        </a>
    </header>
    <div class="entry-content">
        <!-- <picture class="thumbnail">
            <?php the_post_thumbnail('medium') ?>
        </picture> -->
        <div class="content-description">
            <?php the_excerpt(); ?>
        </div>
    </div>
</article>