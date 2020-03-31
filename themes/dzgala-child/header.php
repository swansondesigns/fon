<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dzgala
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Sanchez" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dzgala' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">

			<div class="logo-dz">
				<a href="/"><img src="/wp-content/uploads/2019/04/DZ_Logo_Shimmer_v3.gif" alt="Denver Zoo" title="Denver Zoo" /></a>
			</div>
			<div class="logo-fon">
				<a href="/"><img src="/wp-content/uploads/2019/07/FON_Gala_Logo.png" alt="Force of Nature Gala" title="Force of Nature Gala" /></a>
			</div>
		</div><!-- .site-branding -->

		<div class="back-to-gala-container">
			<a href="/" class="header-link back-to-gala">Back to GALA Page</a>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
