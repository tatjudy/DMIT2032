<?php
/**
* The sidebar containing the footer widget area.
*
* @package design+code
*/
?>

    <!-- add in html tags where you need them -->
    <?php if ( is_active_sidebar( 'footer-col-one' ) ) : ?>
        <?php dynamic_sidebar( 'footer-col-one' ); ?>
    <?php  endif; ?>

    <?php if ( is_active_sidebar( 'footer-col-two' ) ) : ?>
        <?php dynamic_sidebar( 'footer-col-two' ); ?>
    <?php  endif; ?>