<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    
    <title><?php get_my_title_tag(); ?></title>
    
    <!-- META -->
    <meta name="description" content="<?php echo get_the_excerpt(); //display page excerpt ?>"/>
    
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
        
    <!-- STYLES -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all">  <!-- stylesheet -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/flexslider.css" type="text/css"/>  <!--flexslider css-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">  <!-- google fonts -->
    
    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>  <!-- jquery -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>  <!--flexslider js-->
    <script>
        $(window).load(function() {
            $('.flexslider').flexslider();
            
            $("#toggle").click(function() {
                $("#navigation").toggle();
            });
            
            var loadWidth = window.innerWidth;
            
            $(window).resize(function() {
                if ( loadWidth !== window.innerWidth ) {
                    if (window.innerWidth <= 800) {
                        $("#navigation").hide();
                    } else  {
                        $("#navigation").show();
                    }
                }
            });
        });
    </script>
    
    <!-- WP HEAD -->
    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>
    
    <div id="logo-mb">
        <a href="<?php echo get_settings('home'); ?>"><img id="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo"></a>
    </div>
    
    <!--start toggle -->
    <img id="toggle" src="<?php bloginfo('template_directory'); ?>/images/toggle.png" alt="Toggle Menu">
    <!--end toggle -->
    
    <div id="header">
        <?php wp_nav_menu(array('theme_location' =>'main-menu', 'container' => 'nav', 'container_id' => 'navigation',)); ?>

        <div id="logo-dt">
            <a href="<?php echo get_settings('home'); ?>"><img id="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo"></a>
        </div>

        <div class="social-donate-dt">
            <div class="social">
                <ul>
                    <li><a href="#">i</a></li>
                    <li><a href="#">f</a></li>
                    <li><a href="#">t</a></li>
                </ul>
            </div>
            <div class="donate button">
                <p><a href="<?php bloginfo('url'); ?>/#">Donate</a></p>
            </div>
        </div>
    </div>

    
    
    