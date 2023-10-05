
<form class="d-flex align-items-center" role="search" method="get" action="<?php home_url( '/' ); ?>">
    <input type="search" class="form-control mr-5" style="margin-right: 10px;" name="s" value="<?php echo get_search_query() ?>" title="Search..." Placeholder="Search" required/>
    <button class="border-none"><i class="bi bi-search"></i></button>
</form>