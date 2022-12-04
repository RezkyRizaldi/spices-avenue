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
				@elseif (request()->routeIs('home') && !empty(request('search')))
				<h2>Search result for: {{ request('search') }}</h2>
				@else
				<h2>Artikel</h2>
				@endif
				<hr />
				@forelse ($searchPosts as $post)
				<img class="d-block mx-auto img-fluid" src="{{ $post->image }}" alt="{{ $post->title }}" />
				<h2 class="mt-3">{{ $post->title }}</h2>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a title="Leave a Comment" href="{{ route('posts.show', $post->slug) . '#respond' }}">Leave a Comment</a>
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
					{!! $post->body !!}
					<a href="{{ route('posts.show', $post->slug) }}" title="Read More">Read More <i class="fa-solid fa-angles-right"></i></a>
				</div>
				<hr />
				@empty
				<p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
				@endforelse
			</div>
		</div>
		<div class="vr col-lg-1 px-0"></div>
		<div class="col-12 col-lg-4">
			<div class="px-3">
				<form action="{{ route('home') }}">
					<div class="input-group">
						<div class="form-outline">
							<input type="search" name="search" id="search" class="form-control" value="{{ request('search') }}" />
							<label class="form-label" for="search">Search</label>
						</div>
						<button type="submit" class="btn btn-primary">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</form>
				<div class="my-5">
					<h2>Postingan Terbaru</h2>
					<ul class="list-unstyled">
						@forelse ($posts as $post)
						<li>
							<a title="{{ $post->title }}" class="text-decoration-underline" href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
						</li>
						@empty
						<em>Tidak ada postingan terbaru untuk saat ini.</em>
						@endforelse
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
