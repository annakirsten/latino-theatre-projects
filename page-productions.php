<?php /* Template Name: Productions Page */ ?>

<?php get_header(); ?>

<!-- Begin Content -->
<div id="content" class="page-<?php the_ID(); ?>">   
    
    <!-- Begin Productions Loop -->
    <?php rewind_posts(); // stop loop one ?>
    <?php query_posts('post_type=event'); // show productions ?>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article class="post-box" id="post-box-<?php the_ID(); ?>">
            <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
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
            
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
            
            <?php the_excerpt(); ?>
            <p class="full-story"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Full Story &raquo;</a></p>
        </article>
    <?php endwhile; ?>
    <?php endif; ?>
    <!-- End Productions Loop --> 
    
    <small>page-productions.php</small>
    
</div>
<!-- End Content -->

<?php get_footer();?>