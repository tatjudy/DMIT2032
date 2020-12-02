<?php
/***
* Template part for displaying content in the single.php template (individual/article blog page)
* @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
* @package loving-paws-veterinary-clinic
* @since 1.0.0
*/
?>
<article <?php post_class();?> id="post-<?php the_ID();?>" >

    <!-- entry header -->
    <header>
        <!-- get the page title -->
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        <?php the_date(); ?>
        <?php the_category(); ?>
        
        <?php
            $categories = get_the_category( $post->ID);
            foreach ( $categories as $category) {
                print_r('
                <p class="' .esc_html($category->slug).'">
                    <a href="'. esc_url(get_category_link($category->term_id)) .'">
                    
                    </a>
                </p>
            ');
            }
        ?>
    </header>

    <div class="entry-content">
        <!--
        *displays the page/post content.
        * You can add more html tags and other WP template tags/functions such as custom post types ( we will be), but
        what you see is the very minimum what you need to have your content to be displayed.
        -->
        <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
        <?php the_content(); ?>
    </div>
</article>
