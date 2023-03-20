<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package second_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'second_theme' ); ?></a>


<!-- THIS IS THE LOGO AND NAV LINKS SECTION -->
<header id="masthead" class="site-header nav">
	<div class="site-wrapper">
		<!-- <a class="toggle-nav" href="#">&#9776;</a> -->
		<div class="nav-bar">
			<!-- THIS IS THE SITE LOGO SECTION -->
			<div class="nav-logo"> 
				<div class="site-branding">
					<?php the_custom_logo(); ?>

				</div><!-- .site-branding -->
			</div>
		
			<!-- THIS IS THE NAV LINKS SECTION -->
			<nav id="site-navigation" class="main-navigation nav-bar-links">
				<div class="primary-menu">
					<button class="toggle-nav" aria-controls="primary-menu" aria-expanded="false"> <?php esc_html_e( '&#9776;', 'second_theme' ); ?></button>

					<div class="skip-link screen-reader-text">
        				<a href="#content" title="<?php esc_attr_e	('Skip to content', 'tutsplus' ); ?>">
            				<?php _e( 'Skip to content', 'tutsplus' ); ?>
       					</a>
    				</div>

					<?php
					wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container'      => 'div',
						'container_class'=>  'primary-menu',
						'container_id'   =>   '',
						'menu_id'        => 'primary-menu',
						'items_wrap'     => '<ul>%3$s</ul>',
					)
					);
					?>
				</div>
			</nav><!-- #site-navigation -->
		</div>
	</div>
</header><!-- #masthead -->
