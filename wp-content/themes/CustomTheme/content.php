
<article class="mb-5" id="post-<?php the_ID()?>"  <?php post_class(); ?> >

    <header class="content-header">
        <?php the_title( sprintf('<h1 class="content-title"><a href="%s" target="_blank">', esc_url(get_permalink()) ),'</a></h1>'); ?>
        <small> <i class="bi bi-person fw-bolder"></i> <span class="fw-semibold text-primary"><?php the_author(); ?></span>  <i class="bi bi-calendar2 ms-2"></i> <?php the_date(); the_category(); ?> </small> 
    </header>

    <div class="row">
        <?php
            if( has_post_thumbnail() ): ?>
            <div class="col-xs-12 mb-2">
                <div class="thumbnail">
                    <img class="img-fluide rounded" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>">
                </div>        
            </div>
        <?php  endif; ?>

        <div class="col-xs-12 mb-5 text-break">
            <?php the_content(); ?>
        </div>
    </div>
        
</article>

