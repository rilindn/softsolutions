<article class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php the_permalink() ?>">
        <picture class="thumbnail">
            <?php the_post_thumbnail('medium') ?>
        </picture>
        <div class="blog-content">
            <?php the_title('<h1>', '</h1>'); ?>
            <div class="content-description">
                <? echo wp_trim_words(get_the_excerpt(), 30) ;?>
            </div>
            <hr class="divider" />
            <div class="author">
                <div class="avatar">
                <!-- <?php 
                    if(the_author()){
                        $author = the_author();
                        $author = ucfirst($author);
                        $rest = substr($author, 0, 1);
                        echo $rest;
                    }
                
                ?> -->
                </div>
                <div class="author-date">
                    <div class="author-section">

                    <?php the_author();  ?>
                    </div>
                    <div class="date-section">

                    <?php the_date(); ?>
                    </div>
                </div>
            </div>
        </div>
    </a>
</article>