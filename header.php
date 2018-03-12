<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_SimplyTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/resources/css/font-awesome/css/font-awesome.min.css">

 <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <!-- Google Fonts -->
 <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'simplytheme4wordpress' ); ?></a>

	<header class="site-header" role="banner">

		<div class="navbar-wrapper">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<div class="container">
				<a class="navbar-brand" href="#">Wordpress Simply</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-dark" aria-controls="navbars-dark" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				


				</div>
			</nav>
		</div>

	</header>

	<div id="content" class="site-content">
