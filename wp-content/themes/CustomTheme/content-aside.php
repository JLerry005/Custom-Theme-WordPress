
<article id="post-<?php the_ID()?>"  class="">
    <h1 class="text-primary-emphasis"> <?php the_title(); ?> </h1> 
    <small> <i class="bi bi-person"></i> <span class="fw-bold"></span><?php the_author(); ?></span>  <i class="bi bi-calendar2 ms-2"></i> <?php the_date(); the_category(); ?> </small> 
    <hr>

    <p> <?php the_content(); ?> </p> 
</article>