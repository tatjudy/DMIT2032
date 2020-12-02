<?php

/**
 * @package espresso-lab
 * 
 * @since 1.0.0
 * 
 * 
 * 
 * 
 */

function dc_styles() {

    //google fonts
    wp_enqueue_style('open sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap');
    wp_enqueue_style('permanent marker', 'https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');

    //styles
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css', false, '1.0', 'all');
    wp_enqueue_style( 'style', get_template_directory_uri() . 'style.css', false, '1.0', 'all');
    
    //scripts
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'dc_styles' );

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

 //plugins includes

 $espresso_includes = array( 
   '/widgets.php', //registering the widget

 );
 foreach ($espresso_includes as $file) {
    $filepath = locate_template('includes' . $file);
    if (! $filepath) {
      trigger_error(sprintf ('Error locating /inc%s for inclusion', $file), E_USER_ERROR);
    }
    require_once $filepath;
 }

//  custom post type

//Register Custom Post type
function create_post_type_workshops(){
   // creates label names for the post type in the dashboard the post panel and in the toolbar.
       $labels = array(
           'name'                  => __('Workshops'),
           'singular_name'         => __('Workshop'), 
           'add_new'               => 'New Workshop', 
           'add_new_item'          => 'Add New Workshop',
           'edit_item'             => 'Edit Workshop',
           'featured_image'        => _x( 'Workshop Post Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
           'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
           'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
           'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
   
       );
       // creates the post functionality that you want for a full listing
       $args = array(
           'labels'            => $labels,
           'public'            => true,
           'has_archive'       => true,
           'rewrite'           => array('slug' => 'workshops'),
           'menu_position'     => 20,
           'menu_icon'         => 'dashicons-coffee',
           'capability_type'   => 'page',
           'taxonomies'        => array('category', 'post_tag'),
           'supports'          => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields')
       );
   
       register_post_type('workshops', $args);
   }
   // Hooking up our function to theme setup
   add_action('init', 'create_post_type_workshops');
   