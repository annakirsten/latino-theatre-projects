<?php get_header(); ?>

<div id="content">

    <div id="main">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
        <small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(); ?></small>
        <?php the_content('');?>
        <?php endwhile; endif;?>

        <p>single-productions.php</p>
        
    </div>
    
    <?php get_sidebar(); ?>
    
</div>

<?php get_footer(); ?>