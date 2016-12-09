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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">  <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet"> <!-- google fonts -->
    
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
                    if (window.innerWidth <= 700) {
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
        
        <div id="togglebar">
            <!--start toggle -->
            <img id="toggle" src="<?php bloginfo('template_directory'); ?>/images/toggle.png" alt="Toggle Menu">
            <!--end toggle -->
        </div>        

    <div id="nav-wrapper">
        <?php wp_nav_menu(array('theme_location' =>'main-menu', 'container' => 'nav', 'container_id' => 'navigation',)); ?>
    </div>
    
    <div id="logo-mb">
            <a href="<?php echo get_settings('home'); ?>"><img id="logo" src="<?php bloginfo('template_directory'); ?>/images/LTP_horz_rgb.svg" alt="logo"></a>
        </div>
    
    <div id="header">

        <div id="logo-dt">
            <a href="<?php echo get_settings('home'); ?>"><img id="logo" src="<?php bloginfo('template_directory'); ?>/images/LTP_vert_RGB.svg" alt="logo"></a>
        </div>

        <div class="social-donate-dt">
            <div class="social">
                <ul>
                    <li><a href="https://www.facebook.com/Latino-Theatre-Projects-346266545430336/"><img src="<?php bloginfo('template_directory'); ?>/images/social_fb.png"></a></li>
                    
                    <li><a href="https://www.instagram.com/latinotheatreprojects/?hl=en"><img src="<?php bloginfo('template_directory'); ?>/images/social_ig.png"></a></li>
                    
                    <li><a href="https://twitter.com/LTPseattle"><img src="<?php bloginfo('template_directory'); ?>/images/social_tw.png"></a></li>
                </ul>
            </div>
            <div class="donate button">
                <p><a href="https://co.clickandpledge.com/sp/d1/default.aspx?wid=95216">Donate</a></p>
            </div>
        </div>
    </div>

    
    
    