<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package straight
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'straight' ); ?></a> -->

<header id="masthead" class="site-header" role="banner">
	<a class="logo">
		<img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png" alt="">
		<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
	</a>

	<nav id="site-navigation" class="main-navigation hidden" role="navigation">
		<a class="menu-toggle navigation-menu-button" id="js-mobile-menu"><span class="label"><?php _e( 'menu', 'straight' ); ?></span> <span class="bars"><span class="bar"></span> <span class="bar"></span> <span class="bar"></span></span> </a>
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		<!-- <div class="navigation-tools">
	    <div class="search-bar">
	        <div class="search-and-submit">
	        	<?php get_search_form(); ?>
	        </div>
	    </div>
	    <a href="javascript:void(0)" class="sign-up">Sign Up</a>
    	</div> -->
	</nav><!-- #site-navigation -->
</header><!-- #masthead -->
<div id="page" class="hfeed site">
	<div id="content" class="site-content">
