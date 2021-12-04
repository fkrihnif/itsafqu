<!doctype html>
<html class="landing simple-sticky-header-enabled">

<head>

	<!-- Basic -->
	<meta charset="UTF-8">

	<title>BUNTAL - Solusi Undangan Anda !</title>
	<meta name="keywords" content="HTML5 Admin Template" />
	<meta name="description" content="Porto Admin - Responsive HTML5 Template">
	<meta name="author" content="okler.net">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7COpen+Sans:400,700,800"
		rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{ url('user/vendor/bootstrap/css/bootstrap.css') }}" />
	<link rel="stylesheet" href="{{ url('user/vendor/animate/animate.compat.css') }}">
	<link rel="stylesheet" href="{{ url('user/vendor/font-awesome/css/all.min.css') }}" />
	<link rel="stylesheet" href="{{ url('user/vendor/boxicons/css/boxicons.min.css') }}" />
	<link rel="stylesheet" href="{{ url('user/vendor/magnific-popup/magnific-popup.css') }}" />
	<link rel="stylesheet" href="{{ url('user/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />
	<link rel="stylesheet" href="{{ url('user/vendor/owl.carousel/assets/owl.carousel.css') }}" />
	<link rel="stylesheet" href="{{ url('user/vendor/owl.carousel/assets/owl.theme.default.css') }}" />
	<link rel="stylesheet" href="{{ url('user/vendor/pnotify/pnotify.custom.css') }}" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{ url('user/css/theme.css') }}" />

	<!-- Landing Page CSS -->
	<link rel="stylesheet" href="{{ url('user/css/landing.css') }}" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="{{ url('user/css/skins/default.css') }}" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="{{ url('user/css/custom.css') }}">

	@if (Request::is('orderPaket/standar') || Request::is('orderPaket/premium') || Request::is('orderPaket/eksklusif'))
	<link rel="stylesheet" href="{{ asset('user/vendor/owl.carousel/assets/owl.carousel.css') }}" />
	<link rel="stylesheet" href="{{ asset('user/vendor/owl.carousel/assets/owl.theme.default.css') }}" />
	@endif

	<!-- Head Libs -->
	<script src="{{ ('user/vendor/modernizr/modernizr.js') }}"></script>

</head>

<body class="alternative-font-4 loading-overlay-showing" data-plugin-page-transition data-loading-overlay
	data-plugin-options="{'hideDelay': 100}">
	<div class="loading-overlay">
		<div class="bounce-loader">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>

	<div class="body">
	   @include('layouts.landing.header2')
        @yield('container')

	</div>

	<!-- Vendor -->
	<script>
		var loadFile = function(event) {
		  var output = document.getElementById('output');
		  output.src = URL.createObjectURL(event.target.files[0]);
		  output.onload = function() {
			URL.revokeObjectURL(output.src) // free memory
		  }
		};
	  </script>
	  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	  <script type="text/javascript">
		var i = 0;
		$("#add-btn").click(function(){
		++i;
		$("#dynamicAddRemove").append('<tr><td><input type="date" class="form-control" id="validationCustom01"name="moreFields['+i+'][tanggal]"value="{{ old('tanggal') }}" placeholder="Contoh: 30 September 2021"></td><td><input type="text" class="form-control" id="validationCustom01"name="moreFields['+i+'][judul]"value="{{ old('judul') }}" placeholder="Contoh: Taaruf"></td><td><textarea name="moreFields['+i+'][cerita]"value="{{ old('cerita') }}" placeholder="Contoh: Saat itu kami ..."rows="3" class="form-control text-3 h-auto py-2" id="validationCustom01"></textarea></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
});
		$(document).on('click', '.remove-tr', function(){  
		$(this).parents('tr').remove();
		});  
		</script>

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
	<script src="{{ url('user/vendor/jquery-appear/jquery.appear.js') }}"></script>
	<script src="{{ url('user/vendor/owl.carousel/owl.carousel.js') }}"></script>
	<script src="{{ url('user/vendor/jquery.lazyload/jquery.lazyload.js') }}"></script>

	<script src="{{ url('user/vendor/jquery-validation/jquery.validate.js') }}"></script>
	<script src="{{ url('user/vendor/bootstrapv5-wizard/jquery.bootstrap.wizard.js') }}"></script>
	<script src="{{ url('user/vendor/pnotify/pnotify.custom.js') }}"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="{{ url('user/js/theme.js') }}"></script>

	<!-- Theme Custom -->
	<script src="{{ url('user/js/custom.js') }}"></script>

	<!-- Theme Initialization Files -->
	<script src="{{ url('user/js/theme.init.js') }}"></script>
	<script src="{{ url('user/js/examples/examples.wizard.js') }}"></script>

	<script src="{{ url('crop/cropzee.js') }}" defer></script>
	@if (Request::is('orderPaket/standar') || Request::is('orderPaket/premium') || Request::is('orderPaket/eksklusif'))
	<script src="{{ asset('user/vendor/jquery-validation/jquery.validate.js') }}"></script>
	<script src="{{ asset('user/vendor/bootstrapv5-wizard/jquery.bootstrap.wizard.js') }}"></script>
	<script src="{{ asset('user/js/examples/examples.wizard.js') }}"></script>
	
	<script src="{{ asset('user/vendor/owl.carousel/owl.carousel.js') }}"></script>
	<script src="{{ asset('user/js/examples/examples.mediagallery.js') }}"></script>
	<script src="{{ asset('user/js/examples/examples.lightbox.js') }}"></script>

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
	<script>
		$(document).ready(function () {
			$("#cropzee-input").cropzee({
				// start size of crop region
				allowedInputs: ['gif','png','jpg','jpeg'],
				imageExtension:'image/jpeg',
				returnImageMode:'data-url',

				startSize: [85,85, '%' ],
				onCropStart: function(data) {
				console.log(data.x, data.y, data.width, data.height);
				},
				onCropMove: function(data) {
				console.log(data.x, data.y, data.width, data.height);
				},
				onCropEnd: function(data) {
				console.log(data.x, data.y, data.width, data.height);
				},
				onInitialize: function(instance) {
				// do things here
				}

				});
				$("#cropzee-input2").cropzee({
				// start size of crop region
				allowedInputs: ['gif','png','jpg','jpeg'],
				imageExtension:'image/jpeg',
				returnImageMode:'data-url',

				startSize: [85,85, '%' ],
				onCropStart: function(data) {
				console.log(data.x, data.y, data.width, data.height);
				},
				onCropMove: function(data) {
				console.log(data.x, data.y, data.width, data.height);
				},
				onCropEnd: function(data) {
				console.log(data.x, data.y, data.width, data.height);
				},
				onInitialize: function(instance) {
				// do things here
				}

				});
		});
	</script>

</body>

</html>