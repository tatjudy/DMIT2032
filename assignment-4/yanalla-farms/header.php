<?php
/**
* The header for our theme
* This is the template that displays all of the <head> section and everything up until your opening main
container section (i.e. <div class="main-content").
* @package yanalla-farms
* @since 1.0.0
*/

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="https://kit.fontawesome.com/8d709b7917.js" crossorigin="anonymous"></script>
        <?php wp_head(); ?>
    </head>
 <body <?php body_class(); ?> >
    <header>
        <div class="flex-container">
            <a href="http://jtat2.dmitstudent.ca/dmit2032/yanalla-farms/">
                <img class="logo header-logo" src="/dmit2032/yanalla-farms/wp-content/uploads/2020/11/logo.png" alt="Yanalla Logo">
            </a>
            <div class="toggle-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <nav class="off-canvas-menu">
            <?php
                wp_nav_menu(
                    //in our menu we need to use an array as there is number of
                    //arguments we can use.
                    //the most important is theme_location.
                    array(
                        'theme_location' => 'main-menu',
                        //'container_class' => 'main-nav', //class that is applied to the container
                        //'container_id' => 'main-nav', //id that is applied to the container.
                        'menu_class' => 'menu-item', //class used for the ul element which forms the menu. 'Default Menu'
                        'menu_id' => 'main-menu', //id used for the ul element which forms the menu. 'Default Menu'
                        'fallback_cb' => '' //if the menu doesn't exsist, a
                        //callback function will fire. Set to false for no fallback
                    )
                );
            ?>
            </nav>
    </header>
    <div id="content" class="site-content" >