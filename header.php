<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Heather
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
<div class='wrap'>
<div id="page" class="site">
    
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'heather' ); ?></a>

	<header id="masthead" class="site-header mb">
		<div class="site-branding">
			<?php
			the_custom_logo();
				?>
				<h1 class="site-title h2 m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			$heather_description = get_bloginfo( 'description', 'display' );
			if ( $heather_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $heather_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->
