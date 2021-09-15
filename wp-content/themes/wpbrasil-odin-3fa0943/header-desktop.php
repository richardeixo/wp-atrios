<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/custom-eixo/bootstrap5/css/bootstrap.min.css">
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php if (is_page('Home')) { ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/comp-slide.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/comp-passos.css">
<?php } ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="main">
