<?php
/*
Template Name: productions
*/
?>

<div id="aside">
    
    <?php get_search_form(); // custom search field ?>
    
    
    <h3>Recent Posts</h3>
    <?php rewind_posts(); //stop loop one ?>
    <?php query_posts('showposts=1'); //give loop two directions ?>
    <?php if (have_posts()) : while(have_posts()) : the_post(); //start the loop ?>
        <article id="<?php the_ID(); ?>" class="blog-excerpt">
            <h2><a href="<?php the_permalink(); //link to the page/posting ?>"><?php the_title(); //get the title?></a></h2>
            <small class="post-date"><?php the_time('F j, Y'); ?></small>
            <br />
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); //display the post featured image as thumbnail size ?></a>
            <br />
            <?php the_excerpt(); //show the excerpt ?>
            <p class="read-more"><a href="<?php the_permalink() ?>">Read More&nbsp;&raquo;</a></p>
        </article>
    <?php endwhile; endif; //end the loop ?>

    
    <h3>Support Us</h3>
        <p><a href="<?php bloginfo('url'); ?>/support-us/donate">Find out how your donations help us create Theatre &Uacute;til!</a></p>
    
</div>