<?php
/**
* The header for our theme
* This is the template that displays all of the <head> section and everything up until your opening main
container section (i.e. <div class="main-content").
* @package loving-paws-veterinary-clinic
* @since 1.0.0
*/

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php wp_head(); ?>
    </head>
 <body <?php body_class(); ?> >
    <header class="main-header">
        <div class="inner-container">
            <div class="menu-flex flex-container">
                <div class="icons-flex flex-container">
                    <a href="http://jtat2.dmitstudent.ca/dmit2032/loving-paws-vet-clinic/">
                        <div class="logo"></div>
                    </a>
                    <div class="icons flex-container">
                        <div class="flex-container">
                            <div class="phone-icon"></div>
                            <p>(780) 231-7798 | </p>
                        </div>
                        <div class="flex-container">
                            <div class="mail-icon"></div>
                            <p>info@lovingpaws.ca</p>
                        </div>
                            <!-- TOGGLE ICON -->
                            <div class="toggle-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                    </div>
                </div>  
            </div>
            
            <nav class="off-canvas-menu">
                <a href="#" class="nav-btn">Request Appointment</a>
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

        </div> <!--End of inner container-->
    </header>
    <div id="content" class="site-content" >