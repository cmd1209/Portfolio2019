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
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-86871910-1', 'auto');
  ga('send', 'pageview');
  </script>

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
<?php if( is_front_page()) { ?>
	<div id="nav-icon" class="burger">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
	<nav class="nav navhidden" role="navigation">
			<?php wp_nav_menu( array('menu' => 'main' )); ?>
	</nav>			
<?php } else { ?>
	<div id="nav-icon" class="back">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
<?php } ?>
