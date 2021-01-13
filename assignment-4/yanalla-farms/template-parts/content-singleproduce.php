<?php
/***
* Template part for displaying content in the single.php template (individual/article blog page)
* @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
* @package yanalla-farms
* @since 1.0.0
*/
?>
<article <?php post_class();?> id="post-<?php the_ID();?>" >

    <div class="entry-content">
        <!--
        *displays the page/post content.
        * You can add more html tags and other WP template tags/functions such as custom post types ( we will be), but
        what you see is the very minimum what you need to have your content to be displayed.
        -->
        <?php the_content(); ?>
    </div>
</article>
