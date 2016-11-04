<?php /* Template Name: Productions Template*/?>
<?php get_header(); ?>
<main>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
<?php the_content('');?>
<?php endwhile; endif;?>    
    
 <small>Productions:</small>
    <?php rewind_posts(); // stop loop one ?>
    <?php query_posts('post_type=new_production'); // show productions ?>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article class="post-box" id="post-box-<?php the_ID(); ?>">
            <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <p class="postdata">Posted on <?php the_time('M j, Y') ?> in <?php the_category(', ') ?></p>
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
            <?php the_excerpt(); ?>
            <p class="full-story"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Full Story &raquo;</a></p>
        </article>
    <?php endwhile; ?>
    <?php endif; ?>

<p>page-productions.php</p>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>