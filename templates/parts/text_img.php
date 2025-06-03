<?php 
$title = get_sub_field('title');
$text = get_sub_field('text');
$image = get_sub_field('img');
$position = get_sub_field('position');

$position_class = $position ? 'text-img__left' : '';
?>

<section class="text-img">
    <div class="text-img__container container <?= esc_attr($position_class) ?>">
        <div class="text-img__content">
            <?php if ($title): ?>
                <h2 class="text-img__title"><?= esc_html($title) ?></h2>
            <?php endif; ?>

            <?php if ($text): ?>
                <div class="text-img__text">
                    <?= $text ?>
                </div>
            <?php endif; ?>
        </div>

        <?php if (!empty($image['sizes']['large'])): ?>
            <div class="text-img__image">
                <img src="<?= esc_url($image['sizes']['large']) ?>" alt="<?= esc_attr($image['alt'] ?? '') ?>">
            </div>
        <?php endif; ?>
    </div>
</section>