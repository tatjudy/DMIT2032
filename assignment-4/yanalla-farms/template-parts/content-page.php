<?php
/***
* Template part for displaying content in the page.php
* @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
* @package yanalla-farms
* @since 1.0.0
*/
?>
<article class="blog-pg" <?php post_class();?> id="post-<?php the_ID();?>" >
    <div class="blog-content-pg container">

        <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
        <div class="flex-container">
            <div class="entry-content">
                <!-- display page or post content -->
                <?php
                the_content(); // displays all of the content within the editor in pages in the dashboard
                //the_ID(); //displays the id of the page or post
                //the_date(); //displays the date
                ?>
                <!-- other things you could put in here would be: pagination (more used for blo
                fgrttygrg posts), custom posts, anything you need for site. -->
            </div>
        </div>
    </div>

    
    <footer class="entry-fo\oter">
        <!--adds a link to edit your content -->
        <?php edit_post_link( __('Edit','themenamehere'), '<span class="edit-link">', '</span>' ); ?>
    </footer>
</article>
