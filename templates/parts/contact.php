      <section class="hero team-archive__hero" style="background-image: url(http://svo.test/wp-content/uploads/2025/05/376777202_10210588392862726_3446469675199653380_n-e1747917043832.jpg);">
        <div class="container">
            <h1 class="hero__title">Contact</h1>
        </div>
    </section>

<section class="contact">
    <div class="container">
        <div class="contact__content">
            <div class="contact__form">
                <h2>Neem contact met ons op</h2>
                <?php
                    if ( function_exists( 'wpforms_display' ) ) {
                        echo wpforms_display( 339 ); // Replace 123 with your actual WPForms form ID
                    }
                ?>
            </div>
            <div class="contact__details">
                <h2 class="">Contact gegevens</h2>
                <p>
                    Achterweg 8 <br>
                    89959 PD <br>
                    Onderdendam
                </p>
                <ul>
                    <li><a href="mailto:info@svonderdendam.nl">info@svonderdendam.nl</a></li>
                    <li><a href="tel:0503049328">050 304 9328</a></li>
                </ul>
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4447.55272135362!2d6.577696585634207!3d53.33401238871457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c9ce324593913d%3A0x675f2e4bd70a59d5!2sSV%20Onderdendam!5e1!3m2!1snl!2snl!4v1752841096130!5m2!1snl!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            </div>
        </div>
    </div>
</section>