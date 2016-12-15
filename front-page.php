<?php get_header(); ?>

<div id="content">

    <div id="main">
        
        <p class="home top-dt">We deliver thought-provoking theater that informs, engages and enlightens audiences in the Puget Sound region.</p>
        
        
        <!-- Begin Flex Slider -->
        <?php add_flexslider(); ?>
        <!-- End Flex Slider -->
        
        <p class="home top-mb">We deliver thought-provoking theater that informs, engages and enlightens audiences in the Puget Sound region.</p>
        
        <div class="donate-mb button">
            <p><a href="<?php bloginfo('url'); ?>/#">Donate</a></p>
        </div>
        <div id="recent-posts">
            <h2>Recent Blog Post</h2>
<<<<<<< HEAD
            <?php rewind_posts(); //stop loop one ?>
            <?php query_posts('showposts=1'); //give loop two directions ?>
            <?php if (have_posts()) : while(have_posts()) : the_post(); //start the loop ?>
                <article id="<?php the_ID(); ?>" class="blog-excerpt">
                    <h3><a href="<?php the_permalink(); //link to the page/posting ?>"><?php the_title(); //get the title?></a></h3>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); //display the post featured image as thumbnail size ?></a>
                    <small><?php the_time('F j, Y'); ?></small><br />
                    <?php the_excerpt(); //show the excerpt ?>
                    <p class="read-more"><a href="<?php the_permalink() ?>">Read more&nbsp;&raquo;</a></p>
                </article>
=======
                <?php rewind_posts(); //stop loop one ?>
                <?php query_posts('showposts=1'); //give loop two directions ?>
                <?php if (have_posts()) : while(have_posts()) : the_post(); //start the loop ?>
                    <article id="<?php the_ID(); ?>" class="blog-excerpt">
                        <h3><a href="<?php the_permalink(); //link to the page/posting ?>"><?php the_title(); //get the title?></a></h3>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); //display the post featured image as thumbnail size ?></a>
                        <small><?php the_time('F j, Y'); ?></small><br />
                        <?php the_excerpt(); //show the excerpt ?>
                        <p class="read-more"><a href="<?php the_permalink() ?>">Read More&nbsp;&raquo;</a></p>
                    </article>
>>>>>>> origin/master
            <?php endwhile; endif; //end the loop ?>

            <a href="<?php bloginfo('url'); ?>/blog">Go to Blog&nbsp;&raquo;</a>

        </div>
        <!-- <p>front-page.php</p> -->

    </div>

    <?php get_sidebar(); ?>

</div>  <!--end content-->

<?php get_footer(); ?>