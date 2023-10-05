<?php 

/*
    Template Name: Page No Title
*/

get_header(); ?>

    <?php 
    
    if( have_posts() ): 

        while( have_posts() ): the_post(); ?>
            
            <h3>Sample sample smaple hehehe</h3>
            <small> <i class="bi bi-person"></i> <span class="fw-bold"></span><?php the_author(); ?></span>  <i class="bi bi-calendar2 ms-2"></i> <?php the_date(); the_category(); ?> </small>  
            <hr>
            <p> <?php the_content(); ?> </p> 
            
        <?php endwhile;

    endif;

    ?>

<?php get_footer(); ?>
