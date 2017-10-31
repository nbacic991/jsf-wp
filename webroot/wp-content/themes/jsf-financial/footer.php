<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jsf-financial
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <!-- <div class="footer-menus container">
            <div class="footer-menu">
                <p class="menu-title">Questions</p>
                <?php wp_nav_menu (array('theme_location' => 'footer-1','menu_class' => 'nav'));?>
            </div>
            <div class="footer-menu">
                <p class="menu-title">About Us</p>
                <?php wp_nav_menu (array('theme_location' => 'footer-2','menu_class' => 'nav'));?>
            </div class="footer-menu">
            <div class="footer-menu">
                <p class="menu-title">Services</p>
                <?php wp_nav_menu (array('theme_location' => 'footer-3','menu_class' => 'nav'));?>
            </div>
            <div class="footer-menu">
                <p class="menu-title">Resource</p>
                <?php wp_nav_menu (array('theme_location' => 'footer-4','menu_class' => 'nav'));?>
            </div>
        </div> -->
		<div class="site-info container">
            <img src="<?php bloginfo('template_directory'); ?>/img/SVG/logo-line.svg" alt="footer logo" />
            <div class="info-desc">
                <p>Securities are offered through Mid Atlantic Capitol Corporation ("MACC") a registered broker dealer,
                    Member FINRA/SIPC. </p>
                <p>Investment advice is offered through JSF Financial, LLC, which is not a
                    subsidiary or control affiliate of MACC.</p>
                <p>Check the background of our investment profesionals on FINRA's BrokerCheck, http://brokercheck.finra.org.</p>
                <a href="#">finra.org</a>
                <a href="#">sipc.org</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms Of Use</a>
                <a href="#">Disclosures</a>
                <p>&copy; JSF Financial, LLC 2017</p>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
