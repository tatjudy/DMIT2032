<?php
/***
* This template is for displaying all full articles (post types).
*
* @package yanalla-farms
* @since 1.0.0
*/
//display header
get_header();
?>

<div class="blog-banner">
    <div class="grey-bkg">
        <h1>The Loving Paws Blog</h1>
    </div>
</div>
<div class="single-blog-post">
        <header>
            <!-- get the page title -->
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            <p><?php the_date(); ?></p>
            <?php the_category(); ?>
        </header>
    <?php if(have_posts()) : ?>
            <!-- start the loop -->
            <?php while(have_posts()) : the_post(); ?>
            <div class="flex-container">
                <?php
                    //do things -- display content : the function below will pull the content from the template partial.
                    get_template_part( 'template-parts/content', 'page' );
                ?>
                <div class="orange-block"></div>
            </div>    
            <div class="blue-block"></div>
            <?php endwhile; ?>
            <!-- end while loop -->

            <?php else : ?>
                <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
                <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
    <!-- display footer -->
    <?php get_footer(); ?>

</div>

