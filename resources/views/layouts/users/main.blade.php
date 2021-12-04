<!doctype html>
<html class="fixed header-dark">

<head>

	<!-- Basic -->
	<meta charset="UTF-8">

	<title>Dark Header Layout | Porto Admin - Responsive HTML5 Template</title>
	<meta name="keywords" content="HTML5 Admin Template" />
	<meta name="description" content="Porto Admin - Responsive HTML5 Template">
	<meta name="author" content="okler.net">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light"
		rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{ url('user/vendor/bootstrap/css/bootstrap.css') }}" />
	<link rel="stylesheet" href="{{ url('user/vendor/animate/animate.compat.css') }}" />
	<link rel="stylesheet" href="{{ url('user/vendor/font-awesome/css/all.min.css') }}" />
	<link rel="stylesheet" href="{{ url('user/vendor/boxicons/css/boxicons.min.css') }}" />
	<link rel="stylesheet" href="{{ url('user/vendor/magnific-popup/magnific-popup.css') }}" />
	<link rel="stylesheet" href="{{ url('user/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />
	<link rel="stylesheet" href="{{ url('user/vendor/jquery-ui/jquery-ui.css') }}" />
	<link rel="stylesheet" href="{{ url('user/vendor/jquery-ui/jquery-ui.theme.css') }}" />
	<link rel="stylesheet" href="{{ url('user/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css') }}" />
	<link rel="stylesheet" href="{{ url('user/vendor/morris/morris.css') }}" />
	<link rel="stylesheet" href="{{ url('user/vendor/datatables/media/css/dataTables.bootstrap5.css') }}" />
	<link rel="stylesheet" href="{{ url('user/vendor/select2/css/select2.css') }}" />
	<link rel="stylesheet" href="{{ url('user/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ url('user/vendor/pnotify/pnotify.custom.css') }}" />

	{{-- Jika ke halaman ProdukPaket --}}
	@if (Request::is('customer/paket-produk') || Request::is('customer/single-produk') || Request::is('formTemplate') || Request::is('orderPaket/premium'))
	<link rel="stylesheet" href="{{ asset('user/vendor/owl.carousel/assets/owl.carousel.css') }}" />
	<link rel="stylesheet" href="{{ asset('user/vendor/owl.carousel/assets/owl.theme.default.css') }}" />
	@endif


	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{ url('user/css/theme.css') }}" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="{{ url('user/css/skins/default.css') }}" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="{{ url('user/css/custom.css') }}">

	<!-- Head Libs -->
	<script src="{{ url('user/vendor/modernizr/modernizr.js') }}"></script>

	<style>
			@media only screen and (min-width: 768px){
		html.fixed .inner-wrapper {
			padding-top: 40px;
		}
	}
	</style>

</head>

