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
            ?>
            <h3><?php echo $start_month . ' ' . $start_day . ' ' . $start_year; ?> to <?php echo $end_month . ' ' . $end_day . ' ' . $end_year; ?> </h3>
            <?php the_post_thumbnail('large'); ?>
            <?php the_content(''); ?> 
            <small>single-event.php</small>
        </article>
        <?php endwhile; ?>
        <?php endif; ?>
        
    </div>
    
    <?php get_sidebar(); ?>
    
</div>

<!-- Begin Single (New) Production -->

<?php get_footer();?>