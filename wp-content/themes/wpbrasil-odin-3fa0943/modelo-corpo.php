<?php
/**
 * Template Name: Modelo-Corpo
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device);

if ($device == "desktop") {
	include('custom-eixo/desktop/corpo-clinico.php');
}else{
	include('custom-eixo/mobile/corpo-clinico.php');
}

get_footer($device);
?>



