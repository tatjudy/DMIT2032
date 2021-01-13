<?php
/**
* The sidebar containing the footer widget area.
*
* @package design+code
*/
?>
<div class="flex-container">
    <a href="http://jtat2.dmitstudent.ca/dmit2032/yanalla-farms/">
        <img src="/dmit2032/yanalla-farms/wp-content/uploads/2020/11/footer-logo.png" alt="yanalla logo white footer">
    </a>
    <?php if ( is_active_sidebar( 'footer-full' ) ) : ?>
        <?php dynamic_sidebar( 'footer-full' ); ?>
    <?php  endif; ?>
</div>

<div class="flex-container">
    <!-- add in html tags where you need them -->
    <?php if ( is_active_sidebar( 'footer-col-one' ) ) : ?>
        <?php dynamic_sidebar( 'footer-col-one' ); ?>
    <?php  endif; ?>

    <?php if ( is_active_sidebar( 'footer-col-two' ) ) : ?>
        <?php dynamic_sidebar( 'footer-col-two' ); ?>
    <?php  endif; ?>

</div>
<div class="social-icons flex-container">
    <a href="https://www.instagram.com/yanallafarms/">
        <i class="fab fa-instagram"></i>
    </a>
    <a href="https://www.facebook.com/yanallafarms">
        <i class="fab fa-facebook-f"></i>
    </a>
</div>