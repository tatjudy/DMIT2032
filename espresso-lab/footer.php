<?php
/**
* The footer for our theme
* Contains the closing tag for the main container section (i.e. <div class="main-content") and all of the
footer content.
*
*@package espresso-lab
* @since 1.0.0
*/
?>
</div>
 <!-- closing tag for site-content"> -->
        <footer>
            <?php get_template_part('template-parts/sidebar-footer', 'footer');?>
            <div class="bottom-copyright flex-container">
                <p class="copyright">© 2020 Espressso Cafe &amp; Lounge | All Rights Reserved.</p>
                <p class="copyright">Privacy Policy | Shipping, Returns, & Cancellation Policy</p>
                <p class="copyright">
                    Site by: Judy | NAIT: for academic purposes only.
                </p>
            </div>
            
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>