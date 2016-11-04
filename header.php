<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    
    <title><?php get_my_title_tag();?></title>
    
    <!-- META -->
    <meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
    
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
        
    <!-- STYLES -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all">  <!-- stylesheet -->
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">  <!-- google fonts -->
    
    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>  <!-- jquery -->
    
    <!-- WP HEAD -->
    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>
    
    <nav>
        <?php wp_nav_menu(array('theme_location' =>'main-menu', 'container' => 'nav', 'container_id' => 'navigation',)); ?>
    </nav>

    <header>
        <div class="logo">
            <a href="<?php echo get_settings('home'); ?>"><img id="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo"></a>
        </div>

        <div class="container">
            <div class="social">
                <ul>
                    <li>i</li>
                    <li>f</li>
                    <li>t</li>
                </ul>
            </div>
            <div class="donate">
                <p>DONATE</p>
            </div>
        </div>
    </header>

    
    
    