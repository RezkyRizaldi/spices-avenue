@extends('layouts.main')

@section('title', 'Post Details - ' . config('app.name'))

@section('content')
<div id="whatsapp" title="WhatsApp"></div>
<article id="blogDetail" class="container-fluid py-3 p-lg-5">
	<div class="row">
		<div class="col-12 col-lg-7">
			<div class="px-3">
				<h2>Artikel</h2>
				<hr />
				<img class="d-block mx-auto img-fluid" src="{{ asset('assets/images/blog1.jpeg') }}" alt="Blog image" />
				<h2 class="mt-3">Insights on the Seasoning & Spices Global Market to 2030</h2>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#respond">Leave a Comment</a></li>
						<li class="breadcrumb-item"><a href="{{ route('categories.show') }}">Artikel</a></li>
						<li class="breadcrumb-item active" aria-current="page">By <a href="#">superadmin</a></li>
					</ol>
				</nav>
				<div>
					<p class="lead">Black pepper exports increased in the first quarter of 2022 on the back of global economic recovery and the COVID-19 pandemic being brought under control, Indonesian Export Financing Agency's (LPEI's) Indonesia Eximbank (IEB) Institute stated. “The increasing demand for spice products, including black pepper, is due to the global economic recovery as the COVID-19 pandemic …</p>
					<a href="{{ route('posts.show') }}">Read More <i class="fa-solid fa-angles-right"></i></a>
				</div>
				<hr />
				<img class="d-block mx-auto img-fluid" src="{{ asset('assets/images/blog1.jpeg') }}" alt="Blog image" />
				<h2 class="mt-3">Insights on the Seasoning & Spices Global Market to 2030</h2>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#respond">Leave a Comment</a></li>
						<li class="breadcrumb-item"><a href="{{ route('categories.show') }}">Artikel</a></li>
						<li class="breadcrumb-item active" aria-current="page">By <a href="#">superadmin</a></li>
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
							<a class="text-decoration-underline" href="#">Black pepper exports increase as economy recovers: IEB Institute</a>
						</li>
						<li>
							<a class="text-decoration-underline" href="#">Indonesia's Black Pepper Export Up 44.5% to US$17mn in Q1</a>
						</li>
						<li>
							<a class="text-decoration-underline" href="#">Indonesia spices up global community at World Expo 2020 Dubai</a>
						</li>
						<li>
							<a class="text-decoration-underline" href="#">Insights on the Seasoning & Spices Global Market to 2030</a>
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
							<a class="text-decoration-underline" href="#">April 2022</a>
						</li>
					<ul />
				</div>
				<div class="my-5">
					<h2>Kategori</h2>
					<ul class="list-unstyled">
						<li>
							<a class="text-decoration-underline" href="#">Artikel</a>
						</li>
					<ul />
				</div>
			</div>
		</div>
	</div>
</article>
@endsection

@push('styles')
<link rel="stylesheet" class="text-decoration-underline" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="{{ asset('assets/css/floating-wpp.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}">
@endpush

@push('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/floating-wpp.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/lightbox.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/swiper.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/aos.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/whatsapp.js') }}"></script>
@endpush
