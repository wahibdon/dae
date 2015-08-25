<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/typography.css">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "1f1aa703-9adf-41fb-846d-1b5e48e23294", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script>
</head>
<body <?php body_class(); ?>>
<div id="container">
	<nav>
		<logo><a href="/"> <img src="<?php echo get_template_directory_uri(); ?>/images/dae-logo.gif" alt="DAE" title="DAE" /></a></logo>
		<form class="search" method="get" action="http://dae.ott-toolbox.com" role="search">
			<label>
				<input type="search" name="s" id="nav-search" class="search-input" placeholder="Search Site" />
				<img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/nav-search.gif" alt="search" id="toggle-search" title="search" />
			</label>
		</form>
		<?php html5blank_nav(); ?>
	</nav>
