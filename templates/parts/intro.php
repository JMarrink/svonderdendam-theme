

<section class="article__header">
			<div class="container">
				<section class="breadcrumbs">
					<div class="breadcrumbs__path">
						<?php
						// Home link
						echo '<a class="breadcrumbs__crumb" href="' . esc_url(home_url('/')) . '">Home</a>';
						echo '<i class="breadcrumbs__seperator fa-solid fa-angle-right"></i>';

						// Get post type and archive link
						$post_type = get_post_type();
						if ($post_type !== 'post') {
							$post_type_obj = get_post_type_object($post_type);
							if ($post_type_obj && !empty($post_type_obj->labels->name)) {
								echo '<a class="breadcrumbs__crumb" href="' . esc_url(get_post_type_archive_link($post_type)) . '">' . esc_html($post_type_obj->labels->name) . '</a>';
								echo '<i class="breadcrumbs__seperator fa-solid fa-angle-right"></i>';
							}
						} else {
							// For posts, link to blog page
							$blog_page_id = get_option('page_for_posts');
							if ($blog_page_id) {
								echo '<a class="breadcrumbs__crumb" href="' . esc_url(get_permalink($blog_page_id)) . '">' . esc_html(get_the_title($blog_page_id)) . '</a>';
								echo '<i class="breadcrumbs__seperator fa-solid fa-angle-right"></i>';
							}
						}

						// If post has categories, show the first one
						$categories = get_the_category();
						if (!empty($categories)) {
							$category = $categories[0];
							echo '<a class="breadcrumbs__crumb" href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
							echo '<i class="breadcrumbs__seperator fa-solid fa-angle-right"></i>';
						}

						// Current post title
						echo '<span class="breadcrumbs__current">' . esc_html(get_the_title()) . '</span>';
						?>
					</div>
				</section>
				<div class="article__meta">
					<span class="article__date"><?= get_the_date('j F Y'); ?></span> 
				</div>
				<h1 class="article__title"><?php echo get_the_title(); ?></h1>
			</div>
        </section>
		<section class="article__featured-img container">
			<img src="http://svo.test/wp-content/uploads/2025/05/376777202_10210588392862726_3446469675199653380_n-e1747917043832.jpg" alt="">
		</section>