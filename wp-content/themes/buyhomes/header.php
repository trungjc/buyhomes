<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whispli
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="X-UA-Compatiable" cotent="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="apple-touch-icon" type="image/png" href="apple-touch-icon.png">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/icon.png"/>
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png"/>
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png"/>
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/icon.png"/>
	<link rel="icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png"/>
	<link rel="icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png"/>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<?php $locations = get_nav_menu_locations(); ?>
<?php
# Get menus
$main_menu = false;
if ( isset( $locations['main_menu'] ) ) {
	$main_menu = whispli_custom_nav_menu( 'main_menu' );
}
$mobile_header_primary_menu = false;
if ( isset( $locations['mobile_header_primary_menu'] ) ) {
	$mobile_header_primary_menu = whispli_custom_nav_menu( 'mobile_header_primary_menu' );
}
$mobile_header_secondary_menu = false;
if ( isset( $locations['mobile_header_primary_menu'] ) ) {
	$mobile_header_secondary_menu = whispli_custom_nav_menu( 'mobile_header_secondary_menu' );
}
$footer_primary_menu = false;
if ( isset( $locations['footer_primary_menu'] ) ) {
	$footer_primary_menu = whispli_custom_nav_menu( 'footer_primary_menu' );
}

?>
<body <?php body_class(); ?>>
	