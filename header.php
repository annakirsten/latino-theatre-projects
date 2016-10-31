<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    
    <title><?php get_my_title_tag();?></title>
    
    <!-- META -->
    <meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
    
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
    
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
        
    <!-- STYLES -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    
    <!-- WP HEAD -->
    <?php wp_head(); ?>
    
</head>

<header>
    
</header>
    
<body <?php body_class(); ?>>
    
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'nav', 'container_id' => 'navigation', 'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>', ) ); ?>