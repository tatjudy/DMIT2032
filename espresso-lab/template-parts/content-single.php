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
    </header>

    <div class="entry-content">
        <!--
        *displays the page/post content.
        * You can add more html tags and other WP template tags/functions such as custom post types ( we will be), but
        what you see is the very minimum what you need to have your content to be displayed.
        -->
        <div class="flex-container">
            <div>
                <div class="class-details">
                    <div class="flex-container">
                        <p>Price: $</p>
                        <p>
                            <?php $price = get_field('price'); ?>
                            <?php if($price) {
                                    _e($price);
                                }
                            ?>
                        </p>
                    </div>
                    <div class="flex-container">
                        <p>Date:</p>
                        <p>
                            <?php $date = get_field('date'); ?>
                            <?php if($date) {
                                    _e($date);
                                }
                            ?>
                        </p>
                    </div>
                    <div class="flex-container">
                        <p>Time:</p>
                        <p>
                            <?php $time = get_field('time'); ?>
                            <?php if($time) {
                                    _e($time);
                                }
                            ?>
                        </p>
                    </div>
                </div>
                <div class="page-content">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="single-img">
                <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
            </div>
        </div>
    </div>
</article>
