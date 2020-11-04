<?php
/***
* This is the archive template.
* This is the template that displays a collection of posts, categories, tags or tag cloud(s), author, date, etc…
*
* @package loving-paws-veterinary-clinic
* @since 1.0.0
*/
//display header
get_header();
?>
    <div class="archive-content">
        <div class="archive-banner">
            <div class="grey-bkg">
                <h1><?php _e( 'Archives' ); ?></h1>
            </div>
            
        </div>
        <!-- _e(); translate the string into text like an echo(); would.  -->
        <div class="flex-container">
            <div>
                <h2><?php _e( 'Recent Posts' ); ?></h2>
                <div class="bar blue-bar"></div>
                <!-- the function below only displays the 10 most recent posts -->
                <?php wp_get_archives('type=postbypost&limit=10'); ?>
            </div>
            <div>
                <!-- display all top-level categories -->
                <h2><?php _e( 'Categories' ); ?></h2>
                <div class="bar blue-bar"></div>
                <?php wp_list_categories('depth=1'); ?>
            </div>
            <div>
                 <!-- display all the monthly archives in a list -->
                <?php the_widget( 'WP_Widget_Archives',
                    array(
                    'orderby' => 'count',
                    'order' => 'DESC',
                    'show_count' => 1,
                )); ?>
            </div>
           
        </div>
        
    </div>
<?php get_footer(); ?>