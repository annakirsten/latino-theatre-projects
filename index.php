<?php get_header(); ?>

<div id="content">

    <div id="main">
<article class="post-excerpt">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
    <small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(); ?></small>
    <a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
    <?php the_excerpt();?>
    <p class="read-more"><a href="<?php the_permalink();?>">Read More</a></p>
    <?php endwhile; endif;?>
</article>
    
<p>index.php</p>
    </div>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>