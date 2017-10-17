<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jsf-financial
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jsf-financial' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'jsf-financial' ); ?></button>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'my-custom-menu',
                'container_class' => 'custom-menu-class' ) );
            ?>
            <?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

    <div class="flex-container">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="http://via.placeholder.com/920x400" alt="1st slide">
                    <div class="flex-caption">
                        <p>Tailored advice for life's unpredictable challenges</p>
                        <button>Learn more</button>
                    </div>
                    <div class="flex-image">
                        <img src="http://via.placeholder.com/250x250" alt="some photo">
                    </div>
                </li>
                <li>
                    <img src="http://via.placeholder.com/920x400" alt="1st slide">
                    <div class="flex-caption">
                        <p>Tailored advice for life's unpredictable challenges</p>
                        <button>Learn more</button>
                    </div>
                    <div class="flex-image">
                        <img src="http://via.placeholder.com/250x250" alt="some photo">
                    </div>
                </li>
                <li>
                    <img src="http://via.placeholder.com/920x400" alt="1st slide">
                    <div class="flex-caption">
                        <p>Tailored advice for life's unpredictable challenges</p>
                        <button>Learn more</button>
                    </div>
                    <div class="flex-image">
                        <img src="http://via.placeholder.com/250x250" alt="some photo">
                    </div>
                </li>
                <li>
                    <img src="http://via.placeholder.com/920x400" alt="1st slide">
                    <div class="flex-caption">
                        <p>Tailored advice for life's unpredictable challenges</p>
                        <button>Learn more</button>
                    </div>
                    <div class="flex-image">
                        <img src="http://via.placeholder.com/250x250" alt="some photo">
                    </div>
                </li>
            </ul>
        </div>
    </div>

	<div id="content" class="site-content">
