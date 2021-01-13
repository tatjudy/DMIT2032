<?php
/**
* The footer for our theme
* Contains the closing tag for the main container section (i.e. <div class="main-content") and all of the
footer content.
*
*@package yanalla-farms
* @since 1.0.0
*/

?>

            </div>
 <!-- closing tag for site-content> -->
        <footer>
            <div class="join-community">
                <h2>Join Our Community</h2>
                <p>Recieve the latest news, recipes and farm developments</p>
                <a class="btn footer-btn" href="#">Yes - Join Me Now!</a>
            </div>
            <div class="bottom-footer">
                <?php get_template_part( 'template-parts/sidebar-footer', 'footer'); ?>
            </div>
            <div class="copyright-footer">
                <div class="flex-container">
                    <p><a href="#">Terms & Conditions</a></p>
                    <p><a href="#">Privacy Policy</a></p>
                    <p>|</p>
                    <p>© Copyright 2020 Yanalla Farms Pty Ltd</p>
                </div>
                <p>site by <a href="#">Judy Tat</a></p>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
