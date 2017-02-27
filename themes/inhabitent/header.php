<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
	<!DOCTYPE html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<script src="https://use.fontawesome.com/df17f0522f.js"></script>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content">
				<?php esc_html( 'Skip to content' ); ?>
			</a>
			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">



					<nav id="site-navigation" class="main-navigation" role="navigation">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-tent.svg'; ?>" class="logo" alt="Inhabitent company logo"/>
                   		</a>
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>



						<h1 class="site-title screen-reader-text">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<?php bloginfo( 'name' ); ?>
							</a>
						</h1>
					</nav>
					<!-- #site-navigation -->


			</header>
			<!-- #masthead -->

			</div>
			<!-- .site-branding -->


		</div>