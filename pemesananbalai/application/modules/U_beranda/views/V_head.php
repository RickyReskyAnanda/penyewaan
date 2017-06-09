<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Pemesanan Gedung</title>	

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

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/skins/skin-corporate-6.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/custom.css">

		<link rel="stylesheet" href="<?=base_url()?>assets/admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
		<link rel="stylesheet" href="<?=base_url()?>assets/admin/assets/vendor/jquery-ui/jquery-ui.css" />
		<link rel="stylesheet" href="<?=base_url()?>assets/admin/assets/vendor/jquery-ui/jquery-ui.theme.css" />
		<link rel="stylesheet" href="<?=base_url()?>assets/admin/assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="<?=base_url()?>assets/admin/assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />

		<!-- Admin Extension CSS -->

		<!-- Admin Extension Skin CSS -->

		<!-- Head Libs -->
		<script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
		<script src="<?=base_url()?>assets/vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body class="main shop">
		<div class="body">
			<header id="header" class="header-narrow" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-15px", "stickyChangeLogo": false}'>
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="index.html">
										<img alt="Porto" width="100" height="48" src="<?=base_url()?>assets/img/logo.png">
									</a>
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
														<a class="dropdown-toggle" href="<?=base_url()?>">
															Beranda
														</a>
														
													</li>
													<li class="">
														<a href="<?=base_url('balai-diklat')?>">
															Balai Diklat
														</a>
													</li>
													<li class="">
														<a href="<?=base_url('gedung-serbaguna')?>">
															Gedung Serbaguna
														</a>
													</li>
													<li class="">
														<a href="<?=base_url('login')?>">
															Login
														</a>
													</li>
													<li class="dropdown dropdown-mega dropdown-mega-signin signin logged" id="headerAccount">
														<a class="dropdown-toggle" href="page-login.html">
															<i class="fa fa-user"></i> John Smith
														<i class="fa fa-caret-down"></i></a>
														<ul class="dropdown-menu">
															<li>
																<div class="dropdown-mega-content">

																	<div class="row">
																		<div class="col-md-8">
																			<div class="user-avatar">
																				<div class="img-thumbnail">
																					<img src="img/clients/client-1.jpg" alt="">
																				</div>
																				<p><strong>John Smith</strong><span>CEO &amp; Founder - Okler</span></p>
																			</div>
																		</div>
																		<div class="col-md-4">
																			<ul class="list-account-options">
																				<li>
																					<a href="#">My Account</a>
																				</li>
																				<li>
																					<a href="#">Penyedia</a>
																				</li>
																				<li>
																					<a href="#">Log Out</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
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
			<section class="page-header page-header-color page-header-quaternary page-header-more-padding">
			    <div class="container">
			        <div class="row">
			            <div class="col-md-6">
			                <h1>Header Color</h1>
			                
			            </div>
			            <div class="col-md-6 ">
			                <span class="pull-right">
			                    <a href="<?=base_url('user')?>">
			                        <button class="btn btn-primary"><i class="fa fa-home"></i></button>
			                    </a>
			                    <a href="<?=base_url('user/daftar-tempat')?>">
			                        <button class="btn btn-primary"><i class="fa fa-list"></i> Pemesanan</button>
			                    </a>
			                        <div class="btn-group">
			                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			                            Penyedia <span class="caret"></span>
			                          </button>
			                          <ul class="dropdown-menu">
			                            <li><a href="<?=base_url('user/penyedia')?>">Daftar Tempat <span class="badge">42</span></a></li>
			                            <li><a href="<?=base_url('user/penyedia/pemesanan')?>">Pemesanan <span class="badge">42</span></a></li>
			                            <li><a href="<?=base_url('user/penyedia/pembayaran')?>">Pembayaran <span class="badge">42</span></a></li>
			                          </ul>
			                        </div>
			                    <a href="<?=base_url('user/daftar-tempat')?>">
			                        <button class="btn btn-primary"><i class="fa fa-list"></i> Profil</button>
			                    </a>
			                    <a href="<?=base_url('user/daftar-tempat')?>">
			                        <button class="btn btn-primary"><i class="fa fa-list"></i> Log Out</button>
			                    </a>
			                </span>
			            </div>
			        </div>
			    </div>
			</section>