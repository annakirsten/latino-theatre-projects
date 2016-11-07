<?php get_header(); ?>

<div id="content">

    <div id="main">

        <?php if (have_posts()) : while(have_posts()) : the_post(); //start the loop ?>

        <h1><a href="<?php the_permalink(); //link to the page/posting ?>"><?php the_title(); //get the title?></a></h1>

        <?php the_content(''); ?>

        <?php endwhile; endif; //end the loop ?>

        <p>page.php</p>
        
    </div>
    
    <?php get_sidebar(); ?>
    
</div>
    
<?php get_footer(); ?>