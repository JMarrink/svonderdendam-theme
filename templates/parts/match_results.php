    <section class="match-results">
        <div class="match-results__container container">
            <div class="match-results__header">
                <h2 class="match-results__title">Laatste uitslagen</h2>
            </div>
            <div class="swiper match-results-slider">
                <div class="swiper-wrapper">
                    <?php
                    // Haal laatste uitslagen uit sd_matches (plugin data)
                    $results = function_exists('clubdata_get_latest_results') ? clubdata_get_latest_results(10) : [];
                    if (!empty($results)) :
                        $ams_tz = new DateTimeZone('Europe/Amsterdam');
                        foreach ($results as $r) :
                            $ts = false;
                            if (!empty($r->datetime)) {
                                $dt_obj = DateTimeImmutable::createFromFormat('Y-m-d H:i:s', $r->datetime, $ams_tz);
                                if ($dt_obj) { $ts = $dt_obj->getTimestamp(); }
                            }
                            $date_str = $ts ? wp_date('j F Y', $ts, $ams_tz) : '';
                            $home_logo_url = !empty($r->home_logo_url) ? $r->home_logo_url : '';
                            $away_logo_url = !empty($r->away_logo_url) ? $r->away_logo_url : '';
                            ?>
                            <div class="swiper-slide match-results-card">
                                <div class="match-results-card__header">
                                    <h3><?php echo esc_html($date_str); ?></h3>
                                </div>
                                <div class="match-results-card__content">
                                    <div class="match-results-card__home-team match-results-card__team">
                                        <div class="match-results-card__logo">
                                            <?php if ($home_logo_url): ?>
                                                <img src="<?php echo esc_url($home_logo_url); ?>" alt="">
                                            <?php endif; ?>
                                        </div>
                                        <div class="match-results-card__name"><?php echo esc_html($r->home_team); ?></div>
                                    </div>
                                    <div class="match-results-card__score">
                                        <span class="match-results-card__score-home"><?php echo esc_html($r->home_goals); ?></span>
                                        <span class="match-results-card__score-separator">-</span>
                                        <span class="match-results-card__score-away"><?php echo esc_html($r->away_goals); ?></span>
                                    </div>
                                    <div class="match-results-card__away-team match-results-card__team">
                                        <div class="match-results-card__logo">
                                            <?php if ($away_logo_url): ?>
                                                <img src="<?php echo esc_url($away_logo_url); ?>" alt="">
                                            <?php endif; ?>
                                        </div>
                                        <div class="match-results-card__name"><?php echo esc_html($r->away_team); ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endforeach;
                    else:
                        echo '<p>Geen uitslagen gevonden.</p>';
                    endif;
                    ?>
                </div>
            </div>
            <div class="match-results__footer">
                <a class="match-results__button" href="#">Bekijk alle uitslagen <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </section>
