<header class="sticky-top">
	<nav class="navbar navbar-expand-lg bg-light py-3 shadow-0">
		<div class="container ms-lg-auto me-lg-5 text-uppercase fw-semibold">
			<a class="navbar-brand me-0 ms-3 ms-lg-0 d-lg-none" href="{{ route('home') }}" title="{{ __('client.header.home') }}">{{ __('client.header.home') }}</a>
			<button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse justify-content-between" id="navbar">
				<ul class="navbar-nav">
					<li class="nav-item ms-3 ms-lg-0">
						<a class="nav-link" aria-current="page" href="{{ route('home') }}#about" title="{{ __('client.header.about') }}">{{ __('client.header.about') }}</a>
					</li>
					<li class="nav-item ms-3 ms-lg-0">
						<a class="nav-link" href="{{ route('home') }}#gallery" title="{{ __('client.header.gallery') }}">{{ __('client.header.gallery') }}</a>
					</li>
					<li class="nav-item ms-3 ms-lg-0">
						<a class="nav-link" href="{{ route('home') }}#products" title="{{ __('client.header.products') }}">{{ __('client.header.products') }}</a>
					</li>
				</ul>
				<a class="navbar-brand me-0 d-none d-lg-inline" href="{{ route('home') }}" title="{{ __('client.header.home') }}">{{ __('client.header.home') }}</a>
				<ul class="navbar-nav">
					<li class="nav-item ms-3 ms-lg-0">
						<a class="nav-link" aria-current="page" href="{{ route('home') }}#blog" title="{{ __('client.header.blog') }}">{{ __('client.header.blog') }}</a>
					</li>
					<li class="nav-item ms-3 ms-lg-0">
						<a class="nav-link" href="{{ route('home') }}#team" title="{{ __('client.header.team') }}">{{ __('client.header.team') }}</a>
					</li>
					<li class="nav-item ms-3 ms-lg-0">
						<a class="nav-link" href="{{ route('home') }}#contact" title="{{ __('client.header.contact') }}">{{ __('client.header.contact') }}</a>
					</li>
				</ul>
				<div id="socialNav" class="d-flex py-2 py-lg-0 ms-3 ms-lg-0">
					<a class="nav-link" href="https://instagram.com/" rel="noopener noreferrer" target="_blank" title="Instagram">
						<span class="sr-only">Instagram</span>
						<i class="fab fa-instagram"></i>
					</a>
					<a class="nav-link" href="https://facebook.com/" rel="noopener noreferrer" target="_blank" title="Facebook">
						<span class="sr-only">Facebook</span>
						<i class="fab fa-facebook"></i>
					</a>
					<a class="nav-link" href="https://twitter.com/" rel="noopener noreferrer" target="_blank" title="Twitter">
						<span class="sr-only">Twitter</span>
						<i class="fab fa-twitter"></i>
					</a>
				</div>
			</div>
		</div>
	</nav>
</header>

