<article class="team-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <picture class="thumbnail">
                <?php the_post_thumbnail('medium') ?>
            </picture>
            <h1>
                <?php 
                    the_title()
                ?>
            </h1>
        </header>
        <p>
            <?php
            the_excerpt()
            ?>
        </p>
</article>