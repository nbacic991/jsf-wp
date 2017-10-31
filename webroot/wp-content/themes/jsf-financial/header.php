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
    <header id="masthead" class="site-header">
        <div class="site-branding">
            <img src="http://via.placeholder.com/500x150" alt="">
        </div><!-- .site-branding -->

        <div class="menu-toggle">
            <span aria-controls="primary-menu" aria-expanded="false"></span>
            <span aria-controls="primary-menu" aria-expanded="false"></span>
            <span aria-controls="primary-menu" aria-expanded="false"></span>
        </div>


        <nav id="site-navigation" class="main-navigation">
        <button class="close menu-toggle">X</button>

			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-top',
				'container_class' => 'custom-menu-class'
			) );
			wp_nav_menu( array(
				'theme_location' => 'menu-bottom',
				'menu_id'        => 'primary-menu'
			) );
			?>
            <!-- search -->
            <a class="mk-search-trigger mk-fullscreen-trigger" href="#"  id="search-button-listener">
                <div id="search-button"></div>
            </a>
            <div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
                <div id="mk-fullscreen-search-wrapper">
                    <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button">X</a>
                    <form id="mk-fullscreen-searchform" class="search" method="get" action="<?php echo home_url();
					?>" role="search">
                        <input id="mk-fullscreen-search-input" type="search" name="s" placeholder="<?php _e( 'Start typing..', 'html5blank' ); ?>">
                        <button class="search-submit" type="submit" role="button"><?php _e( 'Search', 'html5blank' ); ?></button>
                    </form>
                </div>
            </div>

            <!-- /search -->
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->



    <div id="content" class="site-content">
