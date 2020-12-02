<?php
/***
* This template is for displaying the home page content
*
* @package espresso-lav
* @since 1.0.0
*/
//display header
get_header();
?>

    <div class="fw-container">
        <div class="description">
            <h2>Our Workshops</h2>
            <p>Our goal is to make it easier for you to make great tasting coffee whether you are at home, work or on the go. Our workshops will teach you the basics of coffee to mastering latte art. Learning about coffee isn’t just for a barista, it’s for everyone!
            </p>
            <p>Sign up for one of workshops today and learn how to brew the perfect cup of coffee. </p>
        </div>
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
