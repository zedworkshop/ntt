<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

	<script src="//use.typekit.net/sbr7ney.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
</head>

<body <?php body_class(); ?>>

	<header class="[ bg-white siteheader ]" role="banner">
		<div class="[ container ]">
			<div class="[ clearfix ]">

				<div class="[ sm-col sm-col-4 relative ] site-branding">
					<?php
						if ( is_front_page() ) : ?>
							<a class="logo logo-lg" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img alt="<?php bloginfo( 'name' ); ?> logo" src="<?php echo  get_template_directory_uri(); ?>/img/logo.png" /></a>
						<?php else : ?>
							<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img alt="<?php bloginfo( 'name' ); ?> logo" src="<?php echo  get_template_directory_uri(); ?>/img/logo.png" /></a>
						<?php endif;
					?>
					&nbsp;
					<!-- <button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button> -->
				</div><!-- .site-branding -->

				<nav class="[ sm-col ] main-navigation">
					<?php if ( has_nav_menu( 'primary' ) ) : ?>
						<?php
							// Primary navigation menu.
							$cleanermenu = wp_nav_menu([
								'theme_location' 	=> 'primary',
							  	'container'       	=> false,
							  	'items_wrap' 		=> '%3$s',
							  	'depth'           	=> 0,
							  	'echo'				=> false
							]);

							// Find the closing bracket of each li and the opening of the link, then all instances of "li"
							$find = ['><a', 'li'];

							// Replace the former with nothing (a.k.a. delete) and the latter with "a"
							$replace = ['', 'a'];

							echo str_replace( $find, $replace, $cleanermenu );
						?>
						<!-- .main-navigation -->
					<?php endif; ?>
				</nav>

			</div>

		</div>
	</header><!-- .site-header -->

	<main class="main" role="main">

		<?php // get_sidebar(); ?>

