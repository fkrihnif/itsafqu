<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Demo Wedding | BUNTAL - Solusi Undangan Anda !</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CTangerine:400,700&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ url('frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ url('frontend/vendor/fontawesome-free/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ url('frontend/vendor/animate/animate.compat.css') }}">
		<link rel="stylesheet" href="{{ url('frontend/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
		<link rel="stylesheet" href="{{ url('frontend/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ url('frontend/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ url('frontend/vendor/magnific-popup/magnific-popup.min.css') }}">

		<!-- Theme CSS -->
        <link rel="stylesheet" href="{{ url('frontend/css/theme.css') }}">
        <link rel="stylesheet" href="{{ url('frontend/css/theme-elements.css') }}">
        <link rel="stylesheet" href="{{ url('frontend/css/theme-blog.css') }}">
        <link rel="stylesheet" href="{{ url('frontend/css/theme-shop.css') }}">

		<!-- Revolution Slider CSS -->
        <link rel="stylesheet" href="{{ url('frontend/vendor/rs-plugin/css/settings.css') }}">
        <link rel="stylesheet" href="{{ url('frontend/vendor/rs-plugin/css/layers.css') }}">
        <link rel="stylesheet" href="{{ url('frontend/vendor/rs-plugin/css/navigation.css') }}">

		<!-- Demo CSS -->
        <link rel="stylesheet" href="{{ url('frontend/css/demos/demo-wedding.css') }}">

		<!-- Skin CSS -->
        <link rel="stylesheet" href="{{ url('frontend/css/skins/skin-wedding.css') }}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ url('frontend/css/custom.css') }}">

		<!-- Head Libs -->
		<script src="{{ url('frontend/vendor/modernizr/modernizr.min.js') }}"></script>

	</head>
	<body data-plugin-scroll-spy data-plugin-options="{'target': '#header'}">

		<div class="body">
			<header id="header" class="header-narrow" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 94, 'stickySetTop': '-94px'}">
				<div class="header-body border-0">
					<div class="header-container container-fluid py-0 py-lg-4">
						<div class="header-row">
							<div class="header-column justify-content-start justify-content-lg-center">
								<div class="header-row">
									<div class="header-logo">
										<a href="demo-wedding.html" class="text-decoration-none">
											<span class="custom-logo text-color-primary ps-2 ps-sm-0">Fulanah &amp; Egy</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-nav-bar header-nav-bar-top-border">
						<div class="header-container container-fluid">
							<div class="header-row">
								<div class="header-column">
									<div class="header-row justify-content-end">
										<div class="header-nav p-0">
											<div class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-effect-1 justify-content-lg-center">
												<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-dropdown-arrow header-nav-main-effect-2 header-nav-main-sub-effect-1">
													<nav class="collapse">
														<ul class="nav nav-pills flex-column flex-lg-row" id="mainNav">
															<li>
																<a class="nav-link active" href="#home" data-hash data-hash-offset="0" data-hash-offset-lg="80" data-collapse-nav>
																	Home
																</a>
															</li>
															<li>
																<a class="nav-link" href="#the-wedding" data-hash data-hash-offset="0" data-hash-offset-lg="80" data-collapse-nav>
																	The Wedding
																</a>
															</li>
															<li>
																<a class="nav-link" href="#photos" data-hash data-hash-offset="0" data-hash-offset-lg="80" data-collapse-nav>
																	Photos
																</a>
															</li>
															<li>
																<a class="nav-link" href="#guestbook" data-hash data-hash-offset="0" data-hash-offset-lg="80" data-collapse-nav>
																	Guestbook
																</a>
															</li>
															<li>
																<a class="nav-link" href="#blog" data-hash data-hash-offset="0" data-hash-offset-lg="80" data-collapse-nav>
																	Blog
																</a>
															</li>
															<li>
																<a class="nav-link" href="#rsvp" data-hash data-hash-offset="0" data-hash-offset-lg="80" data-collapse-nav>
																	Rsvp
																</a>
															</li>
															<li>
																<a class="nav-link" href="#gifts" data-hash data-hash-offset="0" data-hash-offset-lg="80" data-collapse-nav>
																	Gifts
																</a>
															</li>
														</ul>
													</nav>
												</div>
												<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
													<i class="fas fa-bars"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div role="main" class="main">

				<div id="home" class="slider-container light rev_slider_wrapper" style="min-height: 773px;">
					<div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
						<ul>
							<li data-transition="fadeIn">       

								<img src="{{ asset('frontend/img/demos/wedding/slider/slide-1.jpg') }}" 
									alt=""
									data-bgposition="center center" 
									data-kenburns="on"
									data-duration="30000"
									data-ease="Linear.easeNone"
									data-scalestart="140"
									data-scaleend="100"
									data-rotatestart="0"
									data-rotateend="0"
									data-offsetstart="0 0"
									data-offsetend="0 0"
									data-bgparallax="3"
									class="rev-slidebg"
									data-no-retina>							

								<div class="tp-caption tp-caption-custom-1 tp-resizeme" 
									data-x="['left','left','left','left']"
									data-hoffset="['50','50','50','50']" 
									data-y="['bottom','bottom','bottom','bottom']"
									data-voffset="['200','200','200','200']" 
									data-fontsize="['430','430','430','430']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 1;">
										Jessica &amp; John
								</div>

								<div class="tp-caption tp-caption-custom-2 tp-resizeme" 
									data-x="['center','center','center','center']"
									data-hoffset="['0','0','0','0']" 
									data-y="['bottom','bottom','bottom','bottom']"
									data-voffset="['200','200','200','200']" 
									data-fontsize="['200','200','200','105']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 1;">
										Fulanah &amp; Lutfi
								</div>

								<div class="tp-caption text-uppercase text-color-light font-weight-bold positive-ls-3 tp-caption-custom-3 tp-resizeme" 
									data-x="['center','center','center','center']"
									data-hoffset="['0','0','0','0']" 
									data-y="['bottom','bottom','bottom','bottom']"
									data-voffset="['50','50','50','50']" 
									data-fontsize="['16','16','16','13']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 1;">
										are getting married
										<span class="tp-caption-custom-3-el-1">10-12-2021</span>
								</div>

								<div class="tp-caption tp-resizeme rs-parallaxlevel-8" 
									data-x="['left','left','left','left']" data-hoffset="['680','680','680','680']" 
									data-y="['top','top','top','top']" data-voffset="['632','632','632','632']" 
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 8;">
										<div class="rs-looped rs-pendulum" data-easing="linearEaseNone" data-startdeg="-20" data-enddeg="360" data-speed="35" data-origin="50% 50%">
											<img src="{{ asset('frontend/img/demos/wedding/elements/blurflake4.png') }}" alt="" width="240" height="240" data-ww="['240px','240px','240px','240px']" data-hh="['240px','240px','240px','240px']" data-no-retina> 
										</div>
								</div>

								<div class="tp-caption tp-resizeme rs-parallaxlevel-7" 
									data-x="['left','left','left','left']" data-hoffset="['948','948','948','948']" 
									data-y="['top','top','top','top']" data-voffset="['487','487','487','487']" 
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on"
									style="z-index: 9;">
										<div class="rs-looped rs-wave" data-speed="20" data-angle="0" data-radius="50px" data-origin="50% 50%">
											<img src="{{ asset('frontend/img/demos/wedding/elements/blurflake3.png') }}" alt="" width="170" height="170" data-ww="['170px','170px','170px','170px']" data-hh="['170px','170px','170px','170px']" data-no-retina> 
										</div>
								</div>

								<div class="tp-caption tp-resizeme rs-parallaxlevel-4" 
									data-x="['left','left','left','left']" data-hoffset="['719','719','719','719']" 
									data-y="['top','top','top','top']" data-voffset="['200','200','200','200']" 
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 10;">
										<div class="rs-looped rs-rotate" data-easing="Power2.easeInOut" data-startdeg="-20" data-enddeg="360" data-speed="20" data-origin="50% 50%">
											<img src="{{ asset('frontend/img/demos/wedding/elements/blurflake2.png') }}" alt="" width="50" height="51" data-ww="['50px','50px','50px','50px']" data-hh="['51px','51px','51px','51px']" data-no-retina> 
										</div>
								</div>

								<div class="tp-caption tp-resizeme rs-parallaxlevel-6" 
									data-x="['left','left','left','left']" data-hoffset="['187','187','187','187']" 
									data-y="['top','top','top','top']" data-voffset="['216','216','216','216']" 
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 11;">
										<div class="rs-looped rs-wave" data-speed="4" data-angle="0" data-radius="10" data-origin="50% 50%">
											<img src="{{ asset('frontend/img/demos/wedding/elements/blurflake1.png') }}" alt="" width="120" height="120" data-ww="['120px','120px','120px','120px']" data-hh="['120px','120px','120px','120px']" data-no-retina> 
										</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="content bg-light overflow-hidden p-relative">
					<div class="custom-concept">
						<img src="{{ asset('frontend/img/demos/wedding/backgrounds/bg-1.svg') }}" alt="" data-icon data-plugin-options="{'forceInit': true, 'onlySVG': true, 'extraClass': 'svg-fill-color-secondary custom-bg-1'}" />
					</div>

					<div class="container position-relative z-index-1 py-5 mb-3">

						<div class="row justify-content-center justify-content-lg-around">
							<div class="col-sm-8 col-md-9 col-lg-4 text-center mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200"data-plugin-options="{'accY': -150}">
								<div class="custom-bg-2">
									<img src="{{ asset('frontend/img/demos/wedding/photos/photo-1.jpg') }}" class="img-fluid p-5" alt="" />
								</div>
								<strong class="custom-font-1 custom-font-size-1 text-color-primary d-block">Jessica</strong>
								<span class="d-block positive-ls-3 text-uppercase text-2 pt-3">The Bride</span>

								<p class="d-block text-3 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae ligula tempor, consectetur erat eget, auctor mi.</p>

								<ul class="social-icons social-icons-clean social-icons-icon-dark">
									<li class="social-icons-instagram">
										<a href="http://www.instagram.com/" target="_blank" class="text-3" title="Instagram" data-cursor-effect-hover="fit"><i class="fab fa-instagram"></i></a>
									</li>
									<li class="social-icons-twitter">
										<a href="http://www.twitter.com/" target="_blank" class="text-3" title="Twitter" data-cursor-effect-hover="fit"><i class="fab fa-twitter"></i></a>
									</li>
									<li class="social-icons-facebook">
										<a href="http://www.facebook.com/" target="_blank" class="text-3" title="Facebook" data-cursor-effect-hover="fit"><i class="fab fa-facebook-f"></i></a>
									</li>
								</ul>
							</div>
							<div class="col-sm-8 col-md-9 col-lg-4 text-center appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400" data-plugin-options="{'accY': -150}">
								<div class="custom-bg-2">
									<img src="{{ asset('frontend/img/demos/wedding/photos/photo-2.jpg') }}" class="img-fluid p-5" alt="" />
								</div>
								<strong class="custom-font-1 custom-font-size-1 text-color-primary d-block">John</strong>
								<span class="d-block positive-ls-3 text-uppercase text-2 pt-3">The Bride</span>

								<p class="d-block text-3 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae ligula tempor, consectetur erat eget, auctor mi.</p>

								<ul class="social-icons social-icons-clean social-icons-icon-dark">
									<li class="social-icons-instagram">
										<a href="http://www.instagram.com/" target="_blank" class="text-3" title="Instagram" data-cursor-effect-hover="fit"><i class="fab fa-instagram"></i></a>
									</li>
									<li class="social-icons-twitter">
										<a href="http://www.twitter.com/" target="_blank" class="text-3" title="Twitter" data-cursor-effect-hover="fit"><i class="fab fa-twitter"></i></a>
									</li>
									<li class="social-icons-facebook">
										<a href="http://www.facebook.com/" target="_blank" class="text-3" title="Facebook" data-cursor-effect-hover="fit"><i class="fab fa-facebook-f"></i></a>
									</li>
								</ul>
							</div>
						</div>

					</div>

					<div class="custom-concept">
						<img src="{{ asset('frontend/img/demos/wedding/backgrounds/bg-1.svg') }}" alt="" data-icon data-plugin-options="{'forceInit': true, 'onlySVG': true, 'extraClass': 'svg-fill-color-secondary custom-bg-3'}" />
					</div>

					<section class="parallax section section-text-light section-parallax overlay overlay-color-primary overlay-show overlay-op-8 section-center m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{ asset('frontend/img/demos/wedding/backgrounds/bg-3.jpg') }}">
						<div class="container">
							<div class="row justify-content-center mt-5 mb-5 pt-1 pb-4">
								<div class="col-lg-8">
									<h2 class="custom-font-1 custom-font-size-1 line-height-1 ls-0 pt-5 pb-3 mb-0">Counting down for the Special Day</h2>
									<div class="countdown countdown-light custom-countdown-1 px-lg-5 pt-3" data-plugin-countdown data-plugin-options="{'date': '2021/12/31 12:00:00', 'textDay': 'DAY', 'textHour': 'HOURS', 'textMin': 'MINUTES', 'textSec': 'SECONDS'}"></div>
								</div>
							</div>
						</div>
					</section>

					<section class="section bg-transparent border-0 pb-0 mb-0 p-relative overflow-hidden" id="the-wedding">
						<div class="container pt-2 pb-5 mb-3">
							<div class="row justify-content-center">
								<div class="col-lg-9 text-center">
									<h2 class="custom-font-1 custom-font-size-1 text-color-primary ls-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">The Wedding</h2>
									<p class="text-3-5 font-weight-light appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel ultricies nisi, vel tincidunt mi. Donec sit amet finibus justo, finibus vestibulum ipsum. Aenean egestas tortor nec fermentum egestas. </p>
								</div>
							</div>

							<div class="custom-concept d-none d-lg-block appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">
								<img src="{{ asset('frontend/img/demos/wedding/backgrounds/bg-1.svg') }}" alt="" data-icon data-plugin-options="{'forceInit': true, 'onlySVG': true, 'extraClass': 'svg-fill-color-secondary custom-bg-4'}" />
							</div>

							<div class="row justify-content-center justify-content-lg-around p-relative z-index-1 pt-4 mt-2">
								<div class="col-sm-8 col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800">
									<img src="{{ asset('frontend/img/demos/wedding/photos/photo-3.jpg') }}" class="img-fluid" alt="" />

									<div class="text-center">
										<h2 class="custom-font-1 custom-font-size-2 text-color-primary ls-0 mt-5 mb-2">Main Ceremony</h2>
										<p class="text-uppercase font-weight-semibold text-3 positive-ls-2 mb-0">SATURDAY, 10TH JUNE 2021</p>
										<p class="text-uppercase font-weight-medium text-2 positive-ls-3 opacity-9 mb-2">8:00 PM - 9:00 PM</p>
									</div>

									<hr>

									<div class="row align-items-center">
										<div class="col-9 text-start">
											<p class="font-weight-bold text-color-primary text-4-5 mb-0">Porto Church</p>
											<p class="font-weight-regular text-3 line-height-4 pt-1 mb-0">123 Porto Street,<br>New York Ny - 12345</p>
										</div>
										<div class="col-3 text-end">
											<div class="text-center p-relative top-2">
												<a target="_blank" href="http://maps.google.com" class="btn btn-default btn-circle btn-lg">
													<img src="{{ asset('frontend/img/icons/navigation.svg') }}" width="15" height="15" alt="" data-icon data-plugin-options="{'forceInit': true, 'onlySVG': true, 'extraClass': 'svg-stroke-color-primary'}" />
												</a>
												<p class="text-1 text-uppercase m-0 p-0">Directions</p>
											</div>
										</div>
									</div>

									<hr>

									<p class="text-3 font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel ultricies nisi, vel tincidunt mi. Donec sit amet finibus justo</p>

								</div>
								<div class="col-sm-8 col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800">
									<img src="{{ asset('frontend/img/demos/wedding/photos/photo-4.jpg') }}" class="img-fluid" alt="" />

									<div class="text-center">
										<h2 class="custom-font-1 custom-font-size-2 text-color-primary ls-0 mt-5 mb-2">Wedding Party</h2>
										<p class="text-uppercase font-weight-semibold text-3 positive-ls-2 mb-0">SATURDAY, 10TH JUNE 2021</p>
										<p class="text-uppercase font-weight-medium text-2 positive-ls-3 opacity-9 mb-2">11:00 PM - 12:00 PM</p>
									</div>

									<hr>

									<div class="row align-items-center">
										<div class="col-9 text-start">
											<p class="font-weight-bold text-color-primary text-4-5 mb-0">Porto Party Place</p>
											<p class="font-weight-regular text-3 line-height-4 pt-1 mb-0">123 Porto Street,<br>New York Ny - 12345</p>
										</div>
										<div class="col-3 text-end">
											<div class="text-center p-relative top-2">
												<a target="_blank" href="http://maps.google.com" class="btn btn-default btn-circle btn-lg">
													<img src="{{ asset('frontend/img/icons/navigation.svg') }}" width="15" height="15" alt="" data-icon data-plugin-options="{'forceInit': true, 'onlySVG': true, 'extraClass': 'svg-stroke-color-primary'}" />
												</a>
												<p class="text-1 text-uppercase m-0 p-0">Directions</p>
											</div>
										</div>
									</div>

									<hr>

									<p class="text-3 font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel ultricies nisi, vel tincidunt mi. Donec sit amet finibus justo</p>

								</div>
							</div>

						</div>

						<p class="custom-text-1">Jessica &amp; John</p>
					</section>

					<section class="parallax section section-text-light section-parallax overlay overlay-color-primary overlay-show overlay-op-8 section-center m-0 p-relative z-index-1" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="frontend/img/demos/wedding/backgrounds/bg-4.jpg">
						<div class="container">
							<div class="row justify-content-center mt-5 mb-5 pt-1 pb-4">
								<div class="col-lg-8 text-color-light py-5">

									<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote testimonial-quotes-light mb-0">
										<blockquote>
											<p class="text-color-light text-4 text-center default-font font-weight-light fst-italic line-height-9 px-5 mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel.</p>
										</blockquote>
										<div class="testimonial-author">
											<strong class="text-color-light custom-font-1 custom-font-size-2 opacity-10">Jessica</strong>
											<p class="d-block positive-ls-3 text-uppercase text-2 pt-3 mb-0">The Bride</p>
										</div>
									</div>

								</div>
							</div>
						</div>
					</section>

					<div class="custom-concept p-relative">
						<img src="frontend/img/demos/wedding/backgrounds/bg-1.svg" alt="" data-icon data-plugin-options="{'forceInit': true, 'onlySVG': true, 'extraClass': 'svg-fill-color-secondary custom-bg-1'}" />
					</div>

					<div id="ourHistoryLightbox" class="mfp-hide">
						<div class="thumb-gallery">
							<div class="owl-carousel owl-theme manual thumb-gallery-detail" id="thumbGalleryDetail">
								<div>
									<span class="img-thumbnail d-block">
										<img alt="" src="frontend/img/demos/wedding/photos/photo-8.jpg" class="img-fluid">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block">
										<img alt="" src="frontend/img/demos/wedding/photos/photo-9.jpg" class="img-fluid">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block">
										<img alt="" src="frontend/img/demos/wedding/photos/photo-10.jpg" class="img-fluid">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block">
										<img alt="" src="frontend/img/demos/wedding/photos/photo-11.jpg" class="img-fluid">
									</span>
								</div>
							</div>
							<div class="owl-carousel owl-theme manual thumb-gallery-thumbs show-thumbs mt" id="thumbGalleryThumbs">
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="frontend/img/demos/wedding/photos/photo-8-thumb.jpg" class="img-fluid">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="frontend/img/demos/wedding/photos/photo-9-thumb.jpg" class="img-fluid">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="frontend/img/demos/wedding/photos/photo-10-thumb.jpg" class="img-fluid">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="frontend/img/demos/wedding/photos/photo-11-thumb.jpg" class="img-fluid">
									</span>
								</div>
							</div>
						</div>
					</div>

					<section class="section bg-transparent border-0 pb-0 mb-0 p-relative overflow-hidden" id="photos">
						<div class="container pt-2 pb-5 mb-3">
							<div class="row justify-content-center">
								<div class="col-lg-9 text-center">
									<h2 class="custom-font-1 custom-font-size-1 text-color-primary ls-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Our History in Photos</h2>
									<p class="text-3-5 font-weight-light appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel ultricies nisi, vel tincidunt mi. Donec sit amet finibus justo, finibus vestibulum ipsum. Aenean egestas tortor nec fermentum egestas. </p>
								</div>
							</div>
							<div class="row pt-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">
								<div class="col-md-6 mb-4 mb-lg-0">
									<a href="#ourHistoryLightbox">
										<span class="thumb-info custom-thumb-info-style-1 thumb-info-no-borders thumb-info-no-borders-rounded">
											<span class="thumb-info-wrapper">
												<img src="frontend/img/demos/wedding/photos/photo-5.jpg" alt="" class="img-fluid">
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon border-radius-0"><i class="fas fa-plus"></i></span>
												</span>
											</span>
										</span>
									</a>

									<p class="d-block positive-ls-3 text-uppercase text-2 pt-3 mb-0 line-height-4">Meeting Wedding Couple</p>
									<p class="d-block positive-ls-3 text-uppercase text-1 mb-0 opacity-5">12 Photos</p>
								</div>
								<div class="col-sm-6 col-md-3 mb-4 mb-md-0">
									<a href="#ourHistoryLightbox">
										<span class="thumb-info custom-thumb-info-style-1 thumb-info-no-borders thumb-info-no-borders-rounded">
											<span class="thumb-info-wrapper">
												<img src="frontend/img/demos/wedding/photos/photo-6.jpg" alt="" class="img-fluid">
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon border-radius-0"><i class="fas fa-plus"></i></span>
												</span>
											</span>
										</span>
									</a>

									<p class="d-block positive-ls-3 text-uppercase text-2 pt-3 mb-0 line-height-4">Jessica's Gallery</p>
									<p class="d-block positive-ls-3 text-uppercase text-1 mb-0 opacity-5">12 Photos</p>
								</div>
								<div class="col-sm-6 col-md-3">
									<a href="#ourHistoryLightbox">
										<span class="thumb-info custom-thumb-info-style-1 thumb-info-no-borders thumb-info-no-borders-rounded">
											<span class="thumb-info-wrapper">
												<img src="frontend/img/demos/wedding/photos/photo-7.jpg" alt="" class="img-fluid">
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon border-radius-0"><i class="fas fa-plus"></i></span>
												</span>
											</span>
										</span>
									</a>

									<p class="d-block positive-ls-3 text-uppercase text-2 pt-3 mb-0 line-height-4">John's Gallery</p>
									<p class="d-block positive-ls-3 text-uppercase text-1 mb-0 opacity-5">12 Photos</p>
								</div>
							</div>
						</div>
					</section>

					<section class="section bg-primary border-0 pb-0 mb-0 text-color-light p-relative overflow-hidden" id="guestbook">
						<div class="container py-5 mb-3">
							<div class="row justify-content-center">
								<div class="col-lg-9 text-center">
									<h2 class="custom-font-1 custom-font-size-1 text-color-light ls-0">Guestbook</h2>
									<p class="text-3-5 font-weight-light text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel ultricies nisi, vel tincidunt mi. Donec sit amet finibus justo, finibus vestibulum ipsum. Aenean egestas tortor nec fermentum egestas. </p>
								</div>
							</div>
							<div class="row justify-content-center py-3">
								<div class="col-lg-6 mb-5 mb-lg-0">

									<form class="contact-form form-style-4 form-style-4-text-light form-style-4-border-light" action="php/contact-form.php" method="POST">
										<div class="contact-form-success alert alert-success d-none mt-4">
											<strong>Success!</strong> Your message has been sent to us.
										</div>

										<div class="contact-form-error alert alert-danger d-none mt-4">
											<strong>Error!</strong> There was an error sending your message.
											<span class="mail-error-message text-1 d-block"></span>
										</div>

										<div class="row">
											<div class="form-group col-lg-6">
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" placeholder="Full Name" required>
											</div>
											<div class="form-group col-lg-6">
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" placeholder="Email Address" required>
											</div>
										</div>
										<div class="row">
											<div class="form-group col">
												<textarea maxlength="5000" data-msg-required="Please enter your message." rows="6" class="form-control text-3 h-auto py-2" name="message" placeholder="Message" required></textarea>
											</div>
										</div>
										<div class="row">
											<div class="form-group col pt-3">
												<input type="submit" value="Submit Form" class="btn btn-light text-color-primary border-0 font-weight-semibold text-uppercase px-5 py-3" data-loading-text="Loading...">
											</div>
										</div>
									</form>

								</div>
								<div class="col-lg-6">

									<div class="owl-carousel owl-theme nav-bottom" data-plugin-options="{'items': 1, 'loop': true, 'nav': true, 'dots': false}">
										<div>
											<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote testimonial-quotes-light mb-0">
												<blockquote>
													<p class="text-color-light text-4 text-center default-font font-weight-light fst-italic line-height-9 px-5 mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel.</p>
												</blockquote>
												<div class="testimonial-author pb-3">
													<strong class="text-color-light custom-font-1 custom-font-size-3 opacity-10">John & Monica</strong>
												</div>
											</div>
										</div>
										<div>
											<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote testimonial-quotes-light mb-0">
												<blockquote>
													<p class="text-color-light text-4 text-center default-font font-weight-light fst-italic line-height-9 px-5 mb-0">A elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel.</p>
												</blockquote>
												<div class="testimonial-author pb-3">
													<strong class="text-color-light custom-font-1 custom-font-size-3 opacity-10">Brad & Family</strong>
												</div>
											</div>
										</div>
										<div>
											<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote testimonial-quotes-light mb-0">
												<blockquote>
													<p class="text-color-light text-4 text-center default-font font-weight-light fst-italic line-height-9 px-5 mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel felis ultrices non cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel.</p>
												</blockquote>
												<div class="testimonial-author pb-3">
													<strong class="text-color-light custom-font-1 custom-font-size-3 opacity-10">Josh & Judie</strong>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</section>

					<section class="section bg-transparent border-0 pb-0 mb-0 p-relative overflow-hidden" id="blog">
						<div class="container pt-2 pb-5">
							<div class="row justify-content-center">
								<div class="col-lg-9 text-center">
									<h2 class="custom-font-1 custom-font-size-1 text-color-primary ls-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Blog</h2>
									<p class="text-3-5 font-weight-light appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel ultricies nisi, vel tincidunt mi. Donec sit amet finibus justo, finibus vestibulum ipsum. Aenean egestas tortor nec fermentum egestas. </p>
								</div>
							</div>
							<div class="row justify-content-center mt-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">
								<div class="col-sm-8 col-md-6 col-lg-4 mb-4 mb-lg-0">
									<a href="blog-post.html" class="text-decoration-none" data-cursor-effect-hover="plus">
										<div class="card border-0">
											<div class="card-img-top position-relative overlay overlay-color-primary">
												<div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
													<span class="text-center bg-primary text-color-light font-weight-semibold text-5-5 line-height-2 px-3 py-2">
														<span class="position-relative z-index-2">
															12
															<span class="d-block custom-font-size-4 positive-ls-2 px-1">FEB</span>
														</span>
													</span>
												</div>
												<img src="frontend/img/demos/wedding/blog/blog-thumb-1.jpg" class="img-fluid" alt="Lorem Ipsum Dolor" />
											</div>
											<div class="card-body py-4 px-0">
												<span class="d-block text-color-grey font-weight-light positive-ls-4 text-2">BY JESSICA</span>
												<h3 class="text-transform-none font-weight-bold text-5 text-color-primary mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
												<p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, quidem similique... </p>
												<span class="d-inline-flex font-weight-medium text-color-primary text-uppercase positive-ls-4 text-2">
													View More
												</span>
											</div>
										</div>
									</a>
								</div>
								<div class="col-sm-8 col-md-6 col-lg-4 mb-4 mb-lg-0">
									<a href="blog-post.html" class="text-decoration-none" data-cursor-effect-hover="plus">
										<div class="card border-0">
											<div class="card-img-top position-relative overlay overlay-color-primary">
												<div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
													<span class="text-center bg-primary text-color-light font-weight-semibold text-5-5 line-height-2 px-3 py-2">
														<span class="position-relative z-index-2">
															15
															<span class="d-block custom-font-size-4 positive-ls-2 px-1">FEB</span>
														</span>
													</span>
												</div>
												<img src="frontend/img/demos/wedding/blog/blog-thumb-2.jpg" class="img-fluid" alt="Lorem Ipsum Dolor" />
											</div>
											<div class="card-body py-4 px-0">
												<span class="d-block text-color-grey font-weight-light positive-ls-4 text-2">BY JOHN</span>
												<h3 class="text-transform-none font-weight-bold text-5 text-color-primary mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
												<p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, quidem similique... </p>
												<span class="d-inline-flex font-weight-medium text-color-primary text-uppercase positive-ls-4 text-2">
													View More
												</span>
											</div>
										</div>
									</a>
								</div>
								<div class="col-sm-8 col-md-6 col-lg-4">
									<a href="blog-post.html" class="text-decoration-none" data-cursor-effect-hover="plus">
										<div class="card border-0">
											<div class="card-img-top position-relative overlay overlay-color-primary">
												<div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
													<span class="text-center bg-primary text-color-light font-weight-semibold text-5-5 line-height-2 px-3 py-2">
														<span class="position-relative z-index-2">
															12
															<span class="d-block custom-font-size-4 positive-ls-2 px-1">FEB</span>
														</span>
													</span>
												</div>
												<img src="frontend/img/demos/wedding/blog/blog-thumb-3.jpg" class="img-fluid" alt="Lorem Ipsum Dolor" />
											</div>
											<div class="card-body py-4 px-0">
												<span class="d-block text-color-grey font-weight-light positive-ls-4 text-2">BY JESSICA</span>
												<h3 class="text-transform-none font-weight-bold text-5 text-color-primary mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
												<p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, quidem similique... </p>
												<span class="d-inline-flex font-weight-medium text-color-primary text-uppercase positive-ls-4 text-2">
													View More
												</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</section>

					<section class="section bg-color-secondary border-0 pb-0 mb-0 p-relative overflow-hidden" id="rsvp">
						<div class="container py-5 mb-3">
							<div class="row justify-content-center">
								<div class="col-lg-9 text-center">
									<h2 class="custom-font-1 custom-font-size-1 text-color-primary ls-0">RSVP</h2>
									<p class="text-3-5 font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel ultricies nisi, vel tincidunt mi. Donec sit amet finibus justo, finibus vestibulum ipsum. Aenean egestas tortor nec fermentum egestas. </p>
								</div>
							</div>
							<div class="row justify-content-center py-3">
								<div class="col">

									<form class="contact-form form-style-4 form-style-4-text-dark" action="php/contact-form.php" method="POST">
										<div class="contact-form-success alert alert-success d-none mt-4">
											<strong>Success!</strong> Your message has been sent to us.
										</div>

										<div class="contact-form-error alert alert-danger d-none mt-4">
											<strong>Error!</strong> There was an error sending your message.
											<span class="mail-error-message text-1 d-block"></span>
										</div>

										<div class="row">
											<div class="form-group col-lg-4 pt-2">
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" placeholder="Full Name" required>
											</div>
											<div class="form-group col-lg-3 pt-2">
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" placeholder="Email Address" required>
											</div>
											<div class="form-group col-lg-3 pt-2">
												<select class="form-select form-control text-3 h-auto py-2" name="attending" data-msg-required="This field is required." id="attending" required="">
													<option value="">Attending to *</option>
													<option value="Main Ceremony">Main Ceremony</option>
													<option value="Wedding Party">Wedding Party</option>
												</select>
											</div>
											<div class="form-group col-lg-2">
												<div class="d-grid gap-2">
													<input type="submit" value="Submit" class="btn btn-primary border-0 font-weight-semibold text-uppercase px-5 py-3" data-loading-text="Loading...">
												</div>
											</div>
										</div>
									</form>

								</div>
							</div>
						</div>
					</section>

					<section class="section bg-transparent border-0 pb-0 mb-0 p-relative overflow-hidden" id="gifts">
						<div class="container pt-2 pb-5 mb-3">
							<div class="row justify-content-center">
								<div class="col-lg-9 text-center">
									<h2 class="custom-font-1 custom-font-size-1 text-color-primary ls-0">Gift Registry</h2>
									<p class="text-3-5 font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel ultricies nisi, vel tincidunt mi. Donec sit amet finibus justo, finibus vestibulum ipsum. Aenean egestas tortor nec fermentum egestas. </p>
								</div>
							</div>
							<div class="row align-items-center text-center pt-5 pb-3">
								<div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
									<img src="frontend/img/logos/logo-8.png" alt class="img-fluid" style="max-width: 90px;" />
								</div>
								<div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
									<img src="frontend/img/logos/logo-9.png" alt class="img-fluid" style="max-width: 140px;" />
								</div>
								<div class="col-sm-4 col-lg-2 mb-5 mb-lg-0">
									<img src="frontend/img/logos/logo-10.png" alt class="img-fluid" style="max-width: 140px;" />
								</div>
								<div class="col-sm-4 col-lg-2 mb-5 mb-sm-0">
									<img src="frontend/img/logos/logo-11.png" alt class="img-fluid" style="max-width: 140px;" />
								</div>
								<div class="col-sm-4 col-lg-2 mb-5 mb-sm-0">
									<img src="frontend/img/logos/logo-12.png" alt class="img-fluid" style="max-width: 100px;" />
								</div>
								<div class="col-sm-4 col-lg-2">
									<img src="frontend/img/logos/logo-13.png" alt class="img-fluid" style="max-width: 100px;" />
								</div>
							</div>
						</div>
					</section>

				</div>

				<div class="slider-container light rev_slider_wrapper" style="min-height: 570px;" data-remove-min-height>
					<div id="revolutionSlider2" class="slider rev_slider manual" data-version="5.4.8">
						<ul>
							<li data-transition="fadeIn">       

								<img src="frontend/img/demos/wedding/slider/slide-2.jpg" 
									alt=""
									data-bgposition="center center" 
									data-kenburns="on"
									data-duration="30000"
									data-ease="Linear.easeNone"
									data-scalestart="140"
									data-scaleend="100"
									data-rotatestart="0"
									data-rotateend="0"
									data-offsetstart="0 0"
									data-offsetend="0 0"
									data-bgparallax="3"
									class="rev-slidebg"
									data-no-retina>							

								<div class="tp-caption tp-caption-custom-1 tp-resizeme" 
									data-x="['left','left','left','left']"
									data-hoffset="['50','50','50','50']" 
									data-y="['bottom','bottom','bottom','bottom']"
									data-voffset="['200','200','200','200']" 
									data-fontsize="['430','430','430','430']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 1;">
										Jessica &amp; John
								</div>

								<div class="tp-caption tp-caption-custom-2 tp-resizeme" 
									data-x="['center','center','center','center']"
									data-hoffset="['0','0','0','0']" 
									data-y="['bottom','bottom','bottom','bottom']"
									data-voffset="['200','200','200','200']" 
									data-fontsize="['200','200','200','105']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 1;">
										Jessica &amp; John
								</div>

								<div class="tp-caption text-uppercase text-color-light font-weight-bold positive-ls-3 tp-caption-custom-3 tp-resizeme" 
									data-x="['center','center','center','center']"
									data-hoffset="['0','0','0','0']" 
									data-y="['bottom','bottom','bottom','bottom']"
									data-voffset="['50','50','50','50']" 
									data-fontsize="['16','16','16','13']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 1;">
										are getting married
										<span class="tp-caption-custom-3-el-1">10-12-2021</span>
								</div>

								<div class="tp-caption tp-resizeme rs-parallaxlevel-8" 
									data-x="['left','left','left','left']" data-hoffset="['680','680','680','680']" 
									data-y="['top','top','top','top']" data-voffset="['332','332','332','332']" 
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 8;">
										<div class="rs-looped rs-pendulum" data-easing="linearEaseNone" data-startdeg="-20" data-enddeg="360" data-speed="35" data-origin="50% 50%">
											<img src="frontend/img/demos/wedding/elements/blurflake4.png" alt="" width="240" height="240" data-ww="['240px','240px','240px','240px']" data-hh="['240px','240px','240px','240px']" data-no-retina> 
										</div>
								</div>

								<div class="tp-caption tp-resizeme rs-parallaxlevel-7" 
									data-x="['left','left','left','left']" data-hoffset="['948','948','948','948']" 
									data-y="['top','top','top','top']" data-voffset="['187','187','187','187']" 
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on"
									style="z-index: 9;">
										<div class="rs-looped rs-wave" data-speed="20" data-angle="0" data-radius="50px" data-origin="50% 50%">
											<img src="frontend/img/demos/wedding/elements/blurflake3.png" alt="" width="170" height="170" data-ww="['170px','170px','170px','170px']" data-hh="['170px','170px','170px','170px']" data-no-retina> 
										</div>
								</div>

								<div class="tp-caption tp-resizeme rs-parallaxlevel-4" 
									data-x="['left','left','left','left']" data-hoffset="['719','719','719','719']" 
									data-y="['top','top','top','top']" data-voffset="['200','200','200','200']" 
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 10;">
										<div class="rs-looped rs-rotate" data-easing="Power2.easeInOut" data-startdeg="-20" data-enddeg="360" data-speed="20" data-origin="50% 50%">
											<img src="frontend/img/demos/wedding/elements/blurflake2.png" alt="" width="50" height="51" data-ww="['50px','50px','50px','50px']" data-hh="['51px','51px','51px','51px']" data-no-retina> 
										</div>
								</div>

								<div class="tp-caption tp-resizeme rs-parallaxlevel-6" 
									data-x="['left','left','left','left']" data-hoffset="['187','187','187','187']" 
									data-y="['top','top','top','top']" data-voffset="['216','216','216','216']" 
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:1000;s:1000;" 
									data-start="0" 
									data-responsive_offset="on" 
									style="z-index: 11;">
										<div class="rs-looped rs-wave" data-speed="4" data-angle="0" data-radius="10" data-origin="50% 50%">
											<img src="frontend/img/demos/wedding/elements/blurflake1.png" alt="" width="120" height="120" data-ww="['120px','120px','120px','120px']" data-hh="['120px','120px','120px','120px']" data-no-retina> 
										</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>

		<!-- Vendor -->
        <script src="{{ url('frontend/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ url('frontend/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
        <script src="{{ url('frontend/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
        <script src="{{ url('frontend/vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
        <script src="{{ url('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ url('frontend/vendor/jquery.validation/jquery.validate.min.js') }}"></script>
        <script src="{{ url('frontend/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ url('frontend/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
        <script src="{{ url('frontend/vendor/lazysizes/lazysizes.min.js') }}"></script>
        <script src="{{ url('frontend/vendor/isotope/jquery.isotope.min.js') }}"></script>
        <script src="{{ url('frontend/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ url('frontend/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ url('frontend/vendor/vide/jquery.vide.min.js') }}"></script>
        <script src="{{ url('frontend/vendor/vivus/vivus.min.js') }}"></script>
        <script src="{{ url('frontend/vendor/jquery.countdown/jquery.countdown.min.js') }}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{ url('frontend/js/theme.js') }}"></script>

		<!-- Revolution Slider Scripts -->
        <script src="{{ url('frontend/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ url('frontend/vendor/jquery.countdown/jquery.countdown.min.js') }}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{ url('frontend/js/views/view.contact.js') }}"></script>

		<!-- Demo -->
        <script src="{{ url('frontend/js/demos/demo-wedding.js') }}"></script>
        
        <!-- Theme Custom -->
        <script src="{{ url('frontend/js/custom.js') }}"></script>
        
        <!-- Theme Initialization Files -->
        <script src="{{ url('frontend/js/theme.init.js') }}"></script>

	</body>
</html>
