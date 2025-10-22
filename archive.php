<?php
get_header(); 
$post_type = get_post_type();
// var_dump($post_type); // Debugging line to check the post type
?>

<div class="">
  <div class="archive-page <?= $post_type?>__archive" role="main">
    <?php if ( $post_type === "team" ) : ?>
      <section class="hero team-archive__hero" style="background-image: url(http://svo.test/wp-content/uploads/2025/07/Slice.png);">

    </section>
    <section class="archive-page__content">
      <div class="container">
      <div class="team-archive__header">
        <h1 class="team-archive__title">Onze teams</h1>
      </div>
      <?php if (have_posts()) : ?>
        <div class="team-archive__grid">
          <?php while (have_posts()) : the_post(); ?>
            <article class="team-archive__team" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>">
                <?php endif; ?>
              <h2><?php the_title(); ?></h2>
              </a>
            </article>
          <?php endwhile; ?>
        </div>
      <?php else : ?>
        <p>Geen teams gevonden</p>
      <?php endif; ?>
      </div>
    </section>
    <?php else : ?>
      <section class="archive-page__content">
        <div class="container">
          <div class="archive-page__header">
              <h1 class="archive-page__title">
              <?php
              $category_title = single_cat_title('', false);
              if (!empty($category_title)) {
                echo $category_title;
              } else {
                post_type_archive_title();
              }
              ?>
            </h1>
          </div>
          <div class="archive-page__posts">
            <?php if (have_posts()) : ?>
            <div class="archive-page__list">
              <?php while (have_posts()) : the_post(); ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>" class="archive-page__thumb">
                <?php endif; ?>
                <div class="archive-page__post-content">
                  <span class="archive-page__post-title"><?php the_title(); ?></span>
                  <span class="archive-page__date"><?php echo get_the_date(); ?></span>
                </div>
                </a>
                </article>
              <?php endwhile; ?>
                </div>
            <div class="archive-page__pagination">
              <?php
              the_posts_pagination([
                'mid_size'  => 2,
                'prev_text' => __('« Vorige', 'svo'),
                'next_text' => __('Volgende »', 'svo'),
              ]);
              ?>
            </div>
            <?php else : ?>
            <p>Geen berichten gevonden</p>
            <?php endif; ?>
          </div>
        </div>
      </section>


    <?php endif; ?>
    

  </div><!-- #content -->
</div><!-- #container -->

<?php get_footer(); ?>