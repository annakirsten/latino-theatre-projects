<?php get_header(); ?>

<div id="content">

<div id="main">
    
    <div id="feature">
        <p>WHAT WE DO Ficabore ptaepedi alique nation exceped magnatur re simagnatem quis de minis adis enisitiandic tempos incia sunti ditin net inciatur aspis magnatu rionseque si omnis</p>

        <img src="<?php bloginfo('template_directory'); ?>/images/img-featured.png" alt="feature">
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
            <div>Go to our Blog page</div>
        </div>
    </div>

    <p>front-page.php</p>

</div>

<?php get_sidebar(); ?>

</div>  <!--end content-->

<?php get_footer(); ?>