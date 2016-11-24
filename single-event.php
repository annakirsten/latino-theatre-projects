<?php get_header(); ?>

<!-- Begin Single (New) Production -->
<div id="content">
    
    <div id="main">
        
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <article class="post" id="post-<?php the_ID(); ?>">
            <h1><?php the_title(); ?></h1>
            <?php 
            // Gets the event start month from the meta field
            $start_month = get_post_meta( $post->ID, '_start_month', true );
            // Converts the month number to the month name
            $start_month = $wp_locale->get_month_abbrev( $wp_locale->get_month( $start_month ) );
            // Gets the event start day
            $start_day = get_post_meta( $post->ID, '_start_day', true );
            // Gets the event start year
            $start_year = get_post_meta( $post->ID, '_start_year', true );
            // Gets the event end month from the meta field
            $end_month = get_post_meta( $post->ID, '_end_month', true );
            // Converts the month number to the month name
            $end_month = $wp_locale->get_month_abbrev( $wp_locale->get_month( $end_month ) );
            // Gets the event start day
            $end_day = get_post_meta( $post->ID, '_end_day', true );
            // Gets the event start year
            $end_year = get_post_meta( $post->ID, '_end_year', true );
            
            //gets the location for the map
            $map_data = get_post_meta($post->ID, '_event_location', true);
            //gets the name for the map
            $title_data = get_post_meta($post->ID, '_production_title', true);
            ?>
            <h3><?php echo $start_month . ' ' . $start_day . ' ' . $start_year; ?> to <?php echo $end_month . ' ' . $end_day . ' ' . $end_year; ?> </h3>
            <?php add_flexslider(); ?>
            <?php the_content(''); ?> 
            <small>single-event.php</small>
        </article>
            <iframe
            width="600"
            height="450"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAPXGeC6WArhHh5rs42NCHCP09o3luUVNE
            &q='<?php echo $title_data; ?>,<?php echo $map_data; ?>'" allowfullscreen>
            </iframe>
        <?php endwhile; ?>
        <?php endif; ?>
        
    </div>
    
    <?php get_sidebar(); ?>
    
</div>

<!-- Begin Single (New) Production -->

<?php get_footer();?>