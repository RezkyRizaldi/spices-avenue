<article id="blogDetail" class="container-fluid py-3 p-lg-5">
	<div class="row">
		<div class="col-12 col-lg-7">
			<div class="px-3">
				@if (request()->routeIs('authors.show'))
					<div class="d-flex justify-content-between">
						<h2>{{ $author->name }}</h2>
						<img class="rounded-circle" width="150" height="150" src="{{ $author->image }}" alt="{{ $author->name }}" />
					</div>
				@elseif (request()->routeIs('archives.show'))
					<h2>Arsip: {{ $archivePosts->first()->date }}</h2>
				@elseif (request()->routeIs('home') && !empty(request('search')))
					<h2>Hasil pencarian untuk: {{ request('search') }}</h2>
				@else
					<h2>{{ $category->name }}</h2>
				@endif
				<hr />
				@if (request()->routeIs('archives.show'))
					@forelse ($archivePosts as $post)
						<img class="d-block mx-auto img-fluid" src="{{ $post->image }}" alt="{{ $post->title }}" />
						<h2 class="mt-3">{{ $post->title }}</h2>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a title="Tinggalkan Komentar" href="{{ route('posts.show', $post->slug) . '#respond' }}">Tinggalkan Komentar</a>
								</li>
								<li class="breadcrumb-item{{ request()->routeIs('categories.show') ? ' active' : '' }}" {{ request()->routeIs('categories.show') ? 'aria-current="page"' : '' }}>
									<a title="{{ $post->category->name }}" href="{{ route('categories.show', $post->category->slug) }}">{{ $post->category->name }}</a>
								</li>
								<li class="breadcrumb-item{{ request()->routeIs('authors.show') ? ' active' : '' }}" {{ request()->routeIs('authors.show') ? 'aria-current="page"' : '' }}>
									By <a title="{{ $post->author->name }}" href="{{ route('authors.show', $post->author->slug) }}">{{ $post->author->name }}</a>
								</li>
							</ol>
						</nav>
						<div>
							{!! $post->excerpt !!}
							<a href="{{ route('posts.show', $post->slug) }}" title="Baca Selengkapnya">Baca Selengkapnya <i class="fa-solid fa-angles-right"></i></a>
						</div>
						<hr />
					@empty
						<p>Tidak ada data yang sesuai dengan istilah pencarian Anda. Silakan coba lagi dengan kata kunci yang berbeda.</p>
					@endforelse
				@elseif (request()->routeIs('categories.show'))
					@forelse ($category->posts as $post)
						<img class="d-block mx-auto img-fluid" src="{{ $post->image }}" alt="{{ $post->title }}" />
						<h2 class="mt-3">{{ $post->title }}</h2>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a title="Tinggalkan Komentar" href="{{ route('posts.show', $post->slug) . '#respond' }}">Tinggalkan Komentar</a>
								</li>
								<li class="breadcrumb-item{{ request()->routeIs('categories.show') ? ' active' : '' }}" {{ request()->routeIs('categories.show') ? 'aria-current="page"' : '' }}>
									<a title="{{ $post->category->name }}" href="{{ route('categories.show', $post->category->slug) }}">{{ $post->category->name }}</a>
								</li>
								<li class="breadcrumb-item{{ request()->routeIs('authors.show') ? ' active' : '' }}" {{ request()->routeIs('authors.show') ? 'aria-current="page"' : '' }}>
									By <a title="{{ $post->author->name }}" href="{{ route('authors.show', $post->author->slug) }}">{{ $post->author->name }}</a>
								</li>
							</ol>
						</nav>
						<div>
							{!! $post->excerpt !!}
							<a href="{{ route('posts.show', $post->slug) }}" title="Baca Selengkapnya">Baca Selengkapnya <i class="fa-solid fa-angles-right"></i></a>
						</div>
						<hr />
					@empty
						<p>Tidak ada data yang sesuai dengan istilah pencarian Anda. Silakan coba lagi dengan kata kunci yang berbeda.</p>
					@endforelse
				@elseif (request()->routeIs('authors.show'))
					@forelse ($author->posts as $post)
						<img class="d-block mx-auto img-fluid" src="{{ $post->image }}" alt="{{ $post->title }}" />
						<h2 class="mt-3">{{ $post->title }}</h2>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a title="Tinggalkan Komentar" href="{{ route('posts.show', $post->slug) . '#respond' }}">Tinggalkan Komentar</a>
								</li>
								<li class="breadcrumb-item{{ request()->routeIs('categories.show') ? ' active' : '' }}" {{ request()->routeIs('categories.show') ? 'aria-current="page"' : '' }}>
									<a title="{{ $post->category->name }}" href="{{ route('categories.show', $post->category->slug) }}">{{ $post->category->name }}</a>
								</li>
								<li class="breadcrumb-item{{ request()->routeIs('authors.show') ? ' active' : '' }}" {{ request()->routeIs('authors.show') ? 'aria-current="page"' : '' }}>
									By <a title="{{ $post->author->name }}" href="{{ route('authors.show', $post->author->slug) }}">{{ $post->author->name }}</a>
								</li>
							</ol>
						</nav>
						<div>
							{!! $post->excerpt !!}
							<a href="{{ route('posts.show', $post->slug) }}" title="Baca Selengkapnya">Baca Selengkapnya <i class="fa-solid fa-angles-right"></i></a>
						</div>
						<hr />
					@empty
						<p>Tidak ada data yang sesuai dengan istilah pencarian Anda. Silakan coba lagi dengan kata kunci yang berbeda.</p>
					@endforelse
				@else
					@forelse ($searchPosts as $post)
						<img class="d-block mx-auto img-fluid" src="{{ $post->image }}" alt="{{ $post->title }}" />
						<h2 class="mt-3">{{ $post->title }}</h2>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a title="Tinggalkan Komentar" href="{{ route('posts.show', $post->slug) . '#respond' }}">Tinggalkan Komentar</a>
								</li>
								<li class="breadcrumb-item{{ request()->routeIs('categories.show') ? ' active' : '' }}" {{ request()->routeIs('categories.show') ? 'aria-current="page"' : '' }}>
									<a title="{{ $post->category->name }}" href="{{ route('categories.show', $post->category->slug) }}">{{ $post->category->name }}</a>
								</li>
								<li class="breadcrumb-item{{ request()->routeIs('authors.show') ? ' active' : '' }}" {{ request()->routeIs('authors.show') ? 'aria-current="page"' : '' }}>
									By <a title="{{ $post->author->name }}" href="{{ route('authors.show', $post->author->slug) }}">{{ $post->author->name }}</a>
								</li>
							</ol>
						</nav>
						<div>
							{!! $post->excerpt !!}
							<a href="{{ route('posts.show', $post->slug) }}" title="Baca Selengkapnya">Baca Selengkapnya <i class="fa-solid fa-angles-right"></i></a>
						</div>
						<hr />
					@empty
						<p>Tidak ada data yang sesuai dengan istilah pencarian Anda. Silakan coba lagi dengan kata kunci yang berbeda.</p>
					@endforelse
				@endif
			</div>
		</div>
		<div class="vr col-lg-1 px-0"></div>
		<div class="col-12 col-lg-4">
			<div class="px-3">
				<form action="{{ route('home') }}">
					<div class="input-group">
						<div class="form-outline">
							<input type="search" name="search" id="search" class="form-control" value="{{ request('search') }}" />
							<label class="form-label" for="search">Cari</label>
						</div>
						<button type="submit" class="btn btn-primary" aria-label="Search form">
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
					<ul class="list-group list-group-light">
						@forelse ($comments as $comment)
							<li class="list-group-item">
								<figure>
									<blockquote class="blockquote">
										<p>{{ Str::limit($comment->message, 100, '...') }}</p>
									</blockquote>
									<figcaption class="blockquote-footer">
										{{ $comment->name }} in
										<a href="{{ route('posts.show', $comment->post->slug) }}" title="{{ $comment->post->title }}">
											<cite>{{ Str::limit($comment->post->title, 40, '...') }}</cite>
										</a>
									</figcaption>
								</figure>
							</li>
						@empty
							<em>Tidak ada komentar terbaru untuk saat ini.</em>
						@endforelse
					</ul>
				</div>
				<div class="my-5">
					<h2>Arsip</h2>
					<ul class="list-unstyled">
						@forelse ($archives as $archive)
							<li>
								<a title="{{ $archive->date }}" class="text-decoration-underline" href="{{ route('archives.show', Str::slug($archive->slug)) }}">{{ $archive->date }}</a>
							</li>
						@empty
							<em>Tidak ada arsip terbaru untuk saat ini.</em>
						@endforelse
					<ul />
				</div>
				<div class="my-5">
					<h2>Kategori</h2>
					<ul class="list-unstyled">
						@forelse ($categories as $category)
							<li>
								<a title="{{ $category->name }}" class="text-decoration-underline" href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a>
							</li>
						@empty
							<em>Tidak ada kategori untuk saat ini.</em>
						@endforelse
					<ul />
				</div>
			</div>
		</div>
	</div>
</article>
