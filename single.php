<?php get_header(); ?>

<div id="content">

    <div id="main">

        <?php if (have_posts()) : while(have_posts()) : the_post(); //start the loop ?>

        <h1><a href="<?php the_permalink(); //link to the page/posting ?>"><?php the_title(); //get the title?></a></h1>

        <small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author_posts_link(); ?> in <?php the_category(', '); ?></small>

        <?php the_post_thumbnail('large'); ?>

        <?php the_content(''); ?>

        <?php endwhile; endif; //end the loop ?>

    </div>

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>