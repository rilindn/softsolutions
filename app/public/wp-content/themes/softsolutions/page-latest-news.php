<?php get_header('default') ?>

<div>
    <div class="page-content">
        <?php
            $page = get_page_by_title( 'latest news' );
            $content = apply_filters( 'the_content', $page -> post_content ); 
            echo $content;
        ?>
        <div class="page-latest-news-wrapper">
            <div class="teasers">
                <?php
                $res = get_latest_tech_news();
                foreach ($res['results'] as $element) {
                $image = $element['image_url'] ?: $image = 'https://cdn.pixabay.com/photo/2020/03/05/17/35/tech-news-4905017_1280.jpg';
                ?>
                <a href="<?php echo $element['link'] ?>" class="news-teaser">
                    <img src="<?php echo $image?>" alt="">
                    <div class="content">
                        <div class="header">
                            <div class="keywords">
                                <?php 
                                if (is_array($element['keywords'])) {
                                for ($i = 0; $i < 5; $i++) {
                                    if (!$element['keywords'][$i]) break;
                                ?>
                                <span>
                                    <?php echo $element['keywords'][$i] ?>
                                </span>
                                <?php 
                                }
                            }
                            ?>
                            </div>
                            <span class="pubDate"><?php echo $element['pubDate'] ?></span>
                        </div>
                        <h3><?php echo $element['title']  ?></h3>
                        <p><?php echo $element['description']  ?></p>
                    </div>
                </a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>