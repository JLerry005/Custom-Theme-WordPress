<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Theme</title>
    <?php wp_head(); ?>
</head>

    <?php 
        if ( is_home() ):
            $theme_class = array( 'theme-class', 'my-custom-class' );
        else:
            $theme_class = array( 'no-theme-class');
        endif;
    ?>

<body <?php body_class( $theme_class ); ?> >
    <nav class="navbar navbar-expand-lg container">
        <div class="container-fluid">
            <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt=""></img>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-flex justify-content-end text-dark" id="navbarNav">
                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'nav navbar-nav' 
                        )
                    ); 
                ?>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="row">
            
        </div>




