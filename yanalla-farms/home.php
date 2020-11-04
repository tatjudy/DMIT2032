<?php
/***
* The template for displaying all blog posts.
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

<div class="flex-container">
    <article class="posts-container" <?php post_class();?> id="post-<?php the_ID();?>" >
        <div class="flex-container">
            <?php if(have_posts()) : ?>
            <!-- start the loop | the loop grabs all the content and cycles through all of the content until it’s done. -->
            <?php while(have_posts()) : the_post(); ?>
                <div class="posts">
                    <!-- display the all of the blog posts -->
                    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
                    <div class="post-txt">
                        <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                        <p><?php echo get_the_date(); ?></p>
                        <p><?php echo the_category(); ?></p>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Read More ></a>
                    </div>
                    
                </div>
            <?php endwhile; ?>
            <!-- end while loop -->
            <?php else : ?>
                <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
                <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>
            <!-- On this page specifically - this would be area to add pagination and a sidebar - out of the loop. -->
                  
        </div>
        <div class="blue-block"></div>  
    </article>
    <div class="orange-block"></div>
</div>

<!-- display footer -->
<?php get_footer(); ?>
