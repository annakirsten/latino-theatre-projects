<div id="search">
    
    <form role="search" method="get" class="searchform group" action="<?php echo home_url( '/' ); ?>">
         <label>
         <div class="offscreen"><?php echo _x( '<h3>Search: </h3>', 'label' ) ?></div>
         <input type="search" class="search-field"
         placeholder="<?php echo esc_attr_x( ' Search', 'placeholder' ) ?>"
         value="<?php echo get_search_query() ?>" name="s"
         title="<?php echo esc_attr_x( '<h3>Search: </h3>', 'label' ) ?>" />
         </label>
         <input type="image" alt="Submit search query"
         src="<?php echo get_template_directory_uri(); ?>/images/search-icon.png">
    </form>
    
</div>