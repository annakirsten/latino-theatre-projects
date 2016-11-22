<?php get_header(); ?>

<div id="content">

    <div id="main">
        
        <p class="home top-dt">Latino Theatre Projects presents Latin American and Spanish theatre in the Puget Sound region and beyond.</p>
        
        <!-- Begin Flex Slider -->
        <div class="flexslider">
            <ul class="slides">
            <li>
                <img src="<?php bloginfo('template_directory'); ?>/images/Flex_1.jpg" alt="image 1">
                <p class="slider-caption">Image One: In a metus neque. Donec sed est metus, in cursus lectus. </p>
                <a href="#"><button class="slider-button">Learn More</button></a>
            </li>
            <li>
                <img src="<?php bloginfo('template_directory'); ?>/images/Flex_2.jpg" alt="image 2">
                <p class="slider-caption">Image Two: In a metus neque. Donec sed est metus, in cursus lectus. </p>
                <a href="#"><button class="slider-button">Learn More</button></a>
            </li>
            <li>
                <img src="<?php bloginfo('template_directory'); ?>/images/Flex_3.jpg" alt="image 3">
                <p class="slider-caption">Image Three: In a metus neque. Donec sed est metus, in cursus lectus. </p>
                <a href="#"><button class="slider-button">Learn More</button></a>
            </li>
            <li>
                <img src="<?php bloginfo('template_directory'); ?>/images/img-featured.png" alt="image 4">
                <p class="slider-caption">Image Four: In a metus neque. Donec sed est metus, in cursus lectus. </p>
                <a href="#"><button class="slider-button">Learn More</button></a>
            </li>
            </ul>
        </div>
        <!-- End Flex Slider -->
        
        <p class="home top-mb">Latino Theatre Projects presents Latin American and Spanish theatre in the Puget Sound region and beyond.</p>
        
        <div class="donate-mb button">
            <p><a href="<?php bloginfo('url'); ?>/#">Donate</a></p>
        </div>

        <div id="recent-posts">
            <h2>Recent Blog Posts</h2>
            <?php rewind_posts(); //stop loop one ?>
            <?php query_posts('showposts=1'); //give loop two directions ?>
            <?php if (have_posts()) : while(have_posts()) : the_post(); //start the loop ?>
                <article id="<?php the_ID(); ?>" class="blog-excerpt">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); //display the post featured image as thumbnail size ?></a>
                    <small>Date: <?php the_time('F j, Y'); ?></small>
                    <h3><a href="<?php the_permalink(); //link to the page/posting ?>"><?php the_title(); //get the title?></a></h3>
                    <?php the_excerpt(''); //show the excerpt ?>
                </article>
            <?php endwhile; endif; //end the loop ?>

            <div class="button go-to-blog">
                <div><a href="<?php bloginfo('url'); ?>/blog">Go to our Blog page</a></div>
            </div>
        </div>

        <!-- <p>front-page.php</p> -->

    </div>

    <?php get_sidebar(); ?>

</div>  <!--end content-->

<?php get_footer(); ?>