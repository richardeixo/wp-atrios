<?php
/**
 * Template Name: Modelo-Sobre
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device);

if ($device == "desktop") {
	include('custom-eixo/desktop/sobre.php');
}else{
	include('custom-eixo/mobile/sobre.php');
}

get_footer($device);
?>



