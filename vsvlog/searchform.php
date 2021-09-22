<?php
/**
 * 
 * Default Search Form Template
 * 
 */
?>

<!-- Search -->
<form method="GET" action="<?php echo esc_url( home_url('/') ); ?>" class="search">
    <input type="text" class="search__input" name="s" value="<?php echo get_search_query(); ?>" placeholder="Search anything right here ..."> </form>
<!-- End of Search --> 
