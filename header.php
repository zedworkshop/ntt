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

	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico">

    <!-- SEO -->
    <meta name="description" content="Nancee's Travelling Table is a hands-on, gourmet dinner party experience, hosted by Nancee Campbell.">

	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

	<script src="//use.typekit.net/sbr7ney.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
</head>

<body <?php body_class(); ?>>

	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '103792336624818',
	      xfbml      : true,
	      version    : 'v2.3'
	    });
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>

	<header class="[ bg-white siteheader ]" role="banner">
		<div class="[ container ]">
			<div class="[ clearfix ]">

				<div class="[ col col-3 sm-col-4 relative ] site-branding">
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

				<nav class="[ col col-9 sm-col-8 ] main-navigation">
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

