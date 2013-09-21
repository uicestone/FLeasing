<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php bloginfo('name'); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="<?bloginfo('template_url')?>/css/ie7.css" />
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?bloginfo('stylesheet_url')?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="wrapper">
			<h1>
				<img src="<?bloginfo('template_url')?>/logo.png" />
			</h1>
			<aside>
				<p>总机：021-5109 6488</p>
				<p>地址：上海市普陀区常德路1211号宝华大厦12楼</p>
				<div class="search-form"><input type="text" /></div>
			</aside>
			<nav>
				<?wp_nav_menu(array('menu'=>'主导航','container'=>false))?>
			</nav>
		</div>
	</header>
