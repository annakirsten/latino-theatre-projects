<?php get_header(); ?>

<div id="content">

    <div id="main">
        
        <h1>
            <?php 
            if ( is_post_type_archive() ) {
                post_type_archive_title();  
            }
            else {
                single_post_title();
            }
            ?>
        </h1>
        <?php if (have_posts()) : while(have_posts()) : the_post(); //start the loop ?>
        <article id="<?php the_ID(); ?>" class="blog-excerpt">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); //display the post featured image as thumbnail size ?></a>
            <h3><a href="<?php the_permalink(); //link to the page/posting ?>"><?php the_title(); //get the title?></a></h3>
            <small><?php the_time('F j, Y'); ?></small><br />
            <?php the_excerpt(); //show the excerpt ?>
            <p class="read-more"><a href="<?php the_permalink() ?>">Read more&nbsp;&raquo;</a></p>
        </article>
        <?php endwhile; endif; //end the loop ?>
        
    </div>

<?php get_sidebar(); ?>
    
</div>

<?php get_footer(); ?>