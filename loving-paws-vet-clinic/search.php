<?php
/***
* The template for displaying search results
*
* @package design+code demo
* @since 1.0.0
*/
//display header
get_header();
?>
<main class="site-main" id="main">

    <?php if(have_posts()) : ?>
    <header class="search-banner">
        <h1>Search Results</h1>
    </header>
    <!-- start loop -->
    <div class="search-pg flex-container">
        <div>
            <h2>
                <?php printf(
                    esc_html__( 'You Searched for %s', 'loving-paws-veterinary-clinic'),
                    '<span>' . get_search_query() . '</span>'
                ); ?>
            </h2>
            <div class="bar blue-bar"></div>
            <?php while(have_posts()) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', 'search' ); ?>
            <?php endwhile; ?>
            <!-- end while loop -->
            <?php else : ?>
            <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
            <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>
            <div class="blue-block"></div>
        </div>
        <div class="orange-block"></div>
    </div>
    <!-- This is where you would add pagination. Pagination in a search result page is smart idea, especially if your search
    returns a lot of results.-->
</main>
<?php get_footer();