
<!DOCTYPE html>
<html class="side-header">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Porto - Responsive HTML5 Template 4.8.0</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?=base_url()?>assets/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?=base_url()?>assets/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/theme.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/css/theme-elements.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/css/theme-blog.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/css/theme-shop.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/css/theme-animate.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/vendor/rs-plugin/css/navigation.css">

		<link rel="stylesheet" href="<?=base_url()?>assets/admin/assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />

		<!-- Admin Extension CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/admin/assets/stylesheets/theme-admin-extension.css">
		<!-- Admin Extension Skin CSS -->
		<link rel="stylesheet" href="admin/assets/stylesheets/skins/extension.css">


		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/custom.css">

		<!-- Head Libs -->
		<script src="<?=base_url()?>assets/vendor/modernizr/modernizr.min.js"></script>

	</head> 
	<body style="background-color: rgba(35, 137, 187, 0.34);">
		<div class="body">
			<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": false, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="index.html">
										<img alt="Porto" class="img-circle" width="75" height="75" data-sticky-width="40" data-sticky-height="40" data-sticky-top="33" src="<?=base_url()?>assets/images/user/<?= $this->session->userdata('foto_profil'); ?>">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="header-logo">
									<h4>Ricky Resky Ananda</h4>
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									<div class="header-nav">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
											<nav>
												<ul class="nav nav-pills" id="mainNav">
													<li class="active">
														<a href="<?=base_url('user')?>">
															Beranda
														</a>
														
													</li>
													<li class="">
														<a href="<?=base_url('user/pemesanan')?>">
															Pemesanan
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-toggle">
															Penyedia 
															<span class="label label-danger label-lg pull-right">12</span>
														</a>
														<ul class="dropdown-menu">
															<li class="">
																<a href="<?=base_url('user/penyedia')?>">
																	Permintaan 
																	<span class="label label-danger label-lg pull-right">12</span>
																</a>
															</li>
															<li class="">
																<a href="<?=base_url('user/penyedia/pembayaran')?>">
																	Pembayaran 
																	<span class="label label-danger label-lg pull-right">12</span>
																</a>
															</li>
															<li class="">
																<a href="<?=base_url('user/penyedia/tempat')?>">Daftar Tempat</a>
															</li>
														</ul>
													</li>
													<li class="">
														<a href="<?=base_url('user/profil')?>">
															Profil
														</a>
													</li>
													<li class="">
														<a href="<?=base_url('user/profil')?>">
															FAQ
														</a>
													</li>
													<li class="">
														<a href="<?=base_url('user/keluar')?>">
															Keluar
														</a>
													</li>
													<li class="active" style="padding-top: 25px;">
														<a href="<?=base_url()?>">
															<i class="fa fa-angle-double-left"></i> Ke Halaman Utama
														</a>
													</li>
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
			<div role="main" class="main shop" >
					<div class="container">
						<div class="row" style="margin-top: 30px;">
							<div class="col-md-12">
								<ul class="breadcrumb breadcrumb-valign-mid" style="margin-bottom: 0;">
									<li><a href="<?=base_url('user')?>">Beranda</a></li>
									<li class="active">Header Color</li>
								</ul>
							</div>
						</div>
					</div>
			