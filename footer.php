<footer>
    <div class="content">
        <div class="footer-grid">
            <div class="footer-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logotype.svg" alt="Footer Logo">
            </div>

            <div>
                <strong>Legal:</strong>
                <ul>
                    <li><a href="<?php echo get_permalink( get_page_by_path( 'about' ) ); ?>">About us</a></li>
                    <li><a href="<?php echo get_permalink( get_page_by_path( 'privacy' ) ); ?>">Privacy Policy</a></li>
                    <li><a href="<?php echo get_permalink( get_page_by_path( 'tos' ) ); ?>">Terms of Use</a></li>
                </ul>
            </div>

            <div>
                <strong>Follow us:</strong>
                <ul>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Threads</a></li>
                    <li><a href="#">Mastodon</a></li>
                </ul>
            </div>

            <div>
                <strong>Address:</strong><br>
                Line one<br>
                Line two<br>
                ZIP Code
            </div>
        </div>

        <div class="footer-image-container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/small-circles-solid.svg" alt="Footer Decoration">
        </div>
    </div>

    <?php wp_footer(); ?>
</footer>

</body>
</html>
