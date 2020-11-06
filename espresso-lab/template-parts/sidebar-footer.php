<?php
/*
*partial template for footer widgets
*@package Espresso Cafe & Lounge
*@since 1.0
*
*/
?>

<div class="flex-container">
    <div class="left">
        <?php if(is_active_sidebar('footer-left')) :?>
            <?php dynamic_sidebar('footer-left');?>
        <?php endif; ?>
    </div>
    
    <div class="middle">
        <?php if(is_active_sidebar('footer-middle')) :?>
            <?php dynamic_sidebar('footer-middle');?>
        <?php endif; ?>
    </div>
    
    <div class="right">
        <?php if(is_active_sidebar('footer-right')) :?>
            <?php dynamic_sidebar('footer-right');?>
        <?php endif; ?>
    </div>

    
</div>