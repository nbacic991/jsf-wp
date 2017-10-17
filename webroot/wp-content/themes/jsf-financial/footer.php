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
        <p>Questions</p>
        <?php wp_nav_menu (array('theme_location' => 'footer-1','menu_class' => 'nav'));?>

        <p>About Us</p>
        <?php wp_nav_menu (array('theme_location' => 'footer-2','menu_class' => 'nav'));?>

        <p>Services</p>
        <?php wp_nav_menu (array('theme_location' => 'footer-3','menu_class' => 'nav'));?>

        <p>Resource</p>
        <?php wp_nav_menu (array('theme_location' => 'footer-4','menu_class' => 'nav'));?>

		<div class="site-info">

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
