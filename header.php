<!DOCTYPE html>
<html>
	<head>
		<title><?php wp_title(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo get_template_directory_uri(); ?>/fonts/stylesheet.css" rel="stylesheet" media="screen">
		<link href="<?php echo get_template_directory_uri(); ?>/css/commentrepply.css" rel="stylesheet" media="screen">
		<!-- Nivo Slider CSS -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/themes/default/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nivo-slider.css" type="text/css" media="screen" />
        
		<!-- Main CSS -->
		<link href="<?php bloginfo("stylesheet_url")?>" rel="stylesheet" media="screen">
		
		<!-- Responsive Framework -->
		<link href="<?php echo get_template_directory_uri(); ?>/responsive.css" rel="stylesheet" media="screen">
		
<?php wp_head(); ?>	
	
		
</head>
	<body>
		
		<div class="column">
		<div class="main fix">
			<div class="header_top">
			<div class="header fix">
				<div class="header_left floatleft fix">
				<a href="<?php echo home_url('Home'); ?>"><h1>Towhed<span>Rone</span></h1></a>
				<p>A Thinker Who THink Without Thinking</p>	
				</div>
				<div class="header_right floatright fix">
					<div class="mobile fix">
						<img src="<?php echo get_template_directory_uri(); ?>/img/phone.png">
						<p>+880-1722825267</p>
					</div>
					
					<div class="search floatright">
						<form method="get" id="searchform" action="<?php echo home_url(); ?>/">
						<input type="text" value="<?php esc_attr_e( 'Search', 'brightpage' ); ?>" name="s" id="s" onfocus="if (this.value == '<?php esc_attr_e( 'Search', 'brightpage' ); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php esc_attr_e( 'Search', 'brightpage' ); ?>';}" />
						<input type="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'brightpage' ); ?>" />
						<input type="hidden" name="post_type" value="post">
						</form>
						
					</div>
					<div id="" class="social floatleft fix">
						<a href="https://www.facebook.com/towhedurr"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png"></a>
						<a href="https://plus.google.com/u/0/105377476840026238111"><img src="<?php echo get_template_directory_uri(); ?>/img/gmail.png"></a>
						<a href="skype:towhedur.rahman.rone"><img src="<?php echo get_template_directory_uri(); ?>/img/skype.png"></a>
					</div>
				</div>
				</div>
				<div class="mainmenu ">
					<?php
					if (function_exists('wp_nav_menu')) {
						wp_nav_menu(array('theme_location' => 'wpj-main-menu', 'fallback_cb' => 'wpj_default_menu'));
					} else {
						wpj_default_menu();
					}
				?>
				</div>
					</div>