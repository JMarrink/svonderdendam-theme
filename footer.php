<?php
/**
 * Footer template
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */
?>

</main>
<footer class="footer">
    <div class="container">
        <div class="footer__content">
            <div class="footer__block footer__block--logo">
                <div class="footer__logo">
                    <img src="http://svo.test/wp-content/uploads/2025/04/logo.svg" alt="SV Onderdendam Logo" class="footer__logo-image">
                </div>
                <div class="footer__social">
                    <h4>
                        Volg ons op:
                    </h4>
                    <ul class="footer__social-links">
                        <?php if (get_field('facebook', 'option')): ?>
                            <li><a href="<?= esc_url(get_field('facebook', 'option')); ?>" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook"></i></a></li>
                        <?php endif; ?>
                        <?php if (get_field('instagram', 'option')): ?>
                            <li><a href="<?= esc_url(get_field('instagram', 'option')); ?>" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a></li>
                        <?php endif; ?>
                </div>
            </div>
            <div class="footer__block footer__block--adress">
                <?php
                    $adress = (object) get_field('adress', 'option');
                ?>
                <h4 class="footer__title"><?= esc_html($adress->title) ?></h4>
                <p>
                    <?= $adress->address_details ?>
                </p>
                <ul>
                    <li><a href="mailto:<?= esc_html($adress->email) ?>"><?= esc_html($adress->email) ?></a></li>
                    <li><a href="tel:<?= esc_html(str_replace(' ', '', $adress->phonenumber)) ?>"><?= esc_html($adress->phonenumber) ?></a></li>
                </ul>  
            </div>
            <div class="footer__block footer__block--teams">
                <h4 class="footer__title">Teams</h4>
                    <?php
                        wp_nav_menu([
                            'theme_location' => 'footer-teams',
                            'container' => false,
                            'menu_class' => 'footer__menu',
                            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                            'link_class' => 'footer__menu-item',
                        ]);
                    ?>
            </div>
            <div class="footer__block footer__block--about">
                <h4 class="footer__title">Over svo</h4>
                    <?php
                        wp_nav_menu([
                            'theme_location' => 'footer-about',
                            'container' => false,
                            'menu_class' => 'footer__menu',
                            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                            'link_class' => 'footer__menu-item',
                        ]);
                    ?>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom__left">
                <p>&copy; <?= date('Y'); ?> SV Onderdendam</p>
            </div>
            <div class="footer-bottom__right">
                <p>Ontwikkeld door <a href="https://www.muchomedia.nl" target="_blank" rel="noopener noreferrer">Mucho Media</a></p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
