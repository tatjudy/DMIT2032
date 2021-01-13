<?php 
    /**
     * These page will display a single CPT from Tutorials
     * @package design+code
     */
    get_header(); 
?>

    <?php if(have_posts()) : ?>
        <!-- start the loop -->
        <?php  while(have_posts()) : the_post(); ?>
            <!-- page title -->
            <?php the_title('<h1 class="card-heading">', '</h1>'); ?>

            <!-- the content -->
            <?php the_content(); ?>

        <?php  endwhile; ?>
        <?php else : ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?> 

    <?php get_footer(); ?>