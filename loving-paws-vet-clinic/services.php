<?php
 /***
 *Template Name: Services
 *description: To display all services from cpt
 *
 * @package loving-paws-veterinary-clinic
 * @since 1.0.0
 */
 //display header
 get_header();
?>

<div class="services-banner">
    <h1>Services</h1>
</div>

<div class="services-description">
    <h2>Services</h2>
    <div class="bar blue-bar centered-bar"></div>
    <p>At Loving Paws Vet Clinic, we offer a full range of services to care for your pet’s health from  the basics of grooming to every stage of your pets life. Browse our services below for a more comprehensive overview and if you have any questions please feel to reach out to us. We are happy to answer any questions you may have.</p>
</div>

<div class="all-services flex-container">
    <?php
        $args = array(
            'post_type' => 'services',
            'posts_per_page' => 8, //display10 more recent posts
        );
        $the_query = new WP_Query ($args);
    ?>

    <?php if( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="recent-blog">
            <a href="<?php the_permalink(); ?>">
                <?php echo get_the_post_thumbnail($post->ID, 'large');?>
            </a>
            <div class="blog-content">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title('<h4 class="card-heading">', '</h4>'); ?>
                </a>
            </div>
        </div>
        <?php endwhile;?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>

<!-- //display footer -->
<?php get_footer(); ?>
