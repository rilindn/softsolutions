<article class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php the_permalink() ?>">
        <picture class="thumbnail">
            <?php the_post_thumbnail('medium') ?>
        </picture>
        <div class="blog-content">
            <div>

                <div class="tags">
                    <?php 
                    $tags = get_field('tags');
                    if ($tags) {
                        foreach ($tags as $tag) {
                ?>
                    <span class="tag">
                        <?php echo $tag;?>
                    </span>
                    <?php 
                        }
                    }
                ?>
                </div>
                <div class="text-content">
                    <h1 class="title text-content--truncate">
                        <?php the_title(); ?>
                    </h1>
                    <div class="description text-content--truncate">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </div>
            <div>

                <hr class="divider" />
                <div class="author">
                    <div class="avatar">
                        <img src="<?php echo get_field('author_profile_picture')?>" alt="">
                    </div>
                    <div class="author-date">
                        <div class="author-section">
                            <?php echo get_field('author_name');  ?>
                        </div>
                        <div class="date-section">

                            <?php the_date(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</article>