const swiper = new Swiper("#blogSwiper", {
	preloadImages: false,
	lazy: true,
	slidesPerView: 3,
	spaceBetween: 20,
	slidesPerGroup: 3,
	loop: true,
	loopFillGroupWithBlank: true,
	breakpoints: {
		320: {
			slidesPerView: 1,
			slidesPerGroup: 1,
		},
		640: {
			slidesPerView: 2,
			slidesPerGroup: 2,
		},
		992: {
			slidesPerView: 3,
			slidesPerGroup: 3,
		},
	},
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
});
