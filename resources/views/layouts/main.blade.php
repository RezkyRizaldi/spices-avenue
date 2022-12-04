<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	@include('layouts.head')
	<body>
		<div id="whatsapp" title="WhatsApp"></div>
		@foreach ($products as $product)
			<div class="modal fade" id="productModal{{ $loop->iteration }}" tabindex="-1" aria-labelledby="modalTitle{{ $loop->iteration }}" aria-hidden="true" data-mdb-backdrop="static" data-mdb-keyboard="false">
				<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modalTitle{{ $loop->iteration }}">{{ $product->name }}</h5>
							<button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<img src="{{ $product->image }}" class="w-100 mb-3 img-thumbnail" alt="{{ $product->name }}" />
							<p class="text-muted">{{ $product->description }}</p>
						</div>
					</div>
				</div>
			</div>
		@endforeach
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
