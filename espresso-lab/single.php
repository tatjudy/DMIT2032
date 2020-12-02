<?php
/***
*	The template for displaying individual blog posts (full article/blog post).
*
*   @package espresso lab
*   @since 1.0.0
*/

//display header
get_header();
?>

    <?php if(have_posts()) : ?>
        <!-- start the loop -->
        <?php  while(have_posts()) : the_post(); ?>
            <?php
                //do things -- display content : the function below will pull the content from the template partial.
                get_template_part( 'template-parts/content', 'single' );
            ?>
        <?php  endwhile; ?>
        <!-- //end while loop -->
        <?php else : ?>
            <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. --> 
            <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?> 
    <!-- enroll/register btn -->
    <?php $register_btn = get_field('register_btn'); ?>
        <?php if($register_btn):
            $link_title = $register_btn['title'];
            $link_url = $register_btn['url'];
        ?>
        <a class="register-btn" href=" <?php print_r( esc_url($link_url)); ?> ">
            <?php print_r(esc_html($link_title)); ?>
        </a>
        <?php endif; ?>
    <!-- //out of the loop: this would be a good place to add sidebar to the right of the article/blog. --> 
     <?php dynamic_sidebar( 'sidebar-primary' ); ?>       
 <!--//display footer -->
<?php get_footer(); ?>
