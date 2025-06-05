

		<section class="article__header<?php if (get_post_type() === 'game') echo ' article__header--game'; ?>">
			<div class="container">
				<?php get_template_part('templates/parts/breadcrumbs'); ?>
				
				<div class="article__meta">
					<span class="article__date"><?= get_the_date('j F Y'); ?></span> 
				</div>

				<?php if (get_post_type() !== 'game'): ?>
					<h1 class="article__title"><?= get_the_title(); ?></h1>
				<?php endif; ?>

			<?php if (get_post_type() === 'game'): ?>
				<div class="game-intro">
					<?php
					$home_team = get_field('home_team');
					$away_team = get_field('away_team');
					$game_details = get_field('game_details');
					if ($home_team && $away_team && $game_details): ?>
						<div class="game-intro__teams">
							<div class="game-intro__team game-intro__team--home">
								<?php if ($home_team['team_logo']): ?>
									<div class="game-intro__logo">
										<img src="<?= esc_url($home_team['team_logo']['sizes']['medium']); ?>" alt="<?php echo esc_attr($home_team['team_name']); ?>">
									</div>
								<?php endif; ?>
								<span class="game-intro__team-name"><?= esc_html($home_team['team_name']); ?></span>
							</div>
							<div class="game-intro__result"><?= esc_html($game_details['goals_home_team']) ?> - <?= esc_html($game_details['goals_away_team']) ?></div>
							<div class="game-intro__team game-intro__team--away">
								<?php if ($away_team['team_logo']): ?>
									<div class="game-intro__logo">
										<img src="<?= esc_url($away_team['team_logo']['sizes']['medium']); ?>" alt="<?php echo esc_attr($away_team['team_name']); ?>">
									</div>
								<?php endif; ?>
								<span class="game-intro__team-name"><?= esc_html($away_team['team_name']); ?></span>
							</div>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			</div>

        </section>
		<?php if (has_post_thumbnail() && get_post_type() !== 'game'): ?>
			<section class="article__featured-img container">
				<?php the_post_thumbnail('full', ['alt' => get_the_title()]); ?>
			</section>
		<?php endif; ?>
