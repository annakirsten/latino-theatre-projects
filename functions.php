<?php

/*
Theme Name: Latino Theatre Projects Theme
Author: Latino Theatre Projects Design/Development Team
Author URI: www.annaksabo.com
Description: Theme for the Latino Theatre Projects website
*/

//all of this is generated by wordpress to supports widgets

// Register the nav menu
register_nav_menus(array(
    'main-menu' => __('Main'),
));

//register the sidebar
register_sidebar( array(
    'name' => __( 'dynamic_sidebar' ),
	'id' => 'sidebar-1',
	'before_widget' => '<div id="%1$s class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="widget_title">',
	'after_title' => '</h2>',
));

// Support for themes
add_theme_support('post-thumbnails');

// Support for excerpts
add_post_type_support('page', 'excerpt');

//title tag
function get_my_title_tag () {
    
	global $post;
    
	if (is_front_page()){
		bloginfo('description');
	} 
	elseif (is_page() || is_single()){
		the_title();
	}
	else {	
		bloginfo('description');
	}
    
	if ($post->post_parent){
		echo ' | ';
		echo get_the_title($post->post_parent);
	}
    
	echo ' | ';
	bloginfo('name');
	echo ' | ';
	echo 'Seattle, WA.';
}

//get child pages
function get_child_pages() {
	
	global $post; // set global variable
	
	rewind_posts(); // stop previous loops 
	query_posts(array('post_type' => 'page', 'posts_per_page' => -1, 'post_status' => publish,'post_parent' => $post->ID,'order' => 'ASC','orderby' => 'menu_order')); // query & order child pages 
    
	while (have_posts()) : the_post(); 
	
		$childPermalink = get_permalink( $post->ID ); // post permalink
		$childID = $post->ID; // post id
		$childTitle = $post->post_title; // post title
		$childExcerpt = $post->post_excerpt; // post excerpt
        
		echo '<article id="page-excerpt-'.$childID.'" class="page-excerpt">';
		echo '<h3><a href="'.$childPermalink.'">'.$childTitle.'&nbsp;&rsaquo;</a></h3>';
		echo '<p>'.$childExcerpt.' <a href="'.$childPermalink.'">Read More&nbsp;&rsaquo;</a></p>';
		echo '</article>';
        
	endwhile;
	
	wp_reset_query(); 
        
}

?>