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
        <div class="footer-menus">
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
        </div>
		<div class="site-info">
            <img src="http://via.placeholder.com/300x100" alt="footer logo" />
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
