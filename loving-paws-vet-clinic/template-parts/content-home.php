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
    <div class="entry-content">
        <!-- display page or post content -->
        <?php
        the_content(); // displays all of the content within the editor in pages in the dashboard

        ?>
        <!-- other things you could put in here would be: pagination (more used for blo
        fgrttygrg posts), custom posts, anything you need for site. -->
    </div>
    <?php
        $args = array(
            'post_type' => 'services',
            'posts_per_page' => 4, //display 4 more recent posts
        );
        $the_query = new WP_Query ($args);
    ?>
    <!-- loop for displaying the custom content -->
    <?php if( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        //display content here
        <div class="card">
            <header>
                <?php echo get_the_post_thumbnail($post->ID, 'large');?>
            </header>
            <div class="card-content">
                <?php the_title('<h4 class="card-heading">', '</h4>'); ?>
                <?php the_excerpt(); ?>
            </div>
            <div class="footer-left-content">
                <?php $card_footer = get_field('card_footer'); ?>
                <?php if($card_footer) : ?>
                    <p><?php _e($card_footer['author']); ?></p>
                    <p><?php _e($card_footer['date']); ?></p>
                <?php endif; ?>    
            </div>
            <div class="footer-right-content">
                <?php
                    $term = get_the_category();
                    if($term) {
                        foreach ($term as $t) {
                            $t - get_term($t);
                            esc_html_e('<a href="' . get_term_link($t) . '">'.$t->name . '</a>');
                        }
                    }
                ?>
            </div>
        </div>
        <?php endwhile;?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

    <?php
        $cta_link = get_field('services_view_all_btn');
    ?>

    <?php if ($cta_link) : ?>
        <a class="" href="<?php echo esc_url($card_link);?>">View All Services</a>
    <?php endif; ?>

    <?php $cta_link = get_field('services_view_all_btn'); ?>
    
</article>
