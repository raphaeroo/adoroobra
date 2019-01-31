<!doctype html>
<html lang="pt_BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php the_title(); ?></title>
		<!-- FAVICON LINK -->
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/Icone.png" type="image/x-icon">
		<!-- STYLESHEETS -->
		<!-- BOOTSTRAP CSS -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/vendor/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/vendor/bootstrap-theme.min.css">
		<!-- FONT AWESOME -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/vendor/font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/vendor/font-awesome/dist/font-awesome-animation.min.css" />
		<!-- MAGNIFIC LIGHT BOX -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/vendor/magnific/magnific-popup.css">
		<!-- CAROUSEL STYLE LINK -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/vendor/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/vendor/owl-carousel/owl.theme.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/vendor/owl-carousel/carousel.css">
		<!-- CUSTOM CSS -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
	
	
	<?php wp_head(); ?>
	
<link rel='dns-prefetch' href='//www.youtube.com' />
	<meta name="google-site-verification" content="gSSF8_3Ve3mWBffgWNUSOXOc8VAWCqwOP7p0cu1Q_5E" />
	</head>
	<body data-spy="scroll" data-target=".navbar-fixed-top" data-offset="100" >
	
		<!--================================= NAVIGATION START ==========================================-->
		<header>
			<nav class="topbar navbar navbar-default navbar-fixed-top clearfix" id="top-nav">
				<div class="container">
					<div class="logo-image logozito">
						<a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/a-o/logo2.png" alt="Adoro Obra" style="width: 80%;" /></a>
					</div>
					<div class="navbar-right nav">
						<div class="navbar-header">
							<button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left"><span class="icon-bar gray"></span><span class="icon-bar gray"></span><span class="icon-bar"></span></button>					
						</div>
						<div class="navbar-inverse side-collapse in">
							<div class="collapse navbar-collapse" >
								<!-- <ul class="content-ul side-menu-icon">
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-pinterest-p"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>-->
								<ul class="nav navbar-nav" id="menu_1" >
									<li style="height: 0px;">
									<?php
					wp_nav_menu( array(
						'menu' => 'blog',
					   'depth' => 0,
					   'container' => '',
						'menu_id' => '',
					   'menu_class' => 'nav navbar-nav menuzito',
					   'walker' => new wp_bootstrap_navwalker()
					)
					);
				?></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /.navbar-collapse -->
				</div>
			</nav>
		</header>