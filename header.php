<!DOCTYPE html>
<html>
<head>
	<script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" >
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	<?php wp_head(); ?>
	<title><?php bloginfo('name'); ?></title>
</head>

<body <?php body_class( $class ); ?> >
	<header>
		<h1> <?php bloginfo('name');?> </h1>
		<nav>
			<ul>
				<li>Home</li>
				<li>WordPress</li>
			</ul>
		</nav>
	</header>
