<article class="service-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php the_permalink() ?>">
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
        <div class="entry-content">
            <div class="content-description">
                <? echo wp_trim_words(get_the_excerpt(), 30) ;?>
            </div>
            <div class="direction-icon">
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