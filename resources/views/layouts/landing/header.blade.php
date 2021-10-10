<header id="header" class="header-effect-shrink header-transparent" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
			<div class="header-body header-body-bottom-border border-top-0 appear-animation"
				data-appear-animation="fadeIn" data-appear-animation-delay="900">
				<div class="header-container container">
					<div class="header-row">
						<div class="header-column">
							<div class="header-row">
								<div class="header-logo">
									<a href="demo-startup-agency.html">
										<img src="{{ url('frontend/img/logo2baru.png') }}" class="img-fluid" width="123" height="55" alt="" />
									</a>
								</div>
							</div>
						</div>
						<div class="header-column justify-content-end">
							<div class="header-row">
								<div
									class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-effect-1">
									<div
										class="header-nav-main header-nav-main-text-capitalize header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                        @include('layouts.landing.nav')
									</div>
								</div>
								<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
									data-bs-target=".header-nav-main nav">
									<i class="fas fa-bars"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>