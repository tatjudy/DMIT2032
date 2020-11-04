<?php
/***
* Template part for displaying content in the front-page.php
* @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
* @package yanalla-farms
* @since 1.0.0
*/
?>
<article <?php post_class();?> id="post-<?php the_ID();?>" >
    <?php //the_title('<h1 class="entry-title">', '</h1>'); ?>

    <?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
    <div class="entry-content">
        <!-- display page or post content -->
        <?php
        the_content(); // displays all of the content within the editor in pages in the dashboard

        ?>
        <!-- other things you could put in here would be: pagination (more used for blo
        fgrttygrg posts), custom posts, anything you need for site. -->
    </div>
</article>
