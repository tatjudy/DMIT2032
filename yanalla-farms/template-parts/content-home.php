<?php
/***
* Template part for displaying content in the front-page.php
* @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
* @package yanalla-farms
* @since 1.0.0
*/
?>
<article <?php post_class();?> id="post-<?php the_ID();?>" >
    <?php //the_title('<h1 class="entry-title">', '</h1>'); ?>

    <?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
    <div class="entry-content">
        <!-- display page or post content -->
        <?php
        the_content(); // displays all of the content within the editor in pages in the dashboard

        ?>
    </div>

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
    <section class="top-section flex-container">
        <div class="left-side half-width">
            <h2>Our Story</h2>
            <p>In the hinterland of Queensland’s Sunshine Coast, there is a long tradition of fruit farming. Innovators like second generation farmers Robert and Karen Martin are part of the gourmet production in this fertile area with its sub-tropical climate. They are enthusiastic horticulturalists who take great pleasure in bringing the best exotic fruits, like custard apples, dragon fruit & lychees to Australians’ plates. And they are now gaining worldwide attention with innovations like the PinksBlush custard apple variety and the award-winning Custard Dust® sweetener.</p>
            <?php
                $cta_link = get_field('learn_more_our_story');
            ?>
            <?php if ($cta_link) : ?>
                <a class="btn our-story-btn" href="http://jtat2.dmitstudent.ca/dmit2032/yanalla-farms/our-story/">Learn More</a>
            <?php endif; ?>

            <?php $cta_link = get_field('learn_more_our_story'); ?>
        </div>
        <div class="right-side image half-width">

        </div>
    </section> <!-- end of top section -->
    <section class="bottom-section flex-container">
        <div class="left-side half-width">
            <h2>Yanalla Farms Events</h2>
            <p>Yanalla Farms supports local hospitality and tourism with our events and produce.  The long-table lunch in our orchard showcased our region's wonderful ingredients and brought the local community together.</p>
            <?php
                $cta_link = get_field('learn_more_events');
            ?>
            <?php if ($cta_link) : ?>
                <a class="btn events-btn" href="#">Learn More</a>
            <?php endif; ?>

            <?php $cta_link = get_field('learn_more_events'); ?>
        </div>
        <div class="right-side image half-width">

        </div>
    </section> <!-- end of bottom section -->

    <section class="awards flex-container">
        <img src="/dmit2032/yanalla-farms/wp-content/uploads/2020/11/award-hargraves.png" alt="Hargrives Innovator Award 2018 Image">
        <img src="/dmit2032/yanalla-farms/wp-content/uploads/2020/11/most-attractive-winner-certificate.png" alt="Most Attractive Joomla Site Awards 2019 Winner Image">
        <img src="/dmit2032/yanalla-farms/wp-content/uploads/2020/11/best-ux-finalist.png" alt="Best User Experience Joomla Site Awards 2019 Finalist Image">
        <img src="/dmit2032/yanalla-farms/wp-content/uploads/2020/11/fan-badge-proud-member-2020.png" alt="Proud Member of Food and Agribusiness Network 2020 Image">
    </section> <!-- end of awards section -->
    <section class="discover-story">
        <div class="discover-story-bkg">
            <img src="/dmit2032/yanalla-farms/wp-content/uploads/2020/12/scrolleffect-papercut-top11.png" alt="Papercut top of image">
            <div class="centered-discover-content">
                <img src="/dmit2032/yanalla-farms/wp-content/uploads/2020/11/footer-logo.png" alt="white yanalla logo">
                <h2>Sharing the fruit of the tropics with passion and innovation</h2>
                <?php
                    $cta_link = get_field('discover_our_story');
                ?>
                <?php if ($cta_link) : ?>
                    <a class="btn our-story-btn" href="http://jtat2.dmitstudent.ca/dmit2032/yanalla-farms/our-story/">Learn More</a>
                <?php endif; ?>

                <?php $cta_link = get_field('discover_our_story'); ?>
            </div>
        </div>
    </section> <!-- end of discover our story section -->
    
    <!-- featured blog -->
    <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 2, //number of posts displayed
            'orderby' => 'date',
            'order' => 'DESC'
        );
    
    ?>
</article>
