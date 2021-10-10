<!doctype html>
<html class="modern fixed has-top-menu has-left-sidebar-half header-dark">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Default Layout | Porto Admin - Responsive HTML5 Template</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

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

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('user/css/theme.css') }}" />

		<!-- Theme Layout -->
		<link rel="stylesheet" href="{{ asset('user/css/layouts/modern.css') }}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{ asset('user/css/skins/default.css') }}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('user/css/custom.css') }}" />

		<!-- Head Libs -->
		<script src="{{ asset('user/vendor/modernizr/modernizr.js') }}"></script>

	</head>

<body>
    <section class="body">

        @include('layouts.users.header')

        <div class="inner-wrapper" style="background-image: linear-gradient(140deg, #376479, #26414e, #1a2024);">
            @include('layouts.users.sidebar')
            <section role="main" class="content-body content-body-modern mt-0">
                @yield('container')
            </section>
        </div>

        @include('layouts.users.rightBar')
    </section>
<!-- Vendor -->
<script src="{{ asset('user/vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('user/endor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
<script src="{{ asset('user/vendor/popper/umd/popper.min.js') }}"></script>
<script src="{{ asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('user/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('user/vendor/common/common.js') }}"></script>
<script src="{{ asset('user/vendor/nanoscroller/nanoscroller.js') }}"></script>
<script src="{{ asset('user/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('user/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

<!-- Specific Page Vendor -->
<script src="{{ asset('user/vendor/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('user/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js') }}"></script>
<script src="{{ asset('user/vendor/jquery-appear/jquery.appear.js') }}"></script>
<script src="{{ asset('user/vendor/bootstrapv5-multiselect/js/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('user/vendor/jquery.easy-pie-chart/jquery.easypiechart.js') }}"></script>
<script src="{{ asset('user/vendor/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('user/vendor/flot.tooltip/jquery.flot.tooltip.js') }}"></script>
<script src="{{ asset('user/vendor/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('user/vendor/flot/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('user/vendor/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('user/vendor/jquery-sparkline/jquery.sparkline.js') }}"></script>
<script src="{{ asset('user/vendor/raphael/raphael.js') }}"></script>
<script src="{{ asset('user/vendor/morris/morris.js') }}"></script>
<script src="{{ asset('user/vendor/gauge/gauge.js') }}"></script>
<script src="{{ asset('user/vendor/snap.svg/snap.svg.js') }}"></script>
<script src="{{ asset('user/vendor/liquid-meter/liquid.meter.js') }}"></script>
<script src="{{ asset('user/vendor/chartist/chartist.js') }}"></script>
<script src="{{ asset('user/vendor/jqvmap/jquery.vmap.js') }}"></script>
<script src="{{ asset('user/vendor/jqvmap/data/jquery.vmap.sampledata.js') }}"></script>
<script src="{{ asset('user/vendor/jqvmap/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('user/vendor/jqvmap/maps/continents/jquery.vmap.africa.js') }}"></script>
<script src="{{ asset('user/vendor/jqvmap/maps/continents/jquery.vmap.asia.js') }}"></script>
<script src="{{ asset('user/vendor/jqvmap/maps/continents/jquery.vmap.australia.js') }}"></script>
<script src="{{ asset('user/vendor/jqvmap/maps/continents/jquery.vmap.europe.js') }}"></script>
<script src="{{ asset('user/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js') }}"></script>
<script src="{{ asset('user/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js') }}"></script>
<script src="{{ asset('user/vendor/isotope/isotope.js') }}"></script>

<script src="{{ asset('user/vendor/select2/js/select2.js') }}"></script>
<script src="{{ asset('user/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('user/vendor/datatables/media/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('user/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('user/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('user/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('user/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('user/vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js') }}"></script>
<script src="{{ asset('user/vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js') }}"></script>
<script src="{{ asset('user/vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('user/js/theme.js') }}"></script>

<!-- Theme Custom -->
<script src="{{ asset('user/js/custom.js') }}"></script>=

<!-- Theme Initialization Files -->
<script src="{{ asset('user/js/theme.init.js') }}"></script>

<!-- Examples -->
<script src="{{ asset('user/js/examples/examples.dashboard.js') }}"></script>
<script src="{{ asset('user/js/examples/examples.mediagallery.js') }}"></script>
<script src="{{ asset('user/js/examples/examples.charts.js') }}"></script>
<script src="{{ asset('user/js/examples/examples.datatables.row.with.details.js') }}"></script>
<script src="{{ asset('user/js/examples/examples.datatables.tabletools.js') }}"></script>
</html>
</body>
