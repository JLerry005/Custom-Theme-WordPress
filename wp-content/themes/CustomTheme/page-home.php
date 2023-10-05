<?php get_header(); ?>

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner rounded-4">
            <?php 
                $args_cat = array(
                    'include' => '10, 9, 8'
                );

                $categories = get_categories( $args_cat );
                $count = 0;
                foreach( $categories as $category ) {

                    $args = array(
                        'type' => 'post',
                        'posts_per_page' => 1,
                        'category__in' => $category->term_id,
                        'category__not_in' => array(11),
                    );

                    $sliderPost = new WP_Query($args);
                        
                    if( $sliderPost->have_posts() ): 
                        while( $sliderPost->have_posts() ): $sliderPost->the_post(); ?>

                        <div class="carousel-item <?php if($count == 0): echo 'active'; endif; ?> rounded">
                            <img class="img-fluid" src="<?php the_post_thumbnail_url("full"); ?>" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <?php the_title( sprintf('<h1 class="content-title fw-bold text-uppercase"><a class="slider-title" href="%s" target="_blank">', esc_url(get_permalink()) ),'</a></h1>'); ?>
                                <h5 class="category"><?php the_category(' ') ?></h5>
                            </div>
                        </div>

                        <?php endwhile;
                    endif;

                    wp_reset_postdata();
                    $count++;
                }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row text-dark">
        <div class="col-xs-12 col-sm-8 px-2"> 
            <h4 class="mt-5 text-uppercase fw-bold text-">🪄 Latest Blog</h4>
            <hr class="hr-bg"> 

            <div class="d-flex flex-wrap flex-row">
                <?php 
                    $args_cat = array(
                        'include' => '10, 9, 8'
                    );

                    $categories = get_categories( $args_cat );

                    foreach( $categories as $category ) {

                        $args = array(
                            'type' => 'post',
                            'posts_per_page' => 1,
                            'category__in' => $category->term_id,
                            'category__not_in' => array(11),
                        );

                        $lastBlog = new WP_Query($args);

                        if( $lastBlog->have_posts() ): 
                            while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

                            <div class="col-xs-12 col-sm-4 p-2">
                                <?php echo get_template_part('content', 'featured'); ?>
                            </div>

                            <?php endwhile;
                        endif;

                    wp_reset_postdata();
                    }
                ?>
            </div>
        </div>


        <div class="col-xs-12 col-sm-4 px-5 mt-5">
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>
