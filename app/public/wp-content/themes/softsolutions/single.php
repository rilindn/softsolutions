<?php get_header('default') ?>
<div id="primary" class="content-area">
    <h1>Single Post here!</h1>
    <main id="main" class="site-main">
        <?php if (have_posts()) : while (have_posts()): the_post(); ?>
        <?php get_template_part('template-parts/content'); ?>
        <?php endwhile; else: ?>
        <?php get_template_part('template-parts/content', 'none'); ?>
        <?php  endif; ?>
    </main>
</div>
<?php get_footer() ?>