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

     <!-- arguments for displaying the customized loop -->
     <?php
        $args = array(
            'post_type'      => 'produce',
            'posts_per_page' =>  12, //update this to display a certain amount of posts or remove the the argument to display an unlimited amount of posts.
        );
        $the_query = new WP_Query ($args);
    ?>

    <!-- loop for displaying the custom content -->
    <?php if( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <!-- featured image -->
            <div>
                <a href="<?php the_permalink(); ?>">
                    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
                </a>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title('<h4 class="card-heading">', '</h4>'); ?>
                </a>
            </div>

        <?php endwhile;?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>


 
    <!-- //display footer -->
    <?php get_footer(); ?>

<!-- Note: You may come across this function/template tag: get_post_format(). This template tag/function automatically picks up the type of post format defined for the post and uses the corresponding template file. -->
