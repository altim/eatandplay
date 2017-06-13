	<footer>
        <div class="footer-inner">

            <?php dynamic_sidebar( 'footer1' ); ?>
            <?php dynamic_sidebar( 'footer2' ); ?>
            <?php dynamic_sidebar( 'footer3' ); ?>
            <!-- <div class="navigation-menu">
                <h3>Navigation</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Orlando Card</a></li>
                    <li><a href="#">New York Card</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">How It Works</a></li>
                    <li><a href="#">Why We Are Different</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <div class="stuff-menu">
                <h3>More Stuff</h3>
                <ul>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Mobile App</a></li>
                    <li><a href="#">Frequently Asked Questions</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Travel Professionals</a></li>
                    <li><a href="#">User Reviews</a></li>
                    <li><a href="#">Media Room</a></li>
                </ul>
            </div>

            <div class="connect-menu">
                <h3>Connect</h3>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                </ul>
            </div> -->

            <div class="newsletter">
                <h3>Newsletter</h3>

                <div class="newsletter-form">
                    <input type="email" id="newsletter-email" name="newsletter-email" placeholder="Your Email Address" />
                    <a href="#" class="btn">Subscribe Now</a>
                </div>
            </div>


        </div>
    </footer>

    <section id="copyright">
        <div class="copyright-inner">
            <div class="copyright-info">
                <p>&copy; Copyright 2014-2017 Eat and Play Card - All Rights Reserved
                Website Development - <a href="http://strongvine.com" target="_blank">Strongvine</a></p>
            </div>

            <div class="payment-menu">
                <ul>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/payment-visa.jpg" alt="Visa" /></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/payment-mastercard.jpg" alt="Mastercard" /></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/payment-bambora.jpg" alt="Bambora" /></li>
                    <li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.favequest.mea.eat_and_play_card&hl=en"><img src="<?php echo get_template_directory_uri(); ?>/img/google-play.png" alt="Google Play" /></a></li>
                    <li><a target="_blank"  href="https://itunes.apple.com/us/app/eat-and-play-card/id913039433?ls=1&mt=8"><img src="<?php echo get_template_directory_uri(); ?>/img/apple-store.png" alt="Apple Store" /></a></li>
                </ul>
            </div>
        </div>
    </section>

    <?php wp_footer(); ?>

</body>
</html>
