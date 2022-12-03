<article id="blogDetail" class="container-fluid py-3 p-lg-5">
	<div class="row">
		<div class="col-12 col-lg-7">
			<div class="px-3">
				@if (request()->routeIs('authors.show'))
				<div class="d-flex justify-content-between">
					<h2>Superadmin</h2>
					<img class="rounded-circle" src="{{ asset('assets/images/default-pfp.png') }}" alt="Default profile picture" />
				</div>
				@elseif (request()->routeIs('archives.show'))
				<h2>Archive April 2022</h2>
				@else
				<h2>Artikel</h2>
				@endif
				<hr />
				<img class="d-block mx-auto img-fluid" src="{{ asset('assets/images/blog1.jpeg') }}" alt="Blog image" />
				<h2 class="mt-3">Insights on the Seasoning & Spices Global Market to 2030</h2>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a title="Leave a Comment" href="{{ route('posts.show') . '#respond' }}">Leave a Comment</a>
						</li>
						<li class="breadcrumb-item{{ request()->routeIs('categories.show') ? ' active' : '' }}" {{ request()->routeIs('categories.show') ? 'aria-current="page"' : '' }}>
							<a title="artikel" href="{{ route('categories.show') }}">Artikel</a>
						</li>
						<li class="breadcrumb-item{{ request()->routeIs('authors.show') ? ' active' : '' }}" {{ request()->routeIs('authors.show') ? 'aria-current="page"' : '' }}>
							By <a title="superadmin" href="{{ route('authors.show') }}">superadmin</a>
						</li>
					</ol>
				</nav>
				<div>
					<p class="lead">Black pepper exports increased in the first quarter of 2022 on the back of global economic recovery and the COVID-19 pandemic being brought under control, Indonesian Export Financing Agency's (LPEI's) Indonesia Eximbank (IEB) Institute stated. “The increasing demand for spice products, including black pepper, is due to the global economic recovery as the COVID-19 pandemic …</p>
					<a href="{{ route('posts.show') }}" title="Read More">Read More <i class="fa-solid fa-angles-right"></i></a>
				</div>
				<hr />
				<img class="d-block mx-auto img-fluid" src="{{ asset('assets/images/blog1.jpeg') }}" alt="Blog image" />
				<h2 class="mt-3">Insights on the Seasoning & Spices Global Market to 2030</h2>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a title="Leave a Comment" href="{{ route('posts.show') . '#respond' }}">Leave a Comment</a>
						</li>
						<li class="breadcrumb-item">
							<a title="Artikel" href="{{ route('categories.show') }}">Artikel</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">
							By <a title="superadmin" href="{{ route('authors.show') }}">superadmin</a>
						</li>
					</ol>
				</nav>
				<div>
					<p class="lead">Black pepper exports increased in the first quarter of 2022 on the back of global economic recovery and the COVID-19 pandemic being brought under control, Indonesian Export Financing Agency's (LPEI's) Indonesia Eximbank (IEB) Institute stated. “The increasing demand for spice products, including black pepper, is due to the global economic recovery as the COVID-19 pandemic …</p>
					<a href="{{ route('posts.show') }}">Read More <i class="fa-solid fa-angles-right"></i></a>
				</div>
				<hr />
			</div>
		</div>
		<div class="vr col-lg-1 px-0"></div>
		<div class="col-12 col-lg-4">
			<div class="px-3">
				<div class="input-group">
					<div class="form-outline">
						<input type="search" id="search" class="form-control" />
						<label class="form-label" for="search">Search</label>
					</div>
					<button type="button" class="btn btn-primary">
						<i class="fas fa-search"></i>
					</button>
				</div>
				<div class="my-5">
					<h2>Pos Terbaru</h2>
					<ul class="list-unstyled">
						<li>
							<a title="pos" class="text-decoration-underline" href="{{ route('posts.show') }}">Black pepper exports increase as economy recovers: IEB Institute</a>
						</li>
						<li>
							<a title="pos" class="text-decoration-underline" href="{{ route('posts.show') }}">Indonesia's Black Pepper Export Up 44.5% to US$17mn in Q1</a>
						</li>
						<li>
							<a title="pos" class="text-decoration-underline" href="{{ route('posts.show') }}">Indonesia spices up global community at World Expo 2020 Dubai</a>
						</li>
						<li>
							<a title="pos" class="text-decoration-underline" href="{{ route('posts.show') }}">Insights on the Seasoning & Spices Global Market to 2030</a>
						</li>
					</ul>
				</div>
				<div class="my-5">
					<h2>Komentar Terbaru</h2>
					<em>No comments to show.</em>
				</div>
				<div class="my-5">
					<h2>Arsip</h2>
					<ul class="list-unstyled">
						<li>
							<a title="pos" class="text-decoration-underline" href="{{ route('archives.show') }}">April 2022</a>
						</li>
					<ul />
				</div>
				<div class="my-5">
					<h2>Kategori</h2>
					<ul class="list-unstyled">
						<li>
							<a title="pos" class="text-decoration-underline" href="{{ route('categories.show') }}">Artikel</a>
						</li>
					<ul />
				</div>
			</div>
		</div>
	</div>
</article>
