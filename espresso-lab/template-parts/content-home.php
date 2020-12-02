<?php
/***
* Template part for displaying content in the front-page.php
* @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
* @package espresso-lab
* @since 1.0.0
*/
?>
<article <?php post_class();?> id="post-<?php the_ID();?>" >
    <main>
        <header>
            <?php //the_title('<h1 class="entry-title">', '</h1>'); ?>
        </header>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
        <!-- custom loop to display the workshops -->
    <?php 
        $args = array (
            'post_type' => 'workshops',
            'posts_per_page' => 3
        );
        $the_workshop_query = new WP_Query( $args);
    ?>
    <div class="card-flex-container">
        <!-- loop for displaying the custom content -->
        <?php if( $the_workshop_query->have_posts() ) : ?>
            <?php while ( $the_workshop_query->have_posts() ) : $the_workshop_query->the_post(); ?>
                <!-- //create your card layout here -->
                <div class="card">
                    <!-- card header -->
                    <header>
                        <!-- featured image -->
                        
                            <div class="aspect-ratio-box">
                                <a class="card-hover" href="<?php the_permalink(); ?>">
                                    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
                                </a>
                            </div>
                        </a>
                        
                    </header>
                    <div class="card-content">
                        <div class="flex-container">
                            <a class="card-hover" href="<?php the_permalink(); ?>">
                                <?php the_title('<h4 class="card-heading">', '</h4>'); ?>
                            </a>
                            <a class="card-hover" href="<?php the_permalink(); ?>">
                                <p>
                                    <?php $price = get_field('price'); ?>
                                    <?php if($price) {
                                            _e($price);
                                        }
                                    ?>
                                </p>
                            </a>
                        </div>
                        <a class="card-hover" href="<?php the_permalink(); ?>">
                            <p class="open-sans-font">
                                <?php the_excerpt(); ?>
                            </p>
                            
                        </a>
                    </div>
                    <div class="card-footer">
                        <div class="left-content">
                            <ul class="flex-container">
                                <li>
                                    <a class="card-hover" href="<?php the_permalink(); ?>">
                                        <?php $date = get_field('date'); ?>
                                        <?php if($date) {
                                                _e($date);
                                            }
                                        ?>
                                    </a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a class="card-hover" href="<?php the_permalink(); ?>">
                                        <?php $time = get_field('time'); ?>
                                        <?php if($time) {
                                                _e($time);
                                            }
                                        ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        </div>
                </div>
            <?php endwhile;?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
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
    </main>
    
</article>
