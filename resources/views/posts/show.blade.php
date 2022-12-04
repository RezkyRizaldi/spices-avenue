@extends('layouts.main')

@section('title', "{$post->title} - " . config('app.name'))

@section('content')
<article id="blogDetail" class="container py-3 p-lg-5">
	<div class="row">
		<div class="col">
			<img class="d-block mx-auto img-fluid" src="{{ $post->image }}" alt="{{ $post->title }}" />
			<h2 class="mt-3">{{ $post->title }}</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#respond">Leave a Comment</a>
					</li>
					<li class="breadcrumb-item{{ request()->routeIs('categories.show') ? ' active' : '' }}" {{ request()->routeIs('categories.show') ? 'aria-current="page"' : '' }}>
						<a href="{{ route('categories.show', $post->category->slug) }}">{{ $post->category->name }}</a>
					</li>
					<li class="breadcrumb-item{{ request()->routeIs('auhtors.show') ? ' active' : '' }}" {{ request()->routeIs('authors.show') ? 'aria-current="page"' : '' }}>
						By <a href="{{ route('authors.show') }}">superadmin</a>
					</li>
				</ol>
			</nav>
			<div>
				{!! $post->body !!}
				<hr />
				<div class="d-flex my-4 justify-content-{{ !empty($post->previous()) ? 'between' : 'end' }}">
					@if (!empty($post->previous()))
					<a href="{{ route('posts.show', $post->previous()->slug) }}">
						<i class="fa-solid fa-arrow-left me-2"></i>
						Previous Post
					</a>
					@endif
					@if (!empty($post->next()))
					<a href="{{ route('posts.show', $post->next()->slug) }}">
						Next Post
						<i class="fa-solid fa-arrow-right ms-2"></i>
					</a>
					@endif
				</div>
				<hr />
				<section id="respond">
					<h3>Leave a Comment</h3>
					<p>Your email address will not be published.
					<form action="" method="POST">
						@csrf
						<div class="form-outline mb-4">
							<textarea class="form-control" id="message" rows="8"></textarea>
							<label class="form-label" for="message">Message</label>
						</div>
						<div class="row gap-3 gap-lg-0 mb-4">
							<div class="col-12 col-lg-4">
								<div class="form-outline">
									<input type="text" id="name" class="form-control" required />
									<label class="form-label" for="name">Name</label>
								</div>
							</div>
							<div class="col-12 col-lg-4">
								<div class="form-outline">
									<input type="email" id="email" class="form-control" required />
									<label class="form-label" for="email">Email</label>
								</div>
							</div>
							<div class="col-12 col-lg-4">
								<div class="form-outline">
									<input type="url" id="website" class="form-control" />
									<label class="form-label" for="website">Website</label>
								</div>
							</div>
						</div>
						<div class="form-check d-flex align-items-center mb-4">
							<input class="form-check-input me-2" type="checkbox" id="checkbox" />
							<label class="form-check-label" for="checkbox">Save my name, email, and website in this browser for the next time I comment.</label>
						</div>
						<button type="submit" class="btn btn-primary mb-4">Post Comment <i class="fa-solid fa-angles-right"></i></button>
					</form>
				</section>
			</div>
		</div>
	</div>
</article>
@endsection
