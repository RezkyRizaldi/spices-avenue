@extends('layouts.main')

@section('title', 'Post Details - ' . config('app.name'))

@section('content')
<div id="whatsapp" title="WhatsApp"></div>
<article id="blogDetail" class="container py-3 p-lg-5">
	<div class="row">
		<div class="col">
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
				<p class="lead">Consumer willingness to experiment with new flavors and ethnic tastes have been creating the demand for seasoning & spices market. Further, the importance of consumption of herbs & spices for the well being is also driving the market growth.</p>
				<p class="lead">The growing preference for spiciness and authenticity is leading to the demand for more regional-specific seasonings that add layers of flavor to traditional dishes from other parts of the world. The desire to navigate new taste territories is inspiring innovative seasoning blends that mix and match lesser-known ingredients. Eastern Mediterranean, North African, Southeast Asian, and Indian cuisines are among the top influencers for trending ingredients in the global seasoning & spices market.</p>
				<p class="lead">The spices segment accounted for the largest share of the global revenue for 2021 owing to the rising demand for ready-to-use spice mixes for specific recipes, which has been creating convenient options for consumers for trying hands-on cooking. Moreover, the health benefits of spices, such as ginger and turmeric in the prevention of colds and coughs, are also driving the demand. Pepper, ginger, and cinnamon are some of the key spices that are trending nowadays among consumers.</p>
				<p class="lead">The retail segment is expected to grow at a higher CAGR over the forecast period as a greater number of consumers have started cooking during the pandemic, and this trend is likely to grow in the coming years. Consumers purchase spices & herbs from supermarkets & hypermarkets along with other food products in countries such as the U.S. and the U.K. and from convenience stores in countries like India, the UAE, and Indonesia.</p>
				<p class="lead">The seasoning & spices market is highly competitive and dominated by large multinational manufacturing companies. The players face intense competition, especially from the top players in the seasoning & spices market, as they have a large consumer base, strong brand recognition, and vast distribution networks.</p>
				<p class="lead">Source: <a href="https://www.businesswire.com/news/home/20220714005527/en/Insights-on-the-Seasoning-Spices-Global-Market-to-2030—Featuring-Ajinomoto-Associated-British-Foods-and-Kerry-Among-Others—ResearchAndMarkets.com" target="_blank">ResearchAndMarkets.com</a></p>
				<hr />
				<div class="d-flex my-4 justify-content-between">
					<a href="#"><i class="fa-solid fa-arrow-left me-2"></i>Previous Post</a>
					<a href="#">Next Post<i class="fa-solid fa-arrow-right ms-2"></i></a>
				</div>
				<hr />
				<section id="#respond">
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

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
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
