<?php
/***
* Template Name: Popular How-To Tutorials
* description: >- Page template to show all Tutorials
* @package design+code demo
* @since 1.0.0
*/

    //display header
    get_header();
?>

<div class="banner produce-banner">
    <h1>Our Produce</h1>
    <h3>Taste the colourful goodness of juicy tropica fruits</h3>
</div>

<p class="lead">Think of Queensland sunshine, think of healthy fruit platters or smoothies, discover new dessert creations… When it’s time for exotic deliciousness, Yanalla Farms has premium quality fruit that always lives up to its promise</p>

<?php
    $args = array(
        'post_type' => 'produce',
        'posts_per_page' => 3, //display 3 more recent posts
    );
    $the_produce_query = new WP_Query ($args);
?>
<!-- loop for displaying the custom content -->
<section class="produce-section flex-container">
    <?php if( $the_produce_query->have_posts() ) : ?>
        <?php while ( $the_produce_query->have_posts() ) : $the_produce_query->the_post(); ?>
        <!-- display content here -->

        <div class="produce-cards">
            <a href="<?php the_permalink(); ?>">
                <?php echo get_the_post_thumbnail($post->ID, 'large');?>
            </a>
            <a href="<?php the_permalink(); ?>">
                <?php the_title('<h4 class="produce-heading">', '</h4>'); ?>
            </a>
        </div>
        <?php endwhile;?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</section> <!-- end of cpt feat section -->

<?php get_template_part( 'template-parts/content', 'singleproduce' ); ?>
<!-- display footer -->
<?php get_footer(); ?>