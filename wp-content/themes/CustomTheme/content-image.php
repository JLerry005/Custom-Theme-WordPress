
<article id="post-<?php the_ID()?>"  class="">
    <h1> <?php the_title(); ?> </h1> 
    <hr>
    <div>
        <a href="<?php the_post_thumbnail_url(); ?>"> <?php the_post_thumbnail('medium'); ?> </a>
    </div>
</article>