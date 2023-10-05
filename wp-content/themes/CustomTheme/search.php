<?php get_header(); ?>

    <div class="row">
        
        <div class="col-xs-12 col-sm-8 text-wrap">
            <?php 
                if( have_posts() ): 
                    while( have_posts() ): the_post(); ?>
                        <div class="mb-4 mt-1 p-2 d-flex">
                            <?php echo get_template_part('content', 'search'); ?>
                        </div>
                    <?php endwhile;
                endif;
            ?>
        </div>

        <div class="col-xs-12 col-sm-4 px-3">
            <?php get_sidebar(); ?>
        </div>
        
    </div>


<?php get_footer(); ?>
