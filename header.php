<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl/owl.theme.default.min.css">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->

			<script>
			// conditionizr.com
			// configure environment tests
			conditionizr.config({
				assets: '<?php echo get_template_directory_uri(); ?>',
				tests: {}
				});
				</script>
	</head>
	<body <?php body_class(); ?>>
	<div class="overlay">
	</div>
	<div id="nav-icon">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
	<nav class="nav navhidden" role="navigation">
		<?php html5blank_nav(); ?>
	</nav>			
