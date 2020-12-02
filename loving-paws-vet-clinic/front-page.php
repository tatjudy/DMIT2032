<?php
/***
* This template is for displaying the home page content
*
* @package loving-paws-veterinary-clinic
* @since 1.0.0
*/
//display header
get_header();
?>
<div class="home-banner">
    <div class="grey-bkg">
       <div class="home banner-content container">
          <h1>Welcome to Loving Paws Veterinary Clinic</h1>
          <p>We are a full-service animal hospital serving the Edmonton Community and the surrounding area since 1987. Our team of fully registered Veterinary Technologists and Medical Assistants ensure the best care for your pets.</p>
          <a href="#" class="btn">schedule an appointment</a>
       </div>
       <!-- End of banner-content -->
    </div>
    <!-- End grey bkg -->
 </div>
 <div class="banner-img"></div>
 
    <div class="fw-container">
    <div class="services">
        <h2>Services</h2>
        <div class="bar blue-bar centered-bar"></div>
        <p>At Loving Paws Clinic, we offer a variety of services to care for your companion. We are well-equipped to assist with your pet's healthcare, whether covered in scales or fur.</p>
    </div>
    
        <?php if(have_posts()) : ?>
            <!-- start the loop -->
            <?php while(have_posts()) : the_post(); ?>
                <?php
                    //do things -- display content : the function below will pull the content from the template partial.
                    get_template_part( 'template-parts/content', 'home' );
                ?>
            <?php endwhile; ?>
            <!-- end while loop -->

            <?php else : ?>
                <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
                <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
    </div>
<!-- display footer -->
<?php get_footer(); ?>
