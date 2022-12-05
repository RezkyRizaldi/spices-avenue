<header class="sticky-top">
	<nav class="navbar navbar-expand-lg bg-light py-3 shadow-0">
		<div class="container ms-lg-auto me-lg-5 text-uppercase fw-semibold">
			<a class="navbar-brand me-0 ms-3 ms-lg-0 d-lg-none" href="{{ route('home') }}" title="Home">Home</a>
			<button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse justify-content-between" id="navbar">
				<ul class="navbar-nav">
					<li class="nav-item ms-3 ms-lg-0">
						<a class="nav-link" aria-current="page" href="{{ route('home') }}#about" title="About">About</a>
					</li>
					<li class="nav-item ms-3 ms-lg-0">
						<a class="nav-link" href="{{ route('home') }}#gallery" title="Gallery">Gallery</a>
					</li>
					<li class="nav-item ms-3 ms-lg-0">
						<a class="nav-link" href="{{ route('home') }}#products" title="Products">Products</a>
					</li>
				</ul>
				<a class="navbar-brand me-0 d-none d-lg-inline" href="{{ route('home') }}" title="Home">Home</a>
				<ul class="navbar-nav">
					<li class="nav-item ms-3 ms-lg-0">
						<a class="nav-link" aria-current="page" href="{{ route('home') }}#blog" title="Blog">Blog</a>
					</li>
					<li class="nav-item ms-3 ms-lg-0">
						<a class="nav-link" href="{{ route('home') }}#team" title="Team">Team</a>
					</li>
					<li class="nav-item ms-3 ms-lg-0">
						<a class="nav-link" href="{{ route('home') }}#contact" title="Contact">Contact</a>
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

