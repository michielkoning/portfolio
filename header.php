<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width; initial-scale=1.0;">
<title><?php
	if (is_home()) :
		echo 'Portfolio';
	else :
		wp_title( '', true, 'right' );
	endif; ?> | Michiel Koning</title>

<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/global.css">

<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="author" href="https://plus.google.com/105765114369677579939/posts">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
	<div class="center">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">Michiel Koning</a>
		<div class="social">
			<a href="https://twitter.com/michiel_koning" class="icon-twitter" target="_blank">&#xf099;</a>
			<a href="http://www.linkedin.com/profile/view?id=130245112" class="icon-linkedin" target="_blank">&#xf0e1;</a>
			<a href="https://github.com/michielkoning/" class="icon-github" target="_blank">&#xf09b;</a>
		</div>
	</div>
</header>