<section class="share-page">
    <div class="container">
        <div class="share-page__block">
            <?php
            $post_type = get_post_type();
            $label = ($post_type === 'game') ? 'wedstrijd' : 'pagina';
            ?>
            <div class="share-page__text">Deel deze <?= $label ?></div>
            <div class="share-page__icons">
                <a class="share-page__icon" href="https://wa.me/?text=<?= urlencode(get_permalink()); ?>" target="_blank" rel="noopener">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
                <a class="share-page__icon" href="mailto:?subject=<?= rawurlencode(get_the_title()); ?>&body=<?= rawurlencode(get_permalink()); ?>" target="_blank" rel="noopener">
                    <i class="fa-solid fa-envelope"></i>
                </a>
                <a class="share-page__icon" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
                <a class="share-page__icon" href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(get_permalink()); ?>" target="_blank" rel="noopener">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a class="share-page__icon" href="https://twitter.com/intent/tweet?url=<?= urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
            </div>
        </div>
    </div>
</section>