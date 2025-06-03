<?php
// Label: Sponsor Bar
// Description: Een horizontale sponsorbalk met logocarrousel
// Preview: /wp-content/uploads/2025/06/sponsor-bar-preview.png
// Icon: 🏁

$fields = '[
    {
        "label": "Club Sponsors",
        "name": "club_sponsors",
        "type": "repeater",
        "sub_fields": [
            {
                "label": "Sponsor Logo",
                "name": "sponsor_logo",
                "type": "image",
                "required": true,
                "return_format": "array",
                "preview_size": "medium",
                "library": "all"
            }
        ],
        "min": 1,
        "layout": "table"
    }
]';

// Get sponsor logos from options page
$sponsors = get_field('club_sponsors', 'option');
?>

<?php if ($sponsors): ?>
    <section class="sponsor-bar">
        <div class="sponsor-bar__track">
            <?php
            // Loop sponsors twice for seamless scrolling
            for ($i = 0; $i < 2; $i++):
                foreach ($sponsors as $sponsor):
                    $logo = $sponsor['sponsor_logo'];
                    $alt = !empty($logo['alt']) ? esc_attr($logo['alt']) : 'Sponsor Logo';
                    $src = !empty($logo['url']) ? esc_url($logo['url']) : '';
                    if ($src):
            ?>
                <div class="sponsor-bar__sponsor">
                    <img class="sponsor-bar__logo" loading="lazy" fetchpriority="low" src="<?php echo $src; ?>" alt="<?php echo $alt; ?>">
                </div>
            <?php
                    endif;
                endforeach;
            endfor;
            ?>
        </div>
    </section>
<?php endif; ?>