<?php
/**
 * Default page template
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

get_header();
?>
	<div class="content-builder">
		<?php // gulp_wp_content_builder(); ?>
		<section class="hero" style="background-image: url(http://svo.test/wp-content/uploads/2025/05/376777202_10210588392862726_3446469675199653380_n-e1747917043832.jpg)">
			<div class="hero__container container">
				<div class="hero__content">
					<h1 class="hero__title">SV Onderdendam</h1>
						<div class="hero__intro">Een club waar je lid bent voor meer dan 90 minuten</div>
					<a class="hero__button button button__primary" href="#">Bekijk het laatste nieuws</a>
				</div>
			</div>
		</section>
		<section class="sponsor-bar">
			<div class="sponsor-bar__track">
				<?php
				// Run the sponsor bar twice
				for ($i = 0; $i < 2; $i++) :
					if (have_rows('club_sponsors', 'option')) :
						while (have_rows('club_sponsors', 'option')) : the_row();
							$logo = get_sub_field('sponsor_logo');
							$alt = !empty($logo['alt']) ? esc_attr($logo['alt']) : 'Sponsor Logo';
							$src = !empty($logo['url']) ? esc_url($logo['url']) : '';
							if ($src) :
				?>
					<div class="sponsor-bar__sponsor">
						<img class="sponsor-bar__logo" loading="lazy" fetchpriority="low" src="<?php echo $src; ?>" alt="<?php echo $alt; ?>">
					</div>
				<?php
							endif;
						endwhile;
						// Reset the rows pointer for the next loop
						reset_rows('club_sponsors', 'option');
					endif;
				endfor;
				?>
			</div>
		</section>
		<section class="match-results">
			<div class="match-results__container container">
				<div class="match-results__header">
					<h2 class="match-results__title">Laatste uitslagen</h2>
				</div>
				<div class="swiper match-results-slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide match-results-card">
							<div class="match-results-card__header">
								<h3>29 maart</h3>
							</div>
							<div class="match-results-card__content">
								<div class="match-results-card__home-team match-results-card__team">
									<div class="match-results-card__logo">
									<img src="http://svo.test/wp-content/uploads/2025/04/logo.svg" alt="">
									</div>
									<div class="match-results-card__name">Onderdendam 1</div>
								</div>
								<div class="match-results-card__score">
									<span class="match-results-card__score-home">3</span>
									<span class="match-results-card__score-separator">-</span>
									<span class="match-results-card__score-away">1</span>
								</div>
								<div class="match-results-card__away-team match-results-card__team">
									<div class="match-results-card__logo">
									<img src="http://svo.test/wp-content/uploads/2025/05/Logo-SV-Bedum-30x30-vector-zonder-rand.png" alt="">
									</div>
									<div class="match-results-card__name">SV bedum 6</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide match-results-card">
							<div class="match-results-card__header">
								<h3>29 maart</h3>
							</div>
							<div class="match-results-card__content">
								<div class="match-results-card__home-team match-results-card__team">
									<div class="match-results-card__logo">
									<img src="http://svo.test/wp-content/uploads/2025/04/logo.svg" alt="">
									</div>
									<div class="match-results-card__name">Onderdendam 1</div>
								</div>
								<div class="match-results-card__score">
									<span class="match-results-card__score-home">3</span>
									<span class="match-results-card__score-separator">-</span>
									<span class="match-results-card__score-away">1</span>
								</div>
								<div class="match-results-card__away-team match-results-card__team">
									<div class="match-results-card__logo">
									<img src="http://svo.test/wp-content/uploads/2025/05/Logo-SV-Bedum-30x30-vector-zonder-rand.png" alt="">
									</div>
									<div class="match-results-card__name">SV bedum 6</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide match-results-card">
							<div class="match-results-card__header">
								<h3>29 maart</h3>
							</div>
							<div class="match-results-card__content">
								<div class="match-results-card__home-team match-results-card__team">
									<div class="match-results-card__logo">
									<img src="http://svo.test/wp-content/uploads/2025/04/logo.svg" alt="">
									</div>
									<div class="match-results-card__name">Onderdendam 1</div>
								</div>
								<div class="match-results-card__score">
									<span class="match-results-card__score-home">3</span>
									<span class="match-results-card__score-separator">-</span>
									<span class="match-results-card__score-away">1</span>
								</div>
								<div class="match-results-card__away-team match-results-card__team">
									<div class="match-results-card__logo">
									<img src="http://svo.test/wp-content/uploads/2025/05/Logo-SV-Bedum-30x30-vector-zonder-rand.png" alt="">
									</div>
									<div class="match-results-card__name">SV bedum 6</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="match-results__footer">
					<a class="match-results__button" href="#">Bekijk alle uitslagen <i class="fa-solid fa-arrow-right"></i></a>
				</div>
			</div>
		</section>
		<section class="text-img">
			<!-- .text-img__left to set the img on the left side -->
			<div class="text-img__container container">
				<div class="text-img__content">
					<h2 class="text-img__title">Welkom bij SV Onderdendam</h2>
					<p class="text-img__text">SV Onderdendam is een hechte dorpsclub met een passie voor voetbal en een warm verenigingshart. Al sinds 1934 zijn wij een vaste waarde in het dorp, waar sportiviteit, plezier en saamhorigheid centraal staan. Of je nu komt om te voetballen, te supporten of gewoon voor de gezelligheid – bij SV Onderdendam is iedereen welkom.</p>
					<a class="text-img__button button button__primary button__rounded" href="#">Lees meer</a>

				</div>
				<div class="text-img__image">
					<img src="http://svo.test/wp-content/uploads/2025/05/376881298_10210588393982754_1071021237326224297_n.png" alt="Over SV Onderdendam">
				</div>
			</div>
		</section>
		<section class="latest-news">
			<div class="latest-news__container container">
				<div class="latest-news__header">
					<h2 class="latest-news__title">Laatste nieuws</h2>
				</div>
				<div class="swiper latest-news-slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide latest-news-card">
							<a href="">
							<div class="latest-news-card__image">
								<img src="http://svo.test/wp-content/uploads/2025/05/onderdendam-highfive-milan.png" alt="Nieuws">
							</div>
							<div class="latest-news-card__content">
								<h3 class="latest-news-card__title">Nieuw seizoen, nieuwe kansen!</h3>
							</div>
							</a>
						</div>
												<div class="swiper-slide latest-news-card">
							<a href="">
							<div class="latest-news-card__image">
								<img src="http://svo.test/wp-content/uploads/2025/05/onderdendam-highfive-milan.png" alt="Nieuws">
							</div>
							<div class="latest-news-card__content">
								<h3 class="latest-news-card__title">Nieuw seizoen, nieuwe kansen!</h3>
							</div>
							</a>
						</div>
												<div class="swiper-slide latest-news-card">
							<a href="">
							<div class="latest-news-card__image">
								<img src="http://svo.test/wp-content/uploads/2025/05/onderdendam-highfive-milan.png" alt="Nieuws">
							</div>
							<div class="latest-news-card__content">
								<h3 class="latest-news-card__title">Nieuw seizoen, nieuwe kansen!</h3>
							</div>
							</a>
						</div>
					</div>
				</div>
				<div class="latest-news__footer">
					<a class="latest-news__button" href="#">Bekijk al het nieuws <i class="fa-solid fa-arrow-right"></i></a>
				</div>
			</div>
		</section>
	</div>	
<?php

get_footer();
