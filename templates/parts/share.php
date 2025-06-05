<section class="share-page">
    <div class="container">
        <div class="share-page__block">
            <div class="share-page__text">Deel deze pagina</div>
            <div class="share-page__icons">
                <a class="share-page__icon" href="https://wa.me/?text=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
                <a class="share-page__icon" href="mailto:?subject=<?php echo rawurlencode(get_the_title()); ?>&body=<?php echo rawurlencode(get_permalink()); ?>" target="_blank" rel="noopener">
                    <i class="fa-solid fa-envelope"></i>
                </a>
                <a class="share-page__icon" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
                <a class="share-page__icon" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a class="share-page__icon" href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
            </div>
        </div>
    </div>
</section>