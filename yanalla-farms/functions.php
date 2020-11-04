<?php

/**
 * @package yanalla-farms
 * @since 1.0.0
 * 
 * 
 * 
 * 
 */

function dc_styles() {

    //styles
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css', false, '1.0', 'all');
    wp_enqueue_style( 'style', get_template_directory_uri() . 'style.css', false, '1.0', 'all');
    
    //scripts
    //wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);}
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
