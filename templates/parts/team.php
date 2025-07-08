<section class="team">
    <div class="container">
        <div class="team__header">
            <div class="team__img">
                    <?php
                        $acf = (object) get_fields();
                        $content = $acf->content_builder ?? '';
                        $team_img = get_sub_field('team_img');
                        $team_id = $acf->team_id ?? null;
                        // var_dump($team_id); // Debugging line to check team_id
                    ?>

                <img src="<?= $team_img['url'] ?>" alt="">
            </div>
            <div class="team-agenda">
                <h3 class="team-agenda__title">Volgende wedstrijd</h3>
                <?php
                $match = clubdata_get_next_match_by_team_id($team_id);
                ?>

                <?php if (!$match): ?>
                <div class="team-agenda__details">
                    <div class="team-agenda__team">
                        <div class="team-agenda__logo">
                            <img src="http://svo.test/wp-content/uploads/2025/04/logo.svg" alt="">
                        </div>
                        <div class="team-agenda__name">SVO 1</div>
                    </div>
                    <div class="team-agenda--details">
                        <div class="team-agenda--date-time">
                            <div class="team-agenda--date">Zaterdag <br>1 juni</div>
                            <div class="team-agenda--time">14:00</div>
                        </div>
                    </div>
                    <div class="team-agenda__team">
                        <div class="team-agenda__logo">
                            <img src="http://svo.test/wp-content/uploads/2025/05/Logo-SV-Bedum-30x30-vector-zonder-rand.png" alt="">
                        </div>
                        <div class="team-agenda__name">SV Bedum 7</div>
                    </div>
                </div>
                <?php else: ?>
                <div class="team-agenda__no-match">
                    <p>Er zijn momenteel geen wedstrijden gepland.</p>
                </div>
                <?php endif; ?>
                <div class="team-sponsor">
                    <div class="team-sponsor__title">
                        <?php
                        $sponsors = get_sub_field('team_sponsors');
                        ?>
                        <?php if (!empty($sponsors) && is_array($sponsors)): ?>
                            <div class="swiper team-sponsor__swiper">
                                <div class="swiper-wrapper">
                                    <?php foreach ($sponsors as $sponsor): ?>
                                        <?php if (!empty($sponsor['sponsor_logo'])): ?>
                                            <div class="swiper-slide team-sponsor__slide">
                                                <img src="<?php echo esc_url($sponsor['sponsor_logo']['url']); ?>" alt="">
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    if (typeof Swiper !== 'undefined') {
                                        new Swiper('.team-sponsor__swiper', {
                                            loop: true,
                                            autoplay: {
                                                delay: 4000,
                                                disableOnInteraction: false,
                                            },
                                            spaceBetween: 10,
                                            slidesPerView: 1,
                                            allowTouchMove: false,
                                        });
                                    }
                                });
                            </script>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-selection">
            <?php 
            $players = clubdata_get_team_members_by_type($acf->team_id);
            $staff = clubdata_get_team_members_by_type($acf->team_id, 'staff');
            ?>
            <div class="team-selection__list team-selection__staff">
                <h2 class="team-selection__title">Staf</h2>
                <ul class="team-selection__items">
                    <?php foreach ($staff as $staffMember): ?>
                        <li class="team-selection__item">
                            <div class="team-selection__img">
                                <?php if (empty($staffMember->photo_url)): ?>
                                    <img src="http://svo.test/wp-content/uploads/2025/07/default.png" alt="<?php echo esc_attr($staffMember->name ?? ''); ?>">
                                <?php else: ?>
                                    <img src="<?php echo esc_url($staffMember->photo_url); ?>" alt="<?php echo esc_attr($staffMember->name ?? ''); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="team-selection__data">
                                <div class="team-selection__meta">
                                    <span class="team-selection__name">
                                        <?php                 
                                            if (strpos($staffMember->name, ',') !== false) {
                                                [$achternaam, $voornaam] = array_map('trim', explode(',', $staffMember->name, 2));
                                                echo esc_html($voornaam . ' ' . $achternaam);
                                            } else {
                                                echo esc_html($staffMember->name ?? '');
                                            }
                                        ?>
                                    </span>
                                    <span class="team-selection__function"><?php echo esc_html($staffMember->position ?? ''); ?></span>
                                </div>
                                <div class="team-selection__shirt-number"><?php echo esc_html($staffMember->shirt_number ?? ''); ?></div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="team-selection__list team-selection__staff">
                <h2 class="team-selection__title">Selectie</h2>
                <ul class="team-selection__items">
                    <?php foreach ($players as $player): ?>
                        <li class="team-selection__item">
                            <div class="team-selection__img">
                                <?php if (empty($player->photo_url)): ?>
                                    <img src="http://svo.test/wp-content/uploads/2025/07/default.png" alt="<?php echo esc_attr($player->name ?? ''); ?>">
                                <?php else: ?>
                                    <img src="<?php echo esc_url($player->photo_url); ?>" alt="<?php echo esc_attr($player->name ?? ''); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="team-selection__data">
                                <div class="team-selection__meta">
                                    <span class="team-selection__name">
                                        <?php                 
                                            if (strpos($player->name, ',') !== false) {
                                                [$achternaam, $voornaam] = array_map('trim', explode(',', $player->name, 2));
                                                echo esc_html($voornaam . ' ' . $achternaam);
                                            } else {
                                                echo esc_html($player->name ?? '');
                                            }
                                        ?>
                                    </span>
                                    <span class="team-selection__function"><?php echo esc_html($player->position ?? ''); ?></span>
                                </div>
                                <div class="team-selection__shirt-number"><?php echo esc_html($player->shirt_number ?? ''); ?></div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>