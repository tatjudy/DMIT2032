<?php
/***
* Template part for displaying for displaying category types.
* @link https://developer.wordpress.org/themes/template-files-section/post-template-files/#category-php-tag-php-and-taxonomy-php
*
* @package yanalla-farms
* @since 1.0.0
*/
//display header
get_header();
?>

<main class="category-pg" <?php post_class();?> id="post-<?php the_ID();?>" >
    <?php if(have_posts()) : ?>
        <div class="category-banner">
            <div class="grey-bkg">
                <h1>Categories</h1>
            </div>
        </div>

        <!-- start the loop -->
        <!-- the header of the category page sits in the in the loop, but outside the the while loop section -->
        <header class="category-header">

            <!-- display h1 heading by setting single_cat_title to true, it will display the category you clicked -->
            <h1 class="category-title">Category: <span><?php single_cat_title( '', true ); ?></span></h1>

            <!-- display the category description - again this is optional feature. -->
            <?php if ( category_description() ) : ?>
                <div class="archive-meta"><?php echo category_description(); ?></div>
            <?php endif; ?>

        </header> 
        <div class="flex-container">
            <div class="container">
                <?php while(have_posts()) : the_post(); ?>
                <!-- - display a clickable link to the post/page based on the associated search term/post | -the_permalink()
            creates a clickable link. -->
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php
                the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <a href="<?php the_permalink(); ?>">
                    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
                </a>

                <p><?php the_date(); ?></p>
                <p><?php the_category(); ?></p>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Read More ></a>
                <?php endwhile;
                else: ?>
                    <?php get_template_part('template-parts/content', 'none'); ?>
                <?php endif; ?>
                <!-- this would be where you add your right sidebar or widgets -->
            </div>
        </div>

</main>
<?php get_footer(); ?>
