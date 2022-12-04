<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	@include('layouts.head')
	<body>
		<div id="whatsapp" title="WhatsApp"></div>
		@include('layouts.header')
		<main>
			@yield('content')
		</main>
		@if (request()->routeIs('home'))
			@include('layouts.footer')
		@endif
		@include('layouts.scripts')
	</body>
</html>
