    <section class="match-results">
        <div class="match-results__container container">
            <div class="match-results__header">
                <h2 class="match-results__title">Laatste uitslagen</h2>
            </div>
            <div class="swiper match-results-slider">
                <div class="swiper-wrapper">
                    <?php
                    $args = array(
                        'post_type'      => 'game',
                        'posts_per_page' => 10,
                        'post_status'    => 'publish',
                    );
                    $games_query = new WP_Query($args);
                    ?>
                    <pre>
                    <?php
                    //var_dump($games_query);
                    ?>
                    </pre>
                    <?php
                    if ($games_query->have_posts()) :
                        while ($games_query->have_posts()) : $games_query->the_post();
                            // Get ACF group fields
                            
                            $home_team_group = get_field('home_team');
                            $away_team_group = get_field('away_team');
                            $game_details_group = get_field('game_details');

                            // Home team details
                            $home_team = isset($home_team_group['team_name']) ? $home_team_group['team_name'] : '';
                            $home_logo = isset($home_team_group['team_logo']) ? $home_team_group['team_logo'] : '';
                            // var_dump($home_logo);
                            // Away team details
                            $away_team = isset($away_team_group['team_name']) ? $away_team_group['team_name'] : '';
                            $away_logo = isset($away_team_group['team_logo']) ? $away_team_group['team_logo'] : '';

                            // Game details
                            $date = isset($game_details_group['game_date_time']) ? $game_details_group['game_date_time'] : '';

                            $home_score = isset($game_details_group['goals_home_team']) ? $game_details_group['goals_home_team'] : '';
                            $away_score = isset($game_details_group['goals_away_team']) ? $game_details_group['goals_away_team'] : '';    ?>
                        <div class="swiper-slide match-results-card">
                            <a href="<?php the_permalink(); ?>">
                            <div class="match-results-card__header">
                                <h3><?php echo esc_html($date); ?></h3>
                            </div>
                            <div class="match-results-card__content">
                                <div class="match-results-card__home-team match-results-card__team">
                                    <div class="match-results-card__logo">
                                        <?php if ($home_logo): ?>
                                            <img src="<?php echo esc_url($home_logo['sizes']['medium']); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="match-results-card__name"><?php echo esc_html($home_team); ?></div>
                                </div>
                                <div class="match-results-card__score">
                                    <span class="match-results-card__score-home"><?php echo esc_html($home_score); ?></span>
                                    <span class="match-results-card__score-separator">-</span>
                                    <span class="match-results-card__score-away"><?php echo esc_html($away_score); ?></span>
                                </div>
                                <div class="match-results-card__away-team match-results-card__team">
                                    <div class="match-results-card__logo">
                                        <?php if ($away_logo): ?>
                                            <img src="<?php echo esc_url($away_logo['sizes']['medium']); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="match-results-card__name"><?php echo esc_html($away_team); ?></div>
                                </div>
                            </div>
                            </a>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>Geen uitslagen gevonden.</p>';
                    endif;
                    ?>
                </div>    </div>
            <div class="match-results__footer">
                <a class="match-results__button" href="#">Bekijk alle uitslagen <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </section>