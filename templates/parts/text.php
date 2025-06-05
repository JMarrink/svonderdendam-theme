<?php 
$acf = (object) get_fields();
$test = (object) $acf->content_builder[0] ?? null;
?>

<section class="text">
    <div class="text__container container">
        <div class="text__content">
            <?= get_sub_field('content') ?>
        </div>
    </div>
</section>