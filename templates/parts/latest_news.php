    <section class="latest-news">
        <div class="latest-news__container container">
            <div class="latest-news__header">
                <h2 class="latest-news__title">Laatste nieuws</h2>
            </div>
            <div class="swiper latest-news-slider">
                <div class="swiper-wrapper">
                    <?php
                    $args = array(
                        'category_name' => 'nieuws',
                        'posts_per_page' => 6,
                    );
                    $latest_news = new WP_Query($args);
                    if ($latest_news->have_posts()) :
                        while ($latest_news->have_posts()) : $latest_news->the_post();
                    ?>
                            <div class="swiper-slide latest-news-card">
                                <a href="<?php the_permalink(); ?>">
                                <div class="latest-news-card__image">
                                    <?php if (has_post_thumbnail()) : ?>          
                                        <?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/onderdendam-highfive-milan.png" alt="Nieuws">    <?php endif; ?>
                                </div>
                                <div class="latest-news-card__content">
                                    <h3 class="latest-news-card__title"><?php the_title(); ?></h3>
                                </div>
                                </a>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                    ?>
                        <p class="latest-news__no-posts">Er zijn momenteel geen nieuwsitems beschikbaar.</p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="latest-news__footer">
                <a class="latest-news__button" href="#">Bekijk al het nieuws <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </section>