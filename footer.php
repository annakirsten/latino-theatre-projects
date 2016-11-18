<div id="footer">

    <div id="footer-nav">
        <ul>
            <li><a href="<?php bloginfo('url'); ?>/contact">Contact</a></li>
            <ul>
                <li>eMail Fernando at:<br>fernando@email.com</li>
                <li>eMail Someone Else at<br>someoneelse@email.com</li>
            </ul>
            <li><a href="<?php bloginfo('url'); ?>/support">Support Us</a></li>
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/volunteer">Volunteer</a></li>
                <li><a href="<?php bloginfo('url'); ?>/donate">Donate</a></li>
            </ul>
            <li><a href="<?php bloginfo('url'); ?>/blog">Blog</a></li>
            <div class="footer-blog">

                <li><a href="<?php bloginfo('url'); ?>/productions">Productions</a></li>
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>/currprod">Current Productions</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/pastprod">Past  Productions</a></li>
                </ul>
                <li><a href="<?php bloginfo('url'); ?>/about">About us</a></li>
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>/whatis">What Is LTP?</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/staff">Staff</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/donors">Donors and Sponsors</a></li>
                </ul>
                <li>&copy; Latino Theater Projects</li>
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>/disclaimer">Disclaimer</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/policy">Privacy Policy</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/mission">Mission Statement</a></li>
                </ul>
            </div>
            <div id= "footer-copy">
                <ul>
                    <li>&copy;<?php echo date("Y"); ?> Latino Theater Projects</li>
                    <li><a href="<?php bloginfo('url'); ?>/#">Privacy Policy</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/#">Legal</a></li>
                    <li><?php wp_loginout(); ?></li>
                </ul>
            </div>
        </ul>
    </div>
    
    <?php wp_footer(); ?>
    
</body>
    
</html> 