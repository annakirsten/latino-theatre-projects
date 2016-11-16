<div id="search">
    
    <form role="search" method="get" class="searchform group" action="<?php echo home_url( '/' ); ?>">
        <label>
        <div class="offscreen"><?php _x( 'Search: ', 'label' ) ?></div>
        <input type="search" class="search-field"
        placeholder="<?php echo esc_attr_x( ' Search', 'placeholder' ) ?>"
        value="<?php echo get_search_query() ?>" name="s"
        title="<?php esc_attr_x( 'Search: ', 'label' ) ?>" />
        </label>
        <input type="submit" class="search-submit" value="SEARCH" /> 
    </form>
    
</div>