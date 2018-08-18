<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EalonWordPress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  
  <!-- js and css -->
  <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/style.css" />
  <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-3.3.1.slim.min.js"></script>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/popper.min.js"></script>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/parallax-scrolling.js"></script>
  <!-- js and css -->

  <?php wp_head(); ?>
  <!-- add other js files(cdn) here -->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ealon-word-press' ); ?></a>

	<!-- HEADER -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">
      <span>EALON</span>
      <img width="30" src="/wp-content/themes/ealon-wordpress-theme/assets/img/ealon.png" alt="ealon">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php
      wp_nav_menu(
        array(
          'theme_location'  => 'primary',
          'container'       => 'div',
          'container_id'    => 'navbarSupportedContent',
          'container_class' => 'collapse navbar-collapse',
          'menu_class'      => 'navbar-nav mr-auto'
        )
      );
    ?>
	</nav>
	<!-- HEADER -->

	<div id="content" class="site-content">
