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
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all">  <!-- stylesheet -->
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">  <!-- google fonts -->
    
    <!-- bootstrap css -->
    
    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>  <!-- jquery -->
    
    <!-- bootstrap js -->
    
    <!-- WP HEAD -->
    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>
    
<header>
    
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-8">
<?php wp_nav_menu(array('theme_location' =>'main-menu', 'container' => 'nav', 'container_id' => 'navigation',)); ?>
        </div>
    </div>
</div>
