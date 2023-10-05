<article id="post-<?php the_ID()?>"  <?php post_class(); ?> >
    <div class="p-4 shadow-sm rounded">
        <?php
            if( has_post_thumbnail() ): ?>
            <div class="col-xs-12 mb-2">
                <div class="thumbnail">
                    <img class="img-fluid rounded mx-auto" src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title_attribute(); ?>">
                </div>        
            </div>
        <?php endif; ?>

        <?php the_title( sprintf('<h5 class="content-title fw-bold text-uppercase"><a href="%s" target="_blank">', esc_url(get_permalink()) ),'</a></h5>'); ?>

        <div class="text-wrap">
            <?php the_excerpt(); ?>
            <code class="list-unstyled"><?php the_category(' ') ?></code>
        </div>
    </div>
</article>

