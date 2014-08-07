<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <meta name="robots" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,700" type="text/css" />
  <link rel="stylesheet" href="//static.wooga.com/wp-content/themes/wooga-dev/fonts/grilled-cheese.css" type="text/css" />
  <link rel="stylesheet" href="<? echo get_stylesheet_uri(); ?>" type="text/css" />
  <!-- Wordpress Header Code -->
  <?php wp_head(); ?>
  <!-- /Wordpress Header Code -->
</head>
<body <?php body_class(); ?>>