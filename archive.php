<?php
get_header(); ?>

<div class="container">
  <div id="content" role="main">
    <h1 class="entry-title">
      <?php
      $category_title = single_cat_title('', false);
      if (!empty($category_title)) {
        echo $category_title;
      } else {
        post_type_archive_title();
      }
      ?>
    </h1>

    <?php if (have_posts()) : ?>
      <div class="post-list">
        <?php while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="entry-meta">
              <span class="date"><?php the_time(get_option('date_format')); ?></span>
            </div>
            <div class="entry-excerpt">
              <?php the_excerpt(); ?>
            </div>
          </article>
        <?php endwhile; ?>
      </div>

      <div class="pagination">
        <?php
        the_posts_pagination(array(
          'mid_size' => 2,
          'prev_text' => __('&laquo; Vorige', 'svo'),
          'next_text' => __('Volgende &raquo;', 'svo'),
        ));
        ?>
      </div>
    <?php else : ?>
      <p>Geen berichten gevonden in deze categorie.</p>
    <?php endif; ?>
  </div><!-- #content -->
</div><!-- #container -->

<?php get_footer(); ?>