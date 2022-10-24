<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <title><?php bloginfo( 'name' ); ?></title>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    
    <!-- Header menu -->
    <?php do_shortcode('oxygen-responsive-menu')?>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    
    <!-- page title -->
    <br class="clearall">
    <h1 class="site-title"><a href="/"><?php bloginfo( 'name' ); ?></a></h1>
    <?php
    $description = get_bloginfo( 'description', 'display' );
    if ( $description || is_customize_preview() ) : ?>
        <h2 class="site-description"><?php echo $description; ?></h2>
    <?php endif; ?>
    <div id="content" class="site-content">
    
    