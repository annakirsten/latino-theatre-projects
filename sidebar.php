<div id="aside">
    
    <?php get_search_form(); // custom search field ?>
    
    <h3>Current Productions</h3>
    <ul>
        <a href="#"><li>Mauris placerat eleifend</li></a>
    </ul>
    
    <h3>Past Productions</h3>
    <ul>
        <a href="#"><li>Vestibulum erat wisi</li></a>
        <a href="#"><li>Quisque sit amet</li></a>
        <a href="#"><li>Aenean fermentum</li></a>
        <a href="#"><li>Curabitur massa</li></a>
    </ul>
    
    <?php if (!( is_page() )) : ?>
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
    <?php endif; ?>
    
    <h3>Support Us</h3>
    <div class="support button">
        <p><a href="<?php bloginfo('url'); ?>/#">Donate Here!</a></p>
    </div>
    
    <h3>Get In Touch</h3>
    <div class="contact button">
        <p><a href="<?php bloginfo('url'); ?>/#">Email Us</a></p>
    </div>
    
    <?php //dynamic_sidebar(1); ?>
    
</div>