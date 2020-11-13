

<?php
/***
* The template for displaying a 404 page.
*
* @package design+code demo
* @since 1.0.0
*/
//display header
get_header();
?>
<main class="site-main" id="main">
    <section class="error-404 not-found">
        <header>
            <h1 class="page-title">
                <?php esc_html_e( 'Oh! Hello!' ); ?>
            </h1>
            <h2>Looks like you found yourself a 404 page.</h2>
            <h2>Nothing to see here!</h2>
        </header>
        <div class="page-content">
            <div class="search-form">
                <p>
                    <?php esc_html_e( 'Sorry! We cant seem to find the thing you were looking for. Please check that you typed your address correctly, go back to the previous page, try using the search to find something specific or the links below. ', 'loving paws veterinary clinic' ); ?>
                </p>
                <!-- display the search form -->
                <?php get_search_form(); ?>
            </div>
            
            <div class="flex-container">
                <!-- recent posts -->
                <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
                <!-- display categories -->
                <div class="widget widget_categories">
                    <h2 class="widget-title">
                        <?php esc_html_e( 'Most Used Categories', 'theme name here' ); ?>
                    </h2>
                    <ul>
                        <?php wp_list_categories(
                            array(
                            'orderby' => 'count',
                            'order' => 'DESC',
                            'show_count' => 1,
                            'title_li' => '',
                            'number' => 10,
                            ) //end of array
                        ); ?> 
                        <!-- //end of wp_list categories -->
                    </ul>
                </div>
                <div>
                    <?php
                        the_widget( 'WP_Widget_Archives',
                            array(
                            'orderby' => 'count',
                            'order' => 'DESC',
                            'show_count' => 1,
                            ) //end of array
                        );
                    ?> 
                    <!-- //monthly archives -->
                </div>
            </div>
            
        </div> <!-- //page content -->
    </section>
</main>
<?php get_footer(); ?>