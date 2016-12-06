<div id="aside">
    
    <?php get_search_form(); // custom search field ?>
    
    <h3>Current Production</h3>
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
        <ul>
            <h5 class="production_title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>

            <h5 class="production_dates"><?php echo $start_month_word . ' ' . $start_day . ' ' . $start_year; ?> to <?php echo $end_month_word . ' ' . $end_day . ' ' . $end_year; ?> </h5>

            <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>


        </ul>
    <?php endif; ?><!-- End compare if --> 
    <?php endwhile; ?><!-- End Current Productions while -->
    <?php endif; ?> <!-- End Current Productions if -->
    <!-- End Current Productions Loop -->
    
    <h3>Past Productions</h3>
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
        <ul>
            <h5 class="production_title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
        </ul>
    <?php endif; ?><!-- End compare if --> 
    <?php endwhile; ?><!-- End Past Productions while -->
    <?php endif; ?> <!-- End Past Productions if -->
    <!-- End Past Productions Loop -->
    
    <h3>Recent Posts</h3>
    <?php if (!( is_page() )) : ?>
        <?php rewind_posts(); //stop loop one ?>
        <?php query_posts('showposts=1'); //give loop two directions ?>
        <?php if (have_posts()) : while(have_posts()) : the_post(); //start the loop ?>
            <article id="<?php the_ID(); ?>" class="blog-excerpt">
                <h2><a href="<?php the_permalink(); //link to the page/posting ?>"><?php the_title(); //get the title?></a></h2>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); //display the post featured image as thumbnail size ?></a>
                <small class="post-date"><?php the_time('F j, Y'); ?></small><br />
                <?php the_excerpt(); //show the excerpt ?>
                <p class="read-more"><a href="<?php the_permalink() ?>">Read More&nbsp;&raquo;</a></p>
            </article>
        <?php endwhile; endif; //end the loop ?>
    <?php endif; ?>
    
    <h3>Support Us</h3>
        <p><a href="<?php bloginfo('url'); ?>/support-us/donate">Donate Here!</a></p>
    
    <h3>Get In Touch</h3>
        <p><a href="<?php bloginfo('url'); ?>/#">Email Us</a></p>
    
    <?php //dynamic_sidebar(1); ?>
    
</div>