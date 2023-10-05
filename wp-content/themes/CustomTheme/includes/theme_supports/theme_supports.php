<?php 


/*
    ========================================
    ACTIVATE MENUS
    ========================================
*/
function custom_theme_setup() {
    add_theme_support('menus');

    register_nav_menu( 'primary', 'Primary Header Navigation' );
    register_nav_menu( 'secondary', 'Footer Navigation' );

}

add_action( 'init' , 'custom_theme_setup' );

/*
    ========================================
    THEME SUPPORT FUNCTION
    ========================================
*/

add_theme_support('featured-content');
add_theme_support('post-thumbnails');

add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'video' ) );