<?php

    function lodestar_child_styles() {
        $parent_style = 'parent-style';
        wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
        wp_enqueue_style('child-style', get_template_directory_uri() . '/style.css', array($parent_style), '1.00');
    }
    add_action('wp_enqueue_scripts', 'twentytwenty_child_styles');