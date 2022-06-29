<article class="career-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="/contact">
        <header class="entry-header">
            <picture class="thumbnail">
                <?php the_post_thumbnail('medium') ?>
            </picture>
            <h1>
                <?php echo get_field('position')?>
            </h1>
        </header>
        <div class="entry-content">
            <div class="content-description">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt"
                    viewBox="0 0 16 16">
                    <path
                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"
                        fill="gray" />
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" fill="gray" />
                </svg>
                <?php echo get_field('position') ?>
                <br />
                <br />
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-clock" viewBox="0 0 16 16">
                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"
                            fill="gray" />
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" fill="gray" />
                    </svg>
                    <?php echo get_field('hours') ?>
                </div>
                <br />
                <p>dl:
                    <?php echo get_field('deadline') ?>
                </p>
            </div>
            <div class="direction-icon">
                Apply now
                <svg xmlns="http://www.w3.org/2000/svg" width="29.151" height="20" viewBox="0 0 29.151 25">
                    <g id="theArrow" data-name="Group 46" transform="translate(0 0)">
                        <path id="Path_289" data-name="Path 289" class="arrow-icon"
                            d="M1.752,42.3a2.083,2.083,0,0,1,.361-.027H22.678l-.448-.209a4.171,4.171,0,0,1-1.178-.834l-5.767-5.767a2.159,2.159,0,0,1-.3-2.764,2.086,2.086,0,0,1,3.129-.271L28.539,42.853a2.086,2.086,0,0,1,0,2.95l0,0L18.11,56.233a2.086,2.086,0,0,1-3.129-.209,2.159,2.159,0,0,1,.3-2.764l5.757-5.777a4.172,4.172,0,0,1,1.043-.761l.626-.282H2.227a2.159,2.159,0,0,1-2.2-1.752A2.086,2.086,0,0,1,1.752,42.3Z"
                            transform="translate(0 -31.842)" fill="#40dc91"></path>
                    </g>
                </svg>
            </div>
        </div>
    </a>
</article>