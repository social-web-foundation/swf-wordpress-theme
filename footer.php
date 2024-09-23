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
                    <li><a href="https://socialwebfoundation.org/@swf">Social Web</a></li>
                    <li><a href="https://x.com/socialwebfdn">X</a></li>
                    <li><a href="https://threads.net/@socialwebfdn">Threads</a></li>
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuButton = document.querySelector('.menu-button');
        const mainNav = document.querySelector('nav ul');

        // Ensure that when the window resizes, the overlay doesn't flash
        function handleResize() {
            if (window.innerWidth > 820) {
                // Reset the menu state when resizing to a larger screen
                mainNav.classList.remove('active');
                mainNav.style.display = ''; // Reset display property
                menuButton.textContent = 'Menu'; // Reset button text to 'Menu'
            }
        }

        // Toggle the 'active' class to show/hide the menu
        menuButton.addEventListener('click', function() {
            if (mainNav.classList.contains('active')) {
                mainNav.classList.remove('active');
                mainNav.style.display = 'none'; // Hide it after removing the class
                menuButton.textContent = 'Menu'; // Change button text back to 'Menu'
            } else {
                mainNav.classList.add('active');
                mainNav.style.display = 'flex'; // Show it when active
                menuButton.textContent = 'Close'; // Change button text to 'Close'
            }
        });

        // Listen for window resize to ensure no flashing occurs and close overlay above 820px
        window.addEventListener('resize', handleResize);
    });
</script>
</body>
</html>
