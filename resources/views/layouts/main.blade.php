<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	@include('layouts.head')
	<body>
		<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true" data-mdb-backdrop="static" data-mdb-keyboard="false">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="modalTitle">Cloves</h5>
						<button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<img src="{{ asset('assets/images/product1.png') }}" class="w-100 mb-3 img-thumbnail" alt="Product image" />
						<p class="text-muted">Cloves are a spice made from the flower buds of an evergreen tree called. Clove flower buds are harvested in their immature state and then dried.</p>
					</div>
				</div>
			</div>
		</div>
		@include('layouts.header')
		<main>
			@yield('content')
		</main>
		@if (!request()->routeIs('posts.show') && !request()->routeIs('categories.show'))
			@include('layouts.footer')
		@endif
		@include('layouts.scripts')
	</body>
</html>
