<!DOCTYPE html>
<html>

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?= $title ?></title>

	<meta name="keywords" content="PT. INDONESIA OCEAN TRUCK" />
	<meta name="description" content="PT. INDONESIA OCEAN TRUCK">
	<meta name="author" content="PT. INDONESIA OCEAN TRUCK">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= base_url() ?>assets/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?= base_url() ?>assets/porto/img/apple-touch-icon.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/porto/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/porto/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/porto/vendor/animate/animate.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/porto/vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/porto/vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/porto/vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/porto/vendor/magnific-popup/magnific-popup.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/porto/css/theme.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/porto/css/theme-elements.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/porto/css/theme-blog.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/porto/css/theme-shop.css">

	<!-- Current Page CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/porto/vendor/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/porto/vendor/rs-plugin/css/layers.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/porto/vendor/rs-plugin/css/navigation.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/porto/vendor/circle-flip-slideshow/css/component.css">

	<!-- Skin CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/porto/css/skins/default.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/porto/css/custom.css">

	<script src="<?= base_url() ?>assets/porto/vendor/jquery/jquery.min.js"></script>
	<!-- Head Libs -->
	<script src="<?= base_url() ?>assets/porto/vendor/modernizr/modernizr.min.js"></script>

</head>

<body>
	<div class="body">
		<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 57, 'stickySetTop': '-57px', 'stickyChangeLogo': true}">
			<div class="header-body">
				<div class="header-container container">
					<div class="header-row">
						<div class="header-column">
							<div class="header-logo">
								<a href="<?= base_url() ?>">
									<img alt="PT. INDONESIA OCEAN TRUCK" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="<?= base_url() ?>assets/porto/logo-header.png">
								</a>
							</div>
						</div>
						<div class="header-column">
							<div class="header-row">
								<div class="header-search hidden-xs">
									<form id="searchForm" action="page-search-results.html" method="get">
										<div class="input-group">
											<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
											<span class="input-group-btn">
												<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
											</span>
										</div>
									</form>
								</div>
								<nav class="header-nav-top">
									<ul class="nav nav-pills">
										<li class="hidden-xs">
											<a href="<?= base_url('about-us') ?>"><i class="fa fa-angle-right"></i> About Us</a>
										</li>
										<li class="hidden-xs">
											<a href="<?= base_url('contact-us') ?>"><i class="fa fa-angle-right"></i> Contact Us</a>
										</li>
										<li>
											<span class="ws-nowrap"><i class="fa fa-phone"></i> <?= $konfigurasi->telepon ?></span>
										</li>
									</ul>
								</nav>
							</div>
							<div class="header-row">
								<div class="header-nav">
									<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
										<i class="fa fa-bars"></i>
									</button>
									<ul class="header-social-icons social-icons hidden-xs">
										<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
										<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
										<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
									</ul>
									<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
										<nav>
											<ul class="nav nav-pills" id="mainNav">
												<li class="dropdown active">
													<a class="dropdown-toggle" href="<?= base_url() ?>">
														Homes
													</a>
												</li>
												<?php
												foreach ($parent as $key => $value) {
													$child = $this->db->get_where('front_menu', array('parent' => $value->id));
													if ($child->num_rows() > 0) {
														// tampilkan submenu
														?>
														<li class="dropdown">
															<a class="dropdown-toggle" href="#"><?= strtoupper($value->menu_title) ?></a>
															<ul class="dropdown-menu">
																<?php
																foreach ($child->result() as $res) {
																	echo "<li>" . anchor($res->link, strtoupper($res->menu_title)) . "</li>";
																}
																?>
															</ul>
														</li>
													<?php
												} else {
													echo "<li>" . anchor($value->link, strtoupper($value->menu_title)) . "</li>";
												}
											}
											?>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>