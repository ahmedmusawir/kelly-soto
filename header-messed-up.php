<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--  -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">

<!-- 
		<section class="action-bar">
			<div class="social-right pull-right">
			  <ul class="top-nav-social">
		          <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
		          <li><a href="#"><i class="fa fa-twitter"></i> </a></li>
		          <li><a href="#"><i class="fa fa-instagram"></i> </a></li>
		          <li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
		          <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
		          <li><a href="#"><i class="fa fa-pinterest"></i> </a></li>
		      </ul>      
			</div>
		</section>
 -->



		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php //echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<!-- <nav id="site-navigation" class="main-navigation hidden-xs hidden-sm" role="navigation"> -->
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'moose-frame' ); ?></button> -->
			<!-- <div class="container"> -->
			<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				
			<!-- </div> -->
		<!-- </nav>#site-navigation -->
		<aside class="logo">
			<!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="center-block" src="/wp-content/uploads/2016/05/KellySotoLogo.png" alt=""></a> -->
		</aside>
		<nav id="site-navigation">

			<?php //ubermenu( 'main' ); ?>
			
		</nav>

	</header><!-- #masthead -->

	<section class="top-form-bar">
		<div class="container">
			<article class="form-bar-content-holder">
				<div class="col-md-6">
					<div class="form-bar-left-block">
						<h2 class="form-bar-left-text">Sign Up and Get my POWER PROJECT For Free</h2>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-bar-right-block">
						<div class="form-bar-right-form-holder">
							
							<form class="form-inline" role="form">
								<div class="form-group">
								    <label for="email">Email address:</label><br />
								    <input type="email" class="form-control" id="email">
								</div>
								<div class="form-group">
								    <label for="pwd">Password:</label><br />
								    <input type="password" class="form-control" id="pwd">
								</div>
							
								  <button type="submit" class="btn btn-default">Submit</button><br />
							</form>

						</div>
					</div>
				</div>				
			</article>
		</div>
	</section>

	<div id="content" class="site-content">
































