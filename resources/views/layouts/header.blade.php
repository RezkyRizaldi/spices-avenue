<header class="sticky-top">
	<nav class="navbar navbar-expand-lg bg-light py-3 shadow-0">
		<div class="container ms-lg-auto me-lg-5 text-uppercase fw-semibold">
			<a class="navbar-brand me-0 ms-3 ms-lg-0 d-lg-none" href="{{ route('home') }}" title="Home">Home</a>
			@if (!request()->routeIs('posts.show'))
			<button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars"></i>
    	</button>
			@endif
			<div class="collapse navbar-collapse justify-content-between" id="navbar">
				<ul class="navbar-nav">
					@if (!request()->routeIs('posts.show'))
					<li class="nav-item ms-3 ms-lg-0">
						<a class="nav-link" aria-current="page" href="#about" title="About">About</a>
					</li>
					<li class="nav-item ms-3 ms-lg-0">
						<a class="nav-link" href="#gallery" title="Gallery">Gallery</a>
					</li>
					<li class="nav-item ms-3 ms-lg-0">
						<a class="nav-link" href="#products" title="Products">Products</a>
					</li>
					@endif
				</ul>
				<a class="navbar-brand {{ !request()->routeIs('posts.show') ? 'me-0' : 'mx-auto' }} d-none d-lg-inline" href="{{ route('home') }}" title="Home">Home</a>
				<ul class="navbar-nav">
					@if (!request()->routeIs('posts.show'))
					<li class="nav-item ms-3 ms-lg-0">
						<a class="nav-link" aria-current="page" href="#blog" title="Blog">Blog</a>
					</li>
					<li class="nav-item ms-3 ms-lg-0">
						<a class="nav-link" href="#team" title="Team">Team</a>
					</li>
					<li class="nav-item ms-3 ms-lg-0">
						<a class="nav-link" href="#contact" title="Contact">Contact</a>
					</li>
					@endif
				</ul>
				<div id="socialNav" class="d-flex py-2 py-lg-0 {{ !request()->routeIs('posts.show') ? 'ms-3 ms-lg-0' : 'd-none d-lg-flex ms-5' }}">
					<a class="nav-link" href="https://instagram.com/" target="_blank" title="Instagram">
						<i class="fab fa-instagram"></i>
					</a>
					<a class="nav-link" href="https://facebook.com/" target="_blank" title="Facebook">
						<i class="fab fa-facebook"></i>
					</a>
					<a class="nav-link" href="https://twitter.com/" target="_blank" title="Twitter">
						<i class="fab fa-twitter"></i>
					</a>
				</div>
			</div>
		</div>
	</nav>
</header>

