@extends('layouts.main')

@section('title', config('app.name'))

@section('content')
	@foreach ($products as $product)
		<div class="modal fade" id="productModal{{ $loop->iteration }}" tabindex="-1" aria-labelledby="modalTitle{{ $loop->iteration }}" aria-hidden="true" data-mdb-backdrop="static" data-mdb-keyboard="false">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="modalTitle{{ $loop->iteration }}">{{ $product->name }}</h5>
						<button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<img src="{{ !empty($product->image) ? asset('storage') . "/{$product->image}" : asset('assets/images/default-image.png') }}" class="w-100 mb-3 img-thumbnail" alt="{{ $product->name }}" />
						<p class="text-muted">{{ $product->description }}</p>
					</div>
				</div>
			</div>
		</div>
	@endforeach
	<section id="hero" class="p-lg-5" data-aos="fade-in">
		<div id="heroContainer" class="container-fluid p-4 p-lg-5">
			<div id="heroWrapper">
				<h1 class="display-4 text-uppercase fw-semibold">{{ __('client.section.hero.heading') }}</h1>
				<p class="text-muted fs-6 lead">{{ __('client.section.hero.description') }}</p>
			</div>
		</div>
	</section>
	<section id="about" class="py-5 px-3 p-lg-5 text-center text-lg-start">
		<div class="row flex-column flex-lg-row align-items-center justify-content-between">
			<div class="col-lg-5 flex-grow-1 order-1 order-lg-0 mt-5 mt-lg-0">
				<div data-aos="fade-right" data-aos-duration="1500">
					<h2 class="display-6 text-uppercase fw-normal">{{ __('client.section.about.heading') }}</h2>
					<p class="text-muted fs-6 lead">{{ __('client.section.about.description') }}</p>
					<p class="text-muted fs-6 lead">{{ __('client.section.about.description2') }}</p>
				</div>
			</div>
			<div class="col-lg-7 flex-shrink-0">
				<img class="mx-auto ms-lg-auto d-block mw-100 object_cover" src="{{ asset('assets/images/about1.jpg') }}" alt="About section image" data-aos="fade-left" data-aos-duration="1500" />
			</div>
		</div>
	</section>
	<section id="gallery" class="pt-5 px-3 p-lg-3 text-center">
		<h2 class="text-uppercase" data-aos="fade-up" data-aos-duration="1500">{{ __('client.section.gallery.heading') }}</h2>
		<p class="fs-6 text-muted lead col-lg-5 mx-auto mb-5" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">{{ __('client.section.gallery.subheading') }}</p>
		<div class="row" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
			<div class="col-lg-3 pb-4 pb-lg-0">
				<a href="{{ asset('assets/images/gallery1.jpeg') }}" data-lightbox="gallery1" data-title="Spices" data-alt="Spices Image">
					<div class="bg-image hover-zoom shadow-1-strong rounded h-100">
						<img src="{{ asset('assets/images/gallery1.jpeg') }}" class="w-100 gallery_img" alt="Gallery image 1" />
					</div>
				</a>
			</div>
			<div class="col-lg-9">
				<div class="row mb-lg-4">
					<div class="col-lg-8 pb-4 pb-lg-0">
						<a href="{{ asset('assets/images/gallery2.jpg') }}" data-lightbox="gallery2" data-title="Spices" data-alt="Spices Image">
							<div class="bg-image hover-zoom shadow-1-strong rounded gallery_sm">
								<img src="{{ asset('assets/images/gallery2.jpg') }}" class="w-100 gallery_img" alt="Gallery image 2" />
							</div>
						</a>
					</div>
					<div class="col-lg-4 pb-4 pb-lg-0">
						<a href="{{ asset('assets/images/gallery3.jpeg') }}" data-lightbox="gallery3" data-title="Spices" data-alt="Spices Image">
							<div class="bg-image hover-zoom shadow-1-strong rounded gallery_sm">
								<img src="{{ asset('assets/images/gallery3.jpeg') }}" class="w-100 gallery_img" alt="Gallery image 3" />
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg pb-4 pb-lg-0">
						<a href="{{ asset('assets/images/gallery4.jpeg') }}" data-lightbox="gallery4" data-title="Spices" data-alt="Spices Image">
							<div class="bg-image hover-zoom shadow-1-strong rounded h-100">
								<img src="{{ asset('assets/images/gallery4.jpeg') }}" class="w-100 gallery_img" alt="Gallery image 4" />
							</div>
						</a>
					</div>
					<div class="col-lg pb-4 pb-lg-0">
						<a href="{{ asset('assets/images/gallery5.jpeg') }}" data-lightbox="gallery5" data-title="Spices" data-alt="Spices Image">
							<div class="bg-image hover-zoom shadow-1-strong rounded h-100">
								<img src="{{ asset('assets/images/gallery5.jpeg') }}" class="w-100 gallery_img" alt="Gallery image 5" />
							</div>
						</a>
					</div>
					<div class="col-lg">
						<a href="{{ asset('assets/images/gallery6.jpg') }}" data-lightbox="gallery6" data-title="Spices" data-alt="Spices Image">
							<div class="bg-image hover-zoom shadow-1-strong rounded h-100">
								<img src="{{ asset('assets/images/gallery6.jpg') }}" class="w-100 gallery_img" alt="Gallery image 6" />
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="py-5 px-3 p-lg-5 text-center text-lg-start position-relative">
		<div class="row flex-column flex-lg-row align-items-center justify-content-between">
			<div class="col-lg-7 flex-shrink-0 order-1 order-lg-0 mt-5 mt-lg-0">
				<img class="me-auto d-block mw-100 object_cover" src="{{ asset('assets/images/about2.png') }}" alt="About section image 2" data-aos="fade-right" data-aos-duration="1500" />
			</div>
			<div class="col-lg-5 flex-grow-1">
				<div data-aos="fade-left" data-aos-duration="1500">
					<h2 class="display-6 text-uppercase fw-normal">{{ __('client.section.hero2.heading') }}</h2>
					<p class="text-muted fs-6 lead">{{ __('client.section.hero2.description') }}</p>
				</div>
			</div>
		</div>
		<svg id="wavy" class="position-absolute left-0 bottom-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
			<path fill="#FBFBFB" fill-opacity="1" d="M0,192L60,160C120,128,240,64,360,42.7C480,21,600,43,720,80C840,117,960,171,1080,192C1200,213,1320,203,1380,197.3L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
		</svg>
	</section>
	<section id="products" class="py-5 px-3 p-lg-5 text-center bg-light">
		<div class="pb-5">
			<h2 class="text-uppercase">{{ __('client.section.products.heading') }}</h2>
			<p class="fs-6 text-muted col-lg-5 lead mx-auto mb-5">{{ __('client.section.products.subheading') }}</p>
			<div class="row">
				@foreach ($products as $product)
					<div class="col-12 col-md-6 col-lg-4">
						<div class="card mb-4 mb-lg-0">
							<img src="{{ !empty($product->image) ? asset('storage') . "/{$product->image}" : asset('assets/images/default-image.png') }}" class="card-img-top" height="300" alt="{{ $product->name }}" data-mdb-toggle="modal" data-mdb-target="#productModal{{ $loop->iteration }}" />
							<div class="card-body">
								<h5 class="card-title fw-semibold">{{ $product->name }}</h5>
								<p class="card-text">{{ Str::limit($product->description, 100, '...') }}</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
	<section id="blog" class="p-3">
		<div class="row align-items-center">
			<div class="col-12 col-lg-3">
				<h2 class="text-uppercase">{{ __('client.section.blog.heading') }}</h2>
				<p class="fs-6 text-muted lead mb-5" data-aos="fade-up" data-aos-duration="1500">{{ __('client.section.blog.subheading') }}</p>
			</div>
			<div class="col-12 col-lg-9">
				<div id="blogSwiper" class="swiper">
					<div class="swiper-wrapper">
						@php $i = 0; @endphp
						@foreach ($posts as $post)
							<div class="swiper-slide" data-aos="fade-in" data-aos-delay="{{ $i += 50 }}">
								<a href="{{ route('posts.show', $post->slug) }}" title="{{ $post->title }}">
									<div class="card bg-light">
										<div class="bg-image hover-zoom h-100">
											<img src="{{ !empty($post->image) ? asset('storage') . "/{$post->image}" : asset('assets/images/default-image.png') }}" class="card-img-top swiper-lazy" height="300" alt="Blog image" />
											<div class="swiper-lazy-preloader"></div>
										</div>
										<div class="card-body">
											<h5 class="card-subtitle text-dark mb-2 fs-6">{{ $post->title }}</h5>
											<p class="card-text text-muted">{{ $post->published_at }} &middot; <i class="fa-solid fa-bars-staggered"></i> {{ $post->category->name }}</p>
										</div>
									</div>
								</a>
							</div>
						@endforeach
					</div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>
			</div>
		</div>
	</section>
	<section id="section">
		<div class="bg-image object_cover">
			<img src="{{ asset('assets/images/section-bg.jpeg') }}" class="w-100" alt="Section background" />
			<div class="mask bg-dark">
				<div class="d-flex justify-content-center align-items-center h-100">
					<p class="text-white mb-0 display-5 text-uppercase fw-light text-center" data-aos="fade-in" data-aos-duration="1000">{{ __('client.section.parallax.heading_line1') }}<br />{{ __('client.section.parallax.heading_line2') }}</h2>
				</div>
			</div>
		</div>
	</section>
	<section id="team" class="py-5 px-3 p-lg-5">
		<div class="p-lg-5">
			<h2 class="text-uppercase mb-4 text-center" data-aos="fade-in" data-aos-duration="1000">{{ __('client.section.team.heading') }}</h2>
			<div class="row">
				@php $i = 0; @endphp
				@foreach ($teams as $team)
					<div class="col-12 col-md-6 col-lg-4">
						<div class="bg-image hover-overlay rounded mb-4 mb-lg-0" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="{{ $i += 100 }}">
							<img src="{{ !empty($team->image) ? asset('storage') . "/{$team->image}" : asset('assets/images/default-pfp.png') }}" class="img-fluid" alt="{{ $team->name }}" />
							<div class="mask bg-dark"></div>
							<div class="position-absolute bottom-0 start-0 text-light p-4">
								<h5 class="mb-0 fw-bold text_shadow">{{ $team->name }}</h5>
								<p class="mb-0 text_shadow">{{ $team->position }}</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
	<section id="contact" class="py-5 px-3 p-lg-5 text-center">
		<div class="p-lg-5">
			<h2 class="text-uppercase" data-aos="fade-up" data-aos-duration="1500">{{ __('client.section.contact.heading') }}</h2>
			<hr class="opacity-100 mx-auto rounded mb-4 border border-2 border-success" />
			<div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-3">
				<div class="card border border-1 shadow-0" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
					<div class="card-body">
						<i class="fa-solid fa-xl fa-phone text-success mb-2"></i>
						<h5 class="card-title fw-bold">{{ __('client.section.contact.phone') }}</h5>
						<h6 class="card-subtitle mb-2 text-muted">(+62) 1334 5678</h6>
					</div>
				</div>
				<div class="card border border-1 shadow-0" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
					<div class="card-body">
						<i class="fa-solid fa-xl fa-paper-plane text-success mb-2"></i>
						<h5 class="card-title fw-bold">{{ __('client.section.contact.email') }}</h5>
						<h6 class="card-subtitle mb-2 text-muted">mail@example.com</h6>
					</div>
				</div>
				<div class="card border border-1 shadow-0" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
					<div class="card-body">
						<i class="fa-brands fa-xl fa-whatsapp text-success mb-2"></i>
						<a href="https://wa.me/" rel="noopener noreferrer" target="_blank" title="WhatsApp">
							<h5 class="card-title fw-bold">WhatsApp</h5>
						</a>
						<h6 class="card-subtitle mb-2 text-muted">(+62) 1334 5678</h6>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@push('styles')
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}">
@endpush

@push('scripts')
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script type="text/javascript" src="{{ asset('assets/js/lightbox.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/swiper.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/aos.js') }}"></script>
@endpush
