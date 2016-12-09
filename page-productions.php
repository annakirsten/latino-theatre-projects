<?php /* Template Name: Productions Page */ ?>

<?php get_header(); ?>

<!-- Begin Content -->
<div id="content" class="page-<?php the_ID(); ?>">   
    
    <div id="main">
        <h1>Current Production</h1>
        <!-- Begin Current Productions Loop -->
        <?php rewind_posts(); // stop loop one ?>
        <?php query_posts('post_type=event'); // show productions ?>
        <?php if (have_posts()) : ?><!-- Begin Current Productions if -->
        <?php while (have_posts()) : the_post(); ?><!-- Begin Current Productions while -->
        <?php 
        global $post;
        global $wp_locale;        
     
        // Gets the event start month from the meta field
        $start_month = get_post_meta( $post->ID, '_start_month', true );
        // Converts the month number to the month name
        $start_month_word = $wp_locale->get_month_abbrev( $wp_locale->get_month( $start_month ) );
        // Gets the event start day
        $start_day = get_post_meta( $post->ID, '_start_day', true );
        // Gets the event start year
        $start_year = get_post_meta( $post->ID, '_start_year', true );

        // Gets the event end month from the meta field
        $end_month = get_post_meta( $post->ID, '_end_month', true );
        // Converts the month number to the month name
        $end_month_word = $wp_locale->get_month_abbrev( $wp_locale->get_month( $end_month ) );
        // Gets the event start day
        $end_day = get_post_meta( $post->ID, '_end_day', true );
        // Gets the event start year
        $end_year = get_post_meta( $post->ID, '_end_year', true );
        
        //gets today's date for comparison
        $today_date = current_time('Ymd');
        $compare_date = $end_year . $end_month . $end_day;
        ?>
        
        <?php if($today_date<$compare_date) :?>
            <article class="post-box" id="post-box-<?php the_ID(); ?>">
                <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                
                <h4><?php echo $start_month_word . ' ' . $start_day . ' ' . $start_year; ?> to <?php echo $end_month_word . ' ' . $end_day . ' ' . $end_year; ?> </h4>

                <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>

                <?php the_excerpt(); ?>
                <p class="full-story"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Read More &raquo;</a></p>
            </article>
        <?php endif; ?><!-- End compare if --> 
        <?php endwhile; ?><!-- End Current Productions while -->
        <?php endif; ?> <!-- End Current Productions if -->
        <!-- End Current Productions Loop -->
        
        
        <h1>Past Productions</h1>
        <!-- Begin Past Productions Loop -->
        <?php rewind_posts(); // stop loop one ?>
        <?php query_posts('post_type=event'); // show productions ?>
        <?php if (have_posts()) : ?><!-- Begin Past Productions if -->
        <?php while (have_posts()) : the_post(); ?><!-- Begin Past Productions while -->
        <?php
        global $post;
        global $wp_locale;        
     
        // Gets the event start month from the meta field
        $start_month = get_post_meta( $post->ID, '_start_month', true );
        // Converts the month number to the month name
        $start_month_word = $wp_locale->get_month_abbrev( $wp_locale->get_month( $start_month ) );
        // Gets the event start day
        $start_day = get_post_meta( $post->ID, '_start_day', true );
        // Gets the event start year
        $start_year = get_post_meta( $post->ID, '_start_year', true );

        // Gets the event end month from the meta field
        $end_month = get_post_meta( $post->ID, '_end_month', true );
        // Converts the month number to the month name
        $end_month_word = $wp_locale->get_month_abbrev( $wp_locale->get_month( $end_month ) );
        // Gets the event start day
        $end_day = get_post_meta( $post->ID, '_end_day', true );
        // Gets the event start year
        $end_year = get_post_meta( $post->ID, '_end_year', true );
        
        //gets today's date for comparison
        $today_date = current_time('Ymd');
        $compare_date = $end_year . $end_month . $end_day;
        ?>
        
        <?php if($today_date>$compare_date) :?>
            <article class="post-box" id="post-box-<?php the_ID(); ?>">
                <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                
                <h4><?php echo $start_month_word . ' ' . $start_day . ' ' . $start_year; ?> to <?php echo $end_month_word . ' ' . $end_day . ' ' . $end_year; ?> </h4>

                <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>

                <?php the_excerpt(); ?>
                <p class="full-story"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Full Story &raquo;</a></p>
            </article>
        <?php endif; ?><!-- End compare if --> 
        <?php endwhile; ?><!-- End Past Productions while -->
        <?php endif; ?> <!-- End Past Productions if -->
        <!-- End Past Productions Loop -->
        
    </div>
    
    <?php get_sidebar(); ?>
    
</div>
<!-- End Content -->

<?php get_footer();?>