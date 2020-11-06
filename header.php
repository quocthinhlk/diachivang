<!doctype html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<title>Địa chỉ vàng</title>
	<meta name="robots" content="index, follow" />
	<?php $image = get_field('favicon', 'option');  ?>
	<link rel="icon" href="<?php echo esc_url($image['url']); ?>" type="image/x-icon"/>
	<style type="text/css">	
		@font-face {
		  font-family: 'Roboto';
		  font-style: normal;
		  font-weight: 400;
		  src: url(wp-content/themes/diachivang/views/assets/fonts/Roboto-400.woff2) format('woff2');
		}
		@font-face {
		  font-family: 'Roboto';
		  font-style: normal;
		  font-weight: 500;
		  src: url(wp-content/themes/diachivang/views/assets/fonts/Roboto-500.woff2) format('woff2');
		}
	</style>
	<link rel='stylesheet' id='elementor-frontend-css'  href='<?php echo THEME_URL ?>/views/assets/css/custom-frontend.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesome-css'  href='<?php echo THEME_URL ?>/views/assets/css/fontawesome/css/all.css' type='text/css' media='all' />
	<link rel='stylesheet' id='bootstrap-css'  href='<?php echo THEME_URL ?>/views/assets/css/bootstrap.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='barta-elementor-css'  href='<?php echo THEME_URL ?>/views/assets/css/elementor.css' type='text/css' media='all' />
	<link rel='stylesheet' id='barta-grid-css'  href='<?php echo THEME_URL ?>/views/assets/css/barta-grid.css' type='text/css' media='all' />
	<link rel='stylesheet' id='barta-box-css'  href='<?php echo THEME_URL ?>/views/assets/css/barta-box.css' type='text/css' media='all' />
	<link rel='stylesheet' id='barta-tab-css'  href='<?php echo THEME_URL ?>/views/assets/css/barta-tab.css' type='text/css' media='all' />
	<link rel='stylesheet' id='barta-style-css'  href='<?php echo THEME_URL ?>/views/assets/css/style.css' type='text/css' media='all' />
	<link rel='stylesheet' id='responsive-css' href='<?php echo THEME_URL ?>/views/assets/css/responsive.css' type='text/css' media='all' />
	<link rel='stylesheet' id='main-style' href='<?php echo THEME_URL ?>/views/assets/css/main-style.css' type='text/css' media='all' />
	</head>

	<body class="home page-template-default page page-id-1732 wp-embed-responsive theme-barta woocommerce-no-js header-style-1 has-topbar topbar-style-2 no-sidebar right-sidebar  product-grid-view header-top-banner elementor-default elementor-kit-4533 elementor-page elementor-page-1732">
		<div id="page" class="site">		
			<header id="masthead" class="site-header ">
				<div id="header-1" class="header-area header-fixed ">

					<div id="tophead" class="header-top-bar align-items-center">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<div class="tophead-contact">
										<ul>
											<li>
												<i class="fas fa-phone-alt"></i> <a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
											</li>
											<li>
												<i class="far fa-envelope"></i> <a href="<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
											</li>
										</ul>
									</div>
									<div class="tophead-right">
										<ul class="tophead-social">
											<li><a href="<?php echo get_field('facebook', 'option'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="<?php echo get_field('twitter', 'option'); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
											<li><a href="<?php echo get_field('google_plus', 'option'); ?>" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
											<li><a href="<?php echo get_field('linkedin', 'option'); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
											<li><a href="<?php echo get_field('pinterest', 'option'); ?>" target="_blank"><i class="fab fa-pinterest"></i></a></li>
											<li><a href="<?php echo get_field('instagram', 'option'); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
										</ul>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="section-menu">
						<div class="container masthead-container" id="sticker">
							<div class="row">
								<div class="col-sm-1 col-xs-12 site-brand">
									<div class="site-branding">
										<?php $image = get_field('logo', 'option'); ?>
										<a class="light-logo" href="<?php echo get_bloginfo('url') ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
									</div>
								</div>
								<div class="col-sm-10 col-xs-12">
									<div id="site-navigation" class="main-navigation">
										<nav class="menu-main-menu-container">
											<?php
											wp_nav_menu(
												array(
													'theme_location'     => "primary-bar",
													'menu_class'        => "menu",
													'container'         => "",
													'menu_id'			=> "menu-main-menu",
												)
											);
											?>

										</nav>			
									</div>
								</div>
								<div class="col-sm-1 col-xs-12 icon-search">
									<div class="header-icon-area">
										<div class="search-box-area">
											<div class="search-box">
												<form action="<?php bloginfo('url'); ?>/" method="GET" role="form" class="search-form">
													<a href="#" class="search-close">x</a>
													<input type="hidden" name="post_type" value="post">
													<input type="text" name="s" class="search-text" placeholder="Tìm kiếm" required>
													<a href="#" class="search-button"><i class="fa fa-search" aria-hidden="true"></i></a>
												</form>
											</div>
										</div>	
										<div class="clear"></div>								
									</div>					
								</div>
							</div>
						</div>
					</div>
					<div class="section-menu-hide nav">
						<div class="container masthead-container" id="sticker">
							<div class="row">
								<div class="col-sm-1 col-xs-12 site-brand">
									<div class="site-branding">
										<?php $image = get_field('logo', 'option'); ?>
										<a class="light-logo" href="<?php echo get_bloginfo('url') ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
									</div>
								</div>
								<div class="col-sm-10 col-xs-12">
									<div id="site-navigation" class="main-navigation">
										<nav class="menu-main-menu-container">
											<?php
											wp_nav_menu(
												array(
													'theme_location'     => "primary-bar",
													'menu_class'        => "menu",
													'container'         => "",
													'menu_id'			=> "menu-main-menu",
												)
											);
											?>

										</nav>			
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="nav-head-menu-mobile">
						<div class="container header">
							<?php $image = get_field('logo', 'option'); ?>
							<a href="<?php echo get_bloginfo('url') ?>" class="logo"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
							<input class="menu-btn" type="checkbox" id="menu-btn" />
							<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
							<?php
							wp_nav_menu(
								array(
									'theme_location'     => "primary-bar",
									'menu_class'        => "menu",
									'container'         => "",
									'menu_id'			=> "menu-main-menu",
								)
							);
							?>
						</div>
					</div>
					<div class="mobile-header-search">
						<div class="container">
							<form action="<?php bloginfo('url'); ?>/" method="GET" role="form" class="search-form">
								<div class="row custom-search-input">
									<div class="input-group col-md-12">
										<input type="hidden" name="post_type" value="post">
										<input type="text" name="s" class="search-text" placeholder="Tìm kiếm" required>
										<span class="input-group-btn">
											<button class="btn" type="submit">
												<i class="fa fa-search" aria-hidden="true"></i>
											</button>
										</span>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</header>

