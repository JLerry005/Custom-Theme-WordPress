<?php get_header(); ?>

    <div class="row">

        <div class="col-xs-12 px-5 text-break">
            <h1>Latest</h1>
            <?php 

                $args = array(
                    'type' => 'post',
                    'posts_per_page' => 1,
                );

                $lastBlog = new WP_Query($args);

                if( $lastBlog->have_posts() ): 
                    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                       <?php echo get_template_part('content', get_post_format()); ?>
        
                    <?php endwhile;
                endif;

                wp_reset_postdata();
            ?>
        </div>

        <div class="col-xs-12 col-sm-8 text-break">
            <?php 

                $args = array(
                    'type' => 'post',
                    'post_per_page' => 2,
                    'offset' => 2
                );

                $lastBlog = new WP_Query($args);

                if( $lastBlog->have_posts() ): 
                    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                       <?php echo get_template_part('content', get_post_format()); ?>
        
                    <?php endwhile;
                endif;

                wp_reset_postdata();
            ?>

            <div>
                <h1>News Category</h1>
            </div>
            <hr class="hr-bg">
            <?php 

                $args = array(
                    'type' => 'post',
                    'posts_per_page' => -1,
                    'category_name' => 'news'
                );

                $lastBlog = new WP_Query($args);

                if( $lastBlog->have_posts() ): 
                    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                       <?php echo get_template_part('content', get_post_format()); ?>
        
                    <?php endwhile;
                endif;

                wp_reset_postdata();
            ?>
        </div>

        <div class="col-xs-12 col-sm-4 px-2">
            <?php get_sidebar(); ?>
        </div>

    </div>

<?php get_footer(); ?>
