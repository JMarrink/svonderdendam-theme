<?php
// Label: hero
// Description: Een grote hero-sectie met afbeelding en tekst
// Preview: /wp-content/uploads/2025/04/hero.png
// Icon: ✍️

$fields = '[
    {
        "label": "Titel",
        "name": "title",
        "type": "text",
        "required": true
    },
    {
        "label": "Introductietekst",
        "name": "intro_text",
        "type": "wsysiwyg",
        "required": false,
        "rows": 4,
        "placeholder": "Typ hier een korte intro..."
    },
    {
        "label": "Achtergrondafbeelding",
        "name": "background_image",
        "type": "image",
        "required": false,
        "return_format": "array",
        "preview_size": "medium",
        "library": "all"
    }
]';

$title = get_sub_field('title');
$intro_text = get_sub_field('intro_text');
$background_image = get_sub_field('background_image');

?>
<section class="hero" style="background-image: url(<?php echo esc_url($background_image['url']); ?>);">
    <div class="hero__container container">
        <div class="hero__content">
            <h1 class="hero__title"><?php echo esc_html($title); ?></h1>
            <?php if ($intro_text): ?>
                <div class="hero__intro"><?php echo $intro_text; ?></div>
            <?php endif; ?>
            <a class="hero__button button button__primary" href="#">Bekijk het laatste nieuws</a>
        </div>
    </div>
</section>