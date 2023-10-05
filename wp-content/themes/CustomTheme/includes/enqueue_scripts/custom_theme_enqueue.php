<?php 


/*
    ========================================
    INCLUDE SCRIPTS ENQUEUE
    ========================================
*/

function custom_theme_enqueue() {

    // CUSTOM CSS AND JS
    wp_enqueue_style('customcss', get_template_directory_uri() . '/assets/custom.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/assets/custom.js', array(), '1.0.0', true);

    // BOOTSTRAP CDN
    wp_enqueue_style('bootstrapCSS', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2', 'all' );
    wp_enqueue_style('bootstrapIcons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css', array(), '5.3.2', 'all' );
    wp_enqueue_script('bootstrapJS', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true);

    // JQUERY 
    wp_enqueue_script('jquery');

}

add_action('wp_enqueue_scripts', 'custom_theme_enqueue');