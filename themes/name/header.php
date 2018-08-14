
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<?php wp_head(); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/template/scripts/libs.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/template/scripts/common.js"></script>
</head>

<body <?php body_class(); ?>>
<div>
	<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'container' => ''
		));
	?>