<aside>
    
    <?php if(get_post_meta($post->ID, 'Quote', true));?>
    
    <blockquote><p><?php echo get_post_meta($post->ID, 'Quote', true);?></p></blockquote>
    
    <?php dynamic_sidebar(1); ?> 
</aside>