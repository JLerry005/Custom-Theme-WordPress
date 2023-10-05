<?php 

/*
    ========================================
    SIDEBAR
    ========================================
*/


function custom_widget_setup() {

    register_sidebar(
        array(
            'name'  => 'Sidebar',
            'id'    => 'sidebar-1',
            'class' => 'custom',
            'description'    => 'Standard Sidebar',
            'before_widget'  => '<li id="%1$s" class="widget %2$s">',
            'after_widget'   => "</li>\n",
            'before_title'   => '<h2 class="widgettitle">',
            'after_title'    => "</h2>\n", 
        )
    );
}
add_action('widgets_init', 'custom_widget_setup');