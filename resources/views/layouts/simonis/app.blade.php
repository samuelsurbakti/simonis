<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">
	<head>
        @include('layouts.simonis.title')
		@include('layouts.simonis.descriptions')
        @include('layouts.favicon')
		@include('layouts.simonis.styles')
        @stack('page_styles')
        @livewireStyles
	</head>
	<body>
		<div class="preloader">
			<img src="{{ asset('src/assets/logo/logo.svg') }}" alt="loader" class="lds-ripple img-fluid" />
		</div>
		<div id="main-wrapper">
			@include('layouts.simonis.sidebar')
			<div class="page-wrapper">
				@include('layouts.simonis.header')

				<div class="body-wrapper">
					<div class="container-fluid">
						<div class="page-titles mb-3">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-12 align-self-center">
									<h4 class="text-muted mb-0 fw-normal fs-5"><i class="{{ $page_icon }}"></i> {{ $page_title }}</h4>
								</div>
								<div class="col-lg-12 col-md-12 col-12 align-self-center">
									@stack('breadcrumbs')
								</div>
							</div>
						</div>
						@yield('content')
					</div>
					<footer class="footer py-3 pt-4 bg-white text-center"> 2025© All Rights Reserved by Wrappixel </footer>
				</div>
			</div>
		</div>
		<div class="dark-transparent sidebartoggler"></div>
		@include('layouts.simonis.scripts')
        @stack('page_scripts')
        @livewireScripts

        <x-livewire-alert::scripts />
	</body>
</html>