<body class="loading-overlay-showing" data-loading-overlay>
	<div class="loading-overlay">
		<div class="bounce-loader">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
	<section class="body">

		<!-- start: header -->
		@include('layouts.users.header')
		<!-- end: header -->
	
		<div class="inner-wrapper">
			<!-- start: sidebar -->
			@include('layouts.users.sidebar')
			<!-- end: sidebar -->

			<section role="main" class="content-body">
				<!-- start: page -->
				@yield('container')
				<!-- end: page -->
			</section>
		</div>
	</section>

	<!-- Vendor -->
	<script src="{{ url('user/vendor/jquery/jquery.js') }}"></script>
	<script src="{{ url('user/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
	<script src="{{ url('user/vendor/popper/umd/popper.min.js') }}"></script>
	<script src="{{ url('user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ url('user/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ url('user/vendor/common/common.js') }}"></script>
	<script src="{{ url('user/vendor/nanoscroller/nanoscroller.js') }}"></script>
	<script src="{{ url('user/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
	<script src="{{ url('user/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

	<!-- Specific Page Vendor -->
	<script src="{{ url('user/vendor/jquery-ui/jquery-ui.js') }}"></script>
	<script src="{{ url('user/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js') }}"></script>
	<script src="{{ url('user/vendor/jquery-appear/jquery.appear.js') }}"></script>
	<script src="{{ url('user/vendor/bootstrapv5-multiselect/js/bootstrap-multiselect.js') }}"></script>
	<script src="{{ url('user/vendor/jquery.easy-pie-chart/jquery.easypiechart.js') }}"></script>
	<script src="{{ url('user/vendor/flot/jquery.flot.js') }}"></script>
	<script src="{{ url('user/vendor/flot.tooltip/jquery.flot.tooltip.js') }}"></script>
	<script src="{{ url('user/vendor/flot/jquery.flot.pie.js') }}"></script>
	<script src="{{ url('user/vendor/flot/jquery.flot.categories.js') }}"></script>
	<script src="{{ url('user/vendor/flot/jquery.flot.resize.js') }}"></script>
	<script src="{{ url('user/vendor/jquery-sparkline/jquery.sparkline.js') }}"></script>
	<script src="{{ url('user/vendor/raphael/raphael.js') }}"></script>
	<script src="{{ url('user/vendor/morris/morris.js') }}"></script>
	<script src="{{ url('user/vendor/gauge/gauge.js') }}"></script>
	<script src="{{ url('user/vendor/snap.svg/snap.svg.js') }}"></script>
	<script src="{{ url('user/vendor/liquid-meter/liquid.meter.js') }}"></script>
	<script src="{{ url('user/vendor/pnotify/pnotify.custom.js') }}"></script>
	
	
	<!-- Specific Page Vendor -->
	<script src="{{ url('user/vendor/select2/js/select2.js') }}"></script>
	<script src="{{ url('user/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ url('user/vendor/datatables/media/js/dataTables.bootstrap5.min.js') }}"></script>
	<script src="{{ url('user/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ url('user/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js') }}"></script>
	<script src="{{ url('user/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js') }}"></script>
	<script src="{{ url('user/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js') }}"></script>
	<script src="{{ url('user/vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js') }}"></script>
	<script src="{{ url('user/vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js') }}"></script>
	<script src="{{ url('user/vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js') }}"></script>
	<script src="{{ asset('user/vendor/isotope/isotope.js') }}"></script>

	{{-- Jika halaman FOrm pilih Template --}}
	@if (Request::is('formTemplate') || Request::is('orderPaket/premium'))
	<script src="{{ asset('user/vendor/jquery-validation/jquery.validate.js') }}"></script>
	<script src="{{ asset('user/vendor/bootstrapv5-wizard/jquery.bootstrap.wizard.js') }}"></script>

	<script src="{{ asset('user/js/examples/examples.wizard.js') }}"></script>
	@endif

	{{-- Jika halaman Dashboard --}}
	@if (Request::is('Dashboard') || Request::is('Dashboard'))
	<!-- Theme Base, Components and Settings -->
	<script src="{{ asset('user/vendor/raphael/raphael.js') }}"></script>
	<script src="{{ asset('user/vendor/morris/morris.js') }}"></script>
	<script src="{{ asset('user/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('user/vendor/datatables/media/js/dataTables.bootstrap5.min.js') }}"></script>

	<!-- Examples -->
	<script src="{{ asset('user/js/examples/examples.header.menu.js') }}"></script>
	<script src="{{ asset('user/js/examples/examples.ecommerce.dashboard.js') }}"></script>
	<script src="{{ asset('user/js/examples/examples.ecommerce.datatables.list.js') }}"></script>
	<script src="{{ asset('user/js/examples/examples.datatables.editable.js') }}"></script>
	@endif

	{{-- Jika Halaman Pesanan User --}}
	@if (Request::is('PesananUser'))
	<script src="{{ asset('user/vendor/select2/js/select2.js') }}"></script>
	
	<script src="{{ asset('user/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('user/vendor/datatables/media/js/dataTables.bootstrap5.min.js') }}"></script>
	
	<script src="{{ asset('user/js/examples/examples.datatables.editable.js') }}"></script>
	<script src="{{ asset('user/js/examples/examples.modals.js') }}"></script>
	@endif

	@if (Request::is('customer/paket-produk') || Request::is('customer/single-produk') || Request::is('formTemplate') || Request::is('orderPaket/premium'))
	<script src="{{ asset('user/vendor/owl.carousel/owl.carousel.js') }}"></script>
	<script src="{{ asset('user/js/examples/examples.mediagallery.js') }}"></script>
	<script src="{{ asset('user/js/examples/examples.lightbox.js') }}"></script>
	@endif

	<!-- Examples -->
	<script src="{{ url('user/js/examples/examples.datatables.default.js') }}"></script>
	<script src="{{ url('user/js/examples/examples.datatables.row.with.details.js') }}"></script>
	<script src="{{ url('user/js/examples/examples.datatables.tabletools.js') }}"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="{{ url('user/js/theme.js') }}"></script>

	<!-- Theme Custom -->
	<script src="{{ url('user/js/custom.js') }}"></script>

	<!-- Theme Initialization Files -->
	<script src="{{ url('user/js/theme.init.js') }}"></script>

	<!-- Examples -->
	<script src="{{ url('user/js/examples/examples.dashboard.js') }}"></script>
	<script src="{{ url('user/js/examples/examples.notifications.js') }}"></script>
	<script src="{{ asset('user/js/examples/examples.loading.overlay.js') }}"></script>
	@if (Request::is('customer/single-produk') || Request::is('orderPaket/premium'))
	<script>
		$(document).ready(function () {

			$('.test-popup-link').magnificPopup({
				type: 'image',
				// other options
				gallery: {
					enabled: true
				},
			});
		});
	</script>
	@endif
</body>

</html>