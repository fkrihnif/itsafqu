<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">
        <title>BUNTAL - Solusi Undangan Anda !</title>

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
        <!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('user/vendor/bootstrap/css/bootstrap.css') }}" />
		<link rel="stylesheet" href="{{ asset('user/vendor/animate/animate.compat.css') }}">
		<link rel="stylesheet" href="{{ asset('user/vendor/font-awesome/css/all.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('user/vendor/boxicons/css/boxicons.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('user/vendor/magnific-popup/magnific-popup.css') }}" />
		<link rel="stylesheet" href="{{ asset('user/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />
		<link rel="stylesheet" href="{{ asset('user/vendor/jquery-ui/jquery-ui.css') }}" />
		<link rel="stylesheet" href="{{ asset('user/vendor/jquery-ui/jquery-ui.theme.css') }}" />
		<link rel="stylesheet" href="{{ asset('user/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css') }}" />
		<link rel="stylesheet" href="{{ asset('user/vendor/morris/morris.css') }}" />
		<link rel="stylesheet" href="{{ asset('user/vendor/pnotify/pnotify.custom.css') }}" />

		<!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('user/css/theme.css') }}" />

		<!-- Skin CSS -->
        <link rel="stylesheet" href="{{ asset('user/css/skins/default.css') }}" />

		<!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{ asset('user/css/custom.css') }}" />
        <link rel="stylesheet" href="{{ asset('user/css/bgye.min.css') }}" />

		<!-- Head Libs -->
        <script src="{{ asset('user/vendor/modernizr/modernizr.js') }}"></script>
        <style>
            .belakang {
            background-color: rgba(255, 255, 255, 0.0);
        }
        </style>

	</head>
	<body class="belakang loading-overlay-showing" data-loading-overlay>
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>
        <div class="bg1"></div>
        <div class="bg1 bg2"></div>
        <div class="bg1 bg3"></div>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
                @yield('container')
				<p class="text-center text-dark mt-3 mb-3">&copy; ITSAFQU 2021. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
        <script src="{{ asset('user/vendor/jquery/jquery.js') }}"></script>
        <script src="{{ asset('user/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
        <script src="{{ asset('user/vendor/popper/umd/popper.min.js') }}"></script>
        <script src="{{ asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('user/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('user/vendor/common/common.js') }}"></script>
        <script src="{{ asset('user/vendor/nanoscroller/nanoscroller.js') }}"></script>
        <script src="{{ asset('user/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
        <script src="{{ asset('user/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

		<!-- Specific Page Vendor -->
		<script src="{{ asset('user/vendor/pnotify/pnotify.custom.js') }}"></script>

		<!-- Theme Base, Components and Settings -->
        <script src="{{ asset('user/js/theme.js') }}"></script>

		<!-- Theme Custom -->
        <script src="{{ asset('user/js/custom.js') }}"></script>

		<!-- Theme Initialization Files -->
        <script src="{{ asset('user/js/theme.init.js') }}"></script>
		<script src="{{ asset('user/js/examples/examples.notifications.js') }}"></script>
		<script src="{{ asset('user/js/examples/examples.loading.overlay.js') }}"></script>

	</body>
</html>