<?php
/*
*partial template for footer widgets
*@package Espresso Cafe & Lounge
*@since 1.0
*
*/
?>

<?php if(is_active_sidebar('footer-left')) :?>
    <?php dynamic_sidebar('footer-left');?>
<?php endif; ?>

<?php if(is_active_sidebar('footer-middle')) :?>
    <?php dynamic_sidebar('footer-middle');?>
<?php endif; ?>

<?php if(is_active_sidebar('footer-right')) :?>
    <?php dynamic_sidebar('footer-right');?>
<?php endif; ?>