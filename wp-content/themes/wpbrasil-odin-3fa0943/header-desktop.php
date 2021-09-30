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
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/reset.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/bootstrap5/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/fonts.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/global.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/header.css">
	<?php  if (is_page('Sobre')){ ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/sobre.css">
<?php }?>
<?php  if (is_page('Corpo Clínico')){ ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/corpo-clinico.css">
<?php }?>
<?php  if (is_page('Blog')){ ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/blog.css">
<?php }?>
<?php  if (is_page('Single')){ ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/single.css">
<?php }?>

</head>

<body <?php body_class(); ?>>

<header>
	<div class="top-bar">
		<div class="container top-txt">
			<div class="horarios">
				<strong>Horários:</strong>
				<p>Segunda a Sexta 7H30 às 19H</p><br/><p>Sábado das 07H30 às 12H</p>
			</div>
			<div class="contatos">
				<strong>Contatos:</strong>
				<img src=""><p>(61) 3226-5409</p>
				<img src=""><p>(61) 99138-3190</p>
				<img src=""><p>(61) 3224-9878</p>
			</div>
		</div>
	</div>
	<div class="main-menu">
		<div class="container">
			<div class="menu-logo">
				<a href="<?php home_url() ?>/atrios/"><img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/logo.png"></a>
			</div>
			<div class="menu-itens">
				<ul>
					<li><a href="<?php home_url() ?>/atrios/">HOME</a></li>
					<li><a href="<?php home_url() ?>/atrios/sobre/">SOBRE</a></li>
					<li><a href="<?php home_url() ?>/atrios/dicas-da-bia/">BLOG</a></li>
					<li><a href="<?php home_url() ?>/atrios/trabalhe-na-vida-digital/">CONVÊNIOS</a></li>
					<li><a href="<?php home_url() ?>/atrios/contato/">CORPO CLÍNICO</a></li>
					<li><a href="<?php home_url() ?>/atrios/contato/">RESULTADOS</a></li>
					<li class="especialidades"><a href="<?php home_url() ?>/atrios/contato/">ESPECIALIDADES</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>
		<div class="main">