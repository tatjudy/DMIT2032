<?php
/***
* This template is for displaying the home page content
*
* @package yanalla-farms
* @since 1.0.0
*/
//display header
get_header();
?>

<div class="fw-container">
    <?php if(have_posts()) : ?>
        <!-- start the loop -->
        <?php while(have_posts()) : the_post(); ?>
            <?php
                //do things -- display content : the function below will pull the content from the template partial.
                get_template_part( 'template-parts/content', 'home' );
            ?>
        <?php endwhile; ?>
        <!-- end while loop -->

        <?php else : ?>
            <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
            <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>
</div>
<!-- display footer -->
<?php get_footer(); ?>
