<article id="blogDetail" class="container-fluid py-3 p-lg-5">
	<div class="row">
		<div class="col-12 col-lg-7">
			<div class="px-3">
				@if (request()->routeIs('authors.show'))
					<div class="d-flex justify-content-between">
						<h2>{{ $author->name }}</h2>
						<img class="rounded-circle" width="150" height="150" src="{{ !empty($author->image) ? asset('storage') . "/{$author->image}" : asset('assets/images/default-pfp.png') }}" alt="{{ $author->name }}" />
					</div>
				@elseif (request()->routeIs('archives.show'))
					<h2>{{ __('client.page.archive.heading') }}: {{ $archivePosts->first()->date }}</h2>
				@elseif (request()->routeIs('home') && !empty(request('search')))
					<h2>{{ __('client.page.search.heading') }}: {{ request('search') }}</h2>
				@else
					<h2>{{ $category->name }}</h2>
				@endif
				<hr />
				@if (request()->routeIs('archives.show'))
					@forelse ($archivePosts as $post)
						<img class="d-block mx-auto img-fluid" src="{{ !empty($post->image) ? asset('storage') . "/{$post->image}" : asset('assets/images/default-image.png') }}" alt="{{ $post->title }}" />
						<h2 class="mt-3">{{ $post->title }}</h2>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a title="{{ __('client.page.post.comment') }}" href="{{ route('posts.show', $post->slug) . '#respond' }}">{{ __('client.page.post.comment') }}</a>
								</li>
								<li class="breadcrumb-item{{ request()->routeIs('categories.show') ? ' active' : '' }}" {{ request()->routeIs('categories.show') ? 'aria-current="page"' : '' }}>
									<a title="{{ $post->category->name }}" href="{{ route('categories.show', $post->category->slug) }}">{{ $post->category->name }}</a>
								</li>
								<li class="breadcrumb-item{{ request()->routeIs('authors.show') ? ' active' : '' }}" {{ request()->routeIs('authors.show') ? 'aria-current="page"' : '' }}>
									{{ __('client.page.post.author') }} <a title="{{ $post->author->name }}" href="{{ route('authors.show', $post->author->slug) }}">{{ $post->author->name }}</a>
								</li>
							</ol>
						</nav>
						<div>
							{!! $post->excerpt !!}
							<a class="d-block" href="{{ route('posts.show', $post->slug) }}" title="{{ __('client.page.post.more') }}">{{ __('client.page.post.more') }} <i class="fa-solid fa-angles-right"></i></a>
						</div>
						<hr />
					@empty
						<p>{{ __('client.page.search.not_found') }}</p>
					@endforelse
				@elseif (request()->routeIs('categories.show'))
					@forelse ($category->posts as $post)
						<img class="d-block mx-auto img-fluid" src="{{ !empty($post->image) ? asset('storage') . "/{$post->image}" : asset('assets/images/default-image.png') }}" alt="{{ $post->title }}" />
						<h2 class="mt-3">{{ $post->title }}</h2>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a title="{{ __('client.page.post.comment') }}" href="{{ route('posts.show', $post->slug) . '#respond' }}">{{ __('client.page.post.comment') }}</a>
								</li>
								<li class="breadcrumb-item{{ request()->routeIs('categories.show') ? ' active' : '' }}" {{ request()->routeIs('categories.show') ? 'aria-current="page"' : '' }}>
									<a title="{{ $post->category->name }}" href="{{ route('categories.show', $post->category->slug) }}">{{ $post->category->name }}</a>
								</li>
								<li class="breadcrumb-item{{ request()->routeIs('authors.show') ? ' active' : '' }}" {{ request()->routeIs('authors.show') ? 'aria-current="page"' : '' }}>
									{{ __('client.page.post.author') }} <a title="{{ $post->author->name }}" href="{{ route('authors.show', $post->author->slug) }}">{{ $post->author->name }}</a>
								</li>
							</ol>
						</nav>
						<div>
							{!! $post->excerpt !!}
							<a class="d-block" href="{{ route('posts.show', $post->slug) }}" title="{{ __('client.page.post.more') }}">{{ __('client.page.post.more') }} <i class="fa-solid fa-angles-right"></i></a>
						</div>
						<hr />
					@empty
						<p>{{ __('client.page.search.not_found') }}</p>
					@endforelse
				@elseif (request()->routeIs('authors.show'))
					@forelse ($author->posts as $post)
						<img class="d-block mx-auto img-fluid" src="{{ !empty($post->image) ? asset('storage') . "/{$post->image}" : asset('assets/images/default-image.png') }}" alt="{{ $post->title }}" />
						<h2 class="mt-3">{{ $post->title }}</h2>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a title="{{ __('client.page.post.comment') }}" href="{{ route('posts.show', $post->slug) . '#respond' }}">{{ __('client.page.post.comment') }}</a>
								</li>
								<li class="breadcrumb-item{{ request()->routeIs('categories.show') ? ' active' : '' }}" {{ request()->routeIs('categories.show') ? 'aria-current="page"' : '' }}>
									<a title="{{ $post->category->name }}" href="{{ route('categories.show', $post->category->slug) }}">{{ $post->category->name }}</a>
								</li>
								<li class="breadcrumb-item{{ request()->routeIs('authors.show') ? ' active' : '' }}" {{ request()->routeIs('authors.show') ? 'aria-current="page"' : '' }}>
									{{ __('client.page.post.author') }} <a title="{{ $post->author->name }}" href="{{ route('authors.show', $post->author->slug) }}">{{ $post->author->name }}</a>
								</li>
							</ol>
						</nav>
						<div>
							{!! $post->excerpt !!}
							<a class="d-block" href="{{ route('posts.show', $post->slug) }}" title="{{ __('client.page.post.more') }}">{{ __('client.page.post.more') }} <i class="fa-solid fa-angles-right"></i></a>
						</div>
						<hr />
					@empty
						<p>{{ __('client.page.search.not_found') }}</p>
					@endforelse
				@else
					@forelse ($searchPosts as $post)
						<img class="d-block mx-auto img-fluid" src="{{ !empty($post->image) ? asset('storage') . "/{$post->image}" : asset('assets/images/default-image.png') }}" alt="{{ $post->title }}" />
						<h2 class="mt-3">{{ $post->title }}</h2>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a title="{{ __('client.page.post.comment') }}" href="{{ route('posts.show', $post->slug) . '#respond' }}">{{ __('client.page.post.comment') }}</a>
								</li>
								<li class="breadcrumb-item{{ request()->routeIs('categories.show') ? ' active' : '' }}" {{ request()->routeIs('categories.show') ? 'aria-current="page"' : '' }}>
									<a title="{{ $post->category->name }}" href="{{ route('categories.show', $post->category->slug) }}">{{ $post->category->name }}</a>
								</li>
								<li class="breadcrumb-item{{ request()->routeIs('authors.show') ? ' active' : '' }}" {{ request()->routeIs('authors.show') ? 'aria-current="page"' : '' }}>
									{{ __('client.page.post.author') }} <a title="{{ $post->author->name }}" href="{{ route('authors.show', $post->author->slug) }}">{{ $post->author->name }}</a>
								</li>
							</ol>
						</nav>
						<div>
							{!! $post->excerpt !!}
							<a class="d-block" href="{{ route('posts.show', $post->slug) }}" title="{{ __('client.page.post.more') }}">{{ __('client.page.post.more') }} <i class="fa-solid fa-angles-right"></i></a>
						</div>
						<hr />
					@empty
						<p>{{ __('client.page.search.not_found') }}</p>
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
							<label class="form-label" for="search">{{ __('client.page.search.form.search') }}</label>
						</div>
						<button type="submit" class="btn btn-primary" aria-label="Search form">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</form>
				<div class="my-5">
					<h2>{{ __('client.page.post.new.heading') }}</h2>
					<ul class="list-unstyled">
						@forelse ($posts as $post)
							<li>
								<a title="{{ $post->title }}" class="text-decoration-underline" href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
							</li>
						@empty
							<em>{{ __('client.page.post.not_found') }}</em>
						@endforelse
					</ul>
				</div>
				<div class="my-5">
					<h2>{{ __('client.page.comment.new.heading') }}</h2>
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
							<em>{{ __('client.page.comment.not_found') }}</em>
						@endforelse
					</ul>
				</div>
				<div class="my-5">
					<h2>{{ __('client.page.archive.heading') }}</h2>
					<ul class="list-unstyled">
						@forelse ($archives as $archive)
							<li>
								<a title="{{ $archive->date }}" class="text-decoration-underline" href="{{ route('archives.show', Str::slug($archive->slug)) }}">{{ $archive->date }}</a>
							</li>
						@empty
							<em>{{ __('client.page.archive.not_found') }}</em>
						@endforelse
					</ul>
				</div>
				<div class="my-5">
					<h2>{{ __('client.page.category.heading') }}</h2>
					<ul class="list-unstyled">
						@forelse ($categories as $category)
							<li>
								<a title="{{ $category->name }}" class="text-decoration-underline" href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a>
							</li>
						@empty
							<em>{{ __('client.page.category.not_found') }}</em>
						@endforelse
					</ul>
				</div>
			</div>
		</div>
	</div>
</article>
