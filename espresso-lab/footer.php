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
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>