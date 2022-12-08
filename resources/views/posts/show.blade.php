@extends('layouts.main')

@section('title', "{$post->title} - " . config('app.name'))

@section('content')
<article id="blogDetail" class="container py-3 p-lg-5">
	<div class="row">
		<div class="col">
			<img class="d-block mx-auto img-fluid" src="{{ !empty($post->image) ? asset('storage') . "/{$post->image}" : asset('assets/images/default-image.png') }}" class="img-fluid" alt="{{ $post->name }}" alt="{{ $post->title }}" />
			<h2 class="mt-3">{{ $post->title }}</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#respond" title="{{ __('client.page.post.comment') }}">{{ __('client.page.post.comment') }}</a>
					</li>
					<li class="breadcrumb-item{{ request()->routeIs('categories.show') ? ' active' : '' }}" {{ request()->routeIs('categories.show') ? 'aria-current="page"' : '' }}>
						<a href="{{ route('categories.show', $post->category->slug) }}" title="{{ $post->category->name }}">{{ $post->category->name }}</a>
					</li>
					<li class="breadcrumb-item{{ request()->routeIs('auhtors.show') ? ' active' : '' }}" {{ request()->routeIs('authors.show') ? 'aria-current="page"' : '' }}>
						{{ __('client.page.post.author') }} <a href="{{ route('authors.show', $post->author->slug) }}" title="{{ $post->author->name }}">{{ $post->author->name }}</a>
					</li>
				</ol>
			</nav>
			<div>
				{!! $post->body !!}
				<hr />
				<div class="d-flex my-4 justify-content-{{ !empty($post->previous()) ? 'between' : 'end' }}">
					@if (!empty($post->previous()))
					<a href="{{ route('posts.show', $post->previous()->slug) }}" title="{{ $post->previous()->title }}">
						<i class="fa-solid fa-arrow-left me-2"></i>
						{{ __('client.page.post.prev') }}
					</a>
					@endif
					@if (!empty($post->next()))
					<a href="{{ route('posts.show', $post->next()->slug) }}" title="{{ $post->next()->title }}">
						{{ __('client.page.post.next') }}
						<i class="fa-solid fa-arrow-right ms-2"></i>
					</a>
					@endif
				</div>
				<hr />
				<section id="respond">
					<h3>{{ __('client.page.search.form.heading') }}</h3>
					<p>{{ __('client.page.search.form.subheading') }}</p>
					@if (session()->has('success'))
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							{{ session()->get('success') }}
							<button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
						</div>
					@endif
					<form action="{{ route('comments.store') }}" method="POST">
						@csrf
						<input type="hidden" name="post_id" value="{{ $post->id }}" />
						<div class="mb-3 pb-1">
							<div class="form-outline">
								<textarea class="form-control @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" id="message" rows="8"></textarea>
								<label class="form-label" for="message">{{ __('client.page.search.form.message') }}</label>
								@error('message')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>
						</div>
						<div class="row gap-3 gap-lg-0 mb-4">
							<div class="col-12 col-lg-4">
								<div class="form-outline">
									<input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control @error('name') is-invalid @enderror" />
									<label class="form-label" for="name">{{ __('client.page.search.form.name') }}</label>
									@error('name')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="col-12 col-lg-4">
								<div class="form-outline">
									<input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control @error('email') is-invalid @enderror" />
									<label class="form-label" for="email">{{ __('client.page.search.form.email') }}</label>
									@error('email')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="col-12 col-lg-4">
								<div class="form-outline">
									<input type="url" name="website" value="{{ old('website') }}" id="website" class="form-control @error('website') is-invalid @enderror" />
									<label class="form-label" for="website">{{ __('client.page.search.form.website') }}</label>
									@error('website')
										<div class="invalid-feedback">{{ $message }}</div>
									@enderror
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-primary mb-4" title="{{ __('client.page.search.form.button') }}">{{ __('client.page.search.form.button') }}<i class="fa-solid fa-paper-plane ms-2"></i></button>
					</form>
				</section>
			</div>
		</div>
	</div>
</article>
@endsection
