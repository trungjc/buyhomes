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
$footer_primary_menu = false;
if ( isset( $locations['footer_primary_menu'] ) ) {
	$footer_primary_menu = whispli_custom_nav_menu( 'footer_primary_menu' );
}

?>
<body <?php body_class(); ?>>
	 <header>
        <div class="header">
            <div class="container text-center">
                <div class="container-sm">
                    <!-- <div class="clearfix">
                        <ul class="action-link">
                            <li><a href="javascript:void(0)">Đăng ký</a></li>
                            <li><span> | </span></li>
                            <li><a href="javascript:void(0)">Đăng nhập</a></li>
                        </ul>
                    </div> -->
                    <div class="clearfix">
                        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.PNG" alt="logo" /></a></h1>
                    </div>
                    <div class="clearfix hidden-device hidden-sm hidden-xs">
                        <ul class="social pull-right">
                            <li><a href="<?php echo get_option('facebook_link')?>" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo get_option('twitter_link')?>" title="twiter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo get_option('google_plus')?>" title="google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo get_option('skype_link')?>" title="skype"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo get_option('instagram')?>" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--menu-->
        <div class="container">
            <div class="light-bg menul"></div>
            <div class="menu blue-shadow">
                <div class="container-sm">
                    <div class="icon-mobile clearfix">
                        <span class="pull-left"><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></span>
                        <span class="pull-left current-menu">TRANG CHỦ</span>
                        <button data-target=".bs-navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                    </div>

                    <?php
            if ( count( $main_menu[0] ) > 0 ) {
                ?>
                <nav class="navbar-collapse bs-navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <?php foreach ( $main_menu[0] as $index => $parent_item ) { ?>
                            <?php $has_sub = in_array( $parent_item->ID, array_keys( $main_menu[2] ) ); ?>
                            <li class="<?php echo implode( ' ', $parent_item->classes ); ?>">
                                <a <?php if ( $has_sub ) {
                                    echo 'href="'. apply_filters( 'the_permalink', $parent_item->url ) .'" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"';
                                } else {
                                    echo 'href=' . apply_filters( 'the_permalink', $parent_item->url ) . '';
                                } ?>>
                                    <?php echo apply_filters( 'post_title', $parent_item->title ) ?>
                                </a>
                                <?php if ( count( $main_menu[1] ) > 0 && isset( $main_menu[1][$parent_item->ID] ) ) { ?>
                                    <ul class="dropdown-menu sub-menu">
                                        <?php if ( count( $main_menu[1][$parent_item->ID] ) > 0 ) { ?>
                                            <?php foreach ( $main_menu[1][$parent_item->ID] as $item ) { ?>
                                                <li class="<?php echo implode( ' ', $item->classes ); ?>">
                                                    <a href="<?php echo apply_filters( 'the_permalink', $item->url ) ?>">
                                                        <?php echo apply_filters( 'post_title', $item->title ) ?></a>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </li>
                        <?php } ?>
                    </ul>
                    <!-- end navbar-nav-->
                </nav>
            <?php } ?>
            <!-- /end navbar-collapse -->
                </div>
            </div>
        </div>
    </header>

   