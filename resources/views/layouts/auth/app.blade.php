<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">
	<head>
        @include('layouts.auth.title')
        @include('layouts.auth.descriptions')
		@include('layouts.favicon')
        @include('layouts.auth.styles')
	</head>
	<body>
		<div class="preloader">
			<img src="{{ asset('src/assets/logo/logo.svg') }}" alt="loader" class="lds-ripple img-fluid" />
		</div>
		<div id="main-wrapper" class="auth-customizer-none">
            @yield('content')
		</div>
		<div class="dark-transparent sidebartoggler"></div>

        @include('layouts.auth.scripts')

	</body>
</html>
