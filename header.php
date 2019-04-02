<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HSOY_RY
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Libre+Franklin:500" rel="stylesheet"> 

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hsoy-ry' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
		<a href="<?php bloginfo('url'); ?>"><img id="site-logo" class="site-logo" src="<?php echo get_bloginfo('template_url') ?>/inc/img/logo.png"></a>
			<?php
			$hsoy_ry_description = get_bloginfo( 'description', 'display' );
			if ( $hsoy_ry_description || is_customize_preview() ) :
				?>
				<h1 class="site-description"><?php echo $hsoy_ry_description; /* WPCS: xss ok. */ ?></h1>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<div class="mobmenu">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><img id="hambmenu" src="<?php echo get_bloginfo('template_url') ?>/inc/img/hambmenu.png"></button>
			<!-- <div class="stripe"></div></div> -->
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>	
			</div>
		</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

	<div id="content" class="site-content">
