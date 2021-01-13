<?php

/**
 * @package yanalla-farms
 * @since 1.0.0
 * 
 * 
 * 
 * 
 */

function yanalla_styles() {

   //google fonts
   wp_enqueue_style( 'raleway', 'https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500&display=swap');
   wp_enqueue_style('merriweather', 'https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400&display=swap');
   wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');

    //styles
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css', false, '1.0', 'all');
    wp_enqueue_style( 'style', get_template_directory_uri() . 'style.css', false, '1.0', 'all');
    
    //scripts
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'yanalla_styles' );

function theme_setup() {

    /**post formats */
    $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
    add_theme_support( 'post-formats', $post_formats);
 
    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );
    /** title-tag **/
    add_theme_support( 'title-tag' );
    /** HTML5 support **/

    add_theme_support( 'html5', array( 'comment-list', 'comment-form',
    'search-form', 'gallery', 'caption' ) );
     /** refresh widgest **/
     add_theme_support( 'customize-selective-refresh-widgets' );
     /** custom background **/
     $bg_defaults = array(
        'default-image' => '',
        'default-preset' => 'default',
        'default-size' => 'cover',
        'default-repeat' => 'no-repeat',
        'default-attachment' => 'scroll',
     );
     add_theme_support( 'custom-background', $bg_defaults );
     /** custom header **/
     $header_defaults = array(
        'default-image' => '',
        'width' => 300,
        'height' => 60,
        'flex-height' => true,
        'flex-width' => true,
        'default-text-color' => '',
        'header-text' => true,
        'uploads' => true,
     );
     add_theme_support( 'custom-header', $header_defaults );
     /** custom logo **/
     add_theme_support( 'custom-logo', array(
        'height' => 60,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array( 'site-title', 'site-description' ),
     ) );
}
add_action('after_setup_theme', 'theme_setup');

// Register Menus
 // this will allow you have a navigation in your header and the
 function register_menus() {
   register_nav_menus(
       array(
           'main-menu' => 'Main Menu', /* Primary meny in the header */

           //footer menu items
           'footer-menu' => 'Footer Menu', 
       )
   );
}
add_action( 'init', 'register_menus' );


// 
$yanalla_includes = array(
   '/widgets.php', // Register widget area.
);

foreach ( $yanalla_includes as $file ) {
   $filepath = locate_template( 'inc' . $file );
   if ( ! $filepath ) {
      trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
   }
   require_once $filepath;
}
  
add_action( 'widgets_init', 'yanalla_widgets_init' );
if ( ! function_exists( 'yanalla_widgets_init' ) ) {
   /**
   * Initializes themes widgets.
   */
   function yanalla_widgets_init() {
      register_sidebar(
         array(
            'name' => __( 'Footer Full', 'yanalla'
         ),
         'id' => 'footerfull',
         'description' => __( 'Full sized footer widget with dynamic grid', 'yanalla' ),
         'before_widget' => '<div id="%1$s" class="footerwidget %2$s dynamic-classes">',
         'after_widget' => '</div><!-- .footer-widget -->',
         'before_title' => '<h3 class="widget-title">',
         'after_title' => '</h3>',
         )
      );
   }
} //end if

   //Register Custom Post type
function create_post_type_produce(){
   // creates label names for the post type in the dashboard the post panel and in the toolbar.
   $labels = array(
      'name' => __('Our Produce'),
      'singular_name' => __('Produce'),
      'add_new' => 'New Produce',
      'add_new_item' => 'Add Produce',
      'edit_item' => 'Edit Produce',
      'featured_image' => _x( 'Produce Post Image',
      'Overrides the “Featured Image” phrase for this post type. Added in 4.3',
      'textdomain' ),
      'set_featured_image' => _x( 'Set cover image', 'Overrides
      the “Set featured image” phrase for this post type. Added in 4.3',
      'textdomain' ),
      'remove_featured_image' => _x( 'Remove cover image',
      'Overrides the “Remove featured image” phrase for this post type. Added in
      4.3', 'textdomain' ),
      'use_featured_image' => _x( 'Use as cover image',
      'Overrides the “Use as featured image” phrase for this post type. Added in
      4.3', 'textdomain' ),
   );

   // creates the post functionality that you want for a full listing
   $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'produce'),
      'menu_position' => 20,
      'menu_icon' => 'dashicons-palmtree',
      'capability_type' => 'page',
      'taxonomies' => array('category', 'post_tag'),
      'supports' => array('title', 'editor', 'author',
      'thumbnail', 'excerpt', 'custom-fields')
   );
   register_post_type('produce', $args);
}
// Hooking up our function to theme setup
add_action('init', 'create_post_type_produce');
