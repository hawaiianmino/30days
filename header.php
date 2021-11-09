<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,600,700|Open+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri( ); ?>/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri( ); ?>/css/styles.min.css" type="text/css">
	
	<!-- Theme Color
	============================================= -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri( ); ?>/css/colors.php?color=00BED7" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title><?php bloginfo( 'name' ); ?></title>
<?php wp_head(  ); ?>
</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header transparent-header dark header-size-md" data-sticky-class="not-dark" data-responsive-class="not-dark" data-sticky-offset="full" data-sticky-offset-negative="80">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="index.html" class="standard-logo" data-dark-logo="<?php echo get_template_directory_uri( ); ?>/business/images/logo-dark.png"><img src="<?php echo get_template_directory_uri( ); ?>/business/images/logo.png" alt="Canvas Logo"></a>
							<a href="index.html" class="retina-logo" data-dark-logo="<?php echo get_template_directory_uri( ); ?>/business/images/logo-dark@2x.png"><img src="<?php echo get_template_directory_uri( ); ?>/business/images/logo@2x.png" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div class="header-misc">

							<!-- Top Search
							============================================= -->
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
							</div><!-- #top-search end -->

						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu not-dark">
						<?php
							$args = array(
								'theme_location' => 'global',
								'container' => false,
								'items_wrap' => '<ul class="menu-container">%3$s</ul>',
							);
							wp_nav_menu($args);
						?>
						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->