<article class="team-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <picture class="thumbnail">
            <img src="<?php echo get_field('photo')?>" alt="">
        </picture>
        <h1>
            <?php 
                echo get_field('fullname')
            ?>
        </h1>
    </header>
    <p>
        <?php
            echo get_field('position')
        ?>
    </p>
</article>