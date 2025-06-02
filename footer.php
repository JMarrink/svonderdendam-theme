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
                        <li><a href="https://www.facebook.com/svonderdendam" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/svonderdendam/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a></li>
                </div>
            </div>
            <div class="footer__block footer__block--adress">
                <h4 class="footer__title">Sportpark Harry Visser</h4>
                <p>
                    Achterweg <br>
                    89959 PD <br>
                    Onderdendam
                </p>
                <ul>
                    <li><a href="mailto:info@svonderdendam.nl">info@svonderdendam.nl</a></li>
                    <li><a href="tel:0503049328">050 304 9328</a></li>
                </ul>  
            </div>
            <div class="footer__block footer__block--teams">
                <h4 class="footer__title">Teams</h4>
                <ul class="footer__menu">
                    <li><a class="footer__menu-item" href="<?php echo esc_url(home_url('/teams/onderdendam-1/')); ?>">SVO 1</a></li>
                    <li><a class="footer__menu-item" href="<?php echo esc_url(home_url('/teams/onderdendam-2/')); ?>">SVO 2</a></li>
                    <li><a class="footer__menu-item" href="<?php echo esc_url(home_url('/teams/onderdendam-3/')); ?>">SVO VR18</a></li>
                    <li><a class="footer__menu-item" href="<?php echo esc_url(home_url('/teams/onderdendam-vrouwen/')); ?>">35+</a></li>
            </div>
            <div class="footer__block footer__block--about">
                <h4 class="footer__title">Over svo</h4>
                <ul class="footer__menu">
                    <li><a class="footer__menu-item" href="<?php echo esc_url(home_url('/')); ?>">Sponsoren</a></li>
                    <li><a class="footer__menu-item" href="<?php echo esc_url(home_url('/over-ons/')); ?>">Contact</a></li>
                    <li><a class="footer__menu-item" href="<?php echo esc_url(home_url('/teams/')); ?>">Geschiedenis</a></li>
                    <li><a class="footer__menu-item" href="<?php echo esc_url(home_url('/contact/')); ?>">Lid worden</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom__left">
                <p>&copy; <?php echo date('Y'); ?> SV Onderdendam</p>
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
