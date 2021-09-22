<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Page title -->
	<!-- <title>VSVlog - Elegant Vlog / Blog Theme.</title> -->
	<!-- Page description --> 
	<meta name="description" content="A professional Vlog / Blog HTML template for your project. Designed and developed by VSArt.">
	<!-- Meta -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon  -->  
	<link rel="apple-touch-icon" sizes="57x57" href="/wp-content/themes/vsvlog/assets/img/common/favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/wp-content/themes/vsvlog/assets/img/common/favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/vsvlog/assets/img/common/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/wp-content/themes/vsvlog/assets/img/common/favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/vsvlog/assets/img/common/favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/vsvlog/assets/img/common/favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/wp-content/themes/vsvlog/assets/img/common/favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/vsvlog/assets/img/common/favicon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/vsvlog/assets/img/common/favicon/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="/wp-content/themes/vsvlog/assets/img/common/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/wp-content/themes/vsvlog/assets/img/common/favicon/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/wp-content/themes/vsvlog/assets/img/common/favicon/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/wp-content/themes/vsvlog/assets/img/common/favicon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/wp-content/themes/vsvlog/assets/img/common/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/wp-content/themes/vsvlog/assets/img/common/favicon/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!-- Include StyleSheets --> 
    <?php wp_head(); ?> 
</head>

<body class="js-preload-me">
	<!--[if lt IE 8]>
	    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!-- Preloader -->
	<!-- <div class="preloader js-preloader">
		<div class="preloader__holder">REC</div>
	</div>  -->
	<!--End of Preloader --> 
	<!-- Page -->
	<div class="page js-page ">
		<!-- Header --> 
		<div class="header__wrapper">
			<header class="header js-header ">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3 col-sm-10 col-xs-10">
							<!-- Logo -->
							<div class="logo">  
								<a href="http://swa.localhost/" class="logo__link">
									<img src="/wp-content/themes/vsvlog/assets/img/logo.png" class="logo__image" alt="Logo"> </a>
							</div> 
							<!-- End of Logo -->
						</div>
						<div class="col-md-18 hidden-sm hidden-xs"> 
							<!-- Menu --> 
						<nav class="">
							<?php
							
							wp_nav_menu(
								array(
									'menu' => 'primary',
									'theme_location' => 'primary',
									'items_wrap' => '<ul id="header-nav__list" class="menu js-menu sf-menu menu--center">%3$s</ul>'
								)
							);
							?> 
						</nav> 
						</div> 
						<div class="col-md-3 col-sm-14 col-xs-14"> 
							<ul class="list list--horizontal list--right list--header">
								<li class="list__item"> 
									<!-- Button Search --> 
									<div class="button-search js-button-search search-button--header">
									 	<i class="fa fa-search"></i> 
										<span class="button-search__icon--close"></span>
									</div> 
									<!-- End of Button Search -->
								</li>
								<li class="list__item">
									<!-- Cart Button -->
									<a class="button-cart" href="http://swa.localhost/cart/">
										<span class="button-cart__counter">1</span>
										<i class="fa fa-shopping-cart button-cart__icon"></i>
									</a>
									<!-- End of Cart Button -->
								<li class="list__item hidden-lg hidden-xlg hidden-md">
									<!-- Button Menu -->
									<div class="button-menu js-button-menu ">
										<i class="button-menu__icon fa fa-bars"></i>
									</div>
									<!-- End of Button Menu -->
								</li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<!-- Drawer -->
			<div class="drawer drawer--search js-drawer--search">
				<!-- Search -->
				<?php get_search_form(); ?> 
				<!-- End of Search -->
			</div>
			<!-- End of Drawer -->
			<!-- Drawer --> 
			<div class="drawer drawer--tablet js-drawer--tablet hidden-lg hidden-md hidden-xs">
				<!-- Menu -->
				<nav class=""> 

					<?php
						wp_nav_menu(
							array(
								'menu' => 'primary',
								'theme_location' => 'primary',
								'items_wrap' => '<ul id="header-nav__list" class="menu js-menu sf-menu">%3$s</ul>'
							)
						);
					?> 	
					<!-- <ul class="menu js-menu sf-menu ">
						<li class="menu__item menu__item--active">
							<a href="index.html" class="menu__link">Home</a>
						</li>
						<li class="menu__item ">
							<a href="about.html" class="menu__link">About</a>
						</li> 
						<li class="menu__item ">
							<a href="shop.html" class="menu__link">Shop</a>
						</li>
						<li class="menu__item ">
							<a href="blog.html" class="menu__link">Blog</a>
						</li>
						<li class="menu__item ">
							<a href="videos.html" class="menu__link">Videos</a>
						</li>
						<li class="menu__item ">
							<a href="contacts.html" class="menu__link">Contacts</a>
						</li>
					</ul> -->
				</nav>
				<!-- End of Menu -->
			</div>
			<!-- End of Drawer -->
			<!-- Drawer -->
			<div class="drawer drawer--mobile js-drawer--mobile hidden-lg hidden-md hidden-sm">
				<!-- Menu Mobile --> 
				<nav class="js-menu-mobile slinky-menu">

					<?php
						wp_nav_menu(
							array(
								'menu' => 'primary',
								'theme_location' => 'primary',
								'items_wrap' => '<ul id="" class="menu-mobile">%3$s</ul>'
							)
						);
					?> 	

					<!-- <ul class="menu-mobile"> -->
						<!-- <li class="menu-mobile__item">
							<a href="index.html" class="menu-mobile__link">Home</a>
						</li>
						<li class="menu-mobile__item ">
							<a href="about.html" class="menu-mobile__link">About</a>
						</li>
						<li class="menu-mobile__item ">
							<a href="shop.html" class="menu-mobile__link">Shop</a>
						</li>
						<li class="menu-mobile__item ">
							<a href="blog.html" class="menu-mobile__link">Blog</a>
						</li>
						<li class="menu-mobile__item ">
							<a href="videos.html" class="menu-mobile__link">Videos</a>
						</li>

						<li class="menu-mobile__item ">
							<a href="contacts.html" class="menu-mobile__link">Contacts</a>
						</li> -->
					<!-- </ul> -->
				</nav>
				<!-- End of Menu Mobile -->
			</div>
			<!-- End of Drawer -->
		</div>
		<!-- End of Header -->

		