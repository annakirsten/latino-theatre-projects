    <div id="footer">

        <div id="footer-nav">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/#">Donate</a></li>
                <li><a href="<?php bloginfo('url'); ?>/about">About us</a></li>
                <li><a href="<?php bloginfo('url'); ?>/contact">Contact</a></li>
                <li><a href="<?php bloginfo('url'); ?>/#">Disclaimer</a></li>
                <li><a href="<?php bloginfo('url'); ?>/#">Mission Statement</a></li>
            </ul>
        </div>

        <div id="footer-copy">
            <ul>
                <li>&copy;<?php echo date("Y"); ?> Latino Theater Projects</li>
                <li><a href="<?php bloginfo('url'); ?>/#">Privacy Policy</a></li>
                <li><a href="<?php bloginfo('url'); ?>/#">Legal</a></li>
                <li><?php wp_loginout(); ?></li>
            </ul>
        </div>

    </div>

    <?php wp_footer(); ?>

</body>
    
</html>