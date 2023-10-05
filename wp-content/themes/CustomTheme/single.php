<?php get_header(); ?>

    <div class="row">
        
        <div class="col-xs-12 text-wrap">
            <?php 
                if( have_posts() ): 
                    while( have_posts() ): the_post(); ?>
                       <article class="mb-5" id="post-<?php the_ID()?>"  <?php post_class(); ?> >

                            <header class="content-header">
                                <?php the_title( '<h1 class="content-title">','</h1>'); ?>
                                <small class="mb-5 fw-medium text-secondary"> 
                                    <i class="bi bi-person fw-bolder"></i> <span class=""><?php the_author(); ?></span> |  
                                    <i class="bi bi-calendar2 ms-2"></i> <?php the_date();?> | <?php the_category(' '); ?> | <?php the_tags(); ?> | <?php edit_post_link(); ?> 
                                </small> 
                            </header>

                            <?php
                                if( has_post_thumbnail() ): ?>
                                <div class="col-xs-12 mt-3 mb-2">
                                    <div class="thumbnail">
                                        <img class="img-fluid rounded" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>">
                                    </div>        
                                </div>
                            <?php  endif; ?>
                            
                            <div class="row mt-5">
                                <div class="col-xs-12 col-sm-8 text-break">
                                    <?php the_content(); ?>
                                </div>  
                                
                                <div class="col-xs-12 col-sm-4 px-4">
                                    <?php get_sidebar(); ?>
                                </div>
                            </div>
                        </article>
                    <?php endwhile;
                endif;
            ?>
        </div>
        
    </div>


<?php get_footer(); ?>
