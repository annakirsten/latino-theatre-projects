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

// Custom Post type
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'new_production',
        array(
        'labels' => array(
        'name' => __( 'Productions' ),
        'singular_name' => __( 'Production' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'productions'),
        )
    );
}
add_post_type_support( 'new_production', 'excerpt' );
add_post_type_support( 'new_production', 'thumbnail' );



//enable bootstrap css, js
function reg_scripts() {
    wp_enqueue_style( 'bootstrapstyle', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( 'bootstrapthemestyle', get_template_directory_uri() . '/css/bootstrap-theme.css' );
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), true );
}
add_action('wp_enqueue_scripts', 'reg_scripts');
//


?>