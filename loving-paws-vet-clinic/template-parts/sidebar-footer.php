<?php
/**
* The sidebar containing the footer widget area.
*
* @package design+code
*/
?>

<?php if ( is_active_sidebar( 'footer-full' ) ) : ?>
    <?php dynamic_sidebar( 'footer-full' ); ?>
<?php  endif; ?>

<div class="flex-container">
    <!-- add in html tags where you need them -->
    <?php if ( is_active_sidebar( 'footer-col-one' ) ) : ?>
        <?php dynamic_sidebar( 'footer-col-one' ); ?>
    <?php  endif; ?>

    <?php if ( is_active_sidebar( 'footer-col-two' ) ) : ?>
        <?php dynamic_sidebar( 'footer-col-two' ); ?>
    <?php  endif; ?>

    <?php if ( is_active_sidebar( 'footer-col-three' ) ) : ?>
        <?php dynamic_sidebar( 'footer-col-three' ); ?>
    <?php  endif; ?>

</div>