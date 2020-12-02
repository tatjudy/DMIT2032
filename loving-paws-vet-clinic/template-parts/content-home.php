<?php
/***
* Template part for displaying content in the front-page.php
* @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
* @package loving-paws-veterinary-clinic
* @since 1.0.0
*/
?>
<article <?php post_class();?> id="post-<?php the_ID();?>" >
    <?php //the_title('<h1 class="entry-title">', '</h1>'); ?>

    <?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
    <?php
        $args = array(
            'post_type' => 'services',
            'posts_per_page' => 4, //display 4 more recent posts
        );
        $the_services_query = new WP_Query ($args);
    ?>
    <!-- loop for displaying the custom content -->
    <div class="services-options flex-container">
        <?php if( $the_services_query->have_posts() ) : ?>
            <?php while ( $the_services_query->have_posts() ) : $the_services_query->the_post(); ?>
            <!-- display content here -->
            <div class="card options">
                <div class="options-grey-bkg">
                    <div class="link-bkg">
                        <a href="<?php the_permalink(); ?>">
                            <?php echo get_the_post_thumbnail($post->ID, 'large');?>
                        </a>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title('<h4 class="card-heading">', '</h4>'); ?>
                        </a>
                    </div>
                </div>
            </div>
            <?php endwhile;?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
    

    <?php
        $cta_link = get_field('services_view_all_btn');
    ?>

    <?php if ($cta_link) : ?>
        <a class="btn services-btn" href="http://jtat2.dmitstudent.ca/dmit2032/loving-paws-vet-clinic/services/">View All Services</a>
    <?php endif; ?>

    <?php $cta_link = get_field('services_view_all_btn'); ?>
    
    <!-- featured blog -->
    <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 2, //number of posts displayed
            'orderby' => 'date',
            'order' => 'DESC'
        );
    
    ?>

    <div class="entry-content">
        <!-- display page or post content -->
        <?php
        the_content(); // displays all of the content within the editor in pages in the dashboard

        ?>
        <!-- other things you could put in here would be: pagination (more used for blo
        fgrttygrg posts), custom posts, anything you need for site. -->
    </div>
    <div class="blog-feat">
        <h2>the loving paws blog</h2>
        <div class="bar blue-bar centered-bar"></div>

        <?php $the_blog_query = new WP_Query( $args); ?>
        <div class="flex-container blog-feat-flex">
            <?php if( $the_blog_query->have_posts() ) : ?>
                <?php while ( $the_blog_query->have_posts() ) : $the_blog_query->the_post(); ?>
                <!-- display content here -->
                <div class="recent-blog flex-container">
                    <a href="<?php the_permalink(); ?>">
                        <?php echo get_the_post_thumbnail($post->ID, 'large');?>
                    </a>
                    <div class="blog-content">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title('<h4 class="card-heading">', '</h4>'); ?>
                        </a> 
                        <?php the_excerpt(); ?>
                        <a class="btn readmore-btn" href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                </div>
                <?php endwhile;?>
                <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
    
</article>
