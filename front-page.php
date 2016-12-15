<?php get_header(); ?>

<div id="content">

    <div id="main">
        
        <p class="home top-dt">We deliver thought-provoking theater that informs, engages and enlightens audiences in the Puget Sound region.</p>
        
        
        <!-- Begin Flex Slider -->
        <?php add_flexslider(); ?>
        <!-- End Flex Slider -->
        
        <p class="home top-mb">We deliver thought-provoking theater that informs, engages and enlightens audiences in the Puget Sound region.</p>
        
        <div class="donate-mb button">
            <p><a href="<?php bloginfo('url'); ?>/#">Donate</a></p>
        </div>

        <!-- <p>front-page.php</p> -->

    </div>

    <?php get_sidebar(); ?>

</div>  <!--end content-->

<?php get_footer(); ?>