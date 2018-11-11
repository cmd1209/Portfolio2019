<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		
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
	<header class="startheader hidden flex flexrow clear" role="banner">

						<a href="<?php echo home_url(); ?>">
						<svg class="startheader-logo" width="303px" height="99px" viewBox="0 0 303 99" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    							<title>CMd</title>
   								<defs></defs>
    							<g id="Page-1" stroke="none" stroke-width="0" fill="rgb(200,202,204)" fill-rule="evenodd">
        						<g id="Screen" transform="translate(-361.000000, -150.000000)" stroke="rgb(245,247,249)" stroke-width="0">
            					<path d="M442.709499,230.240237 L442.709499,246.360227 L384.609228,246.360227 C383.123856,246.360227 381.52249,246.186235 379.808352,245.83503 C378.094213,245.483825 376.402629,244.936074 374.730378,244.191777 C373.058126,243.44748 371.45676,242.484083 369.929501,241.308029 C368.402243,240.128754 367.048975,238.704601 365.872922,237.029127 C364.696868,235.356876 363.756025,233.413971 363.053615,231.200412 C362.351205,228.990076 362,226.49942 362,223.728444 L362,180.079134 C362,178.593762 362.177214,176.992396 362.528419,175.275035 C362.879624,173.560897 363.427375,171.866091 364.16845,170.190617 C364.912746,168.518366 365.882588,166.917 367.081196,165.386519 C368.276582,163.856038 369.713623,162.502771 371.385874,161.323495 C373.058126,160.147442 374.988143,159.206599 377.175925,158.504189 C379.363707,157.801779 381.841474,157.450574 384.609228,157.450574 L442.709499,157.450574 L442.709499,173.570563 L384.609228,173.570563 C382.501998,173.570563 380.894187,174.12798 379.779353,175.242815 C378.664519,176.360871 378.107101,178.01379 378.107101,180.204794 L378.107101,223.728444 C378.107101,225.79701 378.674185,227.398376 379.808352,228.535765 C380.94574,229.673154 382.543885,230.240237 384.609228,230.240237 L442.709499,230.240237 Z M556.251837,164.332904 L556.251837,246.360227 L540.022297,246.360227 L540.022297,193.412038 L511.468359,243.695579 C510.765949,244.974739 509.786442,245.947803 508.526614,246.608326 C507.266787,247.268849 505.91352,247.600722 504.470035,247.600722 C503.065215,247.600722 501.753834,247.268849 500.535894,246.608326 C499.317953,245.947803 498.357778,244.974739 497.655368,243.695579 L468.97577,193.412038 L468.97577,246.360227 L452.871891,246.360227 L452.871891,164.332904 C452.871891,162.47055 453.419642,160.817631 454.515144,159.370924 C455.607424,157.924217 457.044464,156.954376 458.819822,156.458178 C459.686558,156.251965 460.553293,156.177858 461.420028,156.239077 C462.286764,156.303518 463.124501,156.487176 463.930017,156.799716 C464.735533,157.109035 465.466942,157.544013 466.127465,158.101431 C466.787988,158.658848 467.345405,159.332259 467.799716,160.115221 L504.470035,223.915324 L541.137131,160.115221 C542.08764,158.546076 543.39902,157.428019 545.071272,156.767496 C546.743524,156.106973 548.486661,156.003866 550.303905,156.458178 C552.040598,156.954376 553.464751,157.924217 554.579585,159.370924 C555.694419,160.817631 556.251837,162.47055 556.251837,164.332904 Z M662,151 L642.532285,223.728444 C641.79121,226.49942 640.773038,228.990076 639.477768,231.200412 C638.182498,233.413971 636.735791,235.356876 635.131202,237.029127 C633.526614,238.704601 631.80281,240.128754 629.959789,241.308029 C628.116768,242.484083 626.257636,243.44748 624.388839,244.191777 C622.516819,244.936074 620.67702,245.483825 618.869442,245.83503 C617.061864,246.186235 615.392834,246.360227 613.865575,246.360227 L584.81544,246.360227 C582.047687,246.360227 579.663359,246.009022 577.665679,245.306612 C575.664776,244.604202 573.986081,243.663359 572.629591,242.484083 C571.26988,241.308029 570.209821,239.954762 569.442969,238.424281 C568.672896,236.897023 568.141255,235.292435 567.848047,233.620183 C567.551617,231.944709 567.458178,230.249903 567.567728,228.535765 C567.674056,226.821626 567.928599,225.217038 568.328135,223.728444 L574.169738,201.9054 C575.274907,197.771491 576.966491,194.269107 579.24449,191.395025 C581.519268,188.524165 584.022812,186.188169 586.755123,184.390256 C589.487434,182.592344 592.277742,181.300296 595.132491,180.514113 C597.984019,179.727929 600.526228,179.334837 602.755896,179.334837 L631.806032,179.334837 L627.491687,195.458049 L598.56399,195.458049 C596.418095,195.458049 594.639515,196.0058 593.231473,197.101302 C591.823431,198.196804 590.837479,199.79817 590.273618,201.9054 L584.464235,223.606006 C583.877819,225.79701 583.980925,227.449929 584.776775,228.564764 C585.572625,229.68282 587.025777,230.240237 589.129785,230.240237 L618.17992,230.240237 C620.367702,230.240237 622.149504,229.68282 623.522103,228.564764 C624.894703,227.449929 625.861322,225.838897 626.428406,223.728444 L645.896121,151 L662,151 Z" id="CMd"></path>
        						</g>
    							</g>
						</svg>
						</a>

	
      <div class="activator">
        <div class="circle">
          <div class="toggle-btn hamburger"></div>
        </div>
      </div>
      <nav class="nav offleft" role="navigation">
		<?php html5blank_nav(); ?>
	</nav>

	</header>


